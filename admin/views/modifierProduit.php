<HTML>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="stylebo.css">
</head>
<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
<body>
<?PHP
include "../entities/produit.php";
include "../core/produitC.php";
if (isset($_GET['REF_EN'])){
	$produit1C=new ProduitC();
    $result=$produit1C->recupererProduit($_GET['REF_EN']);
	foreach($result as $row){
		$IM_P=$row['IM_P'];
		$REF_EN=$row['REF_EN'];
		$REF_IEC=$row['REF_IEC'];
		$Cat=$row['Cat'];
		$CAPACITY_Ah=$row['CAPACITY_Ah'];
		$TENSION_V=$row['TENSION_V'];
		$POID_KG=$row['POID_KG'];
		$DIM_mm=$row['DIM_mm'];
		$Prixp=$row['Prixp'];
		$FT=$row['FT'];
?>
<div class="container">
	
	<div class="row">
		<h2 class="text-center">BD-ENOVE-PRODUIT</h2>
	</div>
	<div class="row"> 
			<div class="col-md-12">
<form method="POST">
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
<caption>Modifier Produit</caption>
<tr>
<td>Image du produit</td>
<td><input type="text"  value="<?php echo $IM_P ?>">
	<input type="file" name="IM_P" value="IM_P"></td>
</tr>
<tr>
<td class="first_line" >Reference ENOVE</td>
<td><input type="text" name="REF_EN" value="<?PHP echo $REF_EN ?>"></td>
</tr>
<tr>
<td class="first_line">Reference IEC</td>
<td><input type="text" name="REF_IEC" value="<?PHP echo $REF_IEC ?>"></td>
</tr>
<tr>
<td class="first_line">Categorie du Produit</td>
<td><input type="text" name="Cat" value="<?PHP echo $Cat ?>"></td>
</tr>
<tr>
<td class="first_line">Capacite en Amper/Heure</td>
<td><input type="number" name="CAPACITY_Ah" value="<?PHP echo $CAPACITY_Ah ?>"></td>
</tr>
<tr>
<td class="first_line">Tension en Volt</td>
<td><input type="number" step="any" name="TENSION_V" value="<?PHP echo $TENSION_V ?>"></td>
</tr>
<tr>
<td class="first_line">Poid en Kg</td>
<td><input type="text" name="POID_KG" value="<?PHP echo $POID_KG ?>"></td>
</tr>
<tr>
<td class="first_line">Dimension du produit Longueur*Larguer*Hauteur</td>
<td><input type="text" name="DIM_mm" value="<?PHP echo $DIM_mm ?>"></td>
</tr>
<tr>
<td class="first_line">Prix du produit en Euros</td>
<td><input type="Number" name="Prixp" value="<?PHP echo $Prixp ?>"></td>
</tr>
<tr>
<td class="first_line">Fiche Technique</td>
<td><input type="file" name="FT" accept="application/pdf" value="<?PHP echo $FT ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
</tr>
</table>
</form>
</div>
</div>
</div>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$produit=new Produits($_POST['IM_P'],$_POST['REF_EN'],$_POST['REF_IEC'],$_POST['Cat'],$_POST['CAPACITY_Ah'],$_POST['CAPACITY_Ah'],$_POST['TENSION_V'],$_POST['DIM_mm'],$_POST['Prixp'],$_POST['FT']);
	$produit1C->modifierProduit($produit);
	header('Location: afficherProduit.php');
}
?>

</body>
</HTMl>
