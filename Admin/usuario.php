<?php include 'stilosFunciones.php' ?>
<?php include 'cabecera.php' ?>

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
              <th>Clave</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Nombre Foto</th>
              <th>Ruta Foto</th>
              
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
                <td><?php print($row->cla_usuario); ?></td>
                <td><?php print($row->nom_usuario); ?></td>
                <td><?php print($row->ape_usuario); ?></td>
                <td><?php print($row->nom_fot_usuario); ?></td>
                <td><?php print($row->rut_fot_usuario); ?></td>
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
                  <input name="cedula" class="form-control" required>
                </div>

                 <div class="form-group"><br>
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

                <div class="form-group">
                  <label>Foto</label>
                  <!--<input id="foto" type="file" name="foto" onchange="buscarDatosFoto(this.value)">-->
                  <input id="foto" type="file" name="foto" onchange="buscarDatosFoto(this.value)">
                  <input type="hidden" id="resultadoFotoSubir"/>
                  <input type="hidden" name="nombreFoto"  id="nombreFoto">
                  <input type="hidden" name="rutaFoto"  id="rutaFoto">
                </div>

                
              </div>
            </form>
            <div class="modal-footer">
              <button type="button" class="btn btn-info" onClick="subirFoto();return false">
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
      document.frmUsuario.foto.value = "";
      document.frmUsuario.nombreFoto.value = "";
      document.frmUsuario.rutaFoto.value = "";
      $('#modal').modal('show');
    }
    function Editar(cedu, usuario, clave, nombre, apellido,nombreFot,rutaFot){
      accion = 'E';
      document.frmUsuario.cedula.value = cedu;
      document.frmUsuario.usuario.value = usuario;
      document.frmUsuario.clave.value = clave;
      document.frmUsuario.nombre.value = nombre;
      document.frmUsuario.apellido.value= apellido;
      document.frmUsuario.nombreFoto.value = nombreFot;
      document.frmUsuario.rutaFoto.value = rutaFot;
      //document.frmClientes.foto.value = foto;
      $('#modal').modal('show');

    }
    function buscarDatosFoto(foto) 
    {
        foto = foto.split('\\');
        document.frmUsuario.nombreFoto.value=foto[foto.length-1];
        document.frmUsuario.rutaFoto.value=document.frmUsuario.foto.value; 
  }
             
  /*      var textoBusqueda = $("input#foto").val();

        if (textoBusqueda != "") {

            $.post("subirfotoPerfil.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
              $("#resultadoFotoSubir").html(mensaje);
              DatosFotoSubir("#resultadoFotoSubir");
            }); 
        } else { 
            $("#resultadoFotoSubir").html("");
      };
    }

    function DatosFotoSubir(valor) 
    {
        document.frmUsuario.nombreFoto.value = valor.id;
        document.frmUsuario.rutaFoto.value = valor.value;
        $("#resultadoFotoSubir").html("");
        alert(document.frmUsuario.nombreFoto.value);
        alert(document.frmUsuario.rutaFoto.value);
        
    }*/


    </script>


</div>
</div>

