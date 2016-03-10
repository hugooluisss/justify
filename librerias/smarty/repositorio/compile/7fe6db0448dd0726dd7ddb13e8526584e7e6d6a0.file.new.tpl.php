<?php /* Smarty version Smarty-3.1.11, created on 2015-09-03 12:09:45
         compiled from "templates/plantillas/modulos/examenes/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120604437855e8740190b3b4-95745839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fe6db0448dd0726dd7ddb13e8526584e7e6d6a0' => 
    array (
      0 => 'templates/plantillas/modulos/examenes/new.tpl',
      1 => 1441300180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120604437855e8740190b3b4-95745839',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55e87401985867_75553500',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e87401985867_75553500')) {function content_55e87401985867_75553500($_smarty_tpl) {?><form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Agregar / Modificar</h3>
		</div>
		<div class="box-body">			
			<div class="form-group">
				<label for="txtNombre" class="col-lg-2">Nombre</label>
				<div class="col-lg-10">
					<input type="text" id="txtNombre" name="txtNombre" autofocus="true" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="txtPeriodo" class="col-lg-2">Periodo</label>
				<div class="col-lg-3">
					<input type="text" id="txtPeriodo" name="txtPeriodo" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="txtHoras" class="col-lg-2">Tiempo</label>
				<div class="col-lg-2">
					<input type="text" id="txtHoras" name="txtHoras" class="form-control">
				</div>
				<div class="col-lg-2">
					<input type="text" id="txtMinutos" name="txtMinutos" class="form-control">
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
			<button type="button" class="btn btn-default">Cancelar</button>
			<button type="submit" class="btn btn-info pull-right">Guardar</button>
		</div>
	</div>
</form><?php }} ?>