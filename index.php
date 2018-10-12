<?php 
	$err = 'false';
    $expireTime = 60 * 60; // 1 heure
    // OUVERTURE DE LA SESSION PHP
    session_set_cookie_params($expireTime);
    session_start();
   require_once 'model/database.php';
    if(isset($_POST['login'])){
    $login    = $_POST['login'];
    $passwd = $_POST['password'];
    //echo $login; 
    // v�rification login et mp dans MySQL
    $pdo = new PDO('mysql:host=localhost;dbname=forage;charset=utf8', 'root', '');

    $query = "SELECT * FROM user WHERE login = :login AND passwd = :passwd";  
                $statement = $pdo->prepare($query);  
                $statement->execute(  
                     array(  
                          'login'     =>     $_POST["login"],  
                          'passwd'    =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0) {  
                     $_SESSION["login"] = $_POST["login"]; 
                     $_SESSION["passwd"] = $_POST["password"];  
                     $_SESSION["IdProfil"] = $_POST["IdProfil"];  
                     $_SESSION["Id"] = $_POST["Id"];  

                     header("Location: view/accueil.php");
                    exit();
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                } 
                } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>LOGICIEL DE GESTION DE FORAGE</title>

    <!-- Bootstrap CSS -->    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="assets/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet" />

</head>

  <BODY class=login-img3-body>

       
    <div class="container">

      <form class="login-form" action="index.php" method="POST">        
        <div class="login-wrap">
		<?php	if($err =='True'){ ?>
		<p style="FONT-SIZE: 21px; TEXT-DECORATION: blink; COLOR: #e00" 
     >Attention Erreur d'identification !</p><?php 
									} 
									?> <p class="login-img"><i class="icon_lock_alt"></i></p>       
           
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input class="form-control" placeholder ="Username"  autofocus name="login">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password" name="password">
            </div>
            <button class="btn btn-primary btn-lg btn-block"  type="submit">Se connecter</button>
           
        </div>
      </form>

    </div>


  </BODY>
</html>
