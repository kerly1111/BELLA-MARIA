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
function RegistrarModulo(idP, accion){
codigo = document.frmmodulos.codigo.value;
tipo = document.frmmodulos.tipo.value;
titulo = document.frmmodulos.titulo.value;
descripcon = document.frmmodulos.descripcion.value;
ajax = objetoAjax();
if(accion=='N'){
ajax.open("POST", "../clases/insertar.php", true);
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
ajax.send("codigo="+codigo+"&tipo="+tipo+"&titulo="+titulo+"&descripcion="+descripcion+"&idP="+idP)
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
