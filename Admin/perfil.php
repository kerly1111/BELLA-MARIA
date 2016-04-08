<?php include 'stilosFunciones.php' ?>
<?php include 'cabecera.php';
if(isset($_SESSION["loginname"])){
?>

<div class="panel panel-info col-lg-10 col-sm-10 ">
  	<div class="panel-body">
    <p class="lead"> Tu Perfil</p>  	
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet">
  <script type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
     	
        <?php
		$cedula=$_SESSION["logeo"];
		
        require("../clases/conexion.php");
        $con = conectar();
        $sql = "SELECT * FROM usuario where id_usuario='$cedula'";
        $stmt = $con->prepare($sql);
  
        $result = $stmt->execute();
        $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
        foreach($rows as $row){
          ?>
       
       <div class="row">

			  <div class="col-md-2"><br><br>
          <div >
            <button type="button" class="btn btn-success" onclick="Editar('<?php print($row->id_usuario); ?>','<?php print($row->use_usuario); ?>','<?php print($row->nom_usuario); ?>','<?php print($row->ape_usuario); ?>');">Actualizar datos</button>
            <button style=" margin-top: 8px;" type="button" class="btn btn-success" onclick="cambiarFoto('<?php print($row->nom_fot_usuario); ?>');">Cambiar Foto</button>
            <button style=" margin-top: 8px;" type="button" class="btn btn-success" onclick="EditarClave();">Cambiar Clave</button>
          </div>
        </div>
			  
			  <div class="col-md-2 col-md-offset-1">
				<IMG SRC="../imagenes/fotosPerfil/<?php print($row->nom_fot_usuario) ?>" WIDTH=250 HEIGHT=350 BORDER=3>
			  	<br>
			  	<br>
          
          
			  </div>
			  
			  <div class="col-md-2"></div>
			  <div class="col-md-2">

      <form role="form" name="frm" enctype="multipart/form-data">

			
 				<div class="form-group"  ><br>
							  <label>Cedula</label>
							  <input name="cedula" disabled class="form-control" value="<?php print($row->id_usuario); ?>" required>
			  </div>
			  <div class="form-group"  ><br>
							  <label>Usuario</label>
							  <input name="usuario" disabled class="form-control" value="<?php print($row->use_usuario); ?>" required>
			   </div>
			   
			   <div class="form-group"  ><br>
							  <label>Nombre</label>
							  <input name="nombre" disabled class="form-control" value="<?php print($row->nom_usuario); ?>"required>
				</div>
				<div class="form-group"  ><br>
							  <label>Apellido</label>
							  <input name="apellido" disabled class="form-control" value="<?php print($row->ape_usuario); ?>" required>
				</div>
                <input name="claveAdmin" type="hidden" value="<?php print($row->cla_usuario); ?>" required>
        </form>

			  </div>
			  
			  <div class="col-md-2"></div>
			  <div class="col-md-2"></div>
	   </div>
			          
        <?php
        }
        ?>  

      <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <div class="modal-title" >Datos de perfil</div>
            </div>
            <form role="form" name="frmPerfil" enctype="multipart/form-data">
              <div class="col-lg-12">
                
                <div class="form-group"  disabled><br>
                  <label>Cedula</label>
                  <input name="cedula" class="form-control" required>
                </div>

                 <div class="form-group"><br>
                  <label>Usuario</label>
                  <input name="usuario" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Nombre</label>
                  <input name="nombre" id="nombre" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Apellido</label>
                  <input name="apellido" class="form-control"  required >
                </div>
                
              </div>
            </form>

           <div class="modal-footer">
              <button type="button" class="btn btn-info" onClick="ActualizarPerfil(); return false">
                  <span class="glyphicon glyphicon-save" aria-hidden="true"></span> Grabar
    
              </button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Cancel</button>
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="modalClave" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <div class="modal-title" >Datos de la contraseña</div><br>
            </div>
           <form role="form" name="frmClave" enctype="multipart/form-data">
              <div class="col-lg-12">
                <br>
                <div class="form-group"  >
                  <label>Contraseña Anterior</label>
                  <input class="form-control" name="clave" placeholder="Contraseña" id="password" name="password" type="password"  required="required">
                  <div class="borrarMensaje" id="claveAnterior">La contraseña es errorea</div>
                </div>

                 <div class="form-group">
                  <label>Nueva Contraseña</label>
                  <input class="form-control" name="nueva" placeholder="Contraseña" id="password" name="password" type="password"  required="required">
                </div>

                <div class="form-group">
                  <label>Confirmar Contraseña</label>
                 <input class="form-control" name="confirmar" placeholder="Contraseña" id="password" name="password" type="password"  required="required">
                 <div class="borrarMensaje" id="clavesConiciden">Las contraseñas no coinciden</div>
                </div>

                               
                </div>
            </form>

           <div class="modal-footer">
              <button type="button" class="btn btn-info" onClick="if(comprobarClave()){CambiarClave(idusu); return false}">
              <span class="glyphicon glyphicon-save" aria-hidden="true"></span> Grabar
    
              </button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Cancel</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modalFoto" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <div class="modal-title" >Datos de la Foto</div><br>
            </div>
           <form role="form" name="frmFoto" enctype="multipart/form-data">
              <div class="col-lg-12">
                <br>
                <div class="form-group upload">
                    <label>Foto de Perfil</label>
                    <input type="file" id="image" name="image" accept="image/x-png, image/jpeg" class="from-control"  required>
                    <label style="color: #a6a6a6;">Tamaño máximo para imagenes: 2Mb</label><br>
                    <div id="controlTam" style="display: none;"></div>
                    <input type="hidden" name="nomIMG"  id="nomIMG" />
                    <img  id="foto" name="foto" class="" />
                    <button id="cancel" type="button" class="btn btn-danger btn-xs form-inline" onclick="quitarIMG(image,foto, this);" style="display: none;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true" ></span> Cancelar</button>
                </div>
                               
                </div>
            </form>

           <div class="modal-footer">
              <button type="button" class="btn btn-info" onClick="cargar(); CambiarFoto(idusu); return false ">
              <span class="glyphicon glyphicon-save" aria-hidden="true"></span> Grabar
    
              </button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Cancel</button>
            </div>
          </div>
        </div>
      </div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    var idusu;
    function Editar(cedu, usuario,nombre, apellido ){
      document.frmPerfil.cedula.value = cedu;
      document.frmPerfil.cedula.disabled=true;
      document.frmPerfil.usuario.value = usuario;
      document.frmPerfil.nombre.value = nombre;
      document.frmPerfil.apellido.value= apellido;
      $('#modal').modal('show');

    }

    function EditarClave( ){
      idusu=document.frm.cedula.value;
      document.frmClave.clave.value = "";
      document.frmClave.nueva.value = "";
      document.frmClave.confirmar.value = "";
      $('#modalClave').modal('show');
      
    }

    function cambiarFoto(foto){
      idusu=document.frm.cedula.value;;
      document.frmFoto.foto.src = "../imagenes/fotosPerfil/"+foto;
      document.frmFoto.foto.className ="fotoPerfil";
      document.getElementById("cancel").style="display:inline";
      $('#modalFoto').modal('show');
    }

    function quitarIMG(imagenes, foto, boton){
      foto.src = "";
      foto.className =document.frmFoto.foto.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
      boton.style="display:none";
      imagenes.value="";
      foto.value="0";
    }

    var img = document.getElementById('foto');
    var input = document.getElementById('image'),
        formdata = false;
    
    function cargar(){
    document.frmFoto.nomIMG.value=document.frmFoto.foto.value; 
    if(formdata){
            $.ajax({
               url : 'subirfotoPerfil.php?cod='+idusu,
               type : 'POST',
               data : formdata,
               processData : false, 
               contentType : false,
               success : function(res){
               }                 
            });
        }
    } 

    (function(){
    function mostrarImagenSubida(source, num){
        img.value="1";
        img.className = "fotoPerfil";
        img.src = source;
        document.getElementById("cancel").style="display:inline";
    }       
    if(window.FormData){
        formdata = new FormData();
    }   
    if(input.addEventListener){
        input.addEventListener('change', function(evt){
            var i = 0, len = this.files.length, img, reader, file;
                file = this.files[i];                               
                if(!!file.type.match(/image.*/)){
                    if(window.FileReader){
                        reader = new FileReader();
                        reader.onloadend = function(e){
                            mostrarImagenSubida(e.target.result,0);
                        };
                    }                   
                    if(formdata)
                        formdata.append('image', file);
                }       
            if(formdata){
                $.ajax({
                   url : 'subirfotoPerfil.php?cod=contolSize',
                   type : 'POST',
                   data : formdata,
                   processData : false, 
                   contentType : false,
                   success : function(res){ //res resultado del echo del archivo php
                      document.getElementById('controlTam').innerHTML = res;
                      if(document.getElementById('controlTam').innerHTML == "0"){
                        document.frmFoto.image.value = "";
                        document.frmFoto.foto.src = "";
                        document.frmFoto.foto.className =document.frmFoto.foto.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
                        document.getElementById("cancel").style="display:none";
                        alert("EL tamaño de la imagen se excede del limete de 2MB");
                      }else{
                        
                        reader.readAsDataURL(file);//carga imagen al div para mostrar
                      }
                   }                 
                });
            }
        }, false);
    }
}());

    function comprobarClave(){
      if(document.frmClave.nueva.value!="" && document.frmClave.confirmar.value!=""){
      clave=document.frm.claveAdmin.value;
      if(clave==document.frmClave.clave.value){
        document.getElementById('claveAnterior').className="borrarMensaje";
        if(document.frmClave.nueva.value==document.frmClave.confirmar.value ){
          document.getElementById('clavesConiciden').className="borrarMensaje";
          return true;
        }else{
         document.getElementById('clavesConiciden').className=document.getElementById('clavesConiciden').className.replace( /(?:^|\s)borrarMensaje(?!\S)/g , '' );;
        }
      }else{
        document.getElementById('claveAnterior').className=document.getElementById('claveAnterior').className.replace( /(?:^|\s)borrarMensaje(?!\S)/g , '' );;
      }
    }else{
      alert('Todos los campos son obligatorios');
    }
  }

  </script>
  </body>

 
  </div>
 <?php
}
 ?>