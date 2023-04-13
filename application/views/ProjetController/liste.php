<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
	th{
		width:200px;
		background-color: #0355FF;"
	}
</style>
</head>
<body>

	<div class="container row"></div>
    <div class="col-8 mx-12 mx-auto">

    <table class="table">
		
                <thead class="thead-dark">
                    <tr>
                    <th  style="background-color: #0355FF;" scope="col">#</th>
                    <th  style="background-color: #0355FF;" scope="col">Titre</th>
                    <th style="background-color: #0355FF;" scope="col" style="width:200px;">Date Debut</th>
                    <th  style="background-color: #0355FF;"scope="col" style="width:200px;">Date Fin</th>
                    <th style="background-color: #0355FF;" scope="col" style="width:180px;">Description</th>
                    <th style="background-color: #0355FF;" scope="col" colspan="4">Action</th>
                    </tr>
                </thead>
                <tbody>


<br><br><br>
<?php
echo '<h1>Liste des Projets </h1>';
$i=1;
foreach( $this->projets as $projet){
echo '<tr><td>'.$i++.'</td><td>'.$projet['Titre'].'</td><td>'.$projet['DatDebut'].'</td><td>'.$projet['DateFin'].'</td><td>'.$projet['Description'].'</td></td>
<td><a  style="color:#FF0000;" title="Supprimer Le projet" href="../projetController/delete/'.$projet['Id'].'"><i class="fa-solid fa-delete-left"></i></td>
<td><a style="color:#F9B900;" title="Planifier Le projet" href="../TaskController/add/'.$projet['Id'].'"><i class="fa-solid fa-bars-progress"></i></td>
<td><a style="color:#0198AD;" title="Details du Projet" href="../ProjetController/details/'.$projet['Id'].'"><i class="fa-solid fa-circle-info"></i></td>
<td><a title="Diagramme de Gant" href="../ProjetController/gant/'.$projet['Id'].'"><i class="fa-solid fa-chart-gantt"></i></td>

	  </tr>';
}
echo '</table>';

?>
	<a href="../projetController/add" title="Ajouter Nouveau Projet"><button class="btn btn-warning" type="button" id="p" class="btn btn-primary"><i class="fa-solid fa-plus"></i>&nbsp;Ajouter Nouveau Projet</button></a>
