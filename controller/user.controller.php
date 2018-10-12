<?php
require_once '../../model/client.php';

class clientController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new client();
    }
    
    public function Index(){
        require_once '../../view/client/client.php';
       
    }
    
    public function Crud(){
        $client = new client();
        
        if(isset($_REQUEST['Id'])){
            $client = $this->model->Obtenir($_REQUEST['Id']);
        }
        require_once '../../view/client/client-editer.php';     
 
    }
    
    public function Enregistrer(){
        $client = new client();
        
        $client->Id = $_REQUEST['Id'];
        $client->CIN = $_REQUEST['CIN'];
        $client->Nom = $_REQUEST['Nom'];
        $client->Tel = $_REQUEST['Tel'];
        $client->IdVillage = $_REQUEST['IdVillage'];  
      
        //$this->model->Ajouter($client);

        //$db = new PDO('mysql:host=localhost;dbname=forage;charset=utf8', 'root', '');
        //$rs1 = $db->query("SELECT * FROM client WHERE Id=Id");
        //$rowCount = (int) $rs1->fetchColumn(); 
        //$rowCount > 0 
        $client->Id > 0 
           ? $this->model->Modifier($client)
           : $this->model->Ajouter($client);
        header('Location: index.php');

    }

     
    
    
    public function Supprimer(){
        $this->model->Supprimer($_REQUEST['Id']);
        header('Location: index.php');
    }
}