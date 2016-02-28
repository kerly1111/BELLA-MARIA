<?php include 'stilosFunciones.php' ?>
<?php include 'cabecera.php' ?>

<script type="text/javascript" src="../js/ajax.js"></script>

<div class="panel panel-info col-lg-10 col-sm-10 ">
  <div class="panel-body">


      <div class="starter-template">
        <button type="button" onclick="Nuevo();" class="btn btn-primary btn-lg" >
          <span class="glyphicon glyphicon-user"></span> Nuevo
        </button>
      </div>
<div class="panel panel-info">
        <div class="panel-heading">Lista de Noticias</div>
        <div class="panel-body">
        <table class="table">
          <thead>
            <tr>
              <th>Id Modulo</th>
              <th>Tipo Modulo</th>
              <th>Titulo</th>
              <th>Descripcion</th>                          
            </tr>
          </thead>
          <tbody>
            <?php
            require("../clases/conexion.php");
            $con = conectar();
            $sql = "SELECT id_modulo, tip_modulo, tit_modulo, des_modulo FROM modulo";
            $stmt = $con->prepare($sql);
      
            $result = $stmt->execute();
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
            foreach($rows as $row){
              ?>
              <tr>
                <td><?php print($row->id_modulo); ?></td>
                <td><?php print($row->tip_modulo); ?></td>
                <td><?php print($row->tit_modulo); ?></td>
                <td><?php print($row->des_modulo); ?></td>
                
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-danger btn-xs">Seleccione</button>
                    <button type="button" class="btn btn-danger btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a onclick="Eliminar('<?php print($row->id_modulo); ?>');">Eliminar</a></li>
                      <li><a onclick="Editar('<?php print($row->id_modulo); ?>','<?php print($row->tip_modulo); ?>','<?php print($row->tit_modulo); ?>','<?php print($row->des_modulo); ?>');">Actualizar</a></li>
                    </ul>
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
                  <label>Nombres</label>
                  <input name="nombre" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>ocupacion</label>
                  <input name="ocupacion" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Teléfono</label>
                  <input name="telefono" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Sitio Web</label>
                  <input name="sitioweb" class="form-control" required>
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
      document.frmClientes.nombre.value = "";
      document.frmClientes.ocupacion.value = "";
      document.frmClientes.telefono.value = "";
      document.frmClientes.sitioweb.value = "";
      $('#modal').modal('show');
    }
    function Editar(id, nombre, ocupacion, telefono, sitioweb){
      accion = 'E';
      idP = id;
      document.frmClientes.nombre.value = nombre;
      document.frmClientes.ocupacion.value = ocupacion;
      document.frmClientes.telefono.value = telefono;
      document.frmClientes.sitioweb.value = sitioweb;
      $('#modal').modal('show');

    }
    

    </script>


</div>
</div>

