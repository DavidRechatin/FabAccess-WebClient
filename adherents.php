<?php
    // On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
    session_start ();

    // On récupère nos variables de session
    if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

    	// On teste pour voir si nos variables ont bien été enregistrées
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

<!DOCTYPE html>

<html lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionnaire</title>
	<link rel="shortcut icon" href="src/x.png">
	<link href="src/style.css" rel="stylesheet" type="text/css" media="all">
	<link href="src/css.css" rel="stylesheet" type="text/css">
	<link href="src/police.css" rel="stylesheet" type="text/css">
</head>

<body class="scroll-assist nav-is-overlay">
	<div class="nav-container bg-dark">
		<nav class="absolute transparent bg-dark fixed outOfSight scrolled">
			<div class="nav-bar">
				<div class="module left">
					<a href="HeadPage.php">
						<img class="logo" alt="logo" src="src/OpenFactory.png">
					</a>
				</div>



				<div class="module widget-handle mobile-toggle right visible-sm visible-xs">
					<i class="ti-menu"></i>
				</div>

				<div class="module-group">
					<div class="module widget-handle language">
						<ul class="menu">
							<li class="#">
							<a href="adherents.php">Adhérents</a>
								<ul>
									<li>
										<a href="#">Ajouter</a>
                                        <a href="#">Modifier</a>
									</li>
								</ul>
							</li>
                            <li class="#">
							<a href="equipements.php">Equipements</a>
								<ul>
									<li>
										<a href="#">Status</a>
									</li>
								</ul>
							</li>
                            <li class="#">
							<a href="incidents.php">Incidents</a>
								<ul>
									<li>
										<a href="#">Status</a>
                                        <a href="#">Gérer droits</a>
									</li>
								</ul>
							</li>
                            <li class="#">
							<a href="statistiques.php">Statistiques</a>
								<ul>
									<li>
										<a href="#">Status</a>
                                        <a href="#">Gérer droits</a>
									</li>
								</ul>
							</li>
							<li class="#">
							<a href="contact.php">Contact</a>
								<ul>
									<li>
						</ul>
					</div>
				</div>
                <div class="module right">
					<a href="deconnexion.php" class="deconnexion">Deconnexion</a>
				</div>
			</div>
		</nav>
	</div>


	<script src="src/jQuery.js"></script>
	<script src="src/Bootstrap.js"></script>


</body>
</html>

