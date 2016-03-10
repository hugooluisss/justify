<?php /* Smarty version Smarty-3.1.11, created on 2016-02-26 09:49:45
         compiled from "templates/plantillas/modulos/examenes/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165279849056d07419c0e591-58091909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97760ae40ab9ea2087678661ca8a3beb851aca09' => 
    array (
      0 => 'templates/plantillas/modulos/examenes/panel.tpl',
      1 => 1453387633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165279849056d07419c0e591-58091909',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d07419c37cb6_25490789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d07419c37cb6_25490789')) {function content_56d07419c37cb6_25490789($_smarty_tpl) {?><div class="row">
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
					<input type="text" id="txtNombre" name="txtNombre" autofocus="true" class="form-control" autocomplete="false">
				</div>
			</div>
			<div class="form-group">
				<label for="txtPeriodo" class="col-lg-2">Periodo</label>
				<div class="col-lg-3">
					<input type="text" id="txtPeriodo" name="txtPeriodo" class="form-control" autocomplete="false">
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