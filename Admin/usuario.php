<?php include 'stilosFunciones.php' ?>
<?php include 'cabecera.php' ?>


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
            <form role="form" action="" name="frmClientes">
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
                  <input name="nombre" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Apellido</label>
                  <input name="apellido" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Foto</label>
                  <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any">
                </div>

                
              </div>
              
            </form>
            <div class="modal-footer">
              <button type="button" class="btn btn-info" onClick="Registrar(idP,accion); return false">
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
    var idP;
    function Nuevo(){
      accion = 'N';
      document.frmClientes.cedula.value = "";
      document.frmClientes.usuario.value = "";
      document.frmClientes.clave.value = "";
      document.frmClientes. nombre.value = "";
      document.frmClientes. apellido.value = "";
      document.frmClientes. foto.value = "";
      document.frmClientes. ubicacion.value = "";
      $('#modal').modal('show');
    }
    function Editar(cedula, usuario, clave, nombre, apellido, foto, ubicacion){
      accion = 'E';
      idP = cedula;
      document.frmClientes.cedula.value = cedula;
      document.frmClientes.usuario.value = usuario;
      document.frmClientes.clave.value = clave;
      document.frmClientes.nombre.value = nombre;
      document.frmClientes.usuario.value = apellido;
      document.frmClientes.clave.value = foto;
      document.frmClientes.nombre.value = ubicacion;
      $('#modal').modal('show');

    }


    </script>


</div>
</div>

