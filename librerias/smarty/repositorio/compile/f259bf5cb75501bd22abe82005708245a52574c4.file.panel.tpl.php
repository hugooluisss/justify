<?php /* Smarty version Smarty-3.1.11, created on 2016-03-27 12:14:17
         compiled from "templates/plantillas/modulos/abogados/publicidad/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145485866556f81840dbde67-40724763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f259bf5cb75501bd22abe82005708245a52574c4' => 
    array (
      0 => 'templates/plantillas/modulos/abogados/publicidad/panel.tpl',
      1 => 1459102456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145485866556f81840dbde67-40724763',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56f81840dc1814_66099207',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f81840dc1814_66099207')) {function content_56f81840dc1814_66099207($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/justify/librerias/smarty/plugins/modifier.date_format.php';
?><div id="winPublicidad" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-toogle="modal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Publicidad</h1>
			</div>
			<div class="modal-body">
				<ul id="panelPublicidad" class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#listaPublicidad">Registrados</a></li>
					<li><a data-toggle="tab" href="#addPublicidad">Agregar o modificar</a></li>
				</ul>
				
				<div class="tab-content">
					<div id="listaPublicidad" class="tab-pane fade in active">
						<div id="dvLista"></div>
					</div>
					<div id="addPublicidad" class="tab-pane fade in">
						<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
							<div class="box">
								<div class="box-body">
									<div class="form-group">
										<label for="txtInicio" class="col-sm-2 control-label">Inicio</label>
										<div class="col-sm-4">
											<input type="text" id="txtInicio" name="txtInicio" autofocus="true" class="form-control" autocomplete="false" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
"/>
										</div>
									</div>
									<div class="form-group">
										<label for="txtFin" class="col-sm-2 control-label">Fin</label>
										<div class="col-sm-4">
											<input type="text" id="txtFin" name="txtFin" autofocus="true" class="form-control" autocomplete="false" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
"/>
										</div>
									</div>
									<div class="form-group">
										<label for="selPrioridad" class="col-sm-2 control-label">Prioridad</label>
										<div class="col-sm-3">
											<select class="form-control" id="selPrioridad" name="selPrioridad">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
									</div>
								</div>
								<div class="box-footer">
									<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
									<button type="submit" class="btn btn-info pull-right">Guardar</button>
									<input type="hidden" id="id"/>
									<input type="hidden" id="abogado"/>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>
</div><?php }} ?>