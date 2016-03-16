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

                    <button type="button" class="btn btn-danger btn-xs" onclick="Editar('<?php print($row->id_modulo); ?>','<?php print($row->tip_modulo); ?>','<?php print($row->tit_modulo); ?>','<?php print($row->des_modulo); ?>');">Actualizar</button>

                    <button type="button" class="btn btn-danger btn-xs" onclick="Eliminar('<?php print($row->id_modulo); ?>');">Eliminar</button>
          
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
              <div class="modal-title" >MODULO</div>
            </div>
            <form role="form" name="frmmodulos">
              <div class="col-lg-12">
                
                <div class="form-group"><br>
                  <label>Titulo</label>
                  <input name="titulo" class="form-control"  required>
                </div>

                <div class="form-group">
                  <label>Tipo</label>
                  <SELECT NAME="tipo" class="form-control"> 
                  <OPTION VALUE="NOTICIA">NOTICIA</OPTION>
                  <OPTION VALUE="CONVOCATORIA">CONVOCATORIA</OPTION>
                  <OPTION VALUE="TURISMO">TURISMO</OPTION>
                  <OPTION VALUE="PRODUCCION">PRODUCCION</OPTION>
                  <OPTION VALUE="EVENTOS">EVENTOS</OPTION>
                  </SELECT>
                </div>

                <div class="form-group">
                  <label>Descripción</label>                
                  <textarea name="descripcion" class="form-control" maxlength="1000" rows="10" onkeyup="caracteresDescripcion();"></textarea>
                  <label style="color: #a6a6a6;">Maximo de caracteres :  </label> <label id="numCaracteres" style="color: #a6a6a6;">1000</label>
                </div>

                <div class="form-group upload">
                    <label>Foto Principal</label>
                    <input  type="file" id="images" name="images" accept="image/x-png, image/jpeg" class="from-control" onchange="nomFoto();" required>
                    <label style="color: #a6a6a6;">Tamaño máximo para imagenes: 2Mb</label><br>
                    <div id="controlTam" style="display: none;"></div>
                    <input type="hidden" name="nomIMG"  id="nomIMG" />
                    <img  id="foto" name="foto" class="" />
                </div>

                <div class="form-group upload">
                    <label>Fotos para Galería</label>
                    <input  type="file" id="imagenes1" name="imagenes1" accept="image/x-png, image/jpeg" class="from-control" onchange="nomFoto1();"  required>
                    <label style="color: #a6a6a6;">Tamaño máximo para imagenes: 2Mb</label>
                    <div id="controlTam1" style="display: none;"></div>
                    <input type="hidden" name="nomIMG1"  id="nomIMG1" />
                    <img  id="foto1" name="foto1" class="" />
                </div>
                <div class="form-group upload">
                    <input  type="file" id="imagenes2" name="imagenes2" accept="image/x-png, image/jpeg" class="from-control" onchange="nomFoto2();"  required>
                    <label style="color: #a6a6a6;">Tamaño máximo para imagenes: 2Mb</label>
                    <div id="controlTam2" style="display: none;"></div>
                    <input type="hidden" name="nomIMG2"  id="nomIMG2" />
                    <img  id="foto2" name="foto2" class="" />
                </div>
                <div class="form-group upload">
                    <input  type="file" id="imagenes3" name="imagenes3" accept="image/x-png, image/jpeg" class="from-control" onchange="nomFoto3();"  required>
                    <label style="color: #a6a6a6;">Tamaño máximo para imagenes: 2Mb</label>
                    <div id="controlTam3" style="display: none;"></div>
                    <input type="hidden" name="nomIMG3"  id="nomIMG3" />
                    <img  id="foto3" name="foto3" class="" />
                </div>
                <div class="form-group upload">
                    <input  type="file" id="imagenes4" name="imagenes4" accept="image/x-png, image/jpeg" class="from-control" onchange="nomFoto4();"  required>
                    <label style="color: #a6a6a6;">Tamaño máximo para imagenes: 2Mb</label>
                    <div id="controlTam4" style="display: none;"></div>
                    <input type="hidden" name="nomIMG4"  id="nomIMG4" />
                    <img  id="foto4" name="foto4" class="" />
                </div>
                <div class="form-group upload">
                    <input  type="file" id="imagenes5" name="imagenes5" accept="image/x-png, image/jpeg" class="from-control" onchange="nomFoto5();"  required>
                    <label style="color: #a6a6a6;">Tamaño máximo para imagenes: 2Mb</label>
                    <div id="controlTam5" style="display: none;"></div>
                    <input type="hidden" name="nomIMG5"  id="nomIMG5" />
                    <img  id="foto5" name="foto5" class="" />
                </div>

              </div>
              
            </form>
            <div class="modal-footer">
              <button type="button" class="btn btn-info" onClick="RegistrarModulo(idP,accion); return false">
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
      document.frmmodulos.tipo.value = "";
      document.frmmodulos.titulo.value = "";
      document.frmmodulos.descripcion.value = "";
      $('#modal').modal('show');
    }
    function Editar(id, tipo, titulo, descripcion){
      accion = 'E';
      idP = id;
      document.frmmodulos.tipo.value = tipo;
      document.frmmodulos.titulo.value = titulo;
      document.frmmodulos.descripcion.value = descripcion;
      $('#modal').modal('show');

    }
    
    function caracteresDescripcion(){
      var valorInicial=1000;
      var cant=document.frmmodulos.descripcion.value.length;
      valorInicial=valorInicial-cant;
      document.getElementById('numCaracteres').innerHTML =valorInicial;
    }

    function nomFoto(){
    var foto=document.frmUsuario.images.value;
    foto = foto.split('\\');
    var nom=foto[foto.length-1];
    document.frmUsuario.nomIMG.value=nom;
    }
    function nomFoto1(){
    var foto=document.frmUsuario.images1.value;
    foto = foto.split('\\');
    var nom=foto[foto.length-1];
    document.frmUsuario.nomIMG1.value=nom;
    }
    function nomFoto2(){
    var foto=document.frmUsuario.images2.value;
    foto = foto.split('\\');
    var nom=foto[foto.length-1];
    document.frmUsuario.nomIMG2.value=nom;
    }
    function nomFoto3(){
    var foto=document.frmUsuario.images3.value;
    foto = foto.split('\\');
    var nom=foto[foto.length-1];
    document.frmUsuario.nomIMG3.value=nom;
    }
    function nomFoto4(){
    var foto=document.frmUsuario.images4.value;
    foto = foto.split('\\');
    var nom=foto[foto.length-1];
    document.frmUsuario.nomIMG4.value=nom;
    }
    function nomFoto5(){
    var foto=document.frmUsuario.images5.value;
    foto = foto.split('\\');
    var nom=foto[foto.length-1];
    document.frmUsuario.nomIMG5.value=nom;
    }

    var img = document.getElementById('foto');
    var input = document.getElementById('images'),
        formdata = false;
    var img1 = document.getElementById('foto1');
    var input1 = document.getElementById('imagenes1'),
        formdata1 = false;
    var img2 = document.getElementById('foto2');
    var input2 = document.getElementById('imagenes2'),
        formdata2 = false;
    var img3 = document.getElementById('foto3');
    var input3 = document.getElementById('imagenes3'),
        formdata3 = false;
    var img4 = document.getElementById('foto4');
    var input4 = document.getElementById('imagenes4'),
        formdata4 = false;
    var img5 = document.getElementById('foto5');
    var input5 = document.getElementById('imagenes5'),
        formdata5 = false;

    function cargar(){
    
    if(formdata){
      var ced = document.getElementById('cedula').value;
            $.ajax({
               url : 'subirfotoModulo.php?cod='+ced,
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
    
    function mostrarImagenSubida(source){
        img.className = "fotoPerfil";
        img.src = source;
    }       
    if(window.FormData){//Revisamos si el navegador soporta el objeto FormData
        formdata = new FormData();    
    }   
    if(input.addEventListener){//Aplicamos la subida de imágenes al evento change del input file
        input.addEventListener('change', function(evt){
            var i = 0, len = this.files.length, img, reader, file;
                file = this.files[i];                               
                if(!!file.type.match(/image.*/)){//Una pequeña validación para subir imágenes
                    if(window.FileReader){//Si el navegador soporta el objeto FileReader
                        reader = new FileReader();//Llamamos a este evento cuando la lectura del archivo es completa
                        reader.onloadend = function(e){//Después agregamos la imagen en una lista
                            mostrarImagenSubida(e.target.result);
                        };//Comienza a leer el archivo
                        reader.readAsDataURL(file);//Cuando termina el evento onloadend es llamado
                    }                   
                    if(formdata)//Si existe una instancia de FormData
                        //Usamos el método append, cuyos parámetros son:
                            //name : El nombre del campo
                            //value: El valor del campo (puede ser de tipo Blob, File e incluso string)
                        formdata.append('images', file);
                }       
            //Por último hacemos uso del método proporcionado por jQuery para hacer la petición ajax
            //Como datos a enviar, el objeto FormData que contiene la información de las imágenes
            if(formdata){
                $.ajax({
                   url : 'subirfotoModulo.php?cod=3',
                   type : 'POST',
                   data : formdata,
                   processData : false, 
                   contentType : false,
                   success : function(res){
                      document.getElementById('controlTam').innerHTML = res;
                      if(document.getElementById('controlTam').innerHTML == "0"){
                        document.frmmodulos.images.value = "";
                        document.frmmodulos.foto.src = "";
                        document.frmmodulos.foto.className =document.frmmodulos.foto.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
                        alert("EL tamaño de la imagen se excede del limete de 2MB");
                      }
                   }                 
                });
            }
        }, false);
    }
}());

(function(){
    
    function mostrarImagenSubida1(source){
        img1.className = "fotoPerfil";
        img1.src = source;
    }       
    if(window.FormData){//Revisamos si el navegador soporta el objeto FormData
        formdata1 = new FormData();    
    }   
    if(input1.addEventListener){//Aplicamos la subida de imágenes al evento change del input file
        input1.addEventListener('change', function(evt){
            var i = 0, len = this.files.length, img1, reader, file;
                file = this.files[i];                               
                if(!!file.type.match(/image.*/)){//Una pequeña validación para subir imágenes
                    if(window.FileReader){//Si el navegador soporta el objeto FileReader
                        reader = new FileReader();//Llamamos a este evento cuando la lectura del archivo es completa
                        reader.onloadend = function(e){//Después agregamos la imagen en una lista
                            mostrarImagenSubida1(e.target.result);
                        };//Comienza a leer el archivo
                        reader.readAsDataURL(file);//Cuando termina el evento onloadend es llamado
                    }                   
                    if(formdata1)//Si existe una instancia de FormData
                        //Usamos el método append, cuyos parámetros son:
                            //name : El nombre del campo
                            //value: El valor del campo (puede ser de tipo Blob, File e incluso string)
                        formdata1.append('imagenes1', file);
                }       
            //Por último hacemos uso del método proporcionado por jQuery para hacer la petición ajax
            //Como datos a enviar, el objeto FormData que contiene la información de las imágenes
        }, false);
    }
}());
</script>

</div>
</div>