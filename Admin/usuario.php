<?php include 'stilosFunciones.php' ?>
<?php include 'cabecera.php'; 
   if(isset($_SESSION["loginname"])){
?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="../js/upload.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

<div class="panel panel-info col-lg-10 col-sm-10 ">
  <div class="panel-body">


      <br>
      <div class="form-inline starter-template">
        <div class="input-group">
          <input id="buscarInput" type="text" class="form-control" placeholder="Buscar" aria-describedby="basic-addon2" onKeyUp="buscar();">
          <span class="glyphicon glyphicon-search input-group-addon" id="basic-addon2"></span>
        </div> &nbsp;
        <!--<button class="btn btn-success" type="button" ><i class="icon-search"></i></button>-->
        <button type="button" onclick="Nuevo();" class="btn btn-success" >
          <span class="glyphicon glyphicon-user"></span> Nuevo
        </button>
      </div>
      <br>
<div class="panel panel-info">
        <div class="panel-heading">Lista de Usuarios</div>
        <div class="panel-body">
        <table class="table">
          <thead>
            <tr>
              <th></th>
              <th>Cedula</th>
              <th>Usuario</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Contraseña</th>
              
            </tr>
          </thead>
          <tbody id="modulosTabla">
            <?php
            require("../clases/conexion.php");
            $con = conectar();
            $sql = "SELECT id_usuario, use_usuario, cla_usuario, nom_usuario, ape_usuario, nom_fot_usuario, rut_fot_usuario FROM usuario WHERE use_usuario != 'ADMINISTRADOR'";
            $stmt = $con->prepare($sql);
      
            $result = $stmt->execute();
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
            foreach($rows as $row){
              ?>
              <tr>
                <td><IMG SRC="../imagenes/fotosPerfil/<?php print($row->nom_fot_usuario); ?>" WIDTH=80 HEIGHT=80 BORDER=3/></td>
                <td><?php print($row->id_usuario); ?></td>
                <td><?php print($row->use_usuario); ?></td>
                <td><?php print($row->nom_usuario); ?></td>
                <td><?php print($row->ape_usuario); ?></td>
                <td><?php print($row->cla_usuario); ?></td>
                <td>
                  <div>

                    <button type="button" class="btn btn-success btn-xs" onclick="Editar('<?php print($row->id_usuario); ?>','<?php print($row->use_usuario); ?>','<?php print($row->cla_usuario); ?>','<?php print($row->nom_usuario); ?>','<?php print($row->ape_usuario); ?>');"> <span class='glyphicon glyphicon-edit' aria-hidden='true'></span> Actualizar</button>

                    <button type="button" class="btn btn-success btn-xs" onclick="EliminarUsuario('<?php print($row->id_usuario); ?>');"> <span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span> Eliminar</button>
          
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

              </div>
            </form>
            <div class="modal-footer">
              <!--<button type="button" class="btn btn-info" onClick="subirFoto(); RegistrarUsuario(accion); return false">-->
              <button type="button" class="btn btn-info" onClick="RegistrarUsuario(accion); return false">
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
    function buscar(){
      var textoBusqueda = document.getElementById("buscarInput").value;

            $.post("buscarUsuario.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
              $("#modulosTabla").html("");
              $("#modulosTabla").html(mensaje);
            }); 
    }
    function Nuevo(){
      accion = 'N';
      document.frmUsuario.cedula.value = "";
      document.frmUsuario.usuario.value = "";
      document.frmUsuario.clave.value = "";
      document.frmUsuario.nombre.value = "";
      document.frmUsuario.apellido.value = "";
      $('#modal').modal('show');

    }
    function Editar(cedu, usuario, clave, nombre, apellido){
      accion = 'E';
      document.frmUsuario.cedula.value = cedu;
      document.frmUsuario.usuario.value = usuario;
      document.frmUsuario.clave.value = clave;
      document.frmUsuario.nombre.value = nombre;
      document.frmUsuario.apellido.value= apellido;
      $('#modal').modal('show');
    }             
    </script>

</div>
</div>

<?php 
}
?>