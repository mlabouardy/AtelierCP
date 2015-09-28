<html>
	<head>
		<title>Gestion des ateliers</title>
		<link rel="stylesheet" type="text/css" href="view/assets/css/style.css"/>
	</head>
	<body>
		
		<div class="workshops-options">
			<div class="workshop-btn"><a href="new.php">Ajouter un atelier<a></a></div>
		</div>
		<div class="workshops-list">
			<ul>
				<li class="workshop-header">
							<div class="workshop-code"><a href="#">Code</a></div>
							<div class="workshop-name"><a href="#">Nom</a></div>
							<div class="workshop-subject"><a href="#">Matiere</a></div>
							<div class="workshop-laboratory"><a href="#">Laboratoire</a></div>
							<div class="workshop-animator"><a href="#">Animateur</a></div>
							<div class="workshop-hours"><a href="#">Horraires</a></div>
							<div class="workshop-location"><a href="#">Location</a></div>
							<div class="workshop-description"><a href="#">Description</a></div>
							<div class="workshop-option"><a href="#">Options</a></div>
				</li>
				<?php
					include 'controler/Functions.php';
					$workshops=getAllWorkshops();
				  foreach($workshops as $workshop){ ?>
						<li>
							<div class="workshop-code"><?= $workshop['id'] ?></div>
							<div class="workshop-name"><?= $workshop['name'] ?></div>
							<div class="workshop-subject"><?= $workshop['subject'] ?></div>
							<div class="workshop-laboratory"><?= $workshop['laboratory'] ?></div>
							<div class="workshop-animator"><?= $workshop['animator'] ?></div>
							<div class="workshop-hours"><?= $workshop['hours'] ?></div>
							<div class="workshop-location"><?= $workshop['location'] ?></div>
							<div class="workshop-description"><?= $workshop['description'] ?></div>
							<div class="workshop-option-update"><a href="update.php?id=<?= $workshop['id'] ?>">Modifier</a></div>
							<div class="workshop-option-delete"><a href="delete.php?id=<?= $workshop['id'] ?>">Supprimer</a></div>
						</li>
				<?php } ?>
			</ul>
		</div>
	</body>
</html>


