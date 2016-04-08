<?php include 'cabecera.php' ?>
<?php include 'banner.php'; ?>
<?php 
if(isset($_SESSION["mensaje"])){
unset($_SESSION["mensaje"]);
}
?>
<br>
<div class="panel panel-success margenGeneral" >
<div class="panel-heading styleBellaMAria"><h4>CONTACTANOS</h4></div>
<div class="panel-body">
      <section id="contact-page" class="container">
        <div class="row">
            
            <br>
            <form role="form" name="frmContacto" enctype="multipart/form-data">
            <div class="col-md-6">
            
                <div class="form-group">
                    <label>Nombre: </label>
                    <input name="nombre" id="nombre" type="text" class="form-control" required="required" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label>Apellido: </label>
                    <input name="apellido" id="apellido" type="text" class="form-control" required="required" placeholder="Apellido">
                </div>
                <div class="form-group">
                    <label>Email: </label>
                    <input name="email" id="email" type="text" class="form-control" required="required" placeholder="Email">
                </div>
            </div>
            <div class="col-md-6">
                <label>Mensaje: </label>
                <textarea name="mensaje" id="mensaje" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                <br>
                <br>                             
              
              <button type="button" class="btn btn-primary btn-lg" onclick="RegistrarContactos();" >Enviar Mensaje </button>
               <br>
               <br>                    
            </div>
            </form>
            </div>
            </section>
</div>
</div>
</section>
    <?php include 'videos.php' ?>
    <?php include 'pie.php' ?>
