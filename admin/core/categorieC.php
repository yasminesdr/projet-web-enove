<?PHP
include "../config.php";
require_once("../entities/categorie.php");
class CategorieC {

	function ajouterCategorie($categories){
		$sql="insert into categories (NOM_C) values (:NOM_C)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$NOM_C=$categories->getNOM_C();
        
		$req->bindValue(':NOM_C',$NOM_C);
		
        $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherCategorie(){
		
		$sql="SElECT * From categories";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	function supprimerCategorie($NOM_C){
		$sql="DELETE FROM categories where NOM_C = :NOM_C";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':NOM_C',$NOM_C);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
		$sql="DELETE FROM produits where NOM_C = :NOM_C";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':NOM_C',$NOM_C);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}

	function modifierCategorie($categories){
		$sql="UPDATE  categories SET NOM_C=:NOM_C  WHERE NOM_C=:NOM_C";
		$db = config::getConnexion();	
try{
        $req=$db->prepare($sql);
        $NOM_C=$categories->getNOM_C();
        
		$datas = array(':NOM_C'=>$NOM_C);
		$req->bindValue(':NOM_C',$NOM_C);
        $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

	}
	function recupererCategorie($NOM_C){
		$sql="SELECT * from categories where NOM_C='".$NOM_C."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	
}


?>

