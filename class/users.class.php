<?php
class Users extends Table
{
	/* ATTRIBUTES */
	
		protected $id;
		protected $firstname;
		protected $lastname;
		protected $email;
		protected $password;
		protected $actif;
		protected $avatar_path;
		protected $pictures = array();
		protected $pictures_friends = array();
		protected $status = array();
		protected $status_friends = array();
		protected $friends = array();
		protected $invite = array();
		protected $mp = array();
		
	/* END ATTRIBUTES */
	
	/* BUILDER */
	
		public function __construct()
		{
			$this->tableName = 'users';
			//$this->id=$id;
			parent::__construct();
		}
	
	/* END BUILDER */
	
	
	/* METHODS */

		
	public function syncPMList($nb=null)
	{
		
	}
	
	public function syncPicturesList(){
		$query = new Query();
		$data=$query
					->select(array("id","title","description","path","created"),"b")
					->from("pictures","b")
					->join(array("a" => "users"),array("a" => "b.users_id=a.id"))
					->where("b.users_id",$this->id)
					->order("created","b")
					->exec();
		
		$this->pictures = $data;
	}
	
	public function syncPicturesFriends($nb=null)
	{
		$last_pictures=array();
		foreach($this->friends as $key => $friend)
		{
			$q = new Query();
			$q->select("id,users_id,path,title,created,description")
				->from("pictures")
				->where("users_id",$friend['id'])
				->order("created","","DESC");
			if($nb !== null)
				$q->limit($nb);

			$data = $q->exec();
			if(!empty($data)){
				$last_pictures[$data[0]['id']] = array("created" => $data[0]['created'],
													   "user_id" => $data[0]['users_id'],
													   "title" => $data[0]['title'],
													   "path" => $data[0]['path'],
													   "id" => $data[0]['id'],
													   "description" => $data[0]['description']);
			}
		}
		arsort($last_pictures);

		$final_last_picture = array();
		$key = 0;

		foreach($last_pictures as $last_picture)
		{
			$final_last_picture[$key] = $last_picture;
			$key++;
		}
		
		$this->pictures_friends = $final_last_picture;
	}
	
	public function syncFriendsList()
	{
		$friends = array();
		$data=$this->query
				->select(array("id","firstname","lastname","avatar_path"),"a")
				->from("users","a")
				->join(array("b" => "friends"),array("b" => "a.id=b.users_to_id"))
				->join(array("c" => "friends"),array("c" => "a.id=c.users_from_id"))
				->where(array(array("b.users_from_id",$this->id),array("c.users_to_id",$this->id,"OR")))
				->where(array(array("b.accept_invit",1),array("c.accept_invit",1,"OR")),"","AND")
				->exec();
				
		$friends = $data;
		$this->friends = $friends;
	}
	
	public function syncStatusList($nb=null){
		$q = new Query();
		$q->select()
			->from("posts")
			->where("user_id",$this->id)
			->order("created","","DESC");
		if($nb !== null)
			$q->limit($nb);
			
		$data = $q->exec();
			
		$this->status = $data;
	}

	public function syncStatusFriends($nb=null){
		$last_status=array();
		foreach($this->friends as $friend)
		{
			$q = new Query();
			$q->select("id,user_id,created")
				->from("posts")
				->where("user_id",$friend['id'])
				->order("created","","DESC");
			if($nb !== null)
				$q->limit($nb);
				
			$data = $q->exec();
			
			if (isset($data[0]))
				$last_status[$data[0]['id']] = array("created" => $data[0]['created'],
												 	 "user_id" => $data[0]['user_id']);

		}
		arsort($last_status);	
		
		$this->status_friends = $last_status;
	}
	
	/* END METHODS */


}

?>