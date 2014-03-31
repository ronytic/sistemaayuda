<?php
include_once("../../login/check.php");
$folder="../../";
$carpeta="../";
$Cod=$_GET['Cod'];
$titulo="Modificar datos de Subcategoria";
include_once("../../class/subcategoria.php");
$subcategoria=new subcategoria;
$subcat=$subcategoria->mostrarRegistro($Cod);
$subcat=array_shift($subcat);

include_once("../../class/categoria.php");
$categoria=new categoria;
$cat=$categoria->mostrarTodoRegistro("",1,"Nombre");
$cat=todoLista($cat,"CodCategoria","Nombre","");

include_once($folder."cabecerahtml.php");
?>
<script language="javascript">
configuracion={todayBtn: "", endDate: "'0d'"};
</script>
<?php include_once($folder."cabeceraadmin.php");?>
<form action="actualizar.php" method="post">
<?php campo("Cod","hidden",$Cod)?>
<table class="table table-hover">
	<tr>
    	<td class="der"><?php echo 'Categoria' ?></td>
        <td><?php campo("CodCategoria","select",$cat,"",1,"","","",$subcat['CodCategoria'])?></td>
    </tr>
    <tr>
    	<td class="der"><?php echo 'Nombre de la Subcategoria' ?></td>
        <td><?php campo("Nombre","text",$subcat['Nombre'],"",1)?></td>
    </tr>
    
    <tr>
    	<td colspan="2">
        	<?php campo("","submit",'Guardar',"btn btn-info","")?>
        </td>
    </tr>
</table>
</form>
<?php include_once($folder."pie.php");?>