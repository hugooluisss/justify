<div class="box">
	<div class="box-body">
		<table id="tblEspecialidades" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row.idEspecialidad}</td>
						<td>{$row.nombre}</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-default btn-circle" action="modificar" title="Modificar" especialidad='{$row.json}'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" especialidad="{$row.idEspecialidad}"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>