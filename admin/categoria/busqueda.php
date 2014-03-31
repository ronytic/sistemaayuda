<?php
include_once("../../login/check.php");
include_once("../../class/categoria.php");
$categoria=new categoria;
extract($_POST);
$Nombre=$Nombre!=""?"Nombre LIKE '$Nombre%'":"Nombre LIKE '%'";

$condicion="$Nombre";
$cat=$categoria->mostrarTodoRegistro($condicion,1,"Nombre");
$titulo=array(	"Nombre"=>'Nombre',
);
listadotabla($titulo,$cat,1,"","modificar.php","eliminar.php");
?>