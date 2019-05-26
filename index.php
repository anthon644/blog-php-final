<!-- recupération du header (barre de navigation etc..) -->

<?php include 'header.php'; ?>
	

	<header>
		
		<div class="home"></div>

	</header>


	<div class="featured" id="article">
		
		<h1>Articles à la une</h1>

	</div>


	<section id="section">

		<!-- ICI la loop qui récupéres tout les articles -->

	<?php foreach ($articles as $article) : ?>
		
		<article>

			<figure>
			
					<img src=<?= $article->urlImgArticle ?>>

					<h2><?= $article->titre ?></h2>

					<figcaption><?=substr($article->contenu,0,200)?>...</figcaption>


					<a href="single.php?id=<?= $article->code_article?>">lire</a>

			</figure>

		</article>

	<?php endforeach; ?>

	</section>

	<!-- ICI on récupére le footer -->

	<?php include 'footer.php'; ?>
