<?php include 'cabecera.php' ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/jR3DCarousel.min.js"></script>
<SECTION>
<div id="contenido">
<div id="principalColMod">

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
            break;
          }
                    
?>

		<div class="panel panel-success margenNoticiasMod">
		<div class="panel-heading styleBellaMAria"><p class="tituloMod-responsive" align="center"><?php print($row->tit_modulo);?></p></div>
		<div class="panel-body">
    <div >
      <p class="txt-responsive" style="text-align: left;">
         <?php print($row->fec_modulo);?> </p>
    </div>
    <center>
		<div id="contenido" class="margenNoticiasModTxt">
		<div id="principalMod">
          <img src="imagenes/modulos/<?php print $img?>" alt="<?php print($row->id_modulo);?>" class="imagenPanel">
        </div>
        <div id="secundarioMod">
        <p class="txt-responsive" style="text-align: justify;">
         <?php print($row->des_modulo);?> </p>
         </div>
		</div>
    </center>
		</div>
		</div>



<div class="contenido panel panel-success margenNoticiasMod">
<div class="panel-heading styleBellaMAria"><h3 align="center">GALERIA</h3></div>
<div class="panel-body">
<center>
<div class="jR3DCarouselGallery">

        <?php
        $nameImag=0;
          $sql2 = "SELECT * FROM imagenes WHERE modulo_id_modulo=".($row->id_modulo);
          $stmt2 = $con->prepare($sql2);
          $result2 = $stmt2->execute();
          $rows2 = $stmt2->fetchAll(\PDO::FETCH_OBJ);
          foreach($rows2 as $row2){
            $img=($row2->nom_imagen);
            ?>
           <img id="imgGal<?php print $nameImag?>" src="imagenes/modulos/<?php print $img?>" name="<?php print $img?>" alt="<?php print($row->id_modulo);?>" style="display: none;" />
        <?php
        $nameImag=$nameImag+1;
          }
      ?>        
          <input type="hidden" name="cantidadImag"  id="cantidadImag" value="<?php print $nameImag?>" />
<?php
}
?>
</div>
</center>
</div>
</div>




<script type="text/javascript">
$(document).ready(function(){
  if(document.getElementById('cantidadImag').value>1){
  var slides=[];
  var cantImag= document.getElementById('cantidadImag').value;
  for(var i=0; i<cantImag;i++){
    slides.push({src: 'imagenes/modulos/'+document.getElementById('imgGal'+i).name});
  }
  var jR3DCarousel;
  var carouselProps =  {
            width: 600,         /* largest allowed width */
            height: 422,        /* largest allowed height */
            slideLayout : 'fill',     /* "contain" (fit according to aspect ratio), "fill" (stretches object to fill) and "cover" (overflows box but maintains ratio) */
            animation: 'slide3D',     /* slide | scroll | fade | zoomInSlide | zoomInScroll */
            animationCurve: 'ease',
            animationDuration:1000,
            animationInterval: 4000,
            //slideClass: 'jR3DCarouselCustomSlide',
            autoplay: true,
            onSlideShow: show,    /* callback when Slide show event occurs */
            navigation: '',  /* circles | squares */
            slides: slides      /* array of images source or gets slides by 'slide' class */
              
        }
  function setUp(){
    jR3DCarousel = $('.jR3DCarouselGallery').jR3DCarousel(carouselProps);

    $('.settings').html('<pre>$(".jR3DCarouselGallery").jR3DCarousel('+JSON.stringify(carouselProps, null, 4)+')</pre>');   
    
  }
  function show(slide){
    console.log("Slide shown: ", slide.find('img').attr('src'))
  }
  $('.carousel-props input').change(function(){
    if(isNaN(this.value))
      carouselProps[this.name] = this.value || null; 
    else
      carouselProps[this.name] = Number(this.value) || null; 
    
    for(var i = 0; i < 999; i++)
       clearInterval(i);
    $('.jR3DCarouselGallery').empty();
    setUp();
    jR3DCarousel.showNextSlide();
  })
  
  $('[name=slides]').change(function(){
    carouselProps[this.name] = getSlides(this.value); 
    for (var i = 0; i < 999; i++)
       clearInterval(i);
    $('.jR3DCarouselGallery').empty();
    setUp();
    jR3DCarousel.showNextSlide();   
  });
  
  function getSlides(no){
    slides = [];
    for ( var i = 0; i < no; i++) {
      slides.push({src: 'https://unsplash.it/'+Math.floor(1366-Math.random()*200)+'/'+Math.floor(768+Math.random()*200)})
    }
    return slides;
  }
  
  //carouselProps.slides = getSlides(7);
  setUp()
  }
  })
</script>
</div>
<div id="secundarioColNot">
  <div class="panel panel-success margenNoticias">
    <div class="panel-heading styleBellaMAria" ><p class="tituloMod-responsive" align="center">Lo mas nuevo...</p></div>
    <div class="panel-body">
      <center>
   <?php
    $contador=0;
    $con = conectar();
    $sql = "SELECT * FROM modulo WHERE  est_modulo='1' ORDER BY id_modulo DESC";
    $stmt = $con->prepare($sql);

    $result = $stmt->execute();
    $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
    foreach($rows as $row){
    if($contador>2){
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
    <img src="imagenes/modulos/<?php print $img?>" alt="<?php print($row->id_modulo);?>" style="max-width: 60%;" class="img-responsive imgIndexMod">
    <div class="panel panel-default">
      <div class="panel-body">
        <p style="text-align: justify;" class="txt-responsive">
         <?php print substr(($row->des_modulo),0,90);?>..... </p><a class="stily-titulo txt-responsive" href="modulo.php?saludo=<?php print($row->id_modulo);?>">Leer mas...</a>
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
</SECTION>
<div id="LimpiarLayut"></div>

<?php include 'videos.php' ?>
<?php include 'pie.php' ?>
