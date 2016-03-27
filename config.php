<?php
define('SISTEMA', 'Justify');
define('VERSION', 'v 1.0');
define('ALIAS', '');
define('AUTOR', 'Hugo Luis Santiago Altamirano');
define('EMAIL', 'hugooluisss@gmail.com');
define('EMAILSOPORTE', 'hugooluisss@gmail.com');
define('STATUS', 'En desarrollo');

define('LAYOUT_DEFECTO', 'layout/default.tpl');
define('LAYOUT_AJAX', 'layout/update.tpl');

#Login y su controlador	
$conf['inicio'] = array(
	'descripcion' => '',
	'seguridad' => false,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('login.js'),
	'capa' => 'layout/login.tpl');

$conf['logout'] = array(
	'controlador' => 'login.php',
	#'vista' => 'usuarios/panel.tpl',
	'descripcion' => 'Salir del sistema',
	'seguridad' => false,
	'js' => array(),
	'capa' => LAYOUT_DEFECTO);

#localidades
$conf['localidad'] = array(
	'controlador' => 'localidad.php',
	'descripcion' => 'Lista de localidades',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
#Login y su controlador	
$conf['clogin'] = array(
	'controlador' => 'login.php',
	'descripcion' => 'Inicio de sesion',
	'seguridad' => false,
	'capa' => LAYOUT_AJAX);

$conf['panelPrincipal'] = array(
	#'controlador' => 'index.php',
	'vista' => 'inicio.tpl',
	'descripcion' => 'Vista del panel',
	'seguridad' => true,
	'js' => array(),
	'capa' => LAYOUT_DEFECTO);
	
$conf['panel'] = array(
	#'controlador' => 'index.php',
	'vista' => 'usuarios/panel.tpl',
	'descripcion' => 'Vista del panel',
	'seguridad' => true,
	'js' => array(),
	'capa' => LAYOUT_DEFECTO);

$conf['usuarios'] = array(
	'vista' => 'usuarios/panel.tpl',
	'descripcion' => 'Administración de usuarios',
	'seguridad' => true,
	'js' => array('usuario.class.js', "administrador.class.js"),
	'jsTemplate' => array('usuarios.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaUsuarios'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/lista.tpl',
	'descripcion' => 'Lista de usuarios',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cusuarios'] = array(
	'controlador' => 'usuarios.php',
	'descripcion' => 'Controlador de usuarios',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

/*Catalogo*/
/*Especialidad*/
$conf['especialidades'] = array(
	'vista' => 'especialidades/panel.tpl',
	'descripcion' => 'Administración de especilidades',
	'seguridad' => true,
	'js' => array('especialidad.class.js'),
	'jsTemplate' => array('especialidades.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaEspecialidades'] = array(
	'controlador' => 'especialidades.php',
	'vista' => 'especialidades/lista.tpl',
	'descripcion' => 'Lista de especialidades',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cespecialidad'] = array(
	'controlador' => 'especialidades.php',
	'descripcion' => 'Controlador de especialidades',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

/*Abogados*/
$conf['abogados'] = array(
	'vista' => 'abogados/panel.tpl',
	'controlador' => 'abogados.php',
	'descripcion' => 'Administración de usuarios',
	'seguridad' => true,
	'js' => array('usuario.class.js', "abogado.class.js"),
	'jsTemplate' => array('abogados.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaAbogados'] = array(
	'controlador' => 'abogados.php',
	'vista' => 'abogados/lista.tpl',
	'descripcion' => 'Lista de abogados',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cabogados'] = array(
	'controlador' => 'abogados.php',
	'descripcion' => 'Controlador de abogados',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
?>