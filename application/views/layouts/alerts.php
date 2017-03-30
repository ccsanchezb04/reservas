<div id="alertas">	
	<?php if ($oper == true): ?>
	<div class="alert alert-success" id="alertaOk" role="alert">
		<h3>El registro se agreco correctamente</h3>
		<a href="<?php echo base_url(); ?>" class="btn btn-success">Volver</a>
	</div> 
	<?php else: ?>  		
	<div class="alert alert-danger" id="alertaFail" role="alert">
		<h3>Error!! Problemas para agregar el registro</h3>
		<a href="<?php echo base_url(); ?>" class="btn btn-danger pull-right">Volver</a>
	</div>
	<?php endif ?>		
</div>