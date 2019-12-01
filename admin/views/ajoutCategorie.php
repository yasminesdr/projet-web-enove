<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";
/*foreach($_POST as $key=>$value)
{
    echo $key." : ".$value."<br>";
}*/
if (isset($_POST['NOM_C']) ){
$categorie1=new CategorieC();
$categorie=new Categories($_POST['NOM_C']);
$categorie1->ajouterCategorie($categorie);

header('location: afficherCategorie.php');
}
?>