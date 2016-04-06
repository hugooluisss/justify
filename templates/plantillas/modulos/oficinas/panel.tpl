<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Despachos</h1>
	</div>
</div>


<ul id="panelTabs" class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#lista">Catálogo</a></li>
	<li><a data-toggle="tab" href="#add">Agregar o modificar</a></li>
</ul>

<div class="tab-content">
	<div id="lista" class="tab-pane fade in active">
		<div id="dvLista"></div>
	</div>
	<div id="add" class="tab-pane fade in">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">
					<div class="form-group">
						<label for="txtEncargado" class="col-sm-2 control-label">Encargado</label>
						<div class="col-sm-8">
							<input class="form-control" autocomplete="off" id="txtEncargado" name="txtEncargado" />
						</div>
					</div>
					<div class="form-group">
						<label for="txtDireccion" class="col-sm-2 control-label">Dirección</label>
						<div class="col-sm-5">
							<textarea class="form-control" id="txtDireccion" name="txtDireccion"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="txtLatitud" class="col-sm-2 control-label">Latitud</label>
						<div class="col-sm-3">
							<input class="form-control" autocomplete="off" id="txtLatitud" name="txtLatitud" />
						</div>
					</div>
					<div class="form-group">
						<label for="txtLongitud" class="col-sm-2 control-label">Longitud</label>
						<div class="col-sm-3">
							<input class="form-control" autocomplete="off" id="txtLongitud" name="txtLongitud" />
						</div>
					</div>
					<div class="form-group">
						<label for="txtTelefono" class="col-sm-2 control-label">Teléfono</label>
						<div class="col-sm-3">
							<input class="form-control" autocomplete="off" id="txtTelefono" name="txtTelefono" />
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
					<input type="hidden" id="abogado" value="{$abogado}"/>
				</div>
			</div>
		</form>
	</div>
</div>