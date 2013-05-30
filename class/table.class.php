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
	public function getAll($elem=null,$order=null,$sens=null)
	{
		if(empty($elem))
		{
			$query="SELECT * FROM ".$this->tableName."";
		}
		else
		{
			$param = " ORDER BY ".$order." ".$sens;
		
			if($elem == "users"){
				$query="SELECT *, b.name 'rank' FROM ".$this->tableName." a, users_rank b WHERE a.users_rank_id=b.id".$param."";
			}
			elseif($elem == "medias"){
				$query="SELECT *, b.name FROM ".$this->tableName.$param."";
			}
		}
		$data=myFetchAssoc($query);
		return $data;
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
		
		foreach ($this->fields as $field)
		{
			if (!empty($this->$field))
			{
				$part .= "`".$field."` = '".myRealString($this->$field)."',";
			}
		}

		$part = substr($part, 0, -1);
		$query = 'REPLACE INTO `'.$this->tableName.'` SET '.$part.'';

		myQuery($query);
		
		if ($this->$pk == null)
		{
			$this->set('id', mysqli_insert_id($link));
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