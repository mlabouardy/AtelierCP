<?php

require 'controler/Functions.php';


$id=$_GET['id'];
if(isset($id)){
	deleteWorkshop($id);
	header('Location: index.php');
  die();
}else{
	echo "this page doesnt exist";
}


?>
