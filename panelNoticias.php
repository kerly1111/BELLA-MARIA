<?php session_start();
?>

    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script  src="js/jquery.flexisel.js"></script>

<section>
<div id="contenido" class="margenNoticias">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
         <div class="carousel-inner" role="listbox">
         
        <?php
        $contador=0;
        require("clases/conexion.php");
        $con = conectar();
        $sql = "SELECT * FROM modulo ORDER BY id_modulo DESC";
        $stmt = $con->prepare($sql);
  
        $result = $stmt->execute();
        $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
        foreach($rows as $row){

          $sql2 = "SELECT * FROM modulo ORDER BY id_modulo DESC";

          if($contador<6){
            if($contador==0){
          ?>
          <div class="item active">
          <?php 
          }else{
          ?>
          <div class="item">
          <?php
          }
          ?>
        <div id="principal">
          <img src="imagenes/modulo1.png" alt="<?php print($row->id_modulo);?>" class="imagenPanel">
        </div>
        <div id="secundario">
        <div> <h1 class="big-bold"><?php print($row->tit_modulo);?></h1>
        <hr><p style="text-align: justify;">
         <?php print($row->des_modulo);?> </p>
         </div>
         </div>
        </div>
        
        <?php
        }
        $contador++;
        }
        ?> 
        

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

       <div id="principal">  
        <ol class="carousel-indicators">
          <li style="background-color: rgba(0, 102, 0, 0.9);" data-target="#myCarousel" data-slide-to="0"  class="active"></li>
          <li style="background-color: rgba(0, 102, 0, 0.9);" data-target="#myCarousel" data-slide-to="1"></li>
          <li style="background-color: rgba(0, 102, 0, 0.9);" data-target="#myCarousel" data-slide-to="2"></li>
          <li style="background-color: rgba(0, 102, 0, 0.9);" data-target="#myCarousel" data-slide-to="3"></li>
          <li style="background-color: rgba(0, 102, 0, 0.9);" data-target="#myCarousel" data-slide-to="4"></li>
          <li style="background-color: rgba(0, 102, 0, 0.9);" data-target="#myCarousel" data-slide-to="5"></li>
        </ol>
      </div>

  </div>
</div>
      
</section>