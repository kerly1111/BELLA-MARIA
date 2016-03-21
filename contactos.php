
<?php include 'stilosFunciones.php' ?>
<?php include 'cabecera.php' ?>

      <section id="contact-page" class="container">
        <div class="row">
        
            
            <form role="form" name="frmContacto" enctype="multipart/form-data">
                        <div class="col-md-6">
                        <h4>Contactanos</h4>

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
            <br>
            <br>
            <textarea name="mensaje" id="mensaje" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
            <br>
            <br>
            <button type="button" class="btn btn-info" onClick="RegistrarContactos();">
                  <span class="glyphicon glyphicon-save" aria-hidden="true"></span> Grabar
              </button>                        
            </div>
        </div>
        </form>
        </section>
