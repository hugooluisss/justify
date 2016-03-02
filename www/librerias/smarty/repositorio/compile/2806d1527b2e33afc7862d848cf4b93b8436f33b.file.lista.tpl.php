<?php /* Smarty version Smarty-3.1.11, created on 2015-09-08 09:35:30
         compiled from "templates/plantillas/modulos/multimedia/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165976055655eee965a97582-63371662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2806d1527b2e33afc7862d848cf4b93b8436f33b' => 
    array (
      0 => 'templates/plantillas/modulos/multimedia/lista.tpl',
      1 => 1441722927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165976055655eee965a97582-63371662',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55eee965ad7ec1_69328998',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eee965ad7ec1_69328998')) {function content_55eee965ad7ec1_69328998($_smarty_tpl) {?><ul class="media-list">
<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
	<li class="media">
		<a class="pull-left" href="#">
			<img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['miniatura'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
">
		</a>
		<div class="media-body">
			<h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</h4>
			<span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['row']->value['real'];?>
</span>
			<div class="pull-right">
				<button type="button" class="btn btn-danger btn-circle btn-xs" action="eliminar" title="Eliminar" nombre='<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
'><i class="fa fa-remove"></i> Eliminar</button>
			</div>
		</div>
	</li>
<?php }
if (!$_smarty_tpl->tpl_vars["row"]->_loop) {
?>
	<li>Sin objetos en el repositorio</li>
<?php } ?>
</ul><?php }} ?>