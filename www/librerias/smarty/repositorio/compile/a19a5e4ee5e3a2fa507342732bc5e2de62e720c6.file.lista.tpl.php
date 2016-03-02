<?php /* Smarty version Smarty-3.1.11, created on 2015-10-28 14:01:54
         compiled from "templates/plantillas/modulos/secciones/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149130008561ff7a5cea7b0-53406087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a19a5e4ee5e3a2fa507342732bc5e2de62e720c6' => 
    array (
      0 => 'templates/plantillas/modulos/secciones/lista.tpl',
      1 => 1446062510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149130008561ff7a5cea7b0-53406087',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_561ff7a5e83515_77305868',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561ff7a5e83515_77305868')) {function content_561ff7a5e83515_77305868($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblSecciones" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idSeccion'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-default" action="modificar" title="Modificar" datos='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['json'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" seccion="<?php echo $_smarty_tpl->tpl_vars['row']->value['idSeccion'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>