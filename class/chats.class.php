<?php
class Chats extends Table {

	protected $id;
	protected $id_user_1;
	protected $id_user_2;
	protected $mp = array();
	protected $nb_new_msg;

	public	function __construct() {
		$this->tableName = 'chats';
		parent::__construct();
	}

	public function getLastMessage($row,$limit)
	{
		$mp = new private_message();
		$data = $mp->getAll($row,'date_send','ASC',array(array('id_chat',$this->id)),$limit);

		foreach ($data as $value) {
			$mps[] = $value['id'];
		}

		if (empty($mps)) return FALSE ;

		foreach ($mps as $key => $value) {
			$mp = new private_message();
			$mp->set('id',$value);
			$mp->hydrate();
			$mps[$key] = $mp;
		}

		$this->mp = $mps;

		return TRUE ;
	}

	public function countNewMsg() {

		$q = new Query;

		$res = $q->select('COUNT(id)')->from('private_message')->where('id_chat',$this->id)->where('receiver_read',0,'AND')->exec();
		$this->nb_new_msg = $res[0]['COUNT(id)'];
	}
}




?>