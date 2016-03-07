<?php include 'cabecera.php' ?>
<?php 
$id= $_GET['saludo'];
        require("clases/conexion.php");
        $con = conectar();
        $sql = "SELECT * FROM modulo WHERE id_modulo=$id";
        $stmt = $con->prepare($sql);
  
        $result = $stmt->execute();
        $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
        foreach($rows as $row){

          $sql2 = "SELECT * FROM imagenes WHERE modulo_id_modulo=".($row->id_modulo);
          $stmt2 = $con->prepare($sql2);
          $result2 = $stmt2->execute();
          $rows2 = $stmt2->fetchAll(\PDO::FETCH_OBJ);
          foreach($rows2 as $row2){
            $img=($row2->nom_imagen);
          }
                    
?>
<section>
		<div class="panel panel-success margenNoticias">
		<div class="panel-heading"><h3 align="center"><?php print($row->tit_modulo);?></h3></div>
		<div class="panel-body">
		<div id="contenido" class="margenNoticias">
		<div id="principal">
          <img src="imagenes/<?php print $img?>" alt="<?php print($row->id_modulo);?>" class="imagenPanel">
        </div>
        <div id="secundario">
        <div> 
        <hr>
        <p style="text-align: justify;">
         <?php print($row->des_modulo);?> </p><hr>
         </div>
         </div>
		</div>
		</div>
		</div>
</section>
        <?php
        }
        ?>


