<?php include 'cabecera.php' ?>

<section id="contact-page" class="container">

      <div align="center">

      <div >
      <button class="btn btn-default" onclick="mapa();" type="button"><span class="glyphicon glyphicon-globe"></span>&nbsp;&nbsp; Ubicación</button>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <button class="btn btn-default" onclick="comoLlegar();" type="button"><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp; Como LLegar</button>
      </div>
      <hr>
      <div id="map" class="dimencionMApa" ></div>
      </div>


          <script type="text/javascript">
            mapa();
            
            function mapa(){
              
              var map;
              $(document).ready(function(){
              map = new GMaps({
              div: '#map',
              lat:-3.762020,
              lng:-79.847104,
              height:'500px',
              width:'800px'       
            });            
              });
            }


            function comoLlegar(){ 

}

            </script>


    </section><!--/#contact-page-->

<?php include 'pie.php' ?>