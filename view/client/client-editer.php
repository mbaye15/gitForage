<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gestion Forages">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Gestion, Forages, Compteur, Clients, Sénégal">
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
                        <li><i class="fa fa-laptop"></i>GESTION DES CLIENTS </li>                           
                    </ol>
                </div>
            </div>
              
                <div class="row">
                  <div class="col-lg-12">
                      <SECTION class="panel">
                          <HEADER class="panel-heading">
                           Formulaire de Mise à jour des Clients 
                         </HEADER>
                          <div class="panel-body"

                            <h1 class="page-header">
                             <?php echo $client->Id != null ? $client->Id : 'Nouvel Enregistrement'; ?>
                            </h1>

                        <ol class="breadcrumb">
                          <li><a href="?c=client">Client</a></li>
                          <li class="active"><?php echo $client->Id != null ? $client->Id : 'Nouvel Enregistrement'; ?></li>
                        </ol>

                        <form id="frm-alumno" action="?c=client&a=Enregistrer" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" name="Id" value="<?php echo $client->Id; ?>" class="form-control" placeholder="ID du Client" required>
                            </div>
                            <div class="form-group">
                                <label>CIN</label>
                                <input type="text" name="CIN" value="<?php echo $client->CIN; ?>" class="form-control" placeholder="CIN du Client" required>
                            </div>
                            <div class="form-group">
                                <label>NOM</label>
                                <input type="text" name="Nom" value="<?php echo $client->Nom; ?>" class="form-control" placeholder="Nom du Client" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="text" name="Tel" value="<?php echo $client->Tel; ?>" class="form-control" placeholder="N° Telephone du Client" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Village</label>
                                <input type="text" name="IdVillage" value="<?php echo $client->IdVillage; ?>" class="form-control" placeholder="Village du Client" required>
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