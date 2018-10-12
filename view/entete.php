<?php
//require_once '../model/database.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/forage/model/database.php';
//**************
    $err = 'false';
    $expireTime = 60 * 60; // 1 heure
    // OUVERTURE DE LA SESSION PHP
    session_write_close();
    session_set_cookie_params($expireTime);
    session_start();
//****************************
 $my_id =  $_SESSION['Id'];
 $my_login = $_SESSION['login']; 
 $my_profil = $_SESSION['IdProfil']; 
  ?>

 <header class="header dark-bg">
            <div class="toggle-nav">
            
 <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>
            <!--logo start-->
            <a href="index.php" class="logo">PROJET ONFP <span class="lite">&nbsp;&nbsp;&nbsp;&nbsp; LOGICIEL DE GESTION DE FORAGES</span></a>
            <!--logo end-->

            <div class="top-nav notification-row">                
               <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">1</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">Alertes</p>
                            </li>
                           <li>
                                <a href="#">Voir tous les alertes</a>
                          </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="profile-ava">
                          <img alt="" src="../img/auteur.gif">
                        </span>
                        <span class="username">Utilisateur connecté : <?php echo $_SESSION['Id']; ?></span>
                        <b class="caret"></b>
                      </a>
                     
                        <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top">
                          <a href="gest_user.php?id=<?php echo $my_id; ?>"><i class="icon_profile"></i> Mon profil</a>
                        </li>
                        <li>
                         <a href="../logout.php "><i class="icon_key_alt"></i> Se Deconnecter</a></li>
                      </ul>
                    </li>
<!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
           
      </header>