<div class="box">
	<div class="box-header">
		<h3 class="box-title">Lista de trabajadores</h3>
	</div><!-- /.box-header -->
	<div class="box-body">
		<table id="tblUsuarios" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>CURP</th>
					<th>NIP</th>
					<th>Tipo</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row["obj"]->getId()}</td>
						<td>{$row["obj"]->getNombreCompleto()}</td>
						<td>{$row["obj"]->getCURP()}</td>
						<td>{$row["obj"]->getPass()}</td>
						<td>
							<select class="tipo" user="{$row['obj']->getId()}">
								{foreach from=$tipoUsuario item="tipo"}
								<option value="{$tipo.idTipo}" {if $row['user']->getTipo() eq $tipo.idTipo}selected{/if}>{$tipo.descripcion}
								{/foreach}
							</select>
						</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" trabajador="{$row['obj']->getId()}"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>