<?php /* Smarty version Smarty-3.1.11, created on 2016-01-14 11:04:39
         compiled from "templates/plantillas/modulos/opciones/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111061576955f1940a1340a2-39001866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e5aa272dff97279c754065e5d510aeaeac3a516' => 
    array (
      0 => 'templates/plantillas/modulos/opciones/panel.tpl',
      1 => 1452791077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111061576955f1940a1340a2-39001866',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55f1940a19c968_14833603',
  'variables' => 
  array (
    'pregunta' => 0,
    'reactivo' => 0,
    'examen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f1940a19c968_14833603')) {function content_55f1940a19c968_14833603($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de opciones</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="btn-toolbar" role="toolbar" aria-label="...">
			<button type="button" class="btn btn-default" id="btnRegresar">Regresar</button>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="alert alert-success">
			<p><b>Texto de instrucciones</b></p>
			<?php echo $_smarty_tpl->tpl_vars['pregunta']->value;?>

		</div>
	</div>
</div>
<br />
<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Opciones agregadas</a></li>
  <li><a data-toggle="tab" href="#add">Agregar o Modificar</a></li>
  <li><a data-toggle="tab" href="#multimedia">Multimedia</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">			
					<div class="form-group">
						<label for="txtTexto" class="col-lg-2">Opción</label>
						<div class="col-lg-10">
							<textarea id="txtTexto" name="txtTexto" class="form-control" rows="15" cols=""></textarea>
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
	
	<div id="multimedia" class="tab-pane fade">
		<div class="box">
			<div class="box-body">
				<p>
					<span class="btn btn-success fileinput-button">
						<i class="glyphicon glyphicon-plus"></i>
						<span>Seleccionar archivos...</span>
						<!-- The file input field used as target for the file upload widget -->
						<input id="fileupload" type="file" name="files[]" multiple>
					</span>
				</p>
				<div id="progress" class="progress">
					<div class="progress-bar progress-bar-success"></div>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="box-body" id="dvListaMedios">
			</div>
		</div>
	</div>
</div>

<input type="hidden" id="reactivo" value="<?php echo $_smarty_tpl->tpl_vars['reactivo']->value;?>
"/>
<input type="hidden" id="examen" value="<?php echo $_smarty_tpl->tpl_vars['examen']->value;?>
"/><?php }} ?>