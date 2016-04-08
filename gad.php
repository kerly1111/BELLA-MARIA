<?php include 'cabecera.php' ?>
<?php include 'banner.php' ?>

<div class="panel panel-success">
  <div class="panel-heading styleBellaMAria"><h3>Mensaje del Presidente</h3></div>
  <div class="panel-body">
   <?php
          require("clases/conexion.php");
          $con = conectar();
          $sql = "SELECT * FROM mensaje_presidente";
          $stmt = $con->prepare($sql);
    
          $result = $stmt->execute();
          $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
          foreach($rows as $row){
        ?> 
  <div class="row">
	  <div class="col-md-4"></div>
	  <div class="col-md-4 col-md-offset-1">
   	<IMG SRC="imagenes/089.png" WIDTH=250 HEIGHT=300 BORDER=3>

	  </div>
	  <div class="col-md-4"></div>
  </div>

  <p style="text-align: justify;">
  	<?php print($row->men_mensaje_presidente); ?><br><br>
	</p>
	<p style="text-align: center;">
	 <?php print($row->fra_mensaje_presidente); ?><br>

	<?php print($row->nom_pre_mensaje_presidente); ?><br>

	<?php print($row->pue_mensaje_presidente); ?>
 </p>
<?php
}
?>
</div>
</div>
</section>
<?php include 'videos.php' ?>
<?php include 'pie.php' ?>
