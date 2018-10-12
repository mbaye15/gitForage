<?php
require_once '../../model/compteur.php';

class compteurController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new compteur();
    }
    
    public function Index(){
        require_once '../../view/header.php';
        require_once '../../view/compteur/compteur.php';
       
    }
    
    public function Crud(){
        $compteur = new compteur();
        
        if(isset($_REQUEST['Id'])){
            $compteur = $this->model->Obtenir($_REQUEST['Id']);
        }
        
        require_once '../../view/header.php';
        require_once '../../view/compteur/compteur-editer.php';
        
    }
    
    public function Enregistrer(){
        $compteur = new compteur();
        
        $compteur->Id = $_REQUEST['Id'];
        $compteur->Etat = $_REQUEST['Etat'];
        $compteur->ConsTotale = $_REQUEST['ConsTotale'];  
      

       $compteur->Id > 0 
           ? $this->model->Modifier($compteur)
           : $this->model->Ajouter($compteur);
        header('Location: index.php');

    }
    
    
    public function Supprimer(){
        $this->model->Supprimer($_REQUEST['Id']);
        header('Location: index.php');
    }
}