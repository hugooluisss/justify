<?php /* Smarty version Smarty-3.1.11, created on 2016-03-27 10:55:10
         compiled from "templates/plantillas/modulos/clientes/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26922605956f804aa9d9ee6-99881434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b0420e588c8f140981aaefc6982f8fda3e4f189' => 
    array (
      0 => 'templates/plantillas/modulos/clientes/panel.tpl',
      1 => 1459097708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26922605956f804aa9d9ee6-99881434',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56f804aaa15ff5_14685492',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f804aaa15ff5_14685492')) {function content_56f804aaa15ff5_14685492($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Clientes</h1>
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
						<label for="txtNombre" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-10">
							<input type="text" id="txtNombre" name="txtNombre" autofocus="true" class="form-control" autocomplete="false" />
						</div>
					</div>
					<div class="form-group">
						<label for="txtNacimiento" class="col-sm-2 control-label">Fecha de nacimiento</label>
						<div class="col-sm-2">
							<input type="text" id="txtNacimiento" name="txtNacimiento" autofocus="true" class="form-control" autocomplete="false" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask/>
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
					<hr />
					<div class="form-group">
						<label for="txtEmail" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-8">
							<input type="text" id="txtEmail" name="txtEmail" autofocus="true" class="form-control" autocomplete="false" />
						</div>
					</div>
					<div class="form-group">
						<label for="txtTelefono" class="col-sm-2 control-label">Teléfono local</label>
						<div class="col-sm-3">
							<input type="text" id="txtTelefono" name="txtTelefono" autofocus="true" class="form-control" autocomplete="false" />
						</div>
					</div>
					<div class="form-group">
						<label for="txtCelular" class="col-sm-2 control-label">Celular</label>
						<div class="col-sm-3">
							<input type="text" id="txtCelular" name="txtCelular" autofocus="true" class="form-control" autocomplete="false" />
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
</div><?php }} ?>