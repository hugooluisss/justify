<div class="box">
	<div class="box-body">
		<table id="tblUsuarios" class="table table-bordered table-hover">
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
						<td>{$row.idUsuario}</td>
						<td>{$row.nombre}</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-primary" action="oficinas" title="Despachos" usuario='{$row.idUsuario}'><i class="fa fa-building-o"></i></button>
							
							<button type="button" class="btn btn-primary" action="publicidad" title="Publicidad" usuario='{$row.idUsuario}'><i class="fa fa-share-alt"></i></button>
							<button type="button" class="btn btn-default" action="especialidades" title="Especialidades" usuario='{$row.json}'><i class="fa fa-server"></i></button>
							<button type="button" class="btn btn-default" action="modificar" title="Modificar" usuario='{$row.json}'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" usuario="{$row.idUsuario}"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>