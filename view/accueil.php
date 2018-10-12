<?php
include('../session.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gestion - Forage">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Gestion, Forage, Senegal">
    <link rel="shortcut icon" href="../img/favicon.png">

   <title>DES FORAGES</title>

    <!-- Bootstrap CSS -->    
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="../assets/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="../assets/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="../assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="../assets/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="../assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="../assets/css/owl.carousel.css" type="text/css">
	<link href="../assets/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="../css/fullcalendar.css">
	<link href="../assets/css/widgets.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet" />
	<link href="../assets/css/xcharts.min.css" rel=" stylesheet">	
	<link href="../assets/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
	</head>

  <body>
  <!-- container section start -->
 
  <section id="container" class="">
     
       <?php include('entete.php');?>
            
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <?php include('haut.php');?>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
             <img src="../img/dgcpt.jpg" align="middle"> 
              <img src="../img/senegal_emergent.jpg" align="right"> 
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> LOGICIEL GESTION :: FORAGE</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="../index.php">Accueil</a></li>
						<li><i class="fa fa-laptop"></i>BIENVENU(E)</li>						  	
					</ol>
				</div>
			</div>
              
            <div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box blue-bg">
						<i class="fa fa-spinner"></i>
						<div class="count">300</div>
						<div class="title">Villages</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box brown-bg">
						<i class="icon_document_alt"></i>
						<div class="count">150</div>
						<div class="title">Abonnés</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->	
				
			
				
				
				
			</div><!--/.row-->
		
			
       
              <!-- project team & activity end -->

          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="../assets/js/jquery.js"></script>
	<script src="../assets/js/jquery-ui-1.10.4.min.js"></script>
    <script src="../assets/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="../assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="../assets/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="../assets/js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="../assets/js/fullcalendar.min.js"></script><!-- Full Google Calendar - Calendar -->
	<script src="../assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="../assets/js/calendar-custom.js"></script>
	<script src="../assets/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="../assets/js/jquery.customSelect.min.js" ></script>
	<script src="../assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="../assets/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="../assets/js/sparkline-chart.js"></script>
    <script src="../assets/js/easy-pie-chart.js"></script>
	<script src="../assets/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="../assets/js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="../assets/js/xcharts.min.js"></script>
	<script src="../assets/js/jquery.autosize.min.js"></script>
	<script src="../assets/js/jquery.placeholder.min.js"></script>
	<script src="../assets/js/gdp-data.js"></script>	
	<script src="../assets/js/morris.min.js"></script>
	<script src="../assets/js/sparklines.js"></script>	
	<script src="../assets/js/charts.js"></script>
	<script src="../assets/js/jquery.slimscroll.min.js"></script>
  	<script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});
  </script>

  </body>
</html>
