<?php

require 'controler/Functions.php';

error_reporting(0);

$name=$_POST['name'];
$subject=$_POST['subject'];
$location=$_POST['location'];
$hours=$_POST['hours'];
$laboratory=$_POST['laboratory'];
$animator=$_POST['animator'];
$description=$_POST['description'];

if(isset($name) && isset($subject) && isset($location) && isset($hours) && isset($laboratory) && isset($animator) && isset($description)){
	createWorkshop($name, $subject, $location, $hours, $laboratory, $animator, $description);
  header('Location: index.php');
}

?>

<html>
	<head>
		<title>Gestion des ateliers</title>
		<link rel="stylesheet" type="text/css" href="view/assets/css/style.css"/>
	</head>
	<body>
		<div class="workshop-form">
			<form action="new.php" method="post">
				<label class="workshop-label">Nom:</label>
				<input type="text" name="name" class="workshop-input"/><br/>
				<label class="workshop-label">Matiere:</label>
				<input type="text" name="subject" class="workshop-input"/><br/>
				<label class="workshop-label">Lieu:</label>
				<input type="text" name="location" class="workshop-input"/><br/>
				<label class="workshop-label">Horrairs:</label>
				<input type="text" name="hours" class="workshop-input"/><br/>
				<label class="workshop-label">Laboratoire:</label>
				<input type="text" name="laboratory" class="workshop-input"/><br/>
				<label class="workshop-label">Animateur:</label>
				<input type="text" name="animator" class="workshop-input"/><br/>
				<label class="workshop-label">Description:</label>
				<textarea name="description" class="workshop-area" rows="6"></textarea><br/>
				<input type="submit" value="Ajouter" class="workshop-btn-add"/>		
			</form>		
		</div>
	</body>
</html>


