<html ng-app="workshopApp">
	<head>
		<title>Gestion des ateliers</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-beta.1/angular.min.js"></script>
	<script src="view/assets/js/app.js"></script>
	<style>
		.row-left{
			float:right;
		}
	</style>
	</head>
	<body>
		<br/><br/>
		<div class="container">
			<div class="row">
				<a href="#" class="btn btn-info row-left">Ajouter</a>
			</div><br/>
			<div class="row">
				<label>Rechercher</label>
				<input type="text" class="form-control"/>
			</div><br/>
			<div class="row" ng-controller="workshopsCtrl">
				<div class="panel panel-primary">
					  <div class="panel-heading">Liste des ateliers</div>
					  <div class="panel-body">
					    <table class="table table-hover table-bordered">
							<thead>
								<th>Code</th>
								<th>Nom</th>
								<th>Matiere</th>
								<th>Laboratoire</th>
								<th>Animateur</th>
								<th>Horraires</th>
								<th>Location</th>
								<th>Options</th>
							</thead>
							<tbody>
								<tr ng-repeat="workshop in workshops">
									<td>{{workshop.id}}</td>
									<td>{{workshop.name}}</td>
									<td>{{workshop.subject}}</td>
									<td>{{workshop.animator}}</td>
									<td>{{workshop.laboratory}}</td>
									<td>{{workshop.hours}}</td>
									<td>{{workshop.location}}</td>
									<td>
										<a href="#" class="btn btn-success">Modifier</a>
										<a href="#" class="btn btn-danger">Supprimer</a>
									</td>
								</tr>
							</tbody>
						</table>
					  </div>
				</div>
			</div>
		</div>
	</body>
</html>


