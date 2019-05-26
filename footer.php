<!-- FOOTER -->

<div class="featured">
		
	<h1>Catégories</h1>

</div>

	<footer>

		<div class="categorie">

			<!-- ICI la loop qui récupéres toute les catégorie -->

			<?php foreach ($categories as $categorie) :?>
			
			<a href="listcategorie.php?id=<?= $categorie->code_categorie?>"><?= $categorie->nom ?></a>

			<?php endforeach;?>
			
		</div>

	</footer>

</body>

</html>
