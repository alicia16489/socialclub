<?php

	class Pictures extends Table
	{
		protected $id;
		protected $users_id;
		protected $title;
		protected $description;
		protected $path;
		protected $active;

		public function __construct()
		{
			$this->tableName = 'pictures';

			parent::__construct();
		}
	}

?>