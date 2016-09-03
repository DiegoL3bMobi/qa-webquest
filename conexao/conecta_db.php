<?php

class Database 
{	
  private static $dbName = 'quest_app_db' ;
	private static $dbHost = 'localhost' ;
	private static $dbUsername = 'Sph3yinks';
	private static $dbUserPassword = 'lb#27^\Am0';
	
	private static $cont  = null;
	
	public function __construct() {
		//exit('Init function is not allowed');
    $cont = $this->connect();
	}
	
	public static function connect()
	{
	   // One connection through whole application
       if ( null == self::$cont )
       {      
        try 
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));  
        }
        catch(PDOException $e) 
        {
          die($e->getMessage());  
        }
       } 
       return self::$cont;
	}
	
	public static function disconnect()
	{
		self::$cont = null;
	}
    
}

?>