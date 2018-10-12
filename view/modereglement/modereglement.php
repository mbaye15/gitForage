<?php
@$action = $_GET['action'];
//Insertion donnees
if ($action=='Enregistrer'){
$this->model->Lister(); 
    }


if ($action=='Crud') {
$this->model->Obtenir();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gestion Forages">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Gestion, Forages, Compteur, modereglements, Sénégal">
    <link rel="shortcut icon" href="../img/favicon.png">

    <title>LOGICIEL DE GESTION DE FORAGE</title>

    <!-- Bootstrap CSS -->    
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="../../assets/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="../../assets/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="../../assets/css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    
   
    <!-- Custom styles -->

    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/style-responsive.css" rel="stylesheet" />
	
	<link href="../../assets/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
	
	<link href="../../assets/css/sweetalert.css" rel="stylesheet">
	
  </head>

  <body>
  <!-- container section start -->
 
  <section id="container" class="">
     
       <?php include('../entete.php');?>
      <aside>
          <?php include('../haut.php');?>
      </aside>
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
             <img src="../../img/dgcpt.jpg" align="middle"> 
              <img src="../../img/senegal_emergent.jpg" align="right"> 
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> ONFP :: SIMPLON</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="../index.php">Accueil</a></li>
						<li><i class="fa fa-laptop"></i>GESTION DES MODES DE REGLEMENT </li>						  	
					</ol>
				</div>
			</div>
              
 <div class="row">
                  <div class="col-lg-12">
                      <SECTION class="panel">
                          <HEADER class="panel-heading">
                           Formulaire de saisie des modereglements 
                         </HEADER>
                          <div class="panel-body">
                             <form id="frm-alumno" action="?c=modereglement&a=Enregistrer" method="post" enctype="multipart/form-data">
                               <input type="hidden" name="Id" value="<?php echo $modereglement->Id; ?>" />
                                <div class="form-group">
                                    <label>CIN</label>
                                    <input type="text" name="CIN" value="" class="form-control" placeholder="CIN du modereglement" required>
                                </div>
                                <div class="form-group">
                                    <label>NOM</label>
                                    <input type="text" name="Nom" value="" class="form-control" placeholder="Nom du modereglement" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input type="text" name="Tel" value="" class="form-control" placeholder="N° Telephone du modereglement" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Village</label>
                                    <input type="text" name="IdVillage" value="" class="form-control" placeholder="Village du modereglement" required>
                                </div>    
                                
                                <hr />     
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <BUTTON type="submit" name="submit" class="btn btn-success">Enregistrer</button>
                                           <a href="index.php" CLASS="btn btn-default">Annuler</a>
                      
                                      </div>
                                  </div>
                              </form>
                          </div>  </div>

<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
            <header class="panel-heading">
                    Liste des modereglements
            </header>
                          
<table class="table table-striped table-advance table-hover">         
<thead> 
<tr> 
    <th >CIN modereglement</th> 
    <th >Nom Famille</th> 
    <th >Telephone</th> 
    <th >Village</th> 
    <th width="53">Modifier</th> 
    <th width="57">Supprimer</th> 
</tr> 
</thead> 

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
            <th style="width:120px; background-color: #5DACCD; color:#fff">CIN</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Nom</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Tel</th>
            <th style=" background-color: #5DACCD; color:#fff">Village</th>         
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Lister() as $r): ?>
        <tr>
            <td><?php echo $r->CIN; ?></td>
            <td><?php echo $r->Nom; ?></td>
            <td><?php echo $r->Tel; ?></td>
            <td><?php echo $r->IdVillage; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=modereglement&a=Crud&Id=<?php echo $r->Id; ?>">Modifier</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('Voulez vous supprimer cet enregistrement?');" href="?c=modereglement&a=Supprimer&Id=<?php echo $r->Id; ?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
</body>
</html>