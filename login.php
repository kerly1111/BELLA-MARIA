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
						<form role="form" action="#" method="POST">
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
												<input class="form-control" placeholder="Usuario" name="loginname" type="text" autofocus required="required">
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												<input class="form-control" placeholder="Contraseña" name="password" type="password" value="" required="required">
											</div>
										</div>
										<div class="form-group">
											 <a href="Admin/index.php"><input  class="btn btn-lg btn-primary btn-block" value="Entrar"></a>
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="panel-footer ">
						Debes estar registrado para entrar! <a href="#" onClick=""> </a>
					</div>
                </div>
			</div>
		</div>
	</div>

</section>