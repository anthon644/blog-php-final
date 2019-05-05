<!DOCTYPE html>
<html>

<head>

	<title>phpblog</title>

	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>

<body>

	<?php 

	$pdo = new PDO("mysql:host=localhost;dbname=phpblog;charset=utf8;port=3306", "root", "root");

	$req = $pdo->query("SELECT * FROM article");

	$articles = $req->fetchAll(PDO::FETCH_OBJ);

	var_dump($articles);



	?>

	<nav>
		
		<ul>
			
			<li><a href="#" class="logo">PHP BLOG</a></li>
			<li><a href="#">Accueil</a></li>
			<li><a href="list.php">Catégorie</a></li>
			<li><a href="#">Contact</a></li>
			<li><img src="img/search.png"></li>

		</ul>

	</nav>


	<header>
		
		<div class="home"></div>

	</header>


	<div class="featured">
		
		<h1>Featured Articles</h1>

	</div>


	<section>

	<?php

        foreach ($articles as $article) : 
    ?>
		
		<article>

			<figure>
			
				<img src="https://place-hold.it/500x300">

				<h2><?= $article->titre ?></h2>

				<figcaption><?=substr($article->contenu,0,200)?></figcaption>

				<a href="single.php">lire</a>

			</figure>

		</article>

	<?php
        
        endforeach;
    ?>

	</section>

		<div class="featured">
		
		<h1>Catégories</h1>

		</div>

	<footer>
		
		<div class="categorie">
			
			<img src="https://place-hold.it/256x256">
			<img src="https://place-hold.it/256x256">
			<img src="https://place-hold.it/256x256">
			<img src="https://place-hold.it/256x256">
			<img src="https://place-hold.it/256x256">

		</div>

	</footer>

</body>

</html>