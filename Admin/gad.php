<?php include 'stilosFunciones.php' ?>
<?php include 'cabecera.php';
if(isset($_SESSION["loginname"])){
?>

<div class="panel panel-info col-lg-10 col-sm-10 ">
<div class="panel-heading styleBellaMAria"><h4>MENSAJE DEL PRESIDENTE</h4></div>
<div class="panel-body">
      <br>
      <?php
          require("../clases/conexion.php");
          $con = conectar();
          $sql = "SELECT * FROM mensaje_presidente";
          $stmt = $con->prepare($sql);
    
          $result = $stmt->execute();
          $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
          foreach($rows as $row){
        ?>
      <form role="form" name="frmMensajePred" enctype="multipart/form-data">
        
        <div class="form-group upload">
        <label>Foto de Perfil</label>
        <input type="file" id="image" name="image" accept="image/x-png, image/jpeg" class="from-control"  required>
        <label style="color: #a6a6a6;">Tamaño máximo para imagenes: 2Mb</label><br>
        <div id="controlTam" style="display: none;"></div>
        <input type="hidden" name="nomIMG"  id="nomIMG" />
        <img  id="foto" name="foto" class="fotoPerfil" src="../imagenes/mensajePred.png" />
        </div>

        <div class="form-group">
        <label>Mensjae: </label>
        <textarea name="mensaje" id="mensaje" required="required" class="form-control" rows="12" placeholder="Mensaje"><?php print($row->men_mensaje_presidente); ?></textarea>
        </div>

        <div class="form-group">
        <label>Frase: </label>
        <input name="frase" id="frase" type="text" class="form-control" required="required" placeholder="Frase" value="<?php print($row->fra_mensaje_presidente); ?>">
        </div>
        <div class="form-group">
        <label>Nombre del Presidente: </label>
        <input name="nombrePresidente" id="nombrePresidente" type="text" class="form-control" required="required" placeholder="Nombre del Presidente" value="<?php print($row->nom_pre_mensaje_presidente); ?>">
        </div>
        <div class="form-group">
        <label>Cargo: </label>
        <input name="cargo" id="cargo" type="text" class="form-control" required="required" placeholder="Cargo" value="<?php print($row->pue_mensaje_presidente); ?>">
        </div>
        <br>
        <br>                                                
      </form>
      <?php
    } 
    ?>
</div>
    <div class="modal-footer">
      <button type="button" class="btn btn-info" onClick="cargar(); mensjaePresidente(); return false "> <span class="glyphicon glyphicon-save" aria-hidden="true"></span> Grabar</button>
      <a href="index.php"><button type="button" class="btn btn-danger" ><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Cancel</button></a>
    </div>
      <br>
      <br> 
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    var img = document.getElementById('foto');
    var input = document.getElementById('image'),
        formdata = false;
    function cargar(){
    if(formdata){
            $.ajax({
               url : 'subirFotoPresidenteMensaje.php?cod=0',
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
                        document.frmMensajePred.image.value = "";
                        document.frmMensajePred.foto.src = "";
                        document.frmMensajePred.foto.className =document.frmMensajePred.foto.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
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
</script>

 <?php
}
 ?>
