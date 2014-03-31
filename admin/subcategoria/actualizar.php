<?php
include_once("../../login/check.php");
include_once("../../class/subcategoria.php");
$subcategoria=new subcategoria;
extract($_POST);
$Valores=array(	
	"CodCategoria"=>"'$CodCategoria'",
	"Nombre"=>"'$Nombre'",
);

$subcategoria->actualizarRegistro($Valores,"CodSubCategoria=".$Cod);

$Mensajes[]="Guardado Correctamente";
$folder="../../";
$carpeta="../";
include_once("../../resultado.php");
?>