<div id="winPublicidad" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-toogle="modal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Publicidad</h1>
			</div>
			<div class="modal-body">
				<ul id="panelPublicidad" class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#listaPublicidad">Registrados</a></li>
					<li><a data-toggle="tab" href="#addPublicidad">Agregar o modificar</a></li>
				</ul>
				
				<div class="tab-content">
					<div id="listaPublicidad" class="tab-pane fade in active">
						<div id="dvLista"></div>
					</div>
					<div id="addPublicidad" class="tab-pane fade in">
						<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
							<div class="box">
								<div class="box-body">
									<div class="form-group">
										<label for="selPaquete" class="col-sm-2 control-label">Paquete</label>
										<div class="col-sm-3">
											<select class="form-control" id="selPaquete" name="selPaquete">
												{foreach from=$paquetes item="row"}
													<option value="{$row.idPaquete}">{$row.nombre}
												{/foreach}
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="txtInicio" class="col-sm-2 control-label">Inicio</label>
										<div class="col-sm-4">
											<input type="text" id="txtInicio" name="txtInicio" autofocus="true" class="form-control" autocomplete="false" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask value="{$smarty.now|date_format:"%Y-%m-%d"}"/>
										</div>
									</div>
								</div>
								<div class="box-footer">
									<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
									<button type="submit" class="btn btn-info pull-right">Guardar</button>
									<input type="hidden" id="id"/>
									<input type="hidden" id="abogado"/>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>