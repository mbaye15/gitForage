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
                        <li><i class="fa fa-laptop"></i>GESTION DES FORAGE </li>                           
                    </ol>
                </div>
            </div>
              
            <div class="row">
                  <div class="col-lg-12">
                      <SECTION class="panel">
                          <HEADER class="panel-heading">
                           GESTION DES VILLAGES
                         </HEADER>
                            <h1 class="page-header">Liste des villages  </h1>

                    <a class="btn btn-primary pull-right" href="?c=village&a=Crud">Ajouter</a>
                    <br><br><br>

    <table class="table  table-striped  table-hover" id="tabla">
        <thead>
            <tr>
                <th style="width:120px; background-color: #5DACCD; color:#fff">ID</th>
                <th style="width:120px; background-color: #5DACCD; color:#fff">Nom</th>
                <th style="width:180px; background-color: #5DACCD; color:#fff">Chef de Village</th>     
                <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
                <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($this->model->Lister() as $r): ?>
            <tr>
                <td><?php echo $r->Id; ?></td>
                <td><?php echo $r->Nom; ?></td>
                <td><?php echo $r->IdChefVillage; ?></td>
                <td>
                    <a  class="btn btn-warning" href="?c=village&a=Crud&Id=<?php echo $r->Id; ?>">Editer</a>
                </td>
                <td>
                    <a  class="btn btn-danger" onclick="javascript:return confirm('Voulez vous supprimer cet enregistrement?');" href="?c=village&a=Supprimer&Id=<?php echo $r->Id; ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table> 

          </section>
      </section>
  </section>
</body>
