<?php 

class database extends mysqli {

    private $_host = "127.0.0.1";
    private $_user = "root";
    private $_pass = "";
    private $_base = "socialclub";
    private $_charset = "utf8";
 
    private $_cursor = null;
    private $_ressource = null;
    private $_errorNum = 0;
    private $_errorMsg = '';
 
    /**
     * Shared instance
     */		
    private static $_instance;
 
    /**
    * Constructor
    * 
    * <p>Create the static instance of the singleton</p>
    * 
    * @name database::__construct()
    * @return void
    */    
    private function __construct () {
    	$this->_ressource = parent::__construct($this->_host, $this->_user, $this->_pass,$this->_base);
        parent::set_charset($this->_charset);
    }
 
    /**
    * Clone
    * 
    * <p>Avoid extern copy of instance</p>
    * 
    * @return void
    */    
    private function __clone () {}
 
 
    /**
    * getInstance
    * 
    * <p>Get the shared db instance</p>
    * 
    * @return database instance
    */      
    public static function getInstance () {
        if (!(self::$_instance instanceof self))
            self::$_instance = new self();
 
        return self::$_instance;
    }    
}