<!-- SESSION START FUNCTION -->
<?php
    session_start ()
    if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
    	echo '<html>';
    	echo '<head>';
    	echo '<title>Contact</title>';
    	echo '</head>';
    	echo '<body>';
    }
    else {
    	echo 'Les variables ne sont pas déclarées.';
    }
?>




<!-- HTML PART -->

<!DOCTYPE html>

<html lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionnaire OpenFactory</title>
	<link href="src/style.css" rel="stylesheet" type="text/css" media="all">
	<link href="src/css.css" rel="stylesheet" type="text/css">
	<link href="src/police.css" rel="stylesheet" type="text/css">
</head>

<body class="scroll-assist nav-is-overlay">
	<div class="nav-container bg-dark">
		<nav class="absolute transparent bg-dark fixed outOfSight scrolled">
			<div class="nav-bar">
				<div class="module left">
				    <img class="logo" alt="logo" src="src/OpenFactory.png">
				</div>

				<div class="module-group">
					<div class="module widget-handle language">
						<ul class="menu">
							<li class="#">
							 <a href="adherents.php">Adhérents</a>
							</li>
                            <li class="#">
							 <a href="equipments.php">Equipements</a>
							</li>
                            <li class="#">
							 <a href="incidents.php">Incidents</a>
							</li>
                            <li class="#">
							 <a href="statistiques.php">Statistiques</a>
							</li>
                            <li class="#">
							 <a href="contact.php">Contact</a>
							</li>
						</ul>
					</div>
				</div>
                <div class="module right">
					<a href="deconnexion.php">Deconnexion</a>
				</div>
			</div>
		</nav>
	</div>
	<div>
<br /><br />

		<h3>OpenFactory Sainté</h3>
			<u>Adresse</u> : 5 rue Javelin Pagnon, Bâtiment 250 | Pré-Fabrique de l'innovation, 42000, Saint-Etienne </br>
			<u>Téléphone</u> : 09 51 52 66 44 </br>
			<u>Adresse mail</u> : contact@openfactory42.org

</br></br></br>
		<h3>Nous contacter</u> :
          <form method="post" action="index.php?action=commenter">
              <input id="nom" name="nom" type="text" placeholder="Votre nom" required /><br />
							<input id="prenom" name="prenom" type="text" placeholder="Votre prénom" required /><br />
              <input id="mail" name="mail" type="email" placeholder="Votre adresse mail" required /><br />
              <textarea id="Commentaire" name="contenu" rows="4" placeholder="Votre commentaire" required></textarea><br />

              <input type="submit" value="Envoyer" />

  </div>
	<script src="src/jQuery.js"></script>
	<script src="src/Bootstrap.js"></script>


</body>
</html>
