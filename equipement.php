<!--<!DOCTYPE html>
<html>
<head>
    <!-- En-tête de la page -->
    <!--<meta charset="utf-8" />
    <title>équipement</title>
</head>-->
<!-- SESSION START FUNCTION -->
<?php
    session_start ()
    if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
    	echo '<html>';
    	echo '<head>';
    	echo '<title>Page de notre section membre</title>';
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
	
	</br></br></br>
<h3>Liste des équipements :</h3>

<ul>
<li>équipement 1
<input type="checkbox" name="case" id="case" /> <label for="case">Fonctionne</label>
<input type="checkbox" name="case" id="case" /> <label for="case">Ne fonctionne pas</label>
</li>
</ul>

<h3>Ajouter un équipement :</h3>
<form>
<input id="nomequip" name="nomequip" type="text" placeholder="nom équipement" required /><br />
<input type="submit" value="Valider" />
</form>

<script src="src/jQuery.js"></script>
<script src="src/Bootstrap.js"></script>


</body>
</html>
	