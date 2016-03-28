<?php include 'stilosFunciones.php' ?>
<?php include 'cabecera.php' ?>
<section>

    <div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> INICIO DE SESION</strong>
					</div>
					<div class="panel-body">
						<form role="form" name="frmLogeo" method="POST" action='clases/logeo.php'>
							<fieldset>
								<div class="row">
									<div class="col-sm-6 col-md-offset-2">
										<img 
											src="imagenes/LOGO.png">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
												<input class="form-control" placeholder="Usuario" id="loginname" name="loginname" type="text" autofocus required="required">
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												<input class="form-control" placeholder="Contraseña" id="password" name="password" type="password" value="" required="required">
											</div>
										</div>
										<div class="form-group">
											 <input  class="btn btn-lg btn-primary btn-block" value="Entrar" type="submit">
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="panel-footer ">
						Debes estar registrado para entrar! <a href="#" onClick=""> </a>
					</div>
					<div class="panel-footer" style="background-color:#ff6666; color: #fff;" id="mensajeria">
					<?php

						if (isset($_SESSION['logeo'])) {
						 echo $_SESSION["logeo"];
						}
						?>
					</div>
                </div>
			</div>
		</div>
	</div>

</section>