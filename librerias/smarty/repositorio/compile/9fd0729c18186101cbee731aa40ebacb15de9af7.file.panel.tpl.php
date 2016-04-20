<?php /* Smarty version Smarty-3.1.11, created on 2016-04-18 11:52:24
         compiled from "templates/plantillas/modulos/paquetes/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22362249257150f379b6e90-96737909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fd0729c18186101cbee731aa40ebacb15de9af7' => 
    array (
      0 => 'templates/plantillas/modulos/paquetes/panel.tpl',
      1 => 1460998343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22362249257150f379b6e90-96737909',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57150f379bc817_61033032',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57150f379bc817_61033032')) {function content_57150f379bc817_61033032($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Paquetes de publicidad</h1>
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
						<label for="txtNombre" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-5">
							<input type="text" id="txtNombre" name="txtNombre" autofocus="true" class="form-control" autocomplete="false" maxlength="45" />
						</div>
					</div>
					<div class="form-group">
						<label for="txtDescripcion" class="col-sm-2 control-label">Descripción</label>
						<div class="col-sm-5">
							<textarea class="form-control" id="txtDescripcion" name="txtDescripcion"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="txtPrecio" class="col-sm-2 control-label">Precio</label>
						<div class="col-sm-2">
							<input type="text" id="txtPrecio" name="txtPrecio" class="form-control" autocomplete="false"/>
						</div>
					</div>
					<div class="form-group">
						<label for="selTipo" class="col-sm-2 control-label">Periodo</label>
						<div class="col-sm-2">
							<input type="text" id="txtCantidad" name="txtCantidad" class="form-control" autocomplete="false"/>
						</div>
						<div class="col-sm-3">
							<select id="selTipo" name="selTipo" class="form-control">
								<option value="Días">Días</option>
								<option value="Mes">Meses</option>
								<option value="Anio">Años</option>
							</select>
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