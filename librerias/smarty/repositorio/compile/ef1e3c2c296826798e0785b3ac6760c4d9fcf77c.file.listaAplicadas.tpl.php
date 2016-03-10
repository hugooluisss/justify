<?php /* Smarty version Smarty-3.1.11, created on 2016-02-23 11:11:50
         compiled from "templates/plantillas/modulos/examenes/dashboard/listaAplicadas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89150604756c6050b48efa3-25841724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef1e3c2c296826798e0785b3ac6760c4d9fcf77c' => 
    array (
      0 => 'templates/plantillas/modulos/examenes/dashboard/listaAplicadas.tpl',
      1 => 1456247496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89150604756c6050b48efa3-25841724',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56c6050b4b7ed1_12254130',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c6050b4b7ed1_12254130')) {function content_56c6050b4b7ed1_12254130($_smarty_tpl) {?><table id="tblSecciones" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Sección</th>
			<th>Nombre</th>
			<th>Plantel</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['seccion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idPlantel'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['inicio'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fin'];?>
</td>
				<td class="text-right">
					<button type="button" class="btn btn-info" action="exportar" title="Exportar" aplicacion=<?php echo $_smarty_tpl->tpl_vars['row']->value['idAplicacion'];?>
><i class="fa fa-file"></i></button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>