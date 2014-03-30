<?php
include_once("login/check.php");
include_once("class/contenido.php");
$contenido=new contenido;
$CodSubCategoria=$_POST['CodSubCategoria'];
$Con=$contenido->mostrarTodoRegistro("CodSubCategoria=".$CodSubCategoria);
$Con=array_shift($Con);
if(count($Con))
$salida=array("Titulo"=>$Con['Titulo'],"Contenido"=>$Con['Contenido']);
echo json_encode($salida);
?>