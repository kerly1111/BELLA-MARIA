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

          $sql = "SELECT * FROM modulo ORDER BY id_modulo DESC";
          
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
             
 <br>
<section>
  <div id="LimpiarLayut">
    <ul id="flexiselDemo1" style="list-style:none;"> 
        <?php

        $con = conectar();
        $sql1 = "SELECT * FROM modulo ORDER BY id_modulo DESC";
        $stmt1 = $con->prepare($sql1);
  
        $result1 = $stmt1->execute();
        $rows1 = $stmt1->fetchAll(\PDO::FETCH_OBJ);
        foreach($rows1 as $row1){
          ?>

        <li><img><a href="modulo.php?saludo=<?php print($row1->id_modulo);?>"><?php print($row1->tit_modulo);?></a></li> 
        <?php
        }
        ?>                                                        
    </ul>
     
    <div class="clearout"></div> 
    <script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo1").flexisel();   
    });
    </script>
    </div>
</section>
    <!--/header-->
<!--   <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Powerful and Responsive Web Design</h2>
                                    <p class="animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
 <!--              <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="boxed animation animated-item-1">Clean, Crisp, Powerful and Responsive Web Design</h2>
                                    <p class="boxed animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
 <!--               <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Powerful and Responsive Web Design Theme</h2>
                                    <p class="animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                    <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="centered">
                                    <div class="embed-container">
                                        <iframe src="//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
 <!--           </div><!--/.carousel-inner-->
  <!--      </div><!--/.carousel-->
   <!--     <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->
</section>