<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Connexion au FabAccess</title>
    <link rel="stylesheet" href="OF-Connexfabaccess.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="src/style.css" rel="stylesheet" type="text/css" media="all">
	<link href="src/css.css" rel="stylesheet" type="text/css">
	<link href="src/police.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div class="logo">
      <img src="http://i1.wp.com/www.openfactory42.org/wp-content/uploads/sites/17/2015/03/retina120x70.png?fit=228%2C140" alt="" />

    </div>

    <?php
      if(isset($_POST['connexion'])){
        if($_POST['identifiant'] == "Thomas" && $_POST['motdepasse'] == "123456"){
          session_start ();
          $_SESSION['login'] = $_POST['identifiant'];
          $_SESSION['pwd'] = $_POST['motdepasse'];
        echo 'test';
          header('Location: HeadPage.php');
        
          }
          else {
            header('Location: OF-Connexfabaccess.php');
          }
      ?>


    <?php
      }else{
      ?>

    <div class="login">
      <h1>Veuillez vous identifier</h1>
    </div>

    <form method="POST"  name="connexion">

    <div class="login">
      <input type="text" name="identifiant" placeholder="Identifiant" />
      <input type="password" name="motdepasse" placeholder="Mot de Passe" />

    </div>
      <br><br>
    <div class="login">
      <input class="connexion" type="submit" value="Connexion" name="connexion"/>
    </div>

    </form>

    <?php
    }
   ?>



  </body>

</html>
