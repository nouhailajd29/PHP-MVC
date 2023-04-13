<?php
$db = new PDO('mysql:host=localhost;dbname=projets2023', 'root', '');
require_once ('../controllers/ProjetController.php');
$projetController = new ProjetController();
$projetController->gant();
?>
