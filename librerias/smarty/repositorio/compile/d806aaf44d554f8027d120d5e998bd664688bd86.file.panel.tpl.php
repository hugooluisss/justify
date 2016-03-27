<?php /* Smarty version Smarty-3.1.11, created on 2016-03-26 23:34:26
         compiled from "templates/plantillas/modulos/abogados/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137718938356dc81ae19a3f6-65828579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd806aaf44d554f8027d120d5e998bd664688bd86' => 
    array (
      0 => 'templates/plantillas/modulos/abogados/panel.tpl',
      1 => 1459056863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137718938356dc81ae19a3f6-65828579',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56dc81ae1e8427_02754405',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dc81ae1e8427_02754405')) {function content_56dc81ae1e8427_02754405($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Abogados</h1>
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
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).('/modulos/abogados/winEspecialidades.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>