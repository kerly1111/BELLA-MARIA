<script src="js/jquery.flexisel.js"></script>
    <link href="css/style.css" rel="stylesheet">

<script type="text/javascript">

$(window).load(function() {

    $("#flexiselDemo3").flexisel({
        visibleItems: 5,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

    
});
</script>
<div class="panel-body">
<div class="row">
  <div class="col-md-4">

  <div class="panel panel-success">
  <div class="panel-heading styleBellaMAria">Video 1</div>
  <div class="panel-body embed-responsive embed-responsive-16by9">
  
   <iframe class="embed-responsive-item" width="375" height="340"src="http://www.youtube.com/embed/00m8uyRqkC4"></iframe>

  </div>
  </div>

  </div>
  <div class="col-md-4">

<div class="panel panel-success">
  <div class="panel-heading styleBellaMAria">Video 2</div>
  <div class="panel-body embed-responsive embed-responsive-16by9">
    
   <iframe class="embed-responsive-item" width="375" height="340"src="http://www.youtube.com/embed/xpga0VG51Zs"></iframe>

  </div>
</div>

  </div>

  <div class="col-md-4">
    <div class="panel panel-success">
    <div class="panel-heading styleBellaMAria">Video 3</div>
    <div class="panel-body embed-responsive embed-responsive-16by9">

        <iframe class="embed-responsive-item" width="375" height="340"src="http://www.youtube.com/embed/ObsCQ8L7nOc"></iframe>

    </div>
    </div>
  </div>
</div>
</div>

<ul id="flexiselDemo3">
    <li><img src="imagenes/logos1.png" /></li>
    <li><img src="imagenes/logos2.png" /></li>
    <li><img src="imagenes/logos3.png" /></li>
    <li><img src="imagenes/logos4.png" /></li>
    <li><img src="imagenes/logos5.png" /></li>
    <li><img src="imagenes/logos6.png" /></li>
    <li><img src="imagenes/logos7.png" /></li>
    <li><img src="imagenes/logos8.png" /></li>   
    <li><img src="imagenes/logos9.png" /></li>                                      
</ul>    
<div class="clearout"></div> 
