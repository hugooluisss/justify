<div id="winEspecialidades" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-toogle="modal">
    <div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Especialidades</h1>
			</div>
			<div class="modal-body">
				<div class="row">
				{foreach from=$especialidades item="row"}
					<div class="col-xs-12 col-sm-6">
						<div class="checkbox">
							<label><input type="checkbox" value="{$row.idEspecialidad}" class="especialidades">{$row.nombre}</label>
						</div>
					</div>
				{/foreach}
				</div>
			</div>
		</div>
	</div>
</div>