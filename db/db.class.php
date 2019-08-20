<?php

class db{

	private $host = 'mysql556.umbler.com';
	private $usuario ='segrade';
	private $senha ='segrase2018';
	private $database ='hemeroteca';




public function conecta_mysql(){
try {
    $conn = new PDO("mysql:host=108.179.193.93;port=3306;dbname=gpiticte_hemeroteca", 'gpiticte_segrase', 'segrase2018',  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    return $conn;
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
}
}



?>