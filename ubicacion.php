

<?php include 'cabecera.php' ?>
<section id="contact-page">
<html>
<head>
<title>Local</title>
<script src="http://j.maxmind.com/app/geoip.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<div align="center">

      <div >
      <button class="btn btn-default" onclick="mapa();" type="button"><span class="glyphicon glyphicon-globe"></span>&nbsp;&nbsp; Ubicación</button>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <button class="btn btn-default" onclick="travelToAddress();" type="button"><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp; Como LLegar</button>
      </div>
      <hr>
      
<script type="text/javascript" >
var map;
var myPos;
var actual;
var directionsRenderer;
var directionsService = new google.maps.DirectionsService();
mapa();
function mapa(){
if (navigator && navigator.geolocation) {
navigator.geolocation.getCurrentPosition(geoOK, geoKO);
} else {
geoMaxmind();
}
function geoOK(position) {
actual1(position.coords.latitude, position.coords.longitude);
showMap(-3.461917, -79.940543);

}
}
function geoMaxmind() {
showMap(geoip_latitude(), geoip_longitude());
}

function geoKO(err) {
if (err.code == 1) {
error('El usuario ha denegado el permiso para obtener informacion de ubicacion.');
} else if (err.code == 2) {
error('Tu ubicacion no se puede determinar.');
} else if (err.code == 3) {
error('TimeOut.')
} else {
error('No sabemos que pasó pero ocurrio un error.');
}
}
function actual1(lat, longi) {
actual = new google.maps.LatLng(lat,longi);
}
function showMap(lat, longi) {

myPos = new google.maps.LatLng(lat,longi);

var myOptions = {
zoom: 13,
center: myPos,
mapTypeId: google.maps.MapTypeId.ROADMAP,
}

map = new google.maps.Map(document.getElementById("mapa"), myOptions);

var marker = new google.maps.Marker({
position: myPos,
title:"BELLAMARÍA",
draggable:true,
animation: google.maps.Animation.DROP
});

marker.setMap(map);

directionsRenderer = new google.maps.DirectionsRenderer();
directionsRenderer.setMap(map);

}

function travelToAddress(){


//Obtenemos la direccion
//destino=document.ubu.address.value;
destino="Vía a Bella María, Santa Rosa";

//destino= "bella maria";
directionsService = new google.maps.DirectionsService();

// opciones de busqueda
var request = {
origin: actual,
destination: destino,
travelMode: google.maps.DirectionsTravelMode.DRIVING
};

directionsService.route(request,getRuta);
}

function getRuta(result, status){

if (status == google.maps.DirectionsStatus.OK) {
directionsRenderer.setDirections(result);
} else {
error("Ha ocurrido un error debido a : " + status);
}
}

function error(msg) {
alert(msg);
}
</script>

</head>
<body>
<div id="mapa" class="container" style="height: 450px; width: 1000px" ></div>
</body>
</html>

</section><!--/#contact-page-->

<?php include 'pie.php' ?>