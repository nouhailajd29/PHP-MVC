<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	</head>
	<body>



<div class="container" >

		<div class="col-8 mx-auto" >
			<br><br>
			<form  class="p-5 border mb-5" method="POST" action="../projetController/add">
				<div class="form-group">
				<h1 align="center" style="color:#005A6C">Ajouter Une Projet</h1>
					<label for="name">Titre</label>
					<input type="text" required name="titre" class="form-control" id="name" >
				</div>
				<div class="form-group">
					<label for="price">Date Debut</label>
					<input type="date" required class="form-control" name="debut" id="price">
				</div>
				<div class="form-group">
					<label for="price">Date Fin</label>
					<input type="date" required class="form-control" name="fin" id="price">
				</div>

				<div class="form-group">
					<label for="description">Description</label>
					<textarea required class="form-control" name="description" id="description"></textarea>
				</div>

				<button type="submit" style="backgournd-color:#F9B900;"  class="btn btn-warning">Ajouter</button>
<button type="reset" style="backgournd-color:#F9B900;"  class="btn btn-danger">Supprimer</button>


			</form>
						
	
	</div>
</div>

</form>




	</body>

</html>