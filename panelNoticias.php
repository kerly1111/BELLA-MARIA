<?php session_start();
?>

    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script  src="js/jquery.flexisel.js"></script>

<section>
<div id="contenido" class="margenNoticias">

    <div id="principal" class="separador">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" id="slider0" class="slider0" data-slide-to="0"  class="active"></li>
          <li data-target="#myCarousel" id="slider1" class="slider1" data-slide-to="1"></li>
          <li data-target="#myCarousel" class="slider2" data-slide-to="2"></li>
          <li data-target="#myCarousel" class="slider3" data-slide-to="3"></li>
          <li data-target="#myCarousel" class="slider4" data-slide-to="4"></li>
          <li data-target="#myCarousel" class="slider5" data-slide-to="5"></li>
        </ol>


        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="imagenes/bg1.png" alt="Chania" width="460" height="345">
          </div>

          <div class="item">
            <img src="imagenes/bg2.png" alt="Chania" width="460" height="345">
          </div>
        
          <div class="item">
            <img src="imagenes/bg3.png" alt="Flower" width="460" height="345">
          </div>

          <div class="item">
            <img src="imagenes/bg1.png" alt="Chania" width="460" height="345">
          </div>

          <div class="item">
            <img src="imagenes/bg2.png" alt="Chania" width="460" height="345">
          </div>
        
          <div class="item">
            <img src="imagenes/bg3.png" alt="Flower" width="460" height="345">
          </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    </div>
 
    <div id="secundario">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner center panel panel-default sizeDescripcion ">

    <div id="item1" class="item active margenLinea "> <h1 class="big-bold">imagen 1</h1>
    <hr>
     El cacao es la fruta de mayor producción así, en la cabecera parroquial 70 familias que se dedican a la producción de cacao utilizan 50 has de sus fincas, y pequeñas extensiones de tierra para la producción de piñas 11 has, plátano 1 has, maíz 10 has, banano 15 has y aproximadamente 10 has a la producción de frutas de varias especies entre cítricos y exóticas para el consumo interno y familiar. 
     </div>
    <div id="item2" class="item margenLinea"> <h1 class="big-bold">imagen 2</h1>
    <hr>
     El cacao es la fruta de mayor producción así, en la cabecera parroquial 70 familias que se dedican a la producción de cacao utilizan 50 has de sus fincas, y pequeñas extensiones de tierra para la producción de piñas 11 has, plátano 1 has, maíz 10 has, banano 15 has y aproximadamente 10 has a la producción de frutas de varias especies entre cítricos y exóticas para el consumo interno y familiar. 
     </div>
    <div id="item3" class="item margenLinea"> <h1 class="big-bold">imagen 3</h1>
    <hr>
     El cacao es la fruta de mayor producción así, en la cabecera parroquial 70 familias que se dedican a la producción de cacao utilizan 50 has de sus fincas, y pequeñas extensiones de tierra para la producción de piñas 11 has, plátano 1 has, maíz 10 has, banano 15 has y aproximadamente 10 has a la producción de frutas de varias especies entre cítricos y exóticas para el consumo interno y familiar. 
     </div>
    <div id="item4" class="item margenLinea"> <h1 class="big-bold">imagen 4</h1>
    <hr>
     El cacao es la fruta de mayor producción así, en la cabecera parroquial 70 familias que se dedican a la producción de cacao utilizan 50 has de sus fincas, y pequeñas extensiones de tierra para la producción de piñas 11 has, plátano 1 has, maíz 10 has, banano 15 has y aproximadamente 10 has a la producción de frutas de varias especies entre cítricos y exóticas para el consumo interno y familiar. 
     </div>
    <div id="item5"class="item margenLinea"> <h1 class="big-bold">imagen 5</h1>
    <hr>
     El cacao es la fruta de mayor producción así, en la cabecera parroquial 70 familias que se dedican a la producción de cacao utilizan 50 has de sus fincas, y pequeñas extensiones de tierra para la producción de piñas 11 has, plátano 1 has, maíz 10 has, banano 15 has y aproximadamente 10 has a la producción de frutas de varias especies entre cítricos y exóticas para el consumo interno y familiar. 
     </div>
    <div id="item6" class="item margenLinea"> <h1 class="big-bold">imagen 6</h1>
    <hr>
     El cacao es la fruta de mayor producción así, en la cabecera parroquial 70 familias que se dedican a la producción de cacao utilizan 50 has de sus fincas, y pequeñas extensiones de tierra para la producción de piñas 11 has, plátano 1 has, maíz 10 has, banano 15 has y aproximadamente 10 has a la producción de frutas de varias especies entre cítricos y exóticas para el consumo interno y familiar. 
     </div>

       </div>
    </div>
  </div>
</div>
             
 <script type="text/javascript">
    $(".slider0").click(function(){
    document.getElementById("item1").className += " active";
    document.getElementById("item2").className =document.getElementById("item2").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item3").className =document.getElementById("item3").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item4").className =document.getElementById("item4").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item5").className =document.getElementById("item5").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item6").className =document.getElementById("item6").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    });

    $(".slider1").click(function(){
    document.getElementById("item2").className += " active";
    document.getElementById("item1").className =document.getElementById("item1").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item3").className =document.getElementById("item3").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item4").className =document.getElementById("item4").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item5").className =document.getElementById("item5").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item6").className =document.getElementById("item6").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    });

    $(".slider2").click(function(){
    document.getElementById("item3").className += " active";
    document.getElementById("item1").className =document.getElementById("item1").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item2").className =document.getElementById("item2").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item4").className =document.getElementById("item4").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item5").className =document.getElementById("item5").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item6").className =document.getElementById("item6").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    });

    $(".slider3").click(function(){
    document.getElementById("item4").className += " active";
    document.getElementById("item1").className =document.getElementById("item1").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item2").className =document.getElementById("item2").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item3").className =document.getElementById("item3").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item5").className =document.getElementById("item5").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item6").className =document.getElementById("item6").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    });

    $(".slider4").click(function(){
    document.getElementById("item5").className += " active";
    document.getElementById("item1").className =document.getElementById("item1").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item2").className =document.getElementById("item2").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item3").className =document.getElementById("item3").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item4").className =document.getElementById("item4").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item6").className =document.getElementById("item6").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    });

    $(".slider5").click(function(){
    document.getElementById("item6").className += " active";
    document.getElementById("item1").className =document.getElementById("item1").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item2").className =document.getElementById("item2").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item3").className =document.getElementById("item3").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item4").className =document.getElementById("item4").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById("item5").className =document.getElementById("item5").className.replace( /(?:^|\s)active(?!\S)/g , '' );
    });
</script>

  <div id="LimpiarLayut">
    <ul id="flexiselDemo1" style="list-style:none;"> 
        <?php

        require("clases/conexion.php");
        $con = conectar();
        $sql = "SELECT * FROM modulo ORDER BY id_modulo DESC";
        $stmt = $con->prepare($sql);
  
        $result = $stmt->execute();
        $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
        foreach($rows as $row){
          ?>

        <li><img><a href="modulo.php?saludo=<?php print($row->id_modulo);?>"><?php print($row->tit_modulo);?></a></li> 
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