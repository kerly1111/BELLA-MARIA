
<?php include 'cabecera.php' ?>
<?php include 'panelNoticias.php' ?>

<script type="text/javascript">

ddsmoothmenu.init({
  mainmenuid: "templatemo_menu", //menu DIV id
  orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
  classname: 'ddsmoothmenu', //class added to menu's outer DIV
  //customtheme: ["#1c5a80", "#18374a"],
  contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script> 

<script type="text/javascript">
$(document).ready(function(){
               
  // This initialises carousels on the container elements specified, in this case, carousel1.
  $("#carousel1").CloudCarousel(    
    {     
      reflHeight: 40,
      reflGap: 2,
      titleBox: $('#da-vinci-title'),
      altBox: $('#da-vinci-alt'),
      buttonLeft: $('#slider-left-but'),
      buttonRight: $('#slider-right-but'),
      yRadius: 30,
      xPos: 480,
      yPos: 32,
      speed:0.15,
      autoRotate: "yes",
      autoRotateDelay: 1500
    }
  );
});
 
</script>

</head>

<body id="home">
     <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            
            
        </ul>


    </div> <!-- end of templatemo_menu -->
    <center>
</div>  <!-- END of templatemo_header_wrapper -->
<div id="templatemo_slider">
  <!-- This is the container for the carousel. -->
    <div id = "carousel1" style="width:960px; height:280px;background:none;overflow:scroll; margin-top: 20px">            
        <!-- All images with class of "cloudcarousel" will be turned into carousel items -->
        <!-- You can place links around these images -->
        <ul>
        <a href="" data-toggle="modal" data-target="#img1" rel="lightbox"><img class="cloudcarousel" src="imagenes/slider/01.png" alt="CSS Templates 1" title="España" /></a>
        <a href="" data-toggle="modal" data-target="#img2" rel="lightbox"><img class="cloudcarousel" src="imagenes/slider/02.png" alt="CSS Templates 2" title="Estados Unidos" /></a>
        <a href="#" data-toggle="modal" data-target="#img3" rel="lightbox"><img class="cloudcarousel" src="imagenes/slider/03.png" alt="CSS Templates 3" title="Lima" /></a>
        <a href="#" data-toggle="modal" data-target="#img4" rel="lightbox"><img class="cloudcarousel" src="imagenes/slider/04.jpg" alt="CSS Templates 4" title="China" /></a>
        
        </ul>

  </div>
     
    </div>




    
    <!-- Define left and right buttons. -->
    <center>
    <input id="slider-left-but" type="button" value="" />
    <input id="slider-right-but" type="button" value="" />
    </center>

<div class="container">
  
  <!-- Modal -->
  <div class="modal fade" id="img1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
          <div class="imagen">

            <a href="" data-toggle="modal" data-target="#img4" data-dismiss="modal">&#60;</a>
            <a href="" data-toggle="modal" data-target="#img2" data-dismiss="modal"><img src="imagenes/slider/01.png"></a>
            <a href="" data-toggle="modal" data-target="#img2" data-dismiss="modal" >></a>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      

    </div>
  </div>

  <div class="modal fade" id="img2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
          <div class="imagen">

            <a href="" data-toggle="modal" data-target="#img1" data-dismiss="modal" >&#60;</a>
            <a href="" data-toggle="modal" data-target="#img3" data-dismiss="modal" ><img src="imagenes/slider/02.png"></a>
            <a href="" data-toggle="modal" data-target="#img3" data-dismiss="modal" >></a>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      

    </div>
  </div>

    <div class="modal fade" id="img3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
          <div class="imagen">

            <a href="" data-toggle="modal" data-target="#img2" data-dismiss="modal" >&#60;</a>
            <a href="" data-toggle="modal" data-target="#img4" data-dismiss="modal" ><img src="imagenes/slider/03.png"></a>
            <a href="" data-toggle="modal" data-target="#img4" data-dismiss="modal" >></a>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      

    </div>
  </div>


<div class="modal fade" id="img4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
          <div class="imagen">

            <a href="" data-toggle="modal" data-target="#img3" data-dismiss="modal" >&#60;</a>
            <a href="" data-toggle="modal" data-target="#img1" data-dismiss="modal" ><img src="imagenes/slider/04.jpg"></a>
            <a href="" data-toggle="modal" data-target="#img1" data-dismiss="modal" >></a>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      

    </div>
  </div>

    
</div>
</center>





<center>

    Como principal atractivo, podemos citar el Centro parroquial, donde encontramos atractivos como su Iglesia, su parque central y su gente, que trata de esmerarse al máximo para hacer que su visita sea agradable, principalmente en sus fiestas Parroquiales o Patronales.

Muy cerca a escasos metros podemos disfrutar de su hermosos rios, que en tiempos de invierno son bastante corrientosos y hay que entrar con cuidado a disfrutar de sus aguas.
      
  </center>
