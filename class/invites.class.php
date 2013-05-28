<?php
class Invites extends Table{
	protected $id;
	protected $email;
	protected $key;
	protected $users_id;
	protected $last_time;
	
	public function __construct(){
		$this->tableName='invites';
		parent::__construct();
	}
	
}