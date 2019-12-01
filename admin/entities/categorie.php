<?PHP
class Categories{
	private $NOM_C;


	function __construct($NOM_C){
		$this->NOM_C=$NOM_C;
	
	}

	function getNOM_C(){
		return $this->NOM_C;
	}
	

	function setNOM_C($NOM_C){
		 $this->NOM_C=$NOM_C;
	}
	
}

?>
