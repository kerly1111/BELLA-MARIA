<?php include 'stilosFunciones.php' ?>
<?php include 'cabecera.php' ;
if(isset($_SESSION["loginname"])){
?>
<div class="panel panel-info col-lg-10 col-sm-10 ">
  <div class="panel-body">
	<?php
	require("../clases/conexion.php");
	$con = conectar();
	$sql = "SELECT * FROM contactos  ORDER BY id_contacto DESC";
	$stmt = $con->prepare($sql);

	$result = $stmt->execute();
	$rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
	foreach($rows as $row){
	?>
  	<div class="row">
	 	<div class="col-sm-1">
	 	<IMG SRC="../imagenes/comentario.png" WIDTH=80 HEIGHT=80 BORDER=3/>
	 	</div>
	 	<div class="panel panel-default col-sm-9" style=" margin-left: 2%;">
	 		<div class="panel-body">
	 			<p><?php print($row->fec_contacto); ?></p>
	 			<p><bm style="font-weight: bold;">Nombres y Apellidos:</bm>  &nbsp;&nbsp;<?php print($row->nom_contacto); ?> <?php print($row->ape_contacto); ?></p>
	 			<p><bm style="font-weight: bold;">Email:</bm>  &nbsp;&nbsp;<?php print($row->ema_contacto); ?></p>
	 			<p><?php print($row->men_contacto); ?></p>
	 		</div>
	 	</div>
 	</div><br>
 	<?php
 	}
 	?>
  </div>
 </div>
<?php
}
?>

