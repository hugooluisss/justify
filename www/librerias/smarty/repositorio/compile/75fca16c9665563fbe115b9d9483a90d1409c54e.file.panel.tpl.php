<?php /* Smarty version Smarty-3.1.11, created on 2016-03-06 12:39:24
         compiled from "templates/plantillas/modulos/usuarios/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74554938055e4995c0237c7-71464976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75fca16c9665563fbe115b9d9483a90d1409c54e' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/panel.tpl',
      1 => 1457289563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74554938055e4995c0237c7-71464976',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55e4995c024e83_58256332',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e4995c024e83_58256332')) {function content_55e4995c024e83_58256332($_smarty_tpl) {?><div class="row">
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
</div><?php }} ?>