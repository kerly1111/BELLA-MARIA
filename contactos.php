<?php include 'cabecera.php' ?>

      <section id="contact-page" class="container">
        <div class="row">
            <div class="col-sm-8 ">
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                    <div class="row">
                        <div class="col-sm-5 col-md-offset-6 ">
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
                    <div class="row">

                        <div class="col-sm-7 col-md-offset-6">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                        <div class="form-group">
                        <br>
                                <button type="submit" class="btn btn-primary btn-lg">Enviar Mensaje</button>
                            </div>
                        </div>

                        </div>
                    </div>
                </form>
            </div><!--/.col-sm-8-->
    </div>
    </section>
    <?php include 'pie.php' ?>