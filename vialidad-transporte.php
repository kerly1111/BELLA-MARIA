<?php include 'cabecera.php';?>
<?php include 'banner.php'; ?>
<div class="panel panel-success margenGeneral" >
<div class="panel-heading styleBellaMAria"><h2>VIALIDAD Y TRANSPORTE</h2></div>
<div class="panel-body">

<?php 
        require("clases/conexion.php");
        $con = conectar();
        $sql = "SELECT * FROM modulo WHERE tip_modulo='VIALIDAD Y TRANSPORTE' ORDER BY id_modulo DESC";
        $stmt = $con->prepare($sql);
  
        $result = $stmt->execute();
        $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
        foreach($rows as $row){

        ?>
        <h3><a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>"><?php print ($row->tit_modulo);?></a></h3>
        <p ><?php print($row->fec_modulo);?></p>
    	<p style="text-align: justify;" >
         <?php print ($row->des_modulo);?>..... </p>

        <?php
          $sql2 = "SELECT * FROM imagenes WHERE modulo_id_modulo=".($row->id_modulo);
          $stmt2 = $con->prepare($sql2);
          $result2 = $stmt2->execute();
          $rows2 = $stmt2->fetchAll(\PDO::FETCH_OBJ);
          foreach($rows2 as $row2){
            $img=($row2->nom_imagen);
            ?>
            <center><img src="imagenes/modulos/<?php print $img?>" alt="<?php print($row->id_modulo);?>" class="fotoModulo "></center>
    <?php
          }
          }          
	?>


</div>
</div>

</section>
<?php include 'videos.php'; ?>
<?php include 'pie.php';?>




