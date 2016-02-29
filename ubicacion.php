<html>
<head>
<title>Local</title>
<script src="http://j.maxmind.com/app/geoip.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" >

function getGeo(){

if (navigator && navigator.geolocation) {
navigator.geolocation.getCurrentPosition(geoOK, geoKO);
} else {
geoMaxmind();
}

}

function geoOK(position) {
showLatLong(position.coords.latitude, position.coords.longitude);
}
function geoMaxmind() {
showLatLong(geoip_latitude(), geoip_longitude());
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

function showLatLong(lat, longi) {
var geocoder = new google.maps.Geocoder();
var yourLocation = new google.maps.LatLng(lat, longi);
geocoder.geocode({ 'latLng': yourLocation },processGeocoder);

}
function processGeocoder(results, status){

if (status == google.maps.GeocoderStatus.OK) {
if (results[0]) {
document.forms[0].dir.value=results[0].formatted_address;
} else {
error('Google no retorno resultado alguno.');
}
} else {
error("Geocoding fallo debido a : " + status);
}
}
function error(msg) {
alert(msg);
}
</script>
</head>
<body>
<h1>Informaci&oacute;n de Geolocalizaci&oacute;n</h1>
<form>
<input type="button" onclick="getGeo()" value="Obtener Latitud y Longitud"/>
<input type="text" name="dir" width="150"/>
</form>
</body>
</html>