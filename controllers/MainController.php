<?php
//Définition de la classe MainController
//il a pour role de faire correspondre une méthode à une page
// /!\ en MVS, on parle souvent d'action pour désigner ces méthodes
class MainController {
    //Fonction permettant d'appeler une autre fonction, show()
    //Cette méthode affiche la page home, elle est appelée depuis index.php
    public function home() {
        $this->show('home');
    }
    //Fonction permettant d'appeler une autre fonction, show()
    //Cette méthode affiche la page about, elle est appelée depuis about.php
    public function about() {
        $this->show('about');
    }
    //Fonction permettant d'appeler une autre fonction, show()
    //Cette méthode affiche la page produits, elle est appelée depuis products.php
    public function products() {
        $this->show('products');
    }
    //Fonction permettant d'appeler une autre fonction, show()
    //Cette méthode affiche la page store, elle est appelée depuis store.php
    public function store() {
        $this->show('store');
    }
    //Fonction permettant d'appeler une autre fonction, show()
    //Cette méthode affiche la page store, elle est appelée depuis store.php
    public function tony() {
        $this->show('404');
    }
    //Cette dernière méthode se charge de composer la page renvoyée, en allant chercher
    //le header, le footer et en calant entre ces 2 la vue portant le nom passé en argument
    private function show($viewName, $viewVars=array()) {
        // $viewVars est disponible dans chaque fichier de vue
        //__DIR__ permet de donner le lien à partir du fichier en cours (lien relatif)
        //Ici __DIR__ pourrait etre remplacé par localhost/S5/s05-e02-exo-controllers-views-hamonic-julien
        include(__DIR__.'/../views/header.tpl.php');
        include(__DIR__.'/../views/'.$viewName.'.tpl.php');
        include(__DIR__.'/../views/footer.tpl.php');
      }
}