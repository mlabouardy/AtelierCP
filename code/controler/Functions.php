<?php

include_once 'config/Connect.php';

function getAllWorkshops(){
	global $db;
	$sql_list_workshops = "SELECT * FROM Atelier";
	$res=$db->prepare($sql_list_workshops);
	$res->execute();
	$data=$res->fetchAll();
	return $data;
}

function deleteWorkshop($id){
	global $db;
	$sql_delete_workshop = "DELETE FROM Atelier WHERE id=?";
	$res=$db->prepare($sql_delete_workshop);
	$res->execute(array($id));
	return true;
}


function createWorkshop($name, $subject, $location, $hours, $laboratory, $animator, $description){
	global $db;
	$sql_create_workshop = "INSERT INTO Atelier(name, subject, location, hours, laboratory, animator, description) VALUES(:name,:subject,:location,:hours,:laboratory,:animator,:description)";
	$res=$db->prepare($sql_create_workshop);
	$res->bindParam(":name", $name);
	$res->bindParam(":subject", $subject);
  	$res->bindParam(":location", $location);
	$res->bindParam(":hours", $hours);
	$res->bindParam(":laboratory", $laboratory);
	$res->bindParam(":animator", $animator);
	$res->bindParam(":description", $description);
	$res->bindParam(":id", $id);
	$res->execute();
	return true;
}


function updateWorkshop($name, $subject, $location, $hours, $laboratory, $animator, $description, $id){
	global $db;
	$sql_update_workshop = "UPDATE Atelier SET name=:name , subject=:subject , location=:location , hours=:hours , laboratory=:laboratory , animator=:animator , description=:description WHERE id=:id";
	$res=$db->prepare($sql_update_workshop);
	$res->bindParam(":name", $name);
	$res->bindParam(":subject", $subject);
  	$res->bindParam(":location", $location);
	$res->bindParam(":hours", $hours);
	$res->bindParam(":laboratory", $laboratory);
	$res->bindParam(":animator", $animator);
	$res->bindParam(":description", $description);
	$res->bindParam(":id", $id);
	$res->execute();
	return true;
}

function getWorkshop($id){
	global $db;
	$sql_get_workshop = "SELECT * FROM Atelier WHERE id=?";
	$res=$db->prepare($sql_get_workshop);
	$res->execute(array($id));
	$data=$res->fetch();
	return $data;
}

?>
