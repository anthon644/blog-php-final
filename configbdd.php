<?php 

	//préparation base de données pour la page index

	$pdo = new PDO("mysql:host=localhost;dbname=phpblog;charset=utf8;port=3306", "root", "root");

	$req = $pdo->query("SELECT * FROM article JOIN categorie ON article.code_categorie = categorie.code_categorie");

	$req2 = $pdo->query('SELECT * FROM categorie');

	$req3 = $pdo->prepare("SELECT * FROM article ORDER BY `article`.`date` DESC");

	$req3->execute();

	$articles = $req3->fetchAll(PDO::FETCH_OBJ);

	$categories = $req2->fetchAll(PDO::FETCH_OBJ);


	// préparation base de données pour la page listcategorie

	function getlist(){

	$pdo = new PDO("mysql:host=localhost;dbname=phpblog;charset=utf8;port=3306", "root", "root", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	$req = $pdo->prepare("SELECT * FROM article 
		WHERE code_categorie= :id");

	$req->execute(array(':id' => $_GET['id']));

	$req2 = $pdo->query('SELECT * FROM categorie');

	$articles = $req->fetchAll(PDO::FETCH_OBJ);

	$categories = $req2->fetchAll(PDO::FETCH_OBJ);

	return $articles;

	}



	// préparation base de données pour la page single


/**
 * @return array
 */


	function getsingle(){

	$pdo = new PDO("mysql:host=localhost;dbname=phpblog;charset=utf8;port=3306", "root", "root");

	$req = $pdo->prepare("SELECT * FROM article JOIN categorie ON article.code_categorie = categorie.code_categorie WHERE code_article = :code_article");

	$req2 = $pdo->query('SELECT * FROM categorie');

	$code_article = $_GET['id'];

	$categories = $req2->fetchAll(PDO::FETCH_OBJ); 

	$req->execute([':code_article' => $code_article]);

	$article = $req->fetchObject();

	return $article;

	}



	//fonction recherche d'articles

	/**
 * @param $str
 * @return array
 */
function searchArticle($str){
    $pdo = new PDO("mysql:host=localhost;dbname=phpblog;charset=utf8;port=3306", "root", "root");
    $search = "%$str%";
    $req = $pdo->prepare("SELECT * FROM article WHERE titre LIKE ?");//prepare impératif !!!!
    $req->execute([$search]);
    $articles = $req->fetchAll(PDO::FETCH_OBJ);
    return $articles;
}


?>