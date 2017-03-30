<div class="row">
	<div class="col-md-offset-3 col-md-6">
		<div class="panel panel-success" id="login_form">
			<div class="panel-heading">
			  	<h3>Reservas - Login</h3>
			</div>
			<div class="panel-body">
			  	<form class="form-horizontal" method="post">
				  	<div class="form-group">
					    <label for="usuario" class="col-sm-2 control-label">Usuario:</label>
					    <div class="col-sm-10">
					      	<input type="text" class="form-control" id="usuario" name="user" placeholder="Usuario">
					    </div>
					</div>
				  	<div class="form-group">
				    	<label for="password" class="col-sm-2 control-label">Contraseña:</label>
				    	<div class="col-sm-10">
				      		<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<div class="col-sm-12">
				      		<button type="submit" class="btn btn-success btn-block" id="btnInicio">
				      			Iniciar Sesión
				      		</button>
				    	</div>
				  	</div>				  	
				</form>
				<div id="alertas-login">
					<div class="alert alert-danger" id="alertaFail" role="alert">
						
					</div>  		
					<div class="alert alert-success" id="alertaOk" role="alert">
						
					</div>  		
				</div>
			</div>
		</div>
	</div>
</div>