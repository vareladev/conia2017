<?php

	/**
	* 
	*/
	class Connection
	{
		private $server = "localhost";
	    private $user = "root";
	    private $password = "doricacameakuar1us";
	    private $db = "cineclub";
	    private $connection;


		function __construct()
		{
			SELF::conectar();
		}


		function conectar(){
			try {
            $connection = new PDO("mysql:host=$this->server;dbname=$this->db;charset=utf8", $this->user, $this->password);
                // set the PDO error mode to exception
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "Connected successfully"; 
                return $connection;
            }
        	catch(PDOException $e)
            {
            	echo "Connection failed: " . $e->getMessage();
            }
		}


		function open(){
        	if ($this->connection instanceof PDO)
            {
            	return $this->connection;
            }
		}


	}

?>