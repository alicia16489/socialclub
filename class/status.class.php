<?php

class Status extends Table
{
	/* ATTRIBUTES */
	
		protected $id;
		protected $user_id;
		protected $content;
		protected $created;
		protected $user;
		
	/* END ATTRIBUTES */
	
	/* BUILDER */
	
		public function __construct()
		{
			$this->tableName = 'posts';
			parent::__construct();
		}
	
	/* END BUILDER */
	
	public function hydrate($fields = null){
		$user = new Users();
		$user->set("id",$this->user_id);
		$user->hydrate("id,firstname,lastname,avatar_path");
		$this->user = $user;
		
		parent::hydrate();
	}
}

?>