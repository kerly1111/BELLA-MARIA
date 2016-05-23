<?php include 'cabecera.php';?>
<?php include 'banner.php'; ?>
<div class="panel panel-success margenGeneral" >
<div class="panel-heading styleBellaMAria"><h2>GALERÍA</h2></div>
<div class="panel-body">

<?php 
        require("clases/conexion.php");
        $con = conectar();
        
          $sql2 = "SELECT * FROM imagenes";
          $stmt2 = $con->prepare($sql2);
          $result2 = $stmt2->execute();
          $rows2 = $stmt2->fetchAll(\PDO::FETCH_OBJ);
          foreach($rows2 as $row2){
            $img=($row2->nom_imagen);
            ?>
            <center><img src="imagenes/modulos/<?php print $img?>" alt="$img" class="fotoModulo "></center>
    <?php
          }
                    
	?>


</div>
</div>

</section>
<?php include 'videos.php'; ?>
<?php include 'pie.php';?>




