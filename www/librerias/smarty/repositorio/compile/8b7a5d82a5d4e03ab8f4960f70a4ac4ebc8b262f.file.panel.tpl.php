<?php /* Smarty version Smarty-3.1.11, created on 2016-03-01 11:30:19
         compiled from "templates/plantillas/modulos/secciones/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1769298952561ff70acc7101-42921076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b7a5d82a5d4e03ab8f4960f70a4ac4ebc8b262f' => 
    array (
      0 => 'templates/plantillas/modulos/secciones/panel.tpl',
      1 => 1456853319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1769298952561ff70acc7101-42921076',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_561ff70ad0edf2_22799160',
  'variables' => 
  array (
    'examen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561ff70ad0edf2_22799160')) {function content_561ff70ad0edf2_22799160($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de secciones</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="btn-toolbar" role="toolbar" aria-label="...">
			<div class="btn-group" role="group" aria-label="...">
				<button type="button" class="btn btn-danger" id="btnRegresar">Regresar</button>
			</div>
			<div class="btn-group" role="group" aria-label="...">
				<button type="button" class="btn btn-default btnSendReactivos"><i class="fa fa-file-code-o"></i> Reactivos</button>
			</div>
		</div>
	</div>
</div>
<br />
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
		</div>
		<div class="form-group">
				<label for="txtHoras" class="col-lg-2">Tiempo (HH:MM)</label>
				<div class="col-lg-1">
					<select id="selHoras" name="selHoras" class="form-control">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cont'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['loop'] = is_array($_loop=24) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['name'] = 'cont';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['total']);
?>
							<option value=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['cont']['index'];?>
><?php echo sprintf("%02d",$_smarty_tpl->getVariable('smarty')->value['section']['cont']['index']);?>

						<?php endfor; endif; ?>
					</select>
				</div>
				<div class="col-lg-1">
					<select id="selMinutos" name="selMinutos" class="form-control">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cont'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['loop'] = is_array($_loop=60) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['name'] = 'cont';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['total']);
?>
							<option value=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['cont']['index'];?>
><?php echo sprintf("%02d",$_smarty_tpl->getVariable('smarty')->value['section']['cont']['index']);?>

						<?php endfor; endif; ?>
					</select>
				</div>
			</div>
		<div class="box-footer">
			<button type="reset" class="btn btn-default">Cancelar</button>
			<button type="submit" class="btn btn-info pull-right">Guardar</button>
			<input type="hidden" id="id"/>
			<input type="hidden" id="examen" value="<?php echo $_smarty_tpl->tpl_vars['examen']->value;?>
"/>
		</div>
	</div>
</form>

<div id="dvLista">
</div><?php }} ?>