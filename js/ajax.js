function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
		}
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function RegistrarContactos(){
nombre= document.frmContacto.nombre.value;
apellido= document.frmContacto.apellido.value;
email= document.frmContacto.email.value;
mensaje= document.frmContacto.mensaje.value;

var mydate=new Date() 
        var year=mydate.getYear() 
        if (year < 1000) 
        year+=1900 
        var day=mydate.getDay() 
        var month=mydate.getMonth() 
        var daym=mydate.getDate() 
        if (daym<10) 
        daym="0"+daym 
        var dayarray=new Array("Domingo,","Lunes,","Martes,","Miércoles,","Jueves,","Viernes,","Sábado,")
        var montharray=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre")
fecha=dayarray[day]+" "+daym+" del "+montharray[month]+" de "+year;

ajax = objetoAjax();

ajax.open("POST", "clases/insertarContacto.php", true);

ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			alert('Mensaje enviado exitosamente!');
      window.location.reload(true);
		}
		
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("nombre="+nombre+"&apellido="+apellido+"&email="+email+"&mensaje="+mensaje+"&fecha="+fecha)

}

function mensjaePresidente(){
mensaje = document.frmMensajePred.mensaje.value;
frase = document.frmMensajePred.frase.value;
nombrePresidente = document.frmMensajePred.nombrePresidente.value;
cargo = document.frmMensajePred.cargo.value;

nombreFoto= "mensajePred.png";	
rutaFoto= "../imagenes/";

ajax = objetoAjax();
ajax.open("POST", "../clases/insertarMensajePresidente.php", true);
ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			alert('Los datos fueron guardados con exito!');
      window.location.reload(true);
		}
		
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("mensaje="+mensaje+"&frase="+frase+"&nombrePresidente="+nombrePresidente+"&cargo="+cargo+"&nombreFoto="+nombreFoto+"&rutaFoto="+rutaFoto)
}

function RegistrarUsuario(accion){
cedula = document.frmUsuario.cedula.value;
usuario= document.frmUsuario.usuario.value;
clave= document.frmUsuario.clave.value;
nombre= document.frmUsuario.nombre.value;
apellido= document.frmUsuario.apellido.value;
nombreFoto= "perfilDefault.png";	
rutaFoto= "../imagenes/fotosPerfil/";

ajax = objetoAjax();
if(accion=='N'){
ajax.open("POST", "../clases/insertarUsuario.php", true);
}else if(accion=='E'){
ajax.open("POST", "../clases/actualizarUsuario.php", true);
}
ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			alert('Los datos fueron guardados con exito!');
      window.location.reload(true);
		}
		
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("id_usuario="+cedula+"&use_usuario="+usuario+"&cla_usuario="+clave+"&nom_usuario="+nombre+"&ape_usuario="+apellido+"&nom_fot_usuario="+nombreFoto+"&rut_fot_usuario="+rutaFoto)
}

function ActualizarPerfil(){
cedula = document.frmPerfil.cedula.value;
usuario= document.frmPerfil.usuario.value;
nombre= document.frmPerfil.nombre.value;
apellido= document.frmPerfil.apellido.value;
ajax = objetoAjax();
ajax.open("POST", "../clases/actualizarPerfil.php", true);
ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			alert('Los datos fueron guardados con exito!');
      window.location.reload(true);
		}
		
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("id_usuario="+cedula+"&use_usuario="+usuario+"&nom_usuario="+nombre+"&ape_usuario="+apellido)
}


function CambiarClave(idusu){

cedula = idusu;
clave = document.frmClave.clave.value;
nueva= document.frmClave.nueva.value;
confirmar= document.frmClave.confirmar.value;

ajax = objetoAjax();
ajax.open("POST", "../clases/actualizarClave.php", true);
ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			alert('Contraseña guardada con exito!');
      window.location.reload(true);
		}
		
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("cedula="+cedula+"&clave="+clave+"&nueva="+nueva+"&confirmar="+confirmar)
}

function CambiarFoto(idUsu){
nombreFoto= document.frmFoto.nomIMG.value;
ajax = objetoAjax();
ajax.open("POST", "../clases/fotoPerfil.php", true);
ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			alert('Foto guardada con exito!');
      window.location.reload(true);
		}		
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("cedula="+idUsu+"&nombreFoto="+nombreFoto)
}




function RegistrarModulo(accion, idModulo){
tipo = document.frmmodulos.tipo.value;
titulo = document.frmmodulos.titulo.value;
descripcion = document.frmmodulos.descripcion.value;
nombreFoto1= document.frmmodulos.nomIMG1.value;
nombreFoto2= document.frmmodulos.nomIMG2.value;
nombreFoto3= document.frmmodulos.nomIMG3.value;
nombreFoto4= document.frmmodulos.nomIMG4.value;
nombreFoto5= document.frmmodulos.nomIMG5.value;
rutaFoto= "../imagenes/modulos/";

var mydate=new Date() 
        var year=mydate.getYear() 
        if (year < 1000) 
        year+=1900 
        var day=mydate.getDay() 
        var month=mydate.getMonth() 
        var daym=mydate.getDate() 
        if (daym<10) 
        daym="0"+daym 
        var dayarray=new Array("Domingo,","Lunes,","Martes,","Miércoles,","Jueves,","Viernes,","Sábado,")
        var montharray=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre")
fecha=dayarray[day]+" "+daym+" del "+montharray[month]+" de "+year; 

ajax = objetoAjax();
if(accion=='N'){
ajax.open("POST", "../clases/insertarModulo.php", true);
}else if(accion=='E'){
ajax.open("POST", "../clases/actualizarModulo.php", true);
}
ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			alert('Los datos fueron guardados con exito!');
      window.location.reload(true);
		}
		
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("id_modulo="+idModulo+"&fec_modulo="+fecha+"&tipo="+tipo+"&titulo="+titulo+"&descripcion="+descripcion+"&rutaFoto="+rutaFoto+"&nombreFoto1="+nombreFoto1+"&nombreFoto2="+nombreFoto2+"&nombreFoto3="+nombreFoto3+"&nombreFoto4="+nombreFoto4+"&nombreFoto5="+nombreFoto5)
}

function EliminarModulo(idP){
if(confirm("En realidad desea eliminar este registro?")){
ajax = objetoAjax();
ajax.open("POST", "../clases/eliminarModulo.php", true);
ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			alert('El registro fue eliminado con exito!');
      window.location.reload(true);
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("id_modulo="+idP)
}else{
  //Sin acciones
}
}

function EliminarUsuario(idP){
if(confirm("En realidad desea eliminar este registro?")){
ajax = objetoAjax();
ajax.open("POST", "../clases/eliminarUsuario.php", true);
ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			alert('El registro fue eliminado con exito!');
      window.location.reload(true);
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("id_usuario="+idP)
}else{
  //Sin acciones
}
}
