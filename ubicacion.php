<?php include 'cabecera.php' ?>

<section id="contact-page" class="container">
        <div align="center">
            
            <div >
                <h4>Ver Mapa</h4>
                <div id="map"  style="width:360px;height:200px;border:2px solid gray;" ></div>
                
            </div><!--/.col-sm-4-->
            
            </div>

            <script type="text/javascript">
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

            </script>


    </section><!--/#contact-page-->

<?php include 'pie.php' ?>