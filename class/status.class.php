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
	
<<<<<<< HEAD
	public function hydrate($fields = null){
=======
	public function hydrate(){
>>>>>>> 66231f18e34ea359d55d07e13dd26a02ba9f8d87
		$user = new Users();
		$user->set("id",$this->user_id);
		$user->hydrate("id,firstname,lastname,avatar_path");
		$this->user = $user;
		
		parent::hydrate();
	}
}

?>