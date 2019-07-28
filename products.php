<?php
require __DIR__.'/controllers/MainController.php';
// Instanciation de la classe MainController
$controller = new MainController();
// Appel de la méthode correspondant à ce point d'entrée (page)
$controller->products();

?>