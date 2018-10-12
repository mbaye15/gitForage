<?php
require_once '../../model/chefvillage.php';

class chefvillageController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new chefvillage();
    }
    
    public function Index(){
        require_once '../../view/chefvillage/chefvillage.php';
       
    }
    
    public function Crud(){
        $chefvillage = new chefvillage();
        
        if(isset($_REQUEST['Id'])){
            $chefvillage = $this->model->Obtenir($_REQUEST['Id']);
        }
        require_once '../../view/chefvillage/chefvillage-editer.php';     
 
    }
    
    public function Enregistrer(){
        $chefvillage = new chefvillage();
        
        $chefvillage->Id = $_REQUEST['Id'];
        $chefvillage->CIN = $_REQUEST['CIN'];
        $chefvillage->Nom = $_REQUEST['Nom'];
        $chefvillage->Tel = $_REQUEST['Tel'];
        $chefvillage->IdVillage = $_REQUEST['IdVillage'];  
      
        //$this->model->Ajouter($chefvillage);

        //$db = new PDO('mysql:host=localhost;dbname=forage;charset=utf8', 'root', '');
        //$rs1 = $db->query("SELECT * FROM chefvillage WHERE Id=Id");
        //$rowCount = (int) $rs1->fetchColumn(); 
        //$rowCount > 0 
        $chefvillage->Id > 0 
           ? $this->model->Modifier($chefvillage)
           : $this->model->Ajouter($chefvillage);
        header('Location: index.php');

    }

     
    
    
    public function Supprimer(){
        $this->model->Supprimer($_REQUEST['Id']);
        header('Location: index.php');
    }
}