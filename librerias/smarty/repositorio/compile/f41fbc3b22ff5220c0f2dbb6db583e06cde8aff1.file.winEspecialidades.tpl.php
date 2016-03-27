<?php /* Smarty version Smarty-3.1.11, created on 2016-03-27 00:54:57
         compiled from "templates/plantillas/modulos/abogados/winEspecialidades.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9263386756f770e22c8623-80997220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f41fbc3b22ff5220c0f2dbb6db583e06cde8aff1' => 
    array (
      0 => 'templates/plantillas/modulos/abogados/winEspecialidades.tpl',
      1 => 1459061696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9263386756f770e22c8623-80997220',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56f770e22cbc26_75642518',
  'variables' => 
  array (
    'especialidades' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f770e22cbc26_75642518')) {function content_56f770e22cbc26_75642518($_smarty_tpl) {?><div id="winEspecialidades" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-toogle="modal">
    <div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Especialidades</h1>
			</div>
			<div class="modal-body">
				<div class="row">
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['especialidades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<div class="col-xs-12 col-sm-6">
						<div class="checkbox">
							<label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idEspecialidad'];?>
" class="especialidades"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</label>
						</div>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>