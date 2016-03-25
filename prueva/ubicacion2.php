<?php include 'cabecera.php' ?>
<section id="contact-page">
<html>
<head>
<title>Local</title>
<script src="http://j.maxmind.com/app/geoip.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript" >

var map;
var myPos;
var directionsRenderer;
var directionsService = new google.maps.DirectionsService();

if (navigator && navigator.geolocation) {
navigator.geolocation.getCurrentPosition(geoOK, geoKO);
} else {
geoMaxmind();
}
function geoOK(position) {
showMap(position.coords.latitude, position.coords.longitude);
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
title:"Hola Mundo",
draggable:true,
animation: google.maps.Animation.DROP
});

marker.setMap(map);

directionsRenderer = new google.maps.DirectionsRenderer();
directionsRenderer.setMap(map);

}

function travelToAddress(){
mapa();

//Obtenemos la direccion
//destino=document.ubu.address.value;
destino="Santa Rosa bellamaria";
alert(destino);

//destino= "bella maria";
directionsService = new google.maps.DirectionsService();
// opciones de busqueda
var request = {
origin: myPos,
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
<h1>Mapa</h1>

<div id="mapa" style="height: 450px"></div>
</body>
</html>
<form name="ubu">
<input type="text" style="width: 450px" name="address" />
<input type="button" value="Obtener ruta a esta direccion" onclick="travelToAddress();"/>
</form>

</section><!--/#contact-page-->

<?php include 'pie.php' ?>