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
                           Formulaire de Mise à jour des abonnements 
                         </HEADER>
                          <div class="panel-body"

                            <h1 class="page-header">
                             <?php echo $abonnement->Id != null ? $abonnement->Id : 'Nouvel Enregistrement'; ?>
                            </h1>

                        <ol class="breadcrumb">
                          <li><a href="?c=abonnement">abonnement</a></li>
                          <li class="active"><?php echo $abonnement->Id != null ? $abonnement->Id : 'Nouvel Enregistrement'; ?></li>
                        </ol>

                        <form id="frm-alumno" action="?c=abonnement&a=Enregistrer" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" name="Id" value="<?php echo $abonnement->Id; ?>" class="form-control" placeholder="ID du abonnement" required>
                            </div>
                            <div class="form-group">
                                <label>Numero</label>
                                <input type="text" name="Numero" value="<?php echo $abonnement->Numero; ?>" class="form-control" placeholder="Numero abonnement" required>
                            </div>
                            <div class="form-group">
                                <label>Date Abonnement</label>
                                <input type="text" name="DateAbonnement" value="<?php echo $abonnement->DateAbonnement; ?>" class="form-control" placeholder="Date Abonnement" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Descriptif</label>
                                <input type="text" name="Descriptif" value="<?php echo $abonnement->Descriptif; ?>" class="form-control" placeholder="Descriptif" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Client</label>
                                <input type="text" name="IdClient" value="<?php echo $abonnement->IdClient; ?>" class="form-control" placeholder="ID Client" required>
                            </div>    
                            <div class="form-group">
                                <label>Compteur</label>
                                <input type="text" name="IdCompteur" value="<?php echo $abonnement->IdCompteur; ?>" class="form-control" placeholder="ID Compteur" required>
                            </div>
                            <hr />
                            
                            <div class="text-right">
                                <button class="btn btn-primary">Modifier</button>
                            </div>
                        </form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>