<?php $data['seccion'] = "1" ?>
<div class="row">
	<div class=" col-md-12">
		<div class="panel panel-primary" id="login_form">
			<div class="panel-heading">
				<div class="row">
				  	<div class="col-sm-6">
				  		<h3 id="titulo-pagina">Inicio - Bienvenido</h3>				  	
				  	</div>
				  	<div class="col-sm-6">			  		
					  	<div class="pull-right">			  				
					  		<a href="<?php echo base_url(); ?>login/close" class="btn btn-default">
					  			Cerrar Sesión
					  		</a>
					  	</div>
				  	</div>
				</div>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-2">
						<?php $this->load->view('layouts/menu',$data); ?>
					</div>
					<div class="col-md-6" id="bienvenido">
						<div class="contenido" id="vista_principal">
							<h2>Bienvenido</h2>
						</div>
						<div id="contenedor">
							
						</div>						
					</div>					
					<div class="col-md-4">
						<div class="row contenido" id="botoneria">
						  	<div class="col-sm-6">
						    	<button type="submit" class="btn btn-primary btn-block" id="btnAdicionar">Adicionar</button>
						  	</div>
						  	<div class="col-sm-6">
						    	<button type="button" class="btn btn-danger btn-block btnVolverInicio">Volver</button>
						  	</div>
						</div>
						<div class="row contenido" id="botoneria2">
							<div class="col-sm-12">
						    	<button type="button" class="btn btn-danger btn-block btnVolverInicio">Volver</button>
						  	</div>
						</div>
						<div id="alertas">
							<div class="alert alert-danger" id="alertaFail" role="alert">
								
							</div>  		
							<div class="alert alert-success" id="alertaOk" role="alert">
								
							</div>  		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>