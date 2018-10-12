<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gestion Forages">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Gestion, Forages, Compteur, abonnements, Sénégal">
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
						<li><i class="fa fa-laptop"></i>GESTION DES ABONNEMENTS </li>						  	
					</ol>
				</div>
			</div>
              
 <div class="row">
                  <div class="col-lg-12">
                      <SECTION class="panel">
                          <HEADER class="panel-heading">
                           Formulaire de saisie des abonnements 
                         </HEADER>
                          <div class="panel-body">
                             <form id="frm-alumno" action="?c=abonnement&a=Enregistrer" method="post" enctype="multipart/form-data">
                               <input type="hidden" name="Id" value="<?php echo $abonnement->Id; ?>" />
                                <div class="form-group">
                                    <label>Numero</label>
                                    <input type="text" name="Numero" value="" class="form-control" placeholder="Numero abonnement" required>
                                </div>
                                <div class="form-group">
                                    <label>Date Abonnement</label>
                                    <input type="text" name="DateAbonnement" value="" class="form-control" placeholder="Date Abonnement" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Descriptif</label>
                                    <input type="text" name="Descriptif" value="" class="form-control" placeholder="Descriptif" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Client</label>
                                    <input type="text" name="IdClient" value="" class="form-control" placeholder="ID du Client" required>
                                </div>    
                                <div class="form-group">
                                    <label>Compteur</label>
                                    <input type="text" name="IdCompteur" value="" class="form-control" placeholder="ID Compteur" required>
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
                    Liste des abonnements
            </header>
                                 

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
            <th style="width:120px; background-color: #5DACCD; color:#fff">ID</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Numero</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Date Abonnement</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Descriptif</th>
            <th style=" background-color: #5DACCD; color:#fff">Client</th>
            <th style=" background-color: #5DACCD; color:#fff">Compteur</th>          
            <th style="width:60px; background-color: #5DACCD; color:#fff" width="53">Modifier</th>
            <th style="width:60px; background-color: #5DACCD; color:#fff" width="57">Supprimer</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Lister() as $r): ?>
        <tr>
            <td><?php echo $r->Numero; ?></td>
            <td><?php echo $r->DateAbonnement; ?></td>
            <td><?php echo $r->Descriptif; ?></td>
            <td><?php echo $r->IdClient; ?></td>
            <td><?php echo $r->IdCompteur; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=abonnement&a=Crud&Id=<?php echo $r->Id; ?>">Modifier</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('Voulez vous supprimer cet enregistrement?');" href="?c=abonnement&a=Supprimer&Id=<?php echo $r->Id; ?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
</body>
</html>