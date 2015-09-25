<?php

require 'Constants.php';

try{
	$db=new PDO('mysql:host='.HOSTNAME.';dbname='.DBASE, USERNAME, PASSWORD);
}catch(PDOException $e){
	die('Error:'.$e->getMessage());
}

?>