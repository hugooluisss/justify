<?php /* Smarty version Smarty-3.1.11, created on 2016-03-31 08:13:42
         compiled from "templates/plantillas/modulos/oficinas/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20026378656fcd113bae8b6-49737498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77a667e989d8395a19a15cc0eea3a6b426075492' => 
    array (
      0 => 'templates/plantillas/modulos/oficinas/lista.tpl',
      1 => 1459433608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20026378656fcd113bae8b6-49737498',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56fcd113c906a1_87278485',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fcd113c906a1_87278485')) {function content_56fcd113c906a1_87278485($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblOficinas" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Teléfono</th>
					<th>Dirección</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idOficina'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['telefono'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['direccion'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-default btn-circle" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" oficina="<?php echo $_smarty_tpl->tpl_vars['row']->value['idOficina'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>