<?PHP
include "../core/CategorieC.php";
$categorieC=new CategorieC();
if (isset($_POST["NOM_C"])){
	$categorieC->supprimerCategorie($_POST["NOM_C"]);
	header('Location: afficherCategorie.php');
}

?>