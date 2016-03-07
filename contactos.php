<?php include 'cabecera.php' ?>

      <section id="contact-page" class="container">
        <div class="row">
        
            <div class="col-md-6">
            <h4>Contactanos</h4>

                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Apellido">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Email">
                            </div>
            </div>
            <div class="col-md-6">
            <br>
            <br>
            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
            <br>
            <br>
            <button type="submit" class="btn btn-primary btn-lg">Enviar Mensaje</button>

            </div>
        
        </div>
    </section>
    <?php include 'pie.php' ?>