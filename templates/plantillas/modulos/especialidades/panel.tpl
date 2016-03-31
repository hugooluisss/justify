<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Especialidades</h1>
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
						<label for="txtEmail" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-5">
							<input type="text" id="txtNombre" name="txtNombre" autofocus="true" class="form-control" autocomplete="false" maxlength="45" />
						</div>
					</div>
					<div class="form-group">
						<label for="txtDescripcion" class="col-sm-2 control-label">Descripción</label>
						<div class="col-sm-8">
							<textarea class="form-control" id="txtDescripcion" name="txtDescripcion"></textarea>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div>