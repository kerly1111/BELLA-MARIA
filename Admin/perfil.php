<?php include 'stilosFunciones.php' ?>
<?php include 'cabecera.php' ?>

<div class="panel panel-info col-lg-10 col-sm-10 ">
  	<div class="panel-body">
    <h3>BIENVENIDO</h3>
    <p class="lead"> Tu Perfil</p>


  	
<style>
	#tel{
	 margin-right:16px;	
	}
</style>

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
		$nomFoto=$cedula.".png";
        require("../clases/conexion.php");
        $con = conectar();
        $sql = "SELECT * FROM usuario where id_usuario='$cedula'";
        $stmt = $con->prepare($sql);
  
        $result = $stmt->execute();
        $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
        foreach($rows as $row){
          ?>
       <div class="row">

			  <div class="col-md-2"></div>
			  
			  <div class="col-md-2">
				<IMG SRC="../imagenes/fotosPerfil/<?php print $nomFoto?>" WIDTH=250 HEIGHT=350 BORDER=3>
			  	<br>
			  	<br>

			  	<div class="btn-group">

                    <button type="button" class="btn btn-danger btn-xs" onclick="Editar('<?php print($row->id_usuario); ?>','<?php print($row->use_usuario); ?>','<?php print($row->nom_usuario); ?>','<?php print($row->ape_usuario); ?>');">Actualizar</button>
      
                </div>
			  </div>
			  
			  <div class="col-md-2"></div>
			  
			  <div class="col-md-2">
 				
 				<div class="form-group"  ><br>
							  <label>Cedula</label>
							  <input name="cedula" disabled class="form-control" value="<?php print($row->id_usuario); ?>" required>
			  </div>
			  <div class="form-group"  ><br>
							  <label>Usuario</label>
							  <input name="cedula" disabled class="form-control" value="<?php print($row->use_usuario); ?>" required>
			   </div>
			   
			   <div class="form-group"  ><br>
							  <label>Nombre</label>
							  <input name="cedula" disabled class="form-control" value="<?php print($row->nom_usuario); ?>"required>
				</div>
				<div class="form-group"  ><br>
							  <label>Apellido</label>
							  <input name="cedula" disabled class="form-control" value="<?php print($row->ape_usuario); ?>" required>
				</div>

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
              <!--<button type="button" class="btn btn-info" onClick="subirFoto(); RegistrarUsuario(accion); return false">-->
              <button type="button" class="btn btn-info" onClick="RegistrarPerfil(idusuario,accion); return false">
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
 
