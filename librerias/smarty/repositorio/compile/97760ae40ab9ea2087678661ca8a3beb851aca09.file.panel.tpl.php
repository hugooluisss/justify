<?php /* Smarty version Smarty-3.1.11, created on 2016-02-26 09:51:37
         compiled from "templates/plantillas/modulos/examenes/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98020596955e8647cc277a2-50622467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97760ae40ab9ea2087678661ca8a3beb851aca09' => 
    array (
      0 => 'templates/plantillas/modulos/examenes/panel.tpl',
      1 => 1456501892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98020596955e8647cc277a2-50622467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55e8647cc44316_54729413',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e8647cc44316_54729413')) {function content_55e8647cc44316_54729413($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de exámenes</h1>
	</div>
</div>

<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Agregar / Modificar</h3>
		</div>
		<div class="box-body">			
			<div class="form-group">
				<label for="txtNombre" class="col-lg-2">Nombre</label>
				<div class="col-lg-10">
					<input type="text" id="txtNombre" name="txtNombre" autofocus="true" class="form-control" autocomplete="false" maxlength="50">
				</div>
			</div>
			<div class="form-group">
				<label for="txtPeriodo" class="col-lg-2">Periodo</label>
				<div class="col-lg-3">
					<input type="text" id="txtPeriodo" name="txtPeriodo" class="form-control" autocomplete="false" maxlength="15">
				</div>
			</div>
			<div class="form-group">
				<label for="txtDescripcion" class="col-lg-2">Descripción</label>
				<div class="col-lg-8">
					<textarea id="txtDescripcion" name="txtDescripcion" class="form-control"></textarea>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="reset" class="btn btn-default">Cancelar</button>
			<button type="submit" class="btn btn-info pull-right">Guardar</button>
			<input type="hidden" id="id"/>
		</div>
	</div>
</form>

<div id="dvLista">
</div><?php }} ?>