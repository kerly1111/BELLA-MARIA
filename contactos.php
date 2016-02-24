<?php include 'cabecera.php' ?>

    <section id="contact-page" class="container">
            <div align="center" >

                <h4>Contactanos</h4>
            

                <div class="status alert alert-success" style="display: none"></div>
                
                <form id="main-contact-form" class="contact-form" name="Contactanos" method="post" action="sendemail.php" role="form">
                    
                        <div class="col-sm-12">

                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Apellido">
                            </div>
                            <div >
                                <input type="text" class="form-control" required="required" placeholder="Direccion de correo">
                            </div>
                            
                            <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Mensaje"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        
                        </div>
                        
                    </div>
                </form>

            
           

           </section><!--/#contact-page-->

    
    <?php include 'pie.php' ?>