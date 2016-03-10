<?php /* Smarty version Smarty-3.1.11, created on 2015-11-19 10:28:22
         compiled from "templates/plantillas/modulos/reactivos/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196911784255eefbb0140920-04287445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c8754d04357f0ec7765f0395ef9ffca4a3909e5' => 
    array (
      0 => 'templates/plantillas/modulos/reactivos/lista.tpl',
      1 => 1447950490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196911784255eefbb0140920-04287445',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55eefbb01deb88_69353084',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eefbb01deb88_69353084')) {function content_55eefbb01deb88_69353084($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblReactivos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th style="width: 10%">#</th>
					<th style="width: 55%">Instrucción</th>
					<th style="width: 10%">Valor</th>
					<th style="width: 10%">Posición</th>
					<th style="width: 15%">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idReactivo'];?>
</td>
						<td><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['row']->value['instrucciones']);?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['valor'];?>
</td>
						<td>
							<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['posicion'];?>
" valAnterior="<?php echo $_smarty_tpl->tpl_vars['row']->value['posicion'];?>
" objeto="<?php echo $_smarty_tpl->tpl_vars['row']->value['idReactivo'];?>
" style="width: 100%; text-align: right" class="posicion"/>
							</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-default btn-circle" action="reactivos" title="Administración de respuestas" objeto="<?php echo $_smarty_tpl->tpl_vars['row']->value['idReactivo'];?>
"><i class="fa fa-genderless"></i></button>
							<button type="button" class="btn btn-default btn-circle" action="modificar" title="Modificar" objeto="<?php echo $_smarty_tpl->tpl_vars['row']->value['idReactivo'];?>
"><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" objeto="<?php echo $_smarty_tpl->tpl_vars['row']->value['idReactivo'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>