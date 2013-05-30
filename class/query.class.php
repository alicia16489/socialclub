<?php
include('./includes/query_tools.php');
Class Query {
	private $db ;
	private $select = '';
	private $insert= '';
	private $replace= '';
	private $delete= '';
	private $from= '';
	protected $where= '';
	private $bin_where = 1;
	private $order= '';
	private $groupBy= '';
	private $join= '';
	private $limit= '';

	public function __construct()
	{
		$this->db = database::getInstance();
	}

	public function select($row = '*',$ref = '', $table = '')
	{
		$select = 'SELECT ';
		$args = func_get_args();
		
		// cond : est ce une string ?
		if (is_string($row)) {
			$this->select = $select."$row";
			if ($table != '')
				$this->select = $select." FROM `$table`";

			return ($this);
		}
		else{
			foreach ($row as $key => $value) {

				if (is_string($key)) {
					$select .= "$value.`$key`,"; 
				}
				else {
					$select .= "`$value`,";
				}
			}
		}

		$select = substr($select,0,-1);

		if ($table != '')
			$this->select = $select." FROM `$table`";

		$this->select = $select;
		return ($this);
	}

	public function replace($table,$fields)
	{
		$replace = 'REPLACE INTO `'.$table.'` SET ';
		foreach ($fields as $field)
			{
				$part .= "`".$field."` = '".myRealString($this->$field)."',";				
			}
		$replace =  substr($replace, 0, -1);
	}

	public function from($tables,$alias = '')
	{
		$from = " FROM `$tables` $alias";
		$this->from = $from;
		return($this);
	}

	public function join($tables,$cond)
	{
		foreach ($tables as $key => $value) {

			$this->join .= " LEFT JOIN `$value` $key ON ".$cond[$key];
		}

		return $this;
	}

	public function where($row,$param_1 = '',$param_2 = '',$param_3 = '')
	{
		// VAR ENV
		$op = " = ";
		
		if($this->bin_where == 1){
			$bool = " WHERE ";
			$this->bin_where = 0;
		}
		else{
			$bool = "";
		}
		// FUNCTION OVERLOAD
		if(!empty($param_1)||($param_1 == 0))
		{
			$res=where_overload($param_1);
			extract($res);
		}
		if(!empty($param_2))
		{
			$res=where_overload($param_2);
			extract($res);
		}
		if(!empty($param_3))
		{
			$res=where_overload($param_3);
			extract($res);
		}

		// END FUNCTION OVERLOAD
		
		$this->where .= $bool;
		if(is_array($row)){
			$this->where .= "(";
			
			foreach($row as $where){

				if(!isset($where[2]))
					$where[2]='';
				if(!isset($where[3]))
					$where[3]='';
				
				$this->where($where[0],$where[1],$where[2],$where[3]);
			}
			
			$this->where .= ")";
			
		}else{
			$val = (is_string($val)) ? $this->db->real_escape_string($val) : $val; // si non string alors pas besoin d'escape
			$where = " $row $op".(is_string($val)?'"'.$val.'"':$val); // si string on ajoute les guillements pour l'indiquer
			$this->where .= $where ;
		}

		return($this);
	}

	public function exec()
	{
		$query = '';

		if ($this->select)
			$query .= $this->select;

		if ($this->replace)
			$query .= $this->replace;

		if ($this->delete)
			$query .= $this->delete;

		if ($this->from)
			$query .= $this->from;

		$query .= $this->join.$this->where.$this->order.$this->groupBy.$this->limit;
		$result = $this->db->query($query);
		$this->where="";
		//echo ($query."<br />");
		if (!empty($replace) || !empty($delete))
			return($result->insert_id);
		else
			return($result->fetch_all(MYSQLI_ASSOC));
	}

	public function order($fields,$ref='',$sens='ASC')
	{
		if(!empty($ref))
			$ref .= ".";
		
		$this->order = " ORDER BY";
		if (is_array($fields)) {
			foreach ($field as $value) {
				$this->order = " $ref`$value`,";
			}
			$this->order = substr($this->order,0,-1);
		}
		else {
			$this->order .= " $ref`$fields`";
		}

		$this->order .= " ".$sens;
		
		return($this);
	}
	
	public function limit($nb,$start='')
	{
		if(!empty($start))
			$start .= ",";
		
		$this->limit = " LIMIT ".$start.$nb;
		
		return($this);
	}

}
