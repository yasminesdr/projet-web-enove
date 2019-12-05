<?PHP
include "../entities/produit.php";
include "../core/produitC.php";
/*foreach($_POST as $key=>$value)
{
    echo $key." : ".$value."<br>";
}*/
if (isset($_POST['REF_EN']) ){
$produit1=new ProduitC();
$produit=new Produits($_POST['IM_P'],$_POST['REF_EN'],$_POST['REF_IEC'],$_POST['Cat'],$_POST['CAPACITY_Ah'],$_POST['TENSION_V'],$_POST['POID_KG'],$_POST['DIM_mm'],$_POST['Prixp'],$_POST['FT'],$_POST['NOM_C']);
$produit1->ajouterProduit($produit);

header('location: afficherProduit.php');
}
?>