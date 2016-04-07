<?php include 'cabecera.php' ?>
<?php 
if(isset($_SESSION["mensaje"])){
unset($_SESSION["mensaje"]);
}
?>

      <section id="contact-page" class="container">
        <div class="row">
            
            <br>
            <h4 style="color: #fff; font-weight: bold;">CONTACTANOS</h4>
            <br>
            <form role="form" name="frmContacto" enctype="multipart/form-data">
            <div class="col-md-6">
            
                <div class="form-group">
                    <input name="nombre" id="nombre" type="text" class="form-control" required="required" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <input name="apellido" id="apellido" type="text" class="form-control" required="required" placeholder="Apellido">
                </div>
                <div class="form-group">
                    <input name="email" id="email" type="text" class="form-control" required="required" placeholder="Email">
                </div>
            </div>
            <div class="col-md-6">
                <textarea name="mensaje" id="mensaje" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                <br>
                <br>                             
              
              <button type="button" class="btn btn-primary btn-lg" onclick="RegistrarContactos();" >Enviar Mensaje </button>
                                   
            </div>
            </form>
            </div>
            </section>
            <br>

    <?php include 'pie.php' ?>
