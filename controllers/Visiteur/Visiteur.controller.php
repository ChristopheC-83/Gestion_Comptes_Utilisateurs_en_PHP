<?php

require_once("./controllers/MainController.controller.php");
require_once("./models/Visiteur/Visiteur.model.php");

class VisiteurController extends MainController
{

    private $visiteurManager;

    public function __construct()
    {
        $this->visiteurManager = new VisiteurManager();
    }

    public function accueil()
    {
        $data_page = [
            "page_title" => "titre de la page d'accueil",
            "page_description" => "Description de la page d'accueil",
            "view" => "views/Visiteur/accueil.view.php",
            "template" => "views/commons/template.php",
            "css" => "containerAccueil",
            "js"=>['app.js']
        ];

        $this->genererPage($data_page);
    }

     public function pageErreur($msg)
    {
        // ici, pas besoin d'un affichage spécifique, nous reprenons l'affichage de la classe parent.
        parent::pageErreur($msg);
    }
    public function login()
    {
        $data_page = [
            "page_title" => "Page de connexion",
            "page_description" => "Page de connexion du site",
            "view" => "views/Visiteur/login.view.php",
            "template" => "views/commons/template.php",
            "css" => "containerLogin",
            "js"=>['app.js']
        ];

        $this->genererPage($data_page);
    }

    public function creerCompte()
    {
        $data_page = [
            "page_title" => "Page de création de compte",
            "page_description" => "Page de création de compte",
            "view" => "views/Visiteur/creerCompte.view.php",
            "template" => "views/commons/template.php",
            "css" => "containerCreationCompte",
            "js"=>['app.js']
        ];

        $this->genererPage($data_page);
    }
}
