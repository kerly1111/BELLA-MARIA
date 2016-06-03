<?php include 'cabecera.php' ?>
<?php include 'banner.php' ?>
<?php include 'panelNoticiasIndex.php' ?>


<div class="panel-body">
<div class="row">

  <div class="col-md-4" style="">
  <div class="panel panel-success">
  <div class="panel-heading styleBellaMAria">NOTICIAS</div>
  <div class="panel-body">
  <center>
   <?php
    $contador=0;
    $con = conectar();
    $sql = "SELECT * FROM modulo WHERE  est_modulo='1' and tip_modulo='NOTICIA' ORDER BY id_modulo DESC";
    $stmt = $con->prepare($sql);

    $result = $stmt->execute();
    $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
    foreach($rows as $row){
    if($contador>0){
    	break;
    }
    	$img="";
	    $sql2 = "SELECT * FROM imagenes WHERE modulo_id_modulo=".($row->id_modulo);
	    $stmt2 = $con->prepare($sql2);
	    $result2 = $stmt2->execute();
	    $rows2 = $stmt2->fetchAll(\PDO::FETCH_OBJ);
	    foreach($rows2 as $row2){
	        $img=($row2->nom_imagen);
	        break;
	    }
    ?>
    <a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>"><?php print($row->tit_modulo);?></a><br><br>
    <img src="imagenes/modulos/<?php print $img?>" alt="<?php print($row->id_modulo);?>" class="img-responsive imgIndexMod">
    <div class="panel panel-default">
  		<div class="panel-body">
    		<p style="text-align: justify;">
         <?php print substr(($row->des_modulo),0,170);?>..... </p><a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>">Leer mas...</a>
  		</div>
		</div>
    <?php
    $contador=$contador+1;
    }
 	?>
  </center>
  </div>
  </div>
  </div>

  <div class="col-md-4">
  <div class="panel panel-success">
  <div class="panel-heading styleBellaMAria">EDUCACIÓN</div>
  <div class="panel-body">
  <center>
   <?php
    $contador=0;
    $con = conectar();
    $sql = "SELECT * FROM modulo WHERE est_modulo='1' and tip_modulo='EDUCACIÓN' ORDER BY id_modulo DESC";
    $stmt = $con->prepare($sql);

    $result = $stmt->execute();
    $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
    foreach($rows as $row){
    if($contador>0){
      break;
    }
      $img="";
      $sql2 = "SELECT * FROM imagenes WHERE modulo_id_modulo=".($row->id_modulo);
      $stmt2 = $con->prepare($sql2);
      $result2 = $stmt2->execute();
      $rows2 = $stmt2->fetchAll(\PDO::FETCH_OBJ);
      foreach($rows2 as $row2){
          $img=($row2->nom_imagen);
          break;
      }
    ?>
    <a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>"><?php print($row->tit_modulo);?></a><br><br>
    <img src="imagenes/modulos/<?php print $img?>" alt="<?php print($row->id_modulo);?>" class="img-responsive imgIndexMod">
    <div class="panel panel-default">
      <div class="panel-body">
        <p style="text-align: justify;">
         <?php print substr(($row->des_modulo),0,170);?>..... </p><a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>">Leer mas...</a>
      </div>
    </div>
    <?php
    $contador=$contador+1;
    }
  ?>
  </center>
  </div>
  </div>
  </div>
  
  <div class="col-md-4">
  <div class="panel panel-success">
  <div class="panel-heading styleBellaMAria">EVENTOS</div>
  <div class="panel-body">
  <center>
   <?php
    $contador=0;
    $con = conectar();
    $sql = "SELECT * FROM modulo WHERE est_modulo='1' and tip_modulo='EVENTO' ORDER BY id_modulo DESC";
    $stmt = $con->prepare($sql);

    $result = $stmt->execute();
    $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
    foreach($rows as $row){
    if($contador>0){
    	break;
    }
    	$img="";
	    $sql2 = "SELECT * FROM imagenes WHERE modulo_id_modulo=".($row->id_modulo);
	    $stmt2 = $con->prepare($sql2);
	    $result2 = $stmt2->execute();
	    $rows2 = $stmt2->fetchAll(\PDO::FETCH_OBJ);
	    foreach($rows2 as $row2){
	        $img=($row2->nom_imagen);
	        break;
	    }
    ?>
    <a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>"><?php print($row->tit_modulo);?></a><br><br>
    <img src="imagenes/modulos/<?php print $img?>" alt="<?php print($row->id_modulo);?>" class="img-responsive imgIndexMod">
    <div class="panel panel-default">
  		<div class="panel-body">
    		<p style="text-align: justify;">
         <?php print substr(($row->des_modulo),0,170);?>..... </p><a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>">Leer mas...</a>
  		</div>
		</div>
    <?php
    $contador=$contador+1;
    }
 	?>
  </center>
  </div>
  </div>
  </div>   
  </div>

  <div class="row">

  <div class="col-md-4">
  <div class="panel panel-success">
  <div class="panel-heading styleBellaMAria">AGRÍCOLA</div>
  <div class="panel-body">
  <center>
   <?php
    $contador=0;
    $con = conectar();
    $sql = "SELECT * FROM modulo WHERE est_modulo='1' and tip_modulo='AGRÍCOLA' ORDER BY id_modulo DESC";
    $stmt = $con->prepare($sql);

    $result = $stmt->execute();
    $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
    foreach($rows as $row){
    if($contador>1){
      break;
    }
      $img="";
      $sql2 = "SELECT * FROM imagenes WHERE modulo_id_modulo=".($row->id_modulo);
      $stmt2 = $con->prepare($sql2);
      $result2 = $stmt2->execute();
      $rows2 = $stmt2->fetchAll(\PDO::FETCH_OBJ);
      foreach($rows2 as $row2){
          $img=($row2->nom_imagen);
          break;
      }
    ?>
    <a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>"><?php print($row->tit_modulo);?></a><br><br>
    <img src="imagenes/modulos/<?php print $img?>" alt="<?php print($row->id_modulo);?>" class="img-responsive imgIndexMod">
    <div class="panel panel-default">
      <div class="panel-body">
        <p style="text-align: justify;">
         <?php print substr(($row->des_modulo),0,170);?>..... </p><a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>">Leer mas...</a>
      </div>
    </div>
    <?php
    $contador=$contador+1;
    }
  ?>
  </center>
  </div>
  </div>
  </div>

  <div class="col-md-4">
  <div class="panel panel-success">
  <div class="panel-heading styleBellaMAria">ARTESANAL</div>
  <div class="panel-body">
  <center>
   <?php
    $contador=0;
    $con = conectar();
    $sql = "SELECT * FROM modulo WHERE est_modulo='1' and tip_modulo='ARTESANAL' ORDER BY id_modulo DESC";
    $stmt = $con->prepare($sql);

    $result = $stmt->execute();
    $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
    foreach($rows as $row){
    if($contador>1){
    	break;
    }
    	$img="";
	    $sql2 = "SELECT * FROM imagenes WHERE modulo_id_modulo=".($row->id_modulo);
	    $stmt2 = $con->prepare($sql2);
	    $result2 = $stmt2->execute();
	    $rows2 = $stmt2->fetchAll(\PDO::FETCH_OBJ);
	    foreach($rows2 as $row2){
	        $img=($row2->nom_imagen);
	        break;
	    }
    ?>
    <a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>"><?php print($row->tit_modulo);?></a><br><br>
    <img src="imagenes/modulos/<?php print $img?>" alt="<?php print($row->id_modulo);?>" class="img-responsive imgIndexMod">
    <div class="panel panel-default">
  		<div class="panel-body">
    		<p style="text-align: justify;">
         <?php print substr(($row->des_modulo),0,170);?>..... </p><a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>">Leer mas...</a>
  		</div>
		</div>
    <?php
    $contador=$contador+1;
    }
 	?>
  </center>
  </div>
  </div>
  </div>

  <div class="col-md-4">
  <div class="panel panel-success">
  <div class="panel-heading styleBellaMAria">COSTUMBRES Y TRADICIONES</div>
  <div class="panel-body">
  <center>
   <?php
    $contador=0;
    $con = conectar();
    $sql = "SELECT * FROM modulo WHERE est_modulo='1' and tip_modulo='COSTUMBRES Y TRADICIONES' ORDER BY id_modulo DESC";
    $stmt = $con->prepare($sql);

    $result = $stmt->execute();
    $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
    foreach($rows as $row){
    if($contador>1){
    	break;
    }
    	$img="";
	    $sql2 = "SELECT * FROM imagenes WHERE modulo_id_modulo=".($row->id_modulo);
	    $stmt2 = $con->prepare($sql2);
	    $result2 = $stmt2->execute();
	    $rows2 = $stmt2->fetchAll(\PDO::FETCH_OBJ);
	    foreach($rows2 as $row2){
	        $img=($row2->nom_imagen);
	        break;
	    }
    ?>
    <a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>"><?php print($row->tit_modulo);?></a><br><br>
    <img src="imagenes/modulos/<?php print $img?>" alt="<?php print($row->id_modulo);?>" class="img-responsive imgIndexMod">
    <div class="panel panel-default">
  		<div class="panel-body">
    		<p style="text-align: justify;">
         <?php print substr(($row->des_modulo),0,170);?>..... </p><a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>">Leer mas...</a>
  		</div>
		</div>
    <?php
    $contador=$contador+1;
    }
 	?>
  </center>
  </div>
  </div>
  </div>   
  </div>

  <div class="row">

  <div class="col-md-4">
  <div class="panel panel-success">
  <div class="panel-heading styleBellaMAria">TURISMO</div>
  <div class="panel-body">
  <center>
   <?php
    $contador=0;
    $con = conectar();
    $sql = "SELECT * FROM modulo WHERE est_modulo='1' and tip_modulo='TURISMO' ORDER BY id_modulo DESC";
    $stmt = $con->prepare($sql);

    $result = $stmt->execute();
    $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
    foreach($rows as $row){
    if($contador>1){
      break;
    }
      $img="";
      $sql2 = "SELECT * FROM imagenes WHERE modulo_id_modulo=".($row->id_modulo);
      $stmt2 = $con->prepare($sql2);
      $result2 = $stmt2->execute();
      $rows2 = $stmt2->fetchAll(\PDO::FETCH_OBJ);
      foreach($rows2 as $row2){
          $img=($row2->nom_imagen);
          break;
      }
    ?>
    <a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>"><?php print($row->tit_modulo);?></a><br><br>
    <img src="imagenes/modulos/<?php print $img?>" alt="<?php print($row->id_modulo);?>" class="img-responsive imgIndexMod">
    <div class="panel panel-default">
      <div class="panel-body">
        <p style="text-align: justify;">
         <?php print substr(($row->des_modulo),0,170);?>..... </p><a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>">Leer mas...</a>
      </div>
    </div>
    <?php
    $contador=$contador+1;
    }
  ?>
  </center>
  </div>
  </div>
  </div>


  <div class="col-md-4">
  <div class="panel panel-success">
  <div class="panel-heading styleBellaMAria">SALUD</div>
  <div class="panel-body">
  <center>
   <?php
    $contador=0;
    $con = conectar();
    $sql = "SELECT * FROM modulo WHERE est_modulo='1' and tip_modulo='SALUD' ORDER BY id_modulo DESC";
    $stmt = $con->prepare($sql);

    $result = $stmt->execute();
    $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
    foreach($rows as $row){
    if($contador>1){
    	break;
    }
    	$img="";
	    $sql2 = "SELECT * FROM imagenes WHERE modulo_id_modulo=".($row->id_modulo);
	    $stmt2 = $con->prepare($sql2);
	    $result2 = $stmt2->execute();
	    $rows2 = $stmt2->fetchAll(\PDO::FETCH_OBJ);
	    foreach($rows2 as $row2){
	        $img=($row2->nom_imagen);
	        break;
	    }
    ?>
    <a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>"><?php print($row->tit_modulo);?></a><br><br>
    <img src="imagenes/modulos/<?php print $img?>" alt="<?php print($row->id_modulo);?>" class="img-responsive imgIndexMod">
    <div class="panel panel-default">
  		<div class="panel-body">
    		<p style="text-align: justify;">
         <?php print substr(($row->des_modulo),0,170);?>..... </p><a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>">Leer mas...</a>
  		</div>
		</div>
    <?php
    $contador=$contador+1;
    }
 	?>
  </center>
  </div>
  </div>
  </div>

  <div class="col-md-4">
  <div class="panel panel-success">
  <div class="panel-heading styleBellaMAria">CULTURA, DEPORTES Y MAS</div>
  <div class="panel-body">
  <center>
   <?php
    $contador=0;
    $con = conectar();
    $sql = "SELECT * FROM modulo WHERE est_modulo='1' and tip_modulo='CULTURA, DEPORTES Y MAS' ORDER BY id_modulo DESC";
    $stmt = $con->prepare($sql);

    $result = $stmt->execute();
    $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
    foreach($rows as $row){
    if($contador>1){
    	break;
    }
    	$img="";
	    $sql2 = "SELECT * FROM imagenes WHERE modulo_id_modulo=".($row->id_modulo);
	    $stmt2 = $con->prepare($sql2);
	    $result2 = $stmt2->execute();
	    $rows2 = $stmt2->fetchAll(\PDO::FETCH_OBJ);
	    foreach($rows2 as $row2){
	        $img=($row2->nom_imagen);
	        break;
	    }
    ?>
    <a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>"><?php print($row->tit_modulo);?></a><br><br>
    <img src="imagenes/modulos/<?php print $img?>" alt="<?php print($row->id_modulo);?>" class="img-responsive imgIndexMod">
    <div class="panel panel-default">
  		<div class="panel-body">
    		<p style="text-align: justify;">
         <?php print substr(($row->des_modulo),0,170);?>..... </p><a class="stily-titulo" href="modulo.php?saludo=<?php print($row->id_modulo);?>">Leer mas...</a>
  		</div>
		</div>
    <?php
    $contador=$contador+1;
    }
 	?>
  </center>
  </div>
  </div>
  </div>   
  </div>

  </div>
</section>

<?php include 'videos.php' ?>
<?php include 'pie.php' ?>