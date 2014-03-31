<?php
include_once("../../login/check.php");
include_once("../../class/categoria.php");
$categoria=new categoria;
extract($_POST);
$Valores=array(	"Nombre"=>"'$Nombre'",
);

$categoria->actualizarRegistro($Valores,"CodCategoria=".$Cod);

$Mensajes[]="Guardado Correctamente";
$folder="../../";
$carpeta="../";
include_once("../../resultado.php");
?>