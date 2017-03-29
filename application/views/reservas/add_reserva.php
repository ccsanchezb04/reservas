<!-- clie_nume_docu, clie_nombre, clie_email -->
<!-- rese_fecha, rese_valo_tota, rese_observaciones -->
<div class="contenido" id="form_add_reserva">
	<form class="form-horizontal" method="post" role="form">
		<div class="form-group">
		  	<div class="col-sm-12">
		  		<label for="cliente_doc" class="control-label">Documento del Cliente</label>
		    	<input type="text" class="form-control" id="cliente_doc" name="clie_nume_docu" placeholder="Documento del Cliente">
		  	</div>
		</div>
		<div class="form-group">
		  	<div class="col-sm-12">
		  		<label for="cliente_nombre" class="control-label">Nombre del Cliente</label>
		    	<input type="text" class="form-control" id="cliente_nombre" name="clie_nombre" placeholder="Nombre del Cliente">
		  	</div>
		</div>
		<div class="form-group">
		  	<div class="col-sm-12">
		  		<label for="cliente_email" class="control-label">Email</label>
		    	<input type="email" class="form-control" id="cliente_email" name="clie_email" placeholder="Email">
		  	</div>
		</div>
		<div class="form-group">
		  	<div class="col-sm-12">
		  		<label for="reserva_date" class="control-label">Fecha de la Reserva</label>
		    	<input type="date" class="form-control" id="reserva_date" name="rese_fecha">
		  	</div>
		</div>
		<div class="form-group">
		  	<div class="col-sm-12">
		  		<label for="reserva_vtotal" class="control-label">Valor Total</label>
		    	<input type="number" class="form-control" id="reserva_vtotal" name="rese_valo_tota">
		  	</div>
		</div>
		<div class="form-group">	  	
		  	<div class="col-sm-12">
		  		<label for="observaciones" class="control-label">Observaciones</label>
		    	<textarea class="form-control" id="observaciones" name="rese_observaciones" placeholder="Observaciones"></textarea>
		  	</div>
		</div>			
	</form>
</div>