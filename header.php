<!DOCTYPE html>
<html>

<head>

	<title>phpblog - Un blog pour s'entrainer au PHP</title>

	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

	<!-- On récupére le fichier ee config bdd -->

<?php include 'configbdd.php'; ?>

	<?php 

	// Condition pour la recherche d'article
    
    if(isset($_POST["searchArticle"])){
        $articles = searchArticle($_POST["searchArticle"]);
    }

    ?>
	

	<nav>

		<a href="index.php" class="logo"><img src="img/logo.png" alt=""></a>

		<input class="headericon" type="checkbox">
	
		
		<ul>

			<li><a href="index.php">Accueil</a></li>
			<li><a href="list.php">Articles</a></li>
			<li><a href="#">Contact</a></li>

			<!-- Mon formulaire de recherche d'article -->

			<form action="index.php#article" method="post" name="searchForm">
    			<input type="text" name="searchArticle">
    			<button><img src="img/search.png"></button>
			</form>

		</ul>
		
	</nav>


    