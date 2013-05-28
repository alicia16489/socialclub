<?php
class private_message {

	protected $id;
	protected $sender_id;
	protected $receiver_id;
	protected $title;
	protected $content;
	protected $date_send;
	protected $date_read;
	protected $receiver_deleted;
	protected $sender_deleted;
	protected $receiver_read;

	function __construct() {
		$this->tableName = 'private_message';
		parent::__construct();
	}


}