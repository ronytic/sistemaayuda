<?php
$folder="../";
include_once($folder."cabecerahtml.php");
?>
<script language="javascript" >
$(document).on("ready",function(){
	$(".subcategoria").click(function(e) {
		$(".subcategoria").parent().removeClass('active');
		$(this).parent().addClass('active');
		e.preventDefault();
        var codsubcategoria=$(this).data("codsubcategoria");
		//alert(codsubcategoria);
		$.post("mostrarcontenido.php",{'CodSubCategoria':codsubcategoria},function(data){
			$(".titulo").html(data.Titulo);
			$(".contenido").html(data.Contenido);
		},"json");
    });
});
</script>
<?php include_once($folder."cabeceraadmin .php");?>
<div class="contenido">

</div>
<?php include_once($folder."pie.php");?>