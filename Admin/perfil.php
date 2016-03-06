<?php include 'stilosFunciones.php' ?>
<?php include 'cabecera.php' ?>

<div class="panel panel-info col-lg-10 col-sm-10 ">
  	<div class="panel-body">
<style>
	#tel{
	 margin-right:16px;	
	}
</style>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro de Proveedore</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <script type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
     <div class="container">
      <div class="starter-template">
        <p class="lead"> Tu Perfil</p>
        <button type="button" onclick="Nuevo();" class="btn btn-primary btn-lg" >
          <span class="glyphicon glyphicon-user"></span> Nuevo
        </button>
      </div>
<div class="panel panel-info">
        <div class="panel-heading">Lista de Proveedores</div>
        <div class="panel-body">
        <table class="table">
          <thead>
            <tr>
              <th>#Cedula</th>
              <th>Usuario</th>
              <th>Nombres</th>
              <th>Apellidos</th>             
            </tr>
          </thead>
          <tbody>

            <?php
            $cedula=$_SESSION["logeo"];
            require("../clases/conexion.php");
            $con = conectar();
            //$sql = "SELECT id_usuario, use_usuario, cla_usuario, nom_usuario, ape_usuario, nom_fot_usuario, rut_fot_usuario FROM usuario";
            $sql = "SELECT * FROM usuario where id_usuario='$cedula'";
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
                <td>
                  <div class="btn-group">

                    <button type="button" class="btn btn-danger btn-xs" onclick="Editar('<?php print($row->id_usuario); ?>','<?php print($row->use_usuario); ?>','<?php print($row->nom_usuario); ?>','<?php print($row->ape_usuario); ?>');">Actualizar</button>

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
              <!--<button type="button" class="btn btn-info" onClick="subirFoto(); RegistrarUsuario(accion); return false">-->
              <button type="button" class="btn btn-info" onClick="RegistrarPerfil(idusuario,accion); return false">
                  <span class="glyphicon glyphicon-save" aria-hidden="true"></span> Grabar
              </button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Cancel</button>
            </div>
          </div>
        </div>
      </div>

    </div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
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
    function Editar(cedu, usuario,nombre, apellido ){
      accion = 'E';
      idusuario = cedu;
      document.frmPerfil.cedula.value = cedu;
      document.frmPerfil.usuario.value = usuario;
      document.frmPerfil.nombre.value = nombre;
      document.frmPerfil.apellido.value= apellido;
      $('#modal').modal('show');

    }
    </script>
  </body>

  </div>
 
  </div>
 
