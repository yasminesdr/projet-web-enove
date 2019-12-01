<?PHP
include "../core/produitC.php";
$produitC=new ProduitC();
if (isset($_POST["REF_EN"])){
	$produitC->supprimerProduit($_POST["REF_EN"]);
	header('Location: afficherProduit.php');
}

?>
