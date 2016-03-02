<?php /* Smarty version Smarty-3.1.11, created on 2015-09-02 09:55:26
         compiled from "templates/plantillas/modulos/usuarios/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21782054955e4995dc08606-44099636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0792779071f81e2ec50c2a73a57f2de0982f47da' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/lista.tpl',
      1 => 1441204041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21782054955e4995dc08606-44099636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55e4995dc351b6_14612996',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
    'tipoUsuario' => 0,
    'tipo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e4995dc351b6_14612996')) {function content_55e4995dc351b6_14612996($_smarty_tpl) {?><div class="box">
	<div class="box-header">
		<h3 class="box-title">Lista de trabajadores</h3>
	</div><!-- /.box-header -->
	<div class="box-body">
		<table id="tblUsuarios" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>CURP</th>
					<th>NIP</th>
					<th>Tipo</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value["obj"]->getId();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value["obj"]->getNombreCompleto();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value["obj"]->getCURP();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value["obj"]->getPass();?>
</td>
						<td>
							<select class="tipo" user="<?php echo $_smarty_tpl->tpl_vars['row']->value['obj']->getId();?>
">
								<?php  $_smarty_tpl->tpl_vars["tipo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tipo"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipoUsuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tipo"]->key => $_smarty_tpl->tpl_vars["tipo"]->value){
$_smarty_tpl->tpl_vars["tipo"]->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value['idTipo'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['user']->getTipo()==$_smarty_tpl->tpl_vars['tipo']->value['idTipo']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['tipo']->value['descripcion'];?>

								<?php } ?>
							</select>
						</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" trabajador="<?php echo $_smarty_tpl->tpl_vars['row']->value['obj']->getId();?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>