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
		protected $chats = array();
		
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

	public function syncChatList()
	{
		$chat = New Chats;

		$data = $chat->getAll(array('id'),'id','ASC',array(array('id_user_1',$this->id),array('id_user_2',$this->id,'OR')));

		foreach ($data as $value) {
			$chats[] = $value['id'];
		}
		
		foreach ($chats as $key => $value) {
			$chat = New Chats;
			$chat->set('id',$value);
			$chat->hydrate();
			$chat->countNewMsg();
		
			$chat_list[] = $chat;
			
		}

		$this->chats = $chat_list;


	}

	public function getLastMessage($limit = 5)
	{
		$q = new Query;

		$data = $q
				->select(array('id'=>'p','id_chat'=>'p','content'=>'p','firstname'=>'u','avatar_path'=>'u','lastname'=>'u','sender_id'=>'p'))->from('private_message','p')
				->join(array('u'=>'users'),array('u'=>'u.id = sender_id'))
				->join(array('c'=>'chats'),array('c'=>'c.id = p.id_chat'))
				->where(array(array('c.id_user_1',$this->id),array('c.id_user_2',$this->id,'OR')))
				->where('p.receiver_deleted',0,'AND')
				->where('p.sender_id',$this->id,'!=','AND')
				->order('date_send')
				->limit(5)
				->exec();
		return($data);
	}

	public function syncPicturesList(){
		$query = new Query();
		$data=$query
					->select(array("id" => "b","title" => "b","description" => "b","path" => "b","created" => "b"))
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
				->select(array("id" => "a","firstname" => "a","lastname" => "a","avatar_path" => "a"))
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