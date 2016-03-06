<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administradores del sistema</h1>
	</div>
</div>


<ul id="panelTabs" class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#lista">Registrados</a></li>
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
						<label for="txtEmail" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-8">
							<input type="text" id="txtEmail" name="txtEmail" autofocus="true" class="form-control" autocomplete="false" />
						</div>
					</div>
					<div class="form-group">
						<label for="txtPass1" class="col-sm-2 control-label">Contraseña</label>
						<div class="col-sm-3">
							<input type="password" id="txtPass1" name="txtPass1" autofocus="true" class="form-control" autocomplete="false" />
						</div>
					</div>
					
					<div class="form-group">
						<label for="txtPass2" class="col-sm-2 control-label">Confirmar</label>
						<div class="col-sm-3">
							<input type="password" id="txtPass2" name="txtPass2" autofocus="true" class="form-control" autocomplete="false" />
						</div>
					</div>
					<br />
					
					<div class="form-group">
						<label for="txtNombre" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-10">
							<input type="text" id="txtNombre" name="txtNombre" autofocus="true" class="form-control" autocomplete="false" />
						</div>
					</div>
					<div class="form-group">
						<label for="selSexo" class="col-sm-2 control-label">Sexo</label>
						<div class="col-sm-2">
							<select id="selSexo" name="selSexo" class="form-control">
								<option value="H">Hombre
								<option value="M">Mujer
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="txtLocalidad" class="col-sm-2 control-label">Localización</label>
						<div class="col-sm-10">
							<input type="text" id="txtLocalidad" name="txtLocalidad" anterior="" autofocus="true" class="form-control" autocomplete="false" />
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