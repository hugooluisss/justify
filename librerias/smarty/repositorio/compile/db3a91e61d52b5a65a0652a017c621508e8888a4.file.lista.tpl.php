<?php /* Smarty version Smarty-3.1.11, created on 2016-07-12 01:10:40
         compiled from "templates/plantillas/modulos/abogados/publicidad/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86495631056f8221ecb38f3-38423780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db3a91e61d52b5a65a0652a017c621508e8888a4' => 
    array (
      0 => 'templates/plantillas/modulos/abogados/publicidad/lista.tpl',
      1 => 1461178363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86495631056f8221ecb38f3-38423780',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56f8221ed50768_06723335',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f8221ed50768_06723335')) {function content_56f8221ed50768_06723335($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblPublicidad" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Paquete</th>
					<th>Inicio</th>
					<th>Fin</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idPublicidad'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['inicio'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fin'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-default" action="modificar" title="Modificar" publicidad='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" publicidad="<?php echo $_smarty_tpl->tpl_vars['row']->value['idPublicidad'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>