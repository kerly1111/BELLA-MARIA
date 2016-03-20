<?php include 'cabecera.php' ?>
<?php include 'stilosFunciones.php' ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/jR3DCarousel.min.js"></script>
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
<section>
		<div class="panel panel-success margenNoticias">
		<div class="panel-heading"><h3 align="center"><?php print($row->tit_modulo);?></h3></div>
		<div class="panel-body">
		<div id="contenido" class="margenNoticias">
		<div id="principal">
          <img src="imagenes/modulos/<?php print $img?>" alt="<?php print($row->id_modulo);?>" class="imagenPanel">
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
           <img id="imgGal<?php print $nameImag?>" src="imagenes/modulos/<?php print $img?>" name="<?php print $img?>" alt="<?php print($row->id_modulo);?>" style="display: none;" width="400" />
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
<br>
<br>
<br>


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
            animationDuration: 700,
            animationInterval: 1000,
            //slideClass: 'jR3DCarouselCustomSlide',
            autoplay: true,
            onSlideShow: show,    /* callback when Slide show event occurs */
            navigation: 'circles',  /* circles | squares */
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