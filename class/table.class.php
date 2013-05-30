<?php

 abstract class Table {

 	protected $query;
	protected $tableName;
	protected $primaryKey;
	protected $fields = array();
	public $state_hydrate;
	


	public function __construct(){
		$this->primaryKey='id';
		$this->query = new Query();
	}
	
	// setters & getters
	public function get($attr)
	{
		return $this->$attr;
	}
	
	public function set($attr, $value)
	{
		$this->$attr = $value;
	}
	
	public function setFields($field)
	{
		$this->fields[] = $field;
	}
	
	// methodes
	public function getAll($elem=' *',$order=null,$sens='ASC',$cond=null,$limit = NULL)
	{
		$q = new Query;
		$q->select($elem)->from($this->tableName);

		if ($cond != NULL) {
			$q->where($cond);
		}
			
		if (!(is_null($order)))
			$q->order($order,'',$sens);

		if (!is_null($limit))
			$q->limit($limit);

		$data = $q->exec();

		return($data);


	}
	
	public function fieldsTable()
	{
		$query="SHOW COLUMNS FROM ".$this->tableName."";
		$data = myFetchAssoc($query);
		
		foreach($data as $row)
		{
			$this->setFields($row['Field']);
		}
	}
	
	public function delete($op = NULL, $rows = NULL)
	{
		if (empty($this->primaryKey) || empty($this->tableName))
			die('cannot uset class Table without tablename and primary key setted');

		$query = "DELETE FROM `".$this->tableName."`".
				 " WHERE `".$this->primaryKey."` = '".$this->get($this->primaryKey)."'";
		
		if (!is_null($rows))
		{
			if (is_string($rows))
				$query .= " $add";
			else
			{
				foreach ($rows as $row => $value)
				{
					if (!is_null($op) && $op == "AND")
						$query .= " $op `$row` = '".$value."'";
					elseif (!is_null($op) && $op == "OR")
						$query .= " $op `$row` = '".$value."'";
				}
			}
		}
	
		myQuery($query);
	}
	
	public function Save()
	{
		global $link;

		$pk = $this->primaryKey;
		$part = null;
		
		if (empty($this->fields))
		{
			$this->fieldsTable();
		}
		$fields = array();

		foreach ($this->fields as $field)array();

		{
			if (!empty($this->$field))
			{
				$fields[$field] = myRealString($this->$field);
			}
		}

		$q = new Query;

		$res = $q->replace($this->tableName,$fields)->exec();
		return($res);
		if ($this->$pk == null)
		{
			$this->set('id', $res);
		}
	}

	public function hydrate($fields = ' *')
	{
		$q = new Query;

		$q->select($fields)->from($this->tableName);

		$pk = $this->primaryKey;
		if (!is_null($this->$pk))
			$q->where($this->primaryKey,$this->$pk);
		else 
			$q->where('email',$this->email);
		
		$data = $q->exec();
		
		if(count($data) > 0){ // si il n'y a au moins une ligne de resultat
			foreach ($data[0] as $key => $value){
				$this->$key = $value;
			}

			$this->state_hydrate = true;
		}
		else
		{
			$this->state_hydrate = false;
		}
	}
}

?>