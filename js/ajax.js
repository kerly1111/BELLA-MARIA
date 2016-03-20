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


function RegistrarUsuario(accion){
cedula = document.frmUsuario.cedula.value;
usuario= document.frmUsuario.usuario.value;
clave= document.frmUsuario.clave.value;
nombre= document.frmUsuario.nombre.value;
apellido= document.frmUsuario.apellido.value;
nombreFoto= document.frmUsuario.cedula.value+".png";
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

function CambiarClave(idusu, accion){

cedula = idusu;
clave = document.frmClave.clave.value;
nueva= document.frmClave.nueva.value;
confirmar= document.frmClave.confirmar.value;

ajax = objetoAjax();
if(accion=='N'){
ajax.open("POST", "../clases/insertarUsuario.php", true);
}else if(accion=='E'){
ajax.open("POST", "../clases/actualizarClave.php", true);
}
ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			alert('Los datos fueron guardados con exito!');
      window.location.reload(true);
		}
		
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("cedula="+cedula+"&clave="+clave+"&nueva="+nueva+"&confirmar="+confirmar)
}



function RegistrarModulo(accion){
tipo = document.frmmodulos.tipo.value;
titulo = document.frmmodulos.titulo.value;
descripcion = document.frmmodulos.descripcion.value;
nombreFoto1= document.frmmodulos.nomIMG1.value;
nombreFoto2= document.frmmodulos.nomIMG2.value;
nombreFoto3= document.frmmodulos.nomIMG3.value;
nombreFoto4= document.frmmodulos.nomIMG4.value;
nombreFoto5= document.frmmodulos.nomIMG5.value;
rutaFoto= "../imagenes/modulos/";

ajax = objetoAjax();
if(accion=='N'){
ajax.open("POST", "../clases/insertarModulo.php", true);
}else if(accion=='E'){
ajax.open("POST", "clases/actualizar.php", true);
}
ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			alert('Los datos fueron guardados con exito!');
      window.location.reload(true);
		}
		
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("tipo="+tipo+"&titulo="+titulo+"&descripcion="+descripcion+"&rutaFoto="+rutaFoto+"&nombreFoto1="+nombreFoto1+"&nombreFoto2="+nombreFoto2+"&nombreFoto3="+nombreFoto3+"&nombreFoto4="+nombreFoto4+"&nombreFoto5="+nombreFoto5)
}

function Eliminar(idP){
if(confirm("En realizad desea eliminar este registro?"+idP)){
ajax = objetoAjax();
ajax.open("POST", "clases/eliminar.php", true);
ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			alert('El registro fue eliminado con exito!');
      window.location.reload(true);
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("idP="+idP)
alert('idP='+idP);
}else{
  //Sin acciones
}
}
