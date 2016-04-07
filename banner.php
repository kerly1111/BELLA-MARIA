<?php 
if(isset($_SESSION["mensaje"])){
unset($_SESSION["mensaje"]);
}
?>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/coin-slider.js"></script>
<link rel="stylesheet" href="css/coin-slider-styles.css" type="text/css" />-->
      	<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.slicebox.js"></script>
<section>
<center>
	<div class="wrapper">

				<ul id="sb-slider" class="sb-slider">
					<li>
						<a target="_blank"><img src="imagenes/banner/1.jpg" alt="image1"/></a>
					</li>
					<li>
						<a  target="_blank"><img src="imagenes/banner/2.jpg" alt="image2"/></a>
					</li>
					<li>
						<a target="_blank"><img src="imagenes/banner/3.jpg" alt="image1"/></a>
					</li>
					<li>
						<a target="_blank"><img src="imagenes/banner/4.jpg" alt="image1"/></a>
					</li>
					<li>
						<a target="_blank"><img src="imagenes/banner/5.jpg" alt="image1"/></a>
					</li>
					<li>
						<a target="_blank"><img src="imagenes/banner/6.jpg" alt="image1"/></a>
					</li>
					<li>
						<a target="_blank"><img src="imagenes/banner/7.jpg" alt="image1"/></a>
					</li>
					<li>
						<a target="_blank"><img src="imagenes/banner/8.jpg" alt="image1"/></a>
					</li>
					<li>
						<a target="_blank"><img src="imagenes/banner/9.jpg" alt="image1"/></a>
					</li>
					<li>
						<a target="_blank"><img src="imagenes/banner/10.jpg" alt="image1"/></a>
					</li>
				</ul>
				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>
			</div>
</center>

<script type="text/javascript">
	$(function() {
		var Page = (function() {
			var $navArrows = $( '#nav-arrows' ).hide(),
				$shadow = $( '#shadow' ).hide(),
				slicebox = $( '#sb-slider' ).slicebox( {
					onReady : function() {
						$navArrows.show();
						$shadow.show();
					},
					orientation : 'r',
					cuboidsRandom : true
				} ),
				init = function() {
					initEvents();
				},
				initEvents = function() {
					// add navigation events
					$navArrows.children( ':first' ).on( 'click', function() {
						slicebox.next();
						return false;
					} );
					$navArrows.children( ':last' ).on( 'click', function() {
						slicebox.previous();
						return false;
					} );
				};
				return { init : init };
		})();
		Page.init();
	});
</script>