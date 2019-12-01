<?PHP
include "../config.php";
require_once("../entities/produit.php");
class ProduitC {

	function ajouterProduit($produits){
		$sql="insert into produits (IM_P,REF_EN,REF_IEC,Cat,CAPACITY_Ah,TENSION_V,POID_KG,DIM_mm,Prixp,FT) values (:IM_P,:REF_EN,:REF_IEC,:Cat,:CAPACITY_Ah,:TENSION_V,:POID_KG,:DIM_mm,:Prixp,:FT)";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$IM_P=$produits->getIM_P();
		$REF_EN=$produits->getREF_EN();
        $REF_IEC=$produits->getREF_IEC();
        $Cat=$produits->getCat();
        $CAPACITY_Ah=$produits->getCAPACITY_Ah();
		$TENSION_V=$produits->getTENSION_V();
		$POID_KG=$produits->getPOID_KG();
		$DIM_mm=$produits->getDIM_mm();
		$Prixp=$produits->getPrixp();
		$FT=$produits->getFT();
		$req->bindValue(':IM_P',$IM_P);
		$req->bindValue(':REF_EN',$REF_EN);
		$req->bindValue(':REF_IEC',$REF_IEC);
		$req->bindValue(':Cat',$Cat);
		$req->bindValue(':CAPACITY_Ah',$CAPACITY_Ah);
		$req->bindValue(':TENSION_V',$TENSION_V);
		$req->bindValue(':POID_KG',$POID_KG);
		$req->bindValue(':DIM_mm',$DIM_mm);
		$req->bindValue(':Prixp',$Prixp);
		$req->bindValue(':FT',$FT);
        $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherProduit(){
		
		$sql="SElECT * From produits";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function orderhtol(){
		
		$sql="SElECT * From produits ORDER BY(CAPACITY_Ah) DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function orderhtolT(){
		
		$sql="SElECT * From produits ORDER BY(TENSION_V) DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function orderhtolP(){
		
		$sql="SElECT * From produits ORDER BY(POID_KG) DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function orderhtolPR(){
		
		$sql="SElECT * From produits ORDER BY(Prixp) DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function orderltoh(){
		
		$sql="SElECT * From produits ORDER BY(CAPACITY_Ah) ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function orderltohT(){
		
		$sql="SElECT * From produits ORDER BY(TENSION_V) ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function orderltohP(){
		
		$sql="SElECT * From produits ORDER BY(POID_KG) ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function orderltohPR(){
		
		$sql="SElECT * From produits ORDER BY(Prixp) ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerProduit($REF_EN){
		$sql="DELETE FROM produits where REF_EN = :REF_EN";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':REF_EN',$REF_EN);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierProduit($produits){
		$sql="UPDATE produits SET IM_P:=IM_P,REF_IEC=:REF_IEC,Cat=:Cat,CAPACITY_Ah=:CAPACITY_Ah,TENSION_V=:TENSION_V,POID_KG=:POID_KG,DIM_mm=:DIM_mm,Prixp=:Prixp,FT=:FT WHERE REF_EN=:REF_EN";

		$db = config::getConnexion();
		
try{
		$req=$db->prepare($sql);
		$IM_P=$produits->getIM_P();
        $REF_EN=$produits->getREF_EN();
        $REF_IEC=$produits->getREF_IEC();
        $Cat=$produits->getCat();
		$CAPACITY_Ah=$produits->getCAPACITY_Ah();
		$TENSION_V=$produits->getTENSION_V();
        $POID_KG=$produits->getPOID_KG();
		$DIM_mm=$produits->getDIM_mm();
		$Prixp=$produits->getPrixp();
		$FT=$produits->getFT();
		$datas = array(':IM_P'=>$IM_P, ':REF_EN'=>$REF_EN, ':REF_IEC'=>$REF_IEC,':Cat'=>$Cat,':CAPACITY_Ah'=>$CAPACITY_Ah,':TENSION_V'=>$TENSION_V,':POID_KG'=>$POID_KG,':DIM_mm'=>$DIM_mm,':Prixp'=>$Prixp,':FT'=>$FT);
		$req->bindValue(':IM_P',$IM_P);
		$req->bindValue(':REF_EN',$REF_EN);
		$req->bindValue(':REF_IEC',$REF_IEC);
		$req->bindValue(':Cat',$Cat);
		$req->bindValue(':CAPACITY_Ah',$CAPACITY_Ah);
		$req->bindValue(':TENSION_V',$TENSION_V);
		$req->bindValue(':POID_KG',$POID_KG);
		$req->bindValue(':DIM_mm',$DIM_mm);
		$req->bindValue(':Prixp',$Prixp);
		$req->bindvalue(':FT',$FT);
		


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

	}
	function recupererProduit($REF_EN){
		$sql="SELECT * from produits where REF_EN='".$REF_EN."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListeC($REF_EN){
		$sql="SELECT * from produits where REF_EN LIKE '$REF_EN'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherCategorie($Cat){
		$sql="SELECT * FROM `produits` WHERE Cat LIKE '$Cat'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherCap($CAPACITY_Ah){
		$sql="SELECT * FROM produits WHERE CAPACITY_Ah >= $CAPACITY_Ah";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}

	function rechercherTension($TENSION_V){
		$sql="SELECT * FROM produits WHERE TENSION_V >= $TENSION_V";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}

	function rechercherPoid($POID_KG){
		$sql="SELECT * FROM produits WHERE POID_KG >= $POID_KG";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}

	function rechercherPrix($Prixp){
		$sql="SELECT * FROM produits WHERE Prixp >= $Prixp";
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

