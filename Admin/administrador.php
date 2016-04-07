<?php include 'stilosFunciones.php' ?>
<?php include 'cabecera.php';
if(isset($_SESSION["loginname"])){
?>

    <div class="panel panel-info col-lg-10 col-sm-10 ">
    <div class="panel-body">
    <h3>BIENVENIDO</h3>
    
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
      
       <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2 col-md-offset-1">
        <IMG SRC="../imagenes/fotosPerfil/perfilDefault.png" WIDTH=250 HEIGHT=350 BORDER=3>
          <br><br>
        </div>
        <div class="col-md-2"></div>
      <div class="col-md-2">
      <form role="form" name="frm" enctype="multipart/form-data">
        <div class="form-group"  ><br>
              <label>Usuario</label>
              <input name="usuario" disabled class="form-control" value="<?php print($_SESSION["loginname"]); ?>" required>
              <input name="id" type="hidden" value="<?php print($_SESSION["logeo"]); ?>" required>
         </div>
         <div class="form-group"  ><br>
              <button type="button" class="btn btn-success" onclick="EditarClave();">Cambiar Clave</button>
         </div>
      </form>
        </div>
        
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
     </div>


      <div class="modal fade" id="modalClave" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <div class="modal-title" >Datos de perfil</div>
            </div>
           <form role="form" name="frmClave" enctype="multipart/form-data">
              <div class="col-lg-12">
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
                <input name="claveAdmin" type="hidden" value="<?php print($row->cla_usuario); ?>" required>
              <?php
              }
              ?>
                <div class="form-group"  ><br>
                  <label>Clave Anterior</label>
                  <input class="form-control" name="clave" placeholder="Contraseña" id="password" name="password" type="password"  required="required">
                  <div class="borrarMensaje" id="claveAnterior">La contraseña es errorea</div>
                </div>

                 <div class="form-group"><br>
                  <label>Nueva Clave</label>
                  <input class="form-control" name="nueva" placeholder="Contraseña" id="password" name="password" type="password"  required="required">
                </div>

                <div class="form-group"><br>
                  <label>Confirmar Clave</label>
                 <input class="form-control" name="confirmar" placeholder="Contraseña" id="password" name="password" type="password"  required="required">
                 <div class="borrarMensaje" id="clavesConiciden">Las contraseñas no coinciden</div>
                </div>  

                </div>
            </form>

           <div class="modal-footer">
              <!--<button type="button" class="btn btn-info" onClick="subirFoto(); RegistrarUsuario(accion); return false">-->
              <button type="button" class="btn btn-info" onClick="if(comprobarClave()){CambiarClave(idusu, accion); return false}">
              <span class="glyphicon glyphicon-save" aria-hidden="true"></span> Grabar</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Cancel</button>
            </div>
          </div>
        </div>
      </div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
     var accion;
     var idusu;

    function EditarClave( ){
      accion = 'E';
      idusu=document.frm.id.value;
      document.frmClave.clave.value = "";
      document.frmClave.nueva.value = "";
      document.frmClave.confirmar.value = "";
      $('#modalClave').modal('show');
      
    }

    function comprobarClave(){
      if(document.frmClave.nueva.value!="" && document.frmClave.confirmar.value!=""){
      clave=document.frmClave.claveAdmin.value;
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
  </div>
<?php
}
?>