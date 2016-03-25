
<?php include 'stilosFunciones.php' ?>
<?php include 'cabecera.php' ?>

      <section id="contact-page" class="container">
        <div class="row">
            
            <br><hr>
            <h4>Contactanos</h4>
            <hr>
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

              <a href="javascript: void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=http://www.guiarte.com/','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');">Compartir con popup</a>                      
            </div>
            </form>
            </div>
            </section>
    <?php include 'pie.php' ?>
