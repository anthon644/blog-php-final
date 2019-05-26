<!-- ICI on récupére le header -->

<?php include 'header.php'; ?>

<!-- On éxécute la fonction getlist -->

	<?php $articles = getlist(); ?>


	<div class="featured">

		<!-- On liste les catégorie en fonction de l'id qui lui correspond et pré-décrément notre $_GET ainsi on récupére le bon indice.  -->

		<h1><?= $categories[--$_GET['id']]->nom?></h1>
	
	</div>


<section class="list">
		
	<?php

	//Condition si jamais il n'y as aucun article dans la catégorie

	if(!isset($articles['0']))
	{
    echo "Il n'y a rien à afficher ici";
	}else{


        foreach ($articles as $article) : ?>
		
		<article class="liste">

			<figure>
			
				<img src=<?= $article->urlImgArticle ?>>

					<h2><?= $article->titre ?></h2>

						<figcaption><?=substr($article->contenu,0,200)?>...</figcaption>

							<a href="single.php?id=<?= $article->code_article?>">lire</a>

			</figure>

		</article>

	<?php endforeach;

	}

	?>
	

</section>

<!-- On récupére le footer -->

<?php include 'footer.php'; ?>