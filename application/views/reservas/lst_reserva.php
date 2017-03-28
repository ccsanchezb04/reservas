<div class="contenido" id="tbl_info_reservas">
	<table class="table table-striped">
		<!-- rese_fecha,clie_nume_docu,clie_nombre,rese_valo_tota,rese_observaciones -->
		<tr>
			<th>Fecha de Reserva</th>
			<th>Documento del Cliente</th>
			<th>Nombre del Cliente</th>
			<th>Valor Total</th>
			<th>Observaciones</th>
		</tr>
		<?php foreach ($resreva as $key): ?>
		<tr>
			<td><?php echo $key->rese_fecha; ?></td>
			<td><?php echo $key->clie_nume_docu; ?></td>
			<td><?php echo $key->clie_nombre; ?></td>
			<td>$<?php echo $key->rese_valo_tota; ?></td>
			<td><?php echo $key->rese_observaciones; ?></td>
		</tr>
		<?php endforeach ?>
	</table>	
</div>