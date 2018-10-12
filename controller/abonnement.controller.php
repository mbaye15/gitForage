<?php
require_once '../../model/abonnement.php';

class abonnementController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new abonnement();
    }
    
    public function Index(){
        require_once '../../view/abonnement/abonnement.php';
       
    }
    
    public function Crud(){
        $abonnement = new abonnement();
        
        if(isset($_REQUEST['Id'])){
            $abonnement = $this->model->Obtenir($_REQUEST['Id']);
        }
        require_once '../../view/abonnement/abonnement-editer.php';     
 
    }
    
    public function Enregistrer(){
        $abonnement = new abonnement();
        
        $abonnement->Id = $_REQUEST['Id'];
        $abonnement->Numero = $_REQUEST['Numero'];
        $abonnement->DateAbonnement = $_REQUEST['DateAbonnement'];
        $abonnement->Descriptif = $_REQUEST['Descriptif'];
        $abonnement->IdClient = $_REQUEST['IdClient'];  
	    $abonnement->IdCompteur = $_REQUEST['IdCompteur'];  

      
        //$this->model->Ajouter($abonnement);

        //$db = new PDO('mysql:host=localhost;dbname=forage;charset=utf8', 'root', '');
        //$rs1 = $db->query("SELECT * FROM abonnement WHERE Id=Id");
        //$rowCount = (int) $rs1->fetchColumn(); 
        //$rowCount > 0 
        $abonnement->Id > 0 
           ? $this->model->Modifier($abonnement)
           : $this->model->Ajouter($abonnement);
        header('Location: index.php');

    }

     
    
    
    public function Supprimer(){
        $this->model->Supprimer($_REQUEST['Id']);
        header('Location: index.php');
    }
}