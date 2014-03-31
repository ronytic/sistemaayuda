<?php
include_once("../../login/check.php");
$folder="../../";
$carpeta="../";

include_once("../../class/categoria.php");
$categoria=new categoria;
$cat=$categoria->mostrarTodoRegistro("",1,"Nombre");
$cat=todoLista($cat,"CodCategoria","Nombre","");

$titulo="Búsqueda de Subcategorias";
include_once($folder."cabecerahtml.php");
?>
<?php include_once($folder."cabeceraadmin.php");?>

<div class="col-sm-12">
	<div class="widget-box">
    	<div class="widget-header widget-header-flat"><h4><?php echo $titulo?> - <?php echo 'Criterio de Búsqueda'?></h4></div>
        <div class="widget-body">
        	<div class="widget-main">
            	<div class="main row">
                	<form action="busqueda.php" method="post" class="formulario">
                    <div class="col-sm-3">
                        <label><?php echo 'Categoria' ?></label>
                        <br>
                        <?php campo("CodCategoria","select",$cat,"col-xs-12")?>
                    </div>
                    <div class="col-sm-3">
                        <label><?php echo 'Nombre de la Categoria' ?></label>
                        <br>
                        <?php campo("Nombre","text","","col-xs-12")?>
                    </div>
                    <div class="col-sm-3">
                    	<br>
                        <?php campo("","submit",'Buscar',"btn btn-success col-xs-12")?>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-box">
    	<div class="widget-header widget-header-flat"><h4><?php echo 'Resultado'?></h4></div>
        <div class="widget-body">
        	<div class="widget-main">
            	<div class="main" id="respuestaformulario">
                </div>
            </div>
        </div>
    </div>
</div>




<?php include_once($folder."pie.php");?>