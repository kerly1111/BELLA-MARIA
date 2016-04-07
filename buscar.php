<?php include 'cabecera.php' ?>
<?php include 'banner.php' ?>
<section>

<div class="panel panel-body" >
	<?php
	$buscar= $_GET['buscar'];
	?>
	<form role="search">
		<div class="form-inline">
			<label>Buscar: &nbsp;&nbsp;&nbsp;</label>
			<input type="text" id="busqueda" name="busqueda" class="form-control " placeholder="Buscar" value="<?php print $buscar;?>">
			<button class="btn btn-success" type="button" onClick="buscarBM();"><i class="icon-search"></i></button>
		</div>
	</form >
	<br>
	<div class="panel panel-default">
	<br>
	<div style="padding-left: 2%;">
	<div id="modulosBusqueda">
	<?php 
		$contador=0;
        require("clases/conexion.php");
        $con = conectar();
        $sql = "SELECT * FROM modulo WHERE (tip_modulo like '%$buscar%' or tit_modulo like '%$buscar%' or des_modulo like '%$buscar%') and est_modulo='1' ORDER BY id_modulo DESC";
        $stmt = $con->prepare($sql);
  
        $result = $stmt->execute();
        $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
        foreach($rows as $row){
        	$contador=$contador+1;
    ?>
    	
    	<a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>"><?php print $contador.". ".($row->tit_modulo);?></a>
    	<div style="padding-left: 2%;">
    	<p ><?php print($row->fec_modulo);?></p>
    	<p style="text-align: justify;" >
         <?php print substr(($row->des_modulo),0,90);?>..... </p>
        </div>
        
    <?php 
        }
        if($contador==0){
        	echo "No se encontraron resultados!!";
        }           
	?>
	</div>
	</div>
	<br>
	</div>
</div>
<script type="text/javascript">
	function buscarBM(){
      var textoBusqueda = document.getElementById("busqueda").value;

            $.post("busquedaGeneral.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
              $("#modulosBusqueda").html("");
              $("#modulosBusqueda").html(mensaje);
            }); 
    }
</script>
</section>
<?php include 'videos.php' ?>
<?php include 'pie.php' ?>