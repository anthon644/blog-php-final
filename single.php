<!-- On récupére le header -->

<?php include 'header.php'; ?>

<!-- On éxécute la fonction getsingle -->

<?php $article = getsingle(); ?>

	<header>
		
		<div class="slide">

			<!-- On récupére les url correspondante -->
			
			<img src=<?= $article->urlImgArticle ?> >

		</div>

	</header>


	<div class="featured">
		
		<h1><?= $article->titre ?></h1>

	</div>


	<section>
		
		<article class="myarticle">

			
			<p><?= $article->contenu ?></p>

			<div class="meta">
				
				<h3>Date: <?= $article->date ?></h3>

				<h3>Catégorie: <?= $article->nom ?></h3>

			</div>


		</article>


	</section>

	<!-- On récupére le footer -->

<?php include 'footer.php'; ?>