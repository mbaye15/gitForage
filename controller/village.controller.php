<?php
require_once '../../model/village.php';

class villageController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new village();
    }
    
    public function Index(){
        require_once '../../view/header.php';
        require_once '../../view/village/village.php';
       
    }
    
    public function Crud(){
        $village = new village();
        
        if(isset($_REQUEST['Id'])){
            $village = $this->model->Obtenir($_REQUEST['Id']);
        }
        
        require_once '../../view/header.php';
        require_once '../../view/village/village-editer.php';
        
    }
    
    public function Enregistrer(){
        $village = new village();
        
        $village->Id = $_REQUEST['Id'];
        $village->Nom = $_REQUEST['Nom'];
        $village->IdChefVillage = $_REQUEST['IdChefVillage'];  
      

       $village->Id > 0 
           ? $this->model->Modifier($village)
           : $this->model->Ajouter($village);
        header('Location: index.php');

    }
    
    
    public function Supprimer(){
        $this->model->Supprimer($_REQUEST['Id']);
        header('Location: index.php');
    }
}