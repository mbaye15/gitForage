  <!-- container section start -->
  <section id="container" class="">
     
       <?php include('../entete.php');?>
      <aside>
          <?php include('../haut.php');?>
      </aside>
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
             <img src="../../img/dgcpt.jpg" align="middle"> 
              <img src="../../img/senegal_emergent.jpg" align="right"> 
              <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> LOGICIEL GESTION :: FORAGE</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="../index.php">Accueil</a></li>
                        <li><i class="fa fa-laptop"></i>BIENVENU(E)</li>                            
                    </ol>
                </div>
            </div>
            <div class="col-lg-12">
<h1 class="page-header">
    <?php echo $compteur->Id != null ? $compteur->Id : 'Nouvel Enregistrement'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=compteur">compteur</a></li>
  <li class="active"><?php echo $compteur->Id != null ? $compteur->Id : 'Nouvel Enregistrement'; ?></li>
</ol>

<form id="frm-alumno" action="?c=compteur&a=Enregistrer" method="post" enctype="multipart/form-data">
    <input type="hidden" name="Id" value="<?php echo $compteur->Id; ?>" />
    <div class="form-group">
        <label>ETAT</label>
        <input type="text" name="Etat" value="<?php echo $compteur->Etat; ?>" class="form-control" placeholder="Etat du compteur" required>
    </div>
    
    <div class="form-group">
        <label>Consommation Totale</label>
        <input type="text" name="ConsTotale" value="<?php echo $compteur->ConsTotale; ?>" class="form-control" placeholder="Consommation Totale du compteur" required>
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Ajouter</button>
    </div>

          </section>
      </section>
  </section>
</form>
</div>