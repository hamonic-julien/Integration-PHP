<?php
//1 seul et unique point d'entrée => FrontController

//inclusion du fichier MainController.php
require __DIR__.'/controllers/MainController.php';
// Instanciation de la classe MainController
$controller = new MainController();
//On décide désormais de n'avoir qu'un seul fichier comme poitn d'entrée: index.php
//Toutes nos url sont désormais formatées ainsi: index.php?_url=products

//On récupère l'URL absolue (sans http ni domaine) jusqu'au dossier du projet
$baseURI = $_SERVER['BASE_URI'] ;//$_SERVER est une variable superglobale

// Appel de la méthode correspondant au point d'entrée (page)
if(empty($_GET['_url']) || $_GET['_url'] === '/home') {
    $controller->home();
}
elseif($_GET['_url'] === '/about') {
    $controller->about();
}
elseif($_GET['_url'] === '/products') {
    $controller->products();
}

elseif($_GET['_url'] === '/store') {
    $controller->store();
}
else {
    $controller->tony();
}


//d'ici on a plus aucune idée de ce que fait réelement home
//on a "délégué" ces fonctionnalités au controller
?>