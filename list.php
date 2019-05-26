<!-- ICI on récupére le header -->

<?php include 'header.php'; ?>

<div class="featured">
		
	<h1>Article Classés par date</h1>

</div>

	<!-- ICI la loop qui récupéres toute les article (ceux ci sont trier par dates) -->

	<section class="list">
		
	
		<?php foreach ($articles as $article) :?>

    		<h2><?= $article->date ?></h2>
		
		<article class="liste">

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