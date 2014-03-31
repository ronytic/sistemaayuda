<?php
include_once("../../login/check.php");
$folder="../../";
$titulo="Nueva Categoria";
$carpeta="../";
include_once($folder."cabecerahtml.php");
?>
<script language="javascript">
configuracion={todayBtn: "", endDate: "'0d'"};
</script>
<?php include_once($folder."cabeceraadmin.php");?>
<form action="guardar.php" method="post">
<table class="table table-hover">
	<tr>
    	<td class="der"><?php echo 'Nombre de la Categoria' ?></td>
        <td><?php campo("Nombre","text","","",1)?></td>
    </tr>
    
    <tr>
    	<td colspan="2">
        	<?php campo("","submit",'Guardar',"btn btn-info","")?>
        </td>
    </tr>
</table>
</form>
<?php include_once($folder."pie.php");?>