<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
	#ok{
		margin-left:-160px;
	}
</style>
</head>
<body>
	



<div class="container row"></div>
    <div class="col-8 mx-12 mx-auto">
    <table class="table">
                <tbody>
					<br>
<?php 
echo '<h1>Information générales : </h1>';
echo '
     <tr><th>Titre</th><td>'.$this->details['Titre'].'</td><tr>
	 <tr><th>Date Début</th><td>'.$this->details['DatDebut'].'</td><tr>
	 <tr><th>Date Fin</th><td>'.$this->details['DateFin'].'</td><tr>
	 <tr><th>Decription</th><td>'.$this->details['Description'].'</td><tr>
	 </table>';?>
	 <div class="container row"></div>
    <div class="col-8 mx-12 mx-auto">
    <table class="table" id="ok">
                <thead class="thead-dark">
                    <tr>
                    <th style="background-color: #0355FF;"  scope="col">#</th>
                    <th style="background-color: #0355FF;"  scope="col">Tache</th>
                    <th style="background-color: #0355FF;"  scope="col" style="width:150px;">Début</th>
                    <th style="background-color: #0355FF;"  scope="col" style="width:120px;">Fin</th>
                    </tr>
                </thead>
                <tbody>
					<?php
if(sizeof($this->details['tasks'])){
	echo '<h1 id="ok">Liste des tâches : </h1>';
	$i=1;
	foreach($this->details['tasks'] as $task){
		echo '<tr><td>'.$i++.'</td><td>'.$task['Nom'].'</td><td>'.$task['Debut'].'</td><td>'.$task['Fin'].'</td><td><a style="color:#ee7674; font-weight:bold;" title="Diagramme de Gant" href="../ProjetController/gant/'.$task['Debut'].'/'.$task['Fin'].'"></tr>';

	}   
	echo'</table>';
}

?>
</body>
</html>
