<?php /* Smarty version Smarty-3.1.11, created on 2016-03-31 01:25:51
         compiled from "templates/plantillas/modulos/oficinas/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138874068256fcd01e20c5d3-34127782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca34957118e54e332c3667b52384a84727b61267' => 
    array (
      0 => 'templates/plantillas/modulos/oficinas/panel.tpl',
      1 => 1459409106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138874068256fcd01e20c5d3-34127782',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56fcd01e264091_47508650',
  'variables' => 
  array (
    'abogado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fcd01e264091_47508650')) {function content_56fcd01e264091_47508650($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Oficinas</h1>
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
						<label for="txtDireccion" class="col-sm-2 control-label">Dirección</label>
						<div class="col-sm-5">
							<textarea class="form-control" id="txtDireccion" name="txtDireccion"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="txtLatitud" class="col-sm-2 control-label">Latitud</label>
						<div class="col-sm-3">
							<input class="form-contro" autocomplete="off" id="txtLatitud" name="txtLatitud" />
						</div>
					</div>
					<div class="form-group">
						<label for="txtLongitud" class="col-sm-2 control-label">Longitud</label>
						<div class="col-sm-3">
							<input class="form-contro" autocomplete="off" id="txtLongitud" name="txtLongitud" />
						</div>
					</div>
					<div class="form-group">
						<label for="txtTelefono" class="col-sm-2 control-label">Teléfono</label>
						<div class="col-sm-3">
							<input class="form-contro" autocomplete="off" id="txtTelefono" name="txtTelefono" />
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
					<input type="hidden" id="abogado" value="<?php echo $_smarty_tpl->tpl_vars['abogado']->value;?>
"/>
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>