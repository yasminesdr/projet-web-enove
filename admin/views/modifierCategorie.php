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
include "../entities/categorie.php";
include "../core/CategorieC.php";
if (isset($_GET['NOM_C'])){
	$categorie1C=new CategorieC();
    $result=$categorie1C->recupererCategorie($_GET['NOM_C']);
	foreach($result as $row){
		$NOM_C=$row['NOM_C'];
		
?>
<div class="container">
	
	<div class="row">
		<h2 class="text-center">BD-ENOVE-PRODUIT</h2>
	</div>
	<div class="row"> 
			<div class="col-md-12">
<form method="POST">
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
<caption>Modifier Categorie</caption>
<tr>
<td class="first_line" >Nom de la Categorie</td>
<td><input type="text" name="NOM_C" value="<?PHP echo $NOM_C ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier_C1" value="modifier_C1"></td>
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
if (isset($_POST['modifier_C1'])){
	$categorie=new Categories($_POST['NOM_C']);
	$categorie1C->modifierCategorie($categorie);
	header('Location: afficherCategorie.php');
}
?>

</body>
</HTMl>
