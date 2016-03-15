<?php /* Smarty version Smarty-3.1.11, created on 2016-03-10 21:11:33
         compiled from "templates/plantillas/modulos/especialidades/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117533295756dc8c4a0ff277-17759507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c187362025173793e7839a06e9a948d1c36ba9f3' => 
    array (
      0 => 'templates/plantillas/modulos/especialidades/lista.tpl',
      1 => 1457636430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117533295756dc8c4a0ff277-17759507',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56dc8c4a198867_41585714',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dc8c4a198867_41585714')) {function content_56dc8c4a198867_41585714($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblEspecialidades" class="table table-bordered table-hover">
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idEspecialidad'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-default btn-circle" action="modificar" title="Modificar" especialidad='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" especialidad="<?php echo $_smarty_tpl->tpl_vars['row']->value['idEspecialidad'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>