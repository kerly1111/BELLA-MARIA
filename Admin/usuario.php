<?php include 'stilosFunciones.php' ?>
<?php include 'cabecera.php' ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="../js/upload.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

<div class="panel panel-info col-lg-10 col-sm-10 ">
  <div class="panel-body">


      <div class="starter-template">
        <button type="button" onclick="Nuevo();" class="btn btn-success btn-lg" >
          <span class="glyphicon glyphicon-user"></span> Nuevo
        </button>
      </div>
<div class="panel panel-info">
        <div class="panel-heading">Lista de Usuarios</div>
        <div class="panel-body">
        <table class="table">
          <thead>
            <tr>
              <th>Cedula</th>
              <th>Usuario</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Contraseña</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
            require("../clases/conexion.php");
            $con = conectar();
            $sql = "SELECT id_usuario, use_usuario, cla_usuario, nom_usuario, ape_usuario, nom_fot_usuario, rut_fot_usuario FROM usuario";
            $stmt = $con->prepare($sql);
      
            $result = $stmt->execute();
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
            foreach($rows as $row){
              ?>
              <tr>
                <td><?php print($row->id_usuario); ?></td>
                <td><?php print($row->use_usuario); ?></td>
                <td><?php print($row->nom_usuario); ?></td>
                <td><?php print($row->ape_usuario); ?></td>
                <td><?php print($row->cla_usuario); ?></td>
                <td>
                  <div class="btn-group">

                    <button type="button" class="btn btn-danger btn-xs" onclick="Editar('<?php print($row->id_usuario); ?>','<?php print($row->use_usuario); ?>','<?php print($row->cla_usuario); ?>','<?php print($row->nom_usuario); ?>','<?php print($row->ape_usuario); ?>','<?php print($row->nom_fot_usuario); ?>','<?php print($row->rut_fot_usuario); ?>');">Actualizar</button>

                    <button type="button" class="btn btn-danger btn-xs" onclick="Eliminar('<?php print($row->id_usuario); ?>');">Eliminar</button>
          
                  </div>
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
      </div>

      <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <div class="modal-title" >Usuario</div>
            </div>
            <form role="form" name="frmUsuario" enctype="multipart/form-data">
              <div class="col-lg-12">
                
                <div class="form-group"><br>
                  <label>Cedula</label>
                  <input name="cedula" id="cedula" class="form-control" required>
                </div>

                 <div class="form-group">
                  <label>Usuario</label>
                  <input name="usuario" class="form-control" required>
                </div>

                <div class="form-group" >
                  <label>Clave</label>
                  <input type="password" name="clave" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Nombre</label>
                  <input name="nombre" id="nombre" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Apellido</label>
                  <input name="apellido" class="form-control"  required >
                </div>

                <div class="form-group upload">
                    <label>Foto</label>
                    <input  type="file" id="images" name="images[]" accept="image/x-png, image/jpeg" class="from-control" onchange="nomFoto();" required>
                    <div id="response"></div>
                    <input type="hidden" name="nomIMG"  id="nomIMG" />
                    <img  id="foto" name="foto" class="" />
                </div>
              </div>
            </form>
            <div class="modal-footer">
              <!--<button type="button" class="btn btn-info" onClick="subirFoto(); RegistrarUsuario(accion); return false">-->
              <button type="button" class="btn btn-info" onClick="cargar(); RegistrarUsuario(accion); return false">
                  <span class="glyphicon glyphicon-save" aria-hidden="true"></span> Grabar
              </button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Cancel</button>
            </div>
          </div>
        </div>
      </div>

    </div>
    
<script type="text/javascript">
    var accion;
    function Nuevo(){
      accion = 'N';
      document.frmUsuario.cedula.value = "";
      document.frmUsuario.usuario.value = "";
      document.frmUsuario.clave.value = "";
      document.frmUsuario.nombre.value = "";
      document.frmUsuario.apellido.value = "";
      document.frmUsuario.images.value = "";
      document.frmUsuario.foto.src = "";
      document.frmUsuario.foto.className =document.frmUsuario.foto.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
      $('#modal').modal('show');

    }
    function Editar(cedu, usuario, clave, nombre, apellido,nombreFot,rutaFot){
      accion = 'E';
      document.frmUsuario.cedula.value = cedu;
      document.frmUsuario.usuario.value = usuario;
      document.frmUsuario.clave.value = clave;
      document.frmUsuario.nombre.value = nombre;
      document.frmUsuario.apellido.value= apellido;
      $('#modal').modal('show');

    }
 
    function nomFoto(){
    var foto=document.frmUsuario.images.value;
    foto = foto.split('\\');
    var nom=foto[foto.length-1];
    document.frmUsuario.nomIMG.value=nom;
    }
             
    </script>


</div>
</div>


<script type="text/javascript">
    var img = document.getElementById('foto');
    var input = document.getElementById('images'),
        formdata = false;
        function cargar(){
        
        if(formdata){
          var ced = document.getElementById('cedula').value;
                $.ajax({
                   url : 'subirfotoPerfil.php?cod='+ced,
                   type : 'POST',
                   data : formdata,
                   processData : false, 
                   contentType : false,
                   success : function(res){
                       document.getElementById('response').innerHTML = res;
                   }                 
                });
            }

    } 
    (function(){
    
    function mostrarImagenSubida(source){
        
        img.className = "fotoPerfil";
        img.src = source;

    }   
    
    //Revisamos si el navegador soporta el objeto FormData
    if(window.FormData){
        formdata = new FormData();    
    }   
    //Aplicamos la subida de imágenes al evento change del input file
    if(input.addEventListener){
        input.addEventListener('change', function(evt){
            var i = 0, len = this.files.length, img, reader, file;
                file = this.files[i];               
                //Una pequeña validación para subir imágenes
                if(!!file.type.match(/image.*/)){
                    //Si el navegador soporta el objeto FileReader
                    if(window.FileReader){
                        reader = new FileReader();
                        //Llamamos a este evento cuando la lectura del archivo es completa
                        //Después agregamos la imagen en una lista
                        reader.onloadend = function(e){
                            mostrarImagenSubida(e.target.result);
                        };
                        //Comienza a leer el archivo
                        //Cuando termina el evento onloadend es llamado
                        reader.readAsDataURL(file);
                    }                   
                    //Si existe una instancia de FormData
                    if(formdata)
                        //Usamos el método append, cuyos parámetros son:
                            //name : El nombre del campo
                            //value: El valor del campo (puede ser de tipo Blob, File e incluso string)
                        formdata.append('images[]', file);
                }       
            //Por último hacemos uso del método proporcionado por jQuery para hacer la petición ajax
            //Como datos a enviar, el objeto FormData que contiene la información de las imágenes
            
        }, false);
    }
}());
</script>
