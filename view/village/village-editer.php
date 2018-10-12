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
    <?php echo $village->Id != null ? $village->Id : 'Nouvel Enregistrement'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=village">village</a></li>
  <li class="active"><?php echo $village->Id != null ? $village->Id : 'Nouvel Enregistrement'; ?></li>
</ol>

<form id="frm-alumno" action="?c=village&a=Enregistrer" method="post" enctype="multipart/form-data">
    <input type="hidden" name="Id" value="<?php echo $village->Id; ?>" />
    <div class="form-group">
        <label>Nom</label>
        <input type="text" name="Nom" value="<?php echo $village->Nom; ?>" class="form-control" placeholder="Nom du village" required>
    </div>
    
    <div class="form-group">
        <label>Chef Village</label>
        <input type="text" name="IdChefVillage" value="<?php echo $village->IdChefVillage; ?>" class="form-control" placeholder="Chef de Village" required>
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