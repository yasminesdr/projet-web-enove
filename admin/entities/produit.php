<?PHP
class Produits{
	private $IM_P;
	private $REF_EN;
	private $REF_IEC;
	private $Cat;
	private $CAPACITY_Ah;
	private $TENSION_V;
	private $POID_KG;
	private $DIM_mm;
	private $Prixp;
	private $FT;
	private $NOM_C;

	function __construct($IM_P,$REF_EN,$REF_IEC,$Cat,$CAPACITY_Ah,$TENSION_V,$POID_KG,$DIM_mm,$Prixp,$FT,$NOM_C){
		$this->IM_P=$IM_P;
		$this->REF_EN=$REF_EN;
		$this->REF_IEC=$REF_IEC;
		$this->Cat=$Cat;
		$this->CAPACITY_Ah=$CAPACITY_Ah;
		$this->TENSION_V=$TENSION_V;
		$this->DIM_mm=$DIM_mm;
		$this->POID_KG=$POID_KG;
		$this->Prixp=$Prixp;
		$this->FT=$FT;
		$this->NOM_C=$NOM_C;
	}

	function getIM_P(){
		return $this->IM_P;
	}
	function getREF_EN(){
		return $this->REF_EN;
	}
	function getREF_IEC(){
		return $this->REF_IEC;
	}
	function getCat(){
		return $this->Cat;
	}
	function getCAPACITY_Ah(){
		return $this->CAPACITY_Ah;
	}
	function getTENSION_V(){
		return $this->TENSION_V;
	}
	function getPOID_KG(){
		return $this->POID_KG;
	}
	function getDIM_mm(){
		return $this->DIM_mm;
	}
	function getPrixp(){
		return $this->Prixp;
	}
	function getFT(){
		return $this->FT;
	}
	function getNOM_C(){
		return $this->NOM_C;
	}

	function setIM_P($IM_P){
		$this->IM_P=$IM_P;
   }

	function setREF_EN($REF_EN){
		 $this->REF_EN=$REF_EN;
	}
	function setREF_IEC($REF_IEC){
		 $this->REF_IEC=$REF_IEC;
	}
	function setCatCat($Cat){
		$this->Cat=$Cat;
   }
	function setCAPACITY_Ah($CAPACITY_Ah){
		 $this->CAPACITY_Ah=$CAPACITY_Ah;
	}
	function setTENSION_V($TENSION_V){
		 $this->TENSION_V=$TENSION_V;
	}
	function setPOID_KG($POID_KG){
		 $this->POID_KG=$POID_KG;
	}
	function setDIM_mm($DIM_mm){
		$this->DIM_mm=$DIM_mm;
   }

	function setPrixp($Prixp){
		$this->Prixp=$Prixp;
	}
	function setFT($FT){
		$this->FT=$FT;
	}
	function setNOM_C($NOM_C){
		$this->NOM_C=$NOM_C;
	}
}

?>
