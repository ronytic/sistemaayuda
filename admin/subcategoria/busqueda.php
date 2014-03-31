<?php
include_once("../../login/check.php");
include_once("../../class/categoria.php");
include_once("../../class/subcategoria.php");
$categoria=new categoria;
$subcategoria=new subcategoria;
extract($_POST);
$Nombre=$Nombre!=""?"Nombre LIKE '$Nombre%'":"Nombre LIKE '%'";
$CodCategoria=$CodCategoria!=""?"CodCategoria LIKE '$CodCategoria'":"CodCategoria LIKE '%'";


$condicion="$Nombre and $CodCategoria";
$subcat=$subcategoria->mostrarTodoRegistro($condicion,1,"Nombre");
$i++;
foreach($subcat as $sc){$i++;
	$cat=$categoria->mostrarRegistro($sc['CodCategoria']);
	$cat=array_shift($cat);
	$datos[$i]['CodSubCategoria']=$sc['CodSubCategoria'];
	$datos[$i]['Nombre']=$sc['Nombre'];
	$datos[$i]['NombreCategoria']=$cat['Nombre'];
}
$titulo=array(	
	"NombreCategoria"=>'Nombre de la Categoria',
	"Nombre"=>'Nombre',
);
listadotabla($titulo,$datos,1,"","modificar.php","eliminar.php");
?>