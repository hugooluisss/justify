<?php /* Smarty version Smarty-3.1.11, created on 2016-03-01 11:57:40
         compiled from "templates/plantillas/modulos/opciones/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154530910155f19c0bec51b9-80376865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '308c2aad5ebe12dbea471c7b284fb7db9b3966fd' => 
    array (
      0 => 'templates/plantillas/modulos/opciones/lista.tpl',
      1 => 1456855057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154530910155f19c0bec51b9-80376865',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55f19c0bf0b351_85721230',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
    'respuesta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f19c0bf0b351_85721230')) {function content_55f19c0bf0b351_85721230($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblOpciones" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th style="width: 10%">#</th>
					<th style="width: 45%">Texto</th>
					<th style="width: 10%">Posición</th>
					<th style="width: 10%">¿Es respuesta?</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idOpcion'];?>
</td>
						<td><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['row']->value['texto']);?>
</td>
						<td>
							<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['posicion'];?>
" valAnterior="<?php echo $_smarty_tpl->tpl_vars['row']->value['posicion'];?>
" objeto="<?php echo $_smarty_tpl->tpl_vars['row']->value['idOpcion'];?>
" style="width: 100%; text-align: right" class="posicion"/>
						</td>
						<td class="text-center">
							<input type="checkbox" opcion=<?php echo $_smarty_tpl->tpl_vars['row']->value['idOpcion'];?>
 <?php if ($_smarty_tpl->tpl_vars['respuesta']->value==$_smarty_tpl->tpl_vars['row']->value['idOpcion']){?>checked<?php }?>>
						</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-default btn-circle" action="modificar" title="Modificar" objeto="<?php echo $_smarty_tpl->tpl_vars['row']->value['idOpcion'];?>
"><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" objeto="<?php echo $_smarty_tpl->tpl_vars['row']->value['idOpcion'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>