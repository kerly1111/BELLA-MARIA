<?php include 'stilosFunciones.php' ?>
<?php include 'cabecera.php' ;
if(isset($_SESSION["loginname"])){
?>

<script type="text/javascript" src="../js/ajax.js"></script>
<div  class="panel panel-info col-lg-10 col-sm-10 ">

<!--<input type="text" class="input-medium search-query form-control" name="aeropuerto" placeholder="Aeropuerto" id="aeropuerto" autocomplete="off" onKeyUp="buscar();" />-->
                   <ul id="resultadoBusqueda" class="list-unstyled press"></ul>
                   <input type="hidden" name="aeropuerto1"  id="aeropuerto1" />

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

        <div class="panel-heading">Lista de Módulos</div>
        <div class="panel-body">
        <table class="table">
          <thead>
            <tr>
              <th>Tipo Modulo</th>
              <th>Titulo</th>
              <th>Descripcion</th>                          
            </tr>
          </thead>
          <tbody id="modulosTabla">
            <?php
            require("../clases/conexion.php");
            $con = conectar();
            $sql = "SELECT id_modulo, tip_modulo, tit_modulo, des_modulo FROM modulo WHERE est_modulo='1'";
            $stmt = $con->prepare($sql);
      
            $result = $stmt->execute();
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
            foreach($rows as $row){

                
              ?>
              <tr>
                <td><?php print($row->tip_modulo); ?></td>
                <td class="siseColTITMOD"><?php print($row->tit_modulo); ?></td>
                <td class="siseColDESMOD"><?php print($row->des_modulo); ?></td>
                <?php $_SESSION['codModulo']=($row->id_modulo) ?>
                <td>
                  <div>

                    <button type="button" class="btn btn-success btn-xs" onclick="Editar('<?php print($row->id_modulo); ?>','<?php print($row->tip_modulo); ?>','<?php print($row->tit_modulo); ?>','<?php print($row->des_modulo); ?>');"> <span class='glyphicon glyphicon-edit' aria-hidden='true'></span> Actualizar</button>

                    <button type="button" class="btn btn-success btn-xs" onclick="EliminarModulo('<?php print($row->id_modulo); ?>');"> <span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span> Eliminar</button>
          
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
                  <SELECT name="tipo" class="form-control"> 
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
                    <input  type="file" id="images" name="images" accept="image/x-png, image/jpeg" class="from-control"  required>
                    <label style="color: #a6a6a6;">Tamaño máximo para imagenes: 2Mb</label><br>
                    <div id="controlTam" style="display: none;"></div>
                    <img  id="foto" name="foto" class="" />
                </div>

                <div class="form-group upload">
                    <label>Fotos para Galería</label>
                    <input  type="file" id="imagenes1" name="imagenes1" accept="image/x-png, image/jpeg" class="from-control"  required>
                    <label style="color: #a6a6a6;">Tamaño máximo para imagenes: 2Mb</label><br>
                    <div id="controlTam1" style="display: none;"></div>
                    <input type="hidden" name="nomIMG1"  id="nomIMG1" />
                    <img  id="foto1" name="foto1" class="" />
                </div>
                <div class="form-group upload">
                    <input  type="file" id="imagenes2" name="imagenes2" accept="image/x-png, image/jpeg" class="from-control" required>
                    <label style="color: #a6a6a6;">Tamaño máximo para imagenes: 2Mb</label><br>
                    <div id="controlTam2" style="display: none;"></div>
                    <input type="hidden" name="nomIMG2"  id="nomIMG2" />
                    <img  id="foto2" name="foto2" class="" />
                </div>
                <div class="form-group upload">
                    <input  type="file" id="imagenes3" name="imagenes3" accept="image/x-png, image/jpeg" class="from-control"  required>
                    <label style="color: #a6a6a6;">Tamaño máximo para imagenes: 2Mb</label><br>
                    <div id="controlTam3" style="display: none;"></div>
                    <input type="hidden" name="nomIMG3"  id="nomIMG3" />
                    <img  id="foto3" name="foto3" class="" />
                </div>
                <div class="form-group upload">
                    <input  type="file" id="imagenes4" name="imagenes4" accept="image/x-png, image/jpeg" class="from-control" required>
                    <label style="color: #a6a6a6;">Tamaño máximo para imagenes: 2Mb</label><br>
                    <div id="controlTam4" style="display: none;"></div>
                    <input type="hidden" name="nomIMG4"  id="nomIMG4" />
                    <img  id="foto4" name="foto4" class="" />
                </div>
                <div class="form-group upload">
                    <input  type="file" id="imagenes5" name="imagenes5" accept="image/x-png, image/jpeg" class="from-control" required>
                    <label style="color: #a6a6a6;">Tamaño máximo para imagenes: 2Mb</label><br>
                    <div id="controlTam5" style="display: none;"></div>
                    <input type="hidden" name="nomIMG5"  id="nomIMG5" />
                    <img  id="foto5" name="foto5" class="" />
                </div>

              </div>
              
            </form>
            <div class="modal-footer">
              <button type="button" class="btn btn-info" onClick="cargar(); RegistrarModulo(accion, idModulo); return false">
              <!--<button type="button" class="btn btn-info" onClick="cargar();">-->
                  <span class="glyphicon glyphicon-save" aria-hidden="true"></span> Grabar
              </button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Cancel</button>
        <!--<a href="javascript: void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=http://www.guiarte.com/','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');">Compartir con popup</a>-->
            </div>
          </div>
        </div> 
      </div>


<script type="text/javascript">

    function buscar(){
      var textoBusqueda = document.getElementById("buscarInput").value;

            $.post("buscarModulo.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
              $("#modulosTabla").html("");
              $("#modulosTabla").html(mensaje);
            }); 
    }
    var idModulo;
    var accion;
    function Nuevo(){
      accion = 'N';
      document.frmmodulos.tipo.value = "";
      document.frmmodulos.titulo.value = "";
      document.frmmodulos.descripcion.value = "";
      document.frmmodulos.images.value = "";
      document.frmmodulos.foto.src = "";
      document.frmmodulos.foto.className =document.frmmodulos.foto.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
      document.frmmodulos.imagenes1.value = "";
      document.frmmodulos.foto1.src = "";
      document.frmmodulos.foto1.className =document.frmmodulos.foto.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
      document.frmmodulos.imagenes2.value = "";
      document.frmmodulos.foto2.src = "";
      document.frmmodulos.foto2.className =document.frmmodulos.foto.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
      document.frmmodulos.imagenes3.value = "";
      document.frmmodulos.foto3.src = "";
      document.frmmodulos.foto3.className =document.frmmodulos.foto.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
      document.frmmodulos.imagenes4.value = "";
      document.frmmodulos.foto4.src = "";
      document.frmmodulos.foto4.className =document.frmmodulos.foto.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
      document.frmmodulos.imagenes5.value = "";
      document.frmmodulos.foto5.src = "";
      document.frmmodulos.foto5.className =document.frmmodulos.foto.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
      $('#modal').modal('show');
    }
    function Editar(id, tipo, titulo, descripcion){
      accion = 'E';
      idModulo=id;
      document.frmmodulos.tipo.value = tipo;
      document.frmmodulos.titulo.value = titulo;
      document.frmmodulos.descripcion.value = descripcion;
      caracteresDescripcion();
      
      document.frmmodulos.foto.src = "../imagenes/modulos/"+id+".png";
      document.frmmodulos.foto.className ="fotoPerfil";
      document.frmmodulos.images.innerHTML =document.frmmodulos.foto;
      
      $('#modal').modal('show');
    }
    function imagenesMod(){
      document.frmmodulos.imagenes1.value = "";
      document.frmmodulos.foto1.src = "";
      document.frmmodulos.foto1.className =document.frmmodulos.foto.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
      document.frmmodulos.imagenes2.value = "";
      document.frmmodulos.foto2.src = "";
      document.frmmodulos.foto2.className =document.frmmodulos.foto.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
      document.frmmodulos.imagenes3.value = "";
      document.frmmodulos.foto3.src = "";
      document.frmmodulos.foto3.className =document.frmmodulos.foto.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
      document.frmmodulos.imagenes4.value = "";
      document.frmmodulos.foto4.src = "";
      document.frmmodulos.foto4.className =document.frmmodulos.foto.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
      document.frmmodulos.imagenes5.value = "";
      document.frmmodulos.foto5.src = "";
      document.frmmodulos.foto5.className =document.frmmodulos.foto.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );


      $('#modal').modal('show');

    }
    
    function caracteresDescripcion(){
      var valorInicial=1000;
      var cant=document.frmmodulos.descripcion.value.length;
      valorInicial=valorInicial-cant;
      document.getElementById('numCaracteres').innerHTML =valorInicial;
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
      if(document.frmmodulos.imagenes1.value!=""){
        document.frmmodulos.nomIMG1.value="1";
      }
      if(document.frmmodulos.imagenes2.value!=""){
        document.frmmodulos.nomIMG2.value="1";
      }
      if(document.frmmodulos.imagenes3.value!=""){
        document.frmmodulos.nomIMG3.value="1";
      }
      if(document.frmmodulos.imagenes4.value!=""){
        document.frmmodulos.nomIMG4.value="1";
      }
      if(document.frmmodulos.imagenes5.value!=""){
        document.frmmodulos.nomIMG5.value="1";
      }
    if(formdata){
            $.ajax({
               url : 'subirfotoModulo.php?cod=0',
               type : 'POST',
               data : formdata,
               processData : false, 
               contentType : false,
               success : function(res){
                  
               }                 
            });
        }
    if(formdata1){
            $.ajax({
               url : 'subirfotoModulo.php?cod=1',
               type : 'POST',
               data : formdata1,
               processData : false, 
               contentType : false,
               success : function(res){
                  
               }                 
            });
        }
    if(formdata2){
            $.ajax({
               url : 'subirfotoModulo.php?cod=2',
               type : 'POST',
               data : formdata2,
               processData : false, 
               contentType : false,
               success : function(res){
                  
               }                 
            });
        }
    if(formdata3){
            $.ajax({
               url : 'subirfotoModulo.php?cod=3',
               type : 'POST',
               data : formdata3,
               processData : false, 
               contentType : false,
               success : function(res){
                  
               }                 
            });
        }
    if(formdata4){
            $.ajax({
               url : 'subirfotoModulo.php?cod=4',
               type : 'POST',
               data : formdata4,
               processData : false, 
               contentType : false,
               success : function(res){
                  
               }                 
            });
        }
    if(formdata5){
            $.ajax({
               url : 'subirfotoModulo.php?cod=5',
               type : 'POST',
               data : formdata5,
               processData : false, 
               contentType : false,
               success : function(res){
                  
               }                 
            });
        }

    } 
    (function(){
    function mostrarImagenSubida(source, num){
      switch(num){
        case 0:
        img.className = "fotoPerfil";
        img.src = source;
        break;
        case 1:
        img1.className = "fotoPerfil";
        img1.src = source;
        break;
        case 2:
        img2.className = "fotoPerfil";
        img2.src = source;
        break;
        case 3:
        img3.className = "fotoPerfil";
        img3.src = source;
        break;
        case 4:
        img4.className = "fotoPerfil";
        img4.src = source;
        break;
        case 5:
        img5.className = "fotoPerfil";
        img5.src = source;
        break;
      }
    }       
    if(window.FormData){
        formdata = new FormData();
        formdata1 = new FormData();
        formdata2 = new FormData();
        formdata3 = new FormData();   
        formdata4 = new FormData();
        formdata5 = new FormData();
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
                        formdata.append('images', file);
                }       
            if(formdata){
                $.ajax({
                   url : 'subirfotoModulo.php?cod=contolSize',
                   type : 'POST',
                   data : formdata,
                   processData : false, 
                   contentType : false,
                   success : function(res){ //res resultado del echo del archivo php
                      document.getElementById('controlTam').innerHTML = res;
                      if(document.getElementById('controlTam').innerHTML == "0"){
                        document.frmmodulos.images.value = "";
                        document.frmmodulos.foto.src = "";
                        document.frmmodulos.foto.className =document.frmmodulos.foto.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
                        alert("EL tamaño de la imagen se excede del limete de 2MB");
                      }else{
                        reader.readAsDataURL(file);//carga imagen al div para mostrar
                      }
                   }                 
                });
            }
        }, false);
    }

    if(input1.addEventListener){
        input1.addEventListener('change', function(evt){
            var i = 0, len = this.files.length, img1, reader, file;
                file = this.files[i];                               
                if(!!file.type.match(/image.*/)){
                    if(window.FileReader){
                        reader = new FileReader();
                        reader.onloadend = function(e){
                            mostrarImagenSubida(e.target.result,1);
                        };
                    }                   
                    if(formdata1)
                        formdata1.append('imagenes1', file);
                }       
            if(formdata1){
                $.ajax({
                   url : 'subirfotoModulo.php?cod=contolSize1',
                   type : 'POST',
                   data : formdata1,
                   processData : false, 
                   contentType : false,
                   success : function(res){ //res resultado del echo del archivo php
                      document.getElementById('controlTam1').innerHTML = res;
                      if(document.getElementById('controlTam1').innerHTML == "0"){
                        document.frmmodulos.imagenes1.value = "";
                        document.frmmodulos.foto1.src = "";
                        document.frmmodulos.foto1.className =document.frmmodulos.foto1.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
                        alert("EL tamaño de la imagen se excede del limete de 2MB");
                      }else{
                        reader.readAsDataURL(file);//carga imagen al div para mostrar
                      }
                   }                 
                });
            }
        }, false);
    }
    if(input2.addEventListener){
        input2.addEventListener('change', function(evt){
            var i = 0, len = this.files.length, img2, reader, file;
                file = this.files[i];                               
                if(!!file.type.match(/image.*/)){
                    if(window.FileReader){
                        reader = new FileReader();
                        reader.onloadend = function(e){
                            mostrarImagenSubida(e.target.result,2);
                        };
                    }                   
                    if(formdata2)
                        formdata2.append('imagenes2', file);
                }       
            if(formdata2){
                $.ajax({
                   url : 'subirfotoModulo.php?cod=contolSize2',
                   type : 'POST',
                   data : formdata2,
                   processData : false, 
                   contentType : false,
                   success : function(res){ //res resultado del echo del archivo php
                      document.getElementById('controlTam2').innerHTML = res;
                      if(document.getElementById('controlTam2').innerHTML == "0"){
                        document.frmmodulos.imagenes2.value = "";
                        document.frmmodulos.foto2.src = "";
                        document.frmmodulos.foto2.className =document.frmmodulos.foto2.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
                        alert("EL tamaño de la imagen se excede del limete de 2MB");
                      }else{
                        reader.readAsDataURL(file);//carga imagen al div para mostrar
                      }
                   }                 
                });
            }
        }, false);
    }
    if(input3.addEventListener){
        input3.addEventListener('change', function(evt){
            var i = 0, len = this.files.length, img3, reader, file;
                file = this.files[i];                               
                if(!!file.type.match(/image.*/)){
                    if(window.FileReader){
                        reader = new FileReader();
                        reader.onloadend = function(e){
                            mostrarImagenSubida(e.target.result,3);
                        };
                    }                   
                    if(formdata3)
                        formdata3.append('imagenes3', file);
                }       
            if(formdata3){
                $.ajax({
                   url : 'subirfotoModulo.php?cod=contolSize3',
                   type : 'POST',
                   data : formdata3,
                   processData : false, 
                   contentType : false,
                   success : function(res){ //res resultado del echo del archivo php
                      document.getElementById('controlTam3').innerHTML = res;
                      if(document.getElementById('controlTam3').innerHTML == "0"){
                        document.frmmodulos.imagenes3.value = "";
                        document.frmmodulos.foto3.src = "";
                        document.frmmodulos.foto3.className =document.frmmodulos.foto3.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
                        alert("EL tamaño de la imagen se excede del limete de 2MB");
                      }else{
                        reader.readAsDataURL(file);//carga imagen al div para mostrar
                      }
                   }                 
                });
            }
        }, false);
    }
    if(input4.addEventListener){
        input4.addEventListener('change', function(evt){
            var i = 0, len = this.files.length, img4, reader, file;
                file = this.files[i];                               
                if(!!file.type.match(/image.*/)){
                    if(window.FileReader){
                        reader = new FileReader();
                        reader.onloadend = function(e){
                            mostrarImagenSubida(e.target.result,4);
                        };
                    }                   
                    if(formdata4)
                        formdata4.append('imagenes4', file);
                }       
            if(formdata4){
                $.ajax({
                   url : 'subirfotoModulo.php?cod=contolSize4',
                   type : 'POST',
                   data : formdata4,
                   processData : false, 
                   contentType : false,
                   success : function(res){ //res resultado del echo del archivo php
                      document.getElementById('controlTam4').innerHTML = res;
                      if(document.getElementById('controlTam4').innerHTML == "0"){
                        document.frmmodulos.imagenes4.value = "";
                        document.frmmodulos.foto4.src = "";
                        document.frmmodulos.foto4.className =document.frmmodulos.foto4.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
                        alert("EL tamaño de la imagen se excede del limete de 2MB");
                      }else{
                        reader.readAsDataURL(file);//carga imagen al div para mostrar
                      }
                   }                 
                });
            }
        }, false);
    }
    if(input5.addEventListener){
        input5.addEventListener('change', function(evt){
            var i = 0, len = this.files.length, img5, reader, file;
                file = this.files[i];                               
                if(!!file.type.match(/image.*/)){
                    if(window.FileReader){
                        reader = new FileReader();
                        reader.onloadend = function(e){
                            mostrarImagenSubida(e.target.result,5);
                        };
                    }                   
                    if(formdata5)
                        formdata5.append('imagenes5', file);
                }       
            if(formdata5){
                $.ajax({
                   url : 'subirfotoModulo.php?cod=contolSize5',
                   type : 'POST',
                   data : formdata5,
                   processData : false, 
                   contentType : false,
                   success : function(res){ //res resultado del echo del archivo php
                      document.getElementById('controlTam5').innerHTML = res;
                      if(document.getElementById('controlTam5').innerHTML == "0"){
                        document.frmmodulos.imagenes5.value = "";
                        document.frmmodulos.foto5.src = "";
                        document.frmmodulos.foto5.className =document.frmmodulos.foto5.className.replace( /(?:^|\s)fotoPerfil(?!\S)/g , '' );
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

</div>
<?php
}
?>