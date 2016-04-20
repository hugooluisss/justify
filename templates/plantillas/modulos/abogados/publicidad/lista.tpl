<div class="box">
	<div class="box-body">
		<table id="tblPublicidad" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Paquete</th>
					<th>Inicio</th>
					<th>Fin</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row.idPublicidad}</td>
						<td>{$row.nombre}</td>
						<td>{$row.inicio}</td>
						<td>{$row.fin}</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-default" action="modificar" title="Modificar" publicidad='{$row.json}'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" publicidad="{$row.idPublicidad}"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>