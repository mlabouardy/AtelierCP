<?php


require 'controler/Functions.php';

error_reporting(0);

$workshop;
$id=$_GET['id'];

if(isset($id)){
	$workshop=getWorkshop($id);
}

$id=$_POST['id'];
$name=$_POST['name'];
$subject=$_POST['subject'];
$location=$_POST['location'];
$hours=$_POST['hours'];
$laboratory=$_POST['laboratory'];
$animator=$_POST['animator'];
$description=$_POST['description'];

if(isset($name) && isset($subject) && isset($location) && isset($hours) && isset($laboratory) && isset($animator) && isset($description)){
	updateWorkshop($name, $subject, $location, $hours, $laboratory, $animator, $description, $id);
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
			<form action="update.php" method="post">
				<input type="hidden" name="id" class="workshop-input" value="<?=$workshop['id']?>"/><br/>
				<label class="workshop-label">Nom:</label>
				<input type="text" name="name" class="workshop-input" value="<?=$workshop['name']?>"/><br/>
				<label class="workshop-label">Matiere:</label>
				<input type="text" name="subject" class="workshop-input" value="<?=$workshop['subject']?>"/><br/>
				<label class="workshop-label">Lieu:</label>
				<input type="text" name="location" class="workshop-input" value="<?=$workshop['location']?>"/><br/>
				<label class="workshop-label">Horrairs:</label>
				<input type="text" name="hours" class="workshop-input" value="<?=$workshop['hours']?>"/><br/>
				<label class="workshop-label">Laboratoire:</label>
				<input type="text" name="laboratory" class="workshop-input" value="<?=$workshop['laboratory']?>"/><br/>
				<label class="workshop-label">Animateur:</label>
				<input type="text" name="animator" class="workshop-input" value="<?=$workshop['animator']?>"/><br/>
				<label class="workshop-label">Description:</label>
				<textarea name="description" class="workshop-area" rows="6"><?=$workshop['description']?></textarea><br/>
				<input type="submit" value="Modifier" class="workshop-btn-add"/>		
			</form>		
		</div>
	</body>
</html>
