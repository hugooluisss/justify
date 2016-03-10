<?php /*%%SmartyHeaderCode:3593482356d07419a14c16-58009672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88f47345f87357691db158f81dd14f424f0cd759' => 
    array (
      0 => 'templates/plantillas/layout/default.tpl',
      1 => 1455894652,
      2 => 'file',
    ),
    '97760ae40ab9ea2087678661ca8a3beb851aca09' => 
    array (
      0 => 'templates/plantillas/modulos/examenes/panel.tpl',
      1 => 1453387633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3593482356d07419a14c16-58009672',
  'variables' => 
  array (
    'PAGE' => 0,
    'script' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d07419c3e866_54146156',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d07419c3e866_54146156')) {function content_56d07419c3e866_54146156($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>.:: DGI - IEBO ::.</title>
				<link rel="stylesheet" href="templates/dist/css/AdminLTE.css">
		<link rel="stylesheet" type="text/css" href="templates/dist/css/skins/_all-skins.css" />
		
		<link rel="stylesheet" href="templates/bootstrap/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="templates/dist/css/font-awesome.min.css">
		<link rel="stylesheet" href="templates/dist/css/ionicons.min.css">
		
		<link rel="stylesheet/less" type="text/css" href="templates/build/less/skins/_all-skins.less" />
		<link rel="stylesheet" href="templates/plugins/iCheck/flat/blue.css">
		<link rel="stylesheet" href="templates/plugins/morris/morris.css">
		<link rel="stylesheet" href="templates/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
		<link rel="stylesheet" href="templates/plugins/datepicker/datepicker3.css">
		<link rel="stylesheet" href="templates/plugins/daterangepicker/daterangepicker-bs3.css">
		<link rel="stylesheet" href="templates/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
		<link rel="stylesheet" href="templates/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
		<link rel="stylesheet" href="templates/plugins/upload/css/jquery.fileupload.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>
	<body class="hold-transition skin-green-light sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="#" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>D</b>GI</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>D</b>iagnóstico <b>G</b>eneral de <b>I</b>ngreso</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top" role="navigation">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				
				<!-- Navbar Right Menu -->
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<!-- Menu Toggle Button -->
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<!-- hidden-xs hides the username on small devices so only the image appears. -->
								<i class="fa fa-user"></i> <span class="hidden-xs">HUGO LUIS</span>
							</a>
							<ul class="dropdown-menu">
								<!-- The user image in the menu -->
								<li class="user-header">
									<img src="?mod=cusuarios&action=getFoto&ancho=180&alto=180" class="img-circle" alt="User Image"/>
									<p>
										HUGO LUIS SANTIAGO ALTAMIRANO
										<small>SAAH831115HOCNLG04</small>
									</p>
								</li>
								<!-- Menu Body -->
								<li class="user-body">
								</li>
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-right">
										<a href="?mod=logout" class="btn btn-default btn-flat">Salir</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-custom-menu -->
			</nav>
		</header>
		
		
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
			<!-- Sidebar user panel -->
			<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					<li class="header">MENÚ PRINCIPAL</li>
					<li class="active treeview">
						<a href="#">
							<i class="fa fa-cogs"></i> <span>Administración</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li ><a href="?mod=admonUsuarios"><i class="fa fa-user"></i> Usuarios</a></li>
						</ul>
						<a href="?mod=examenes">
							<li class="active"><i class="fa fa-pencil-square-o"></i> Exámenes</li>
						</a>
					</li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>
		
		
		
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>
			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-lg-12">
											<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de exámenes</h1>
	</div>
</div>

<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Agregar / Modificar</h3>
		</div>
		<div class="box-body">			
			<div class="form-group">
				<label for="txtNombre" class="col-lg-2">Nombre</label>
				<div class="col-lg-10">
					<input type="text" id="txtNombre" name="txtNombre" autofocus="true" class="form-control" autocomplete="false">
				</div>
			</div>
			<div class="form-group">
				<label for="txtPeriodo" class="col-lg-2">Periodo</label>
				<div class="col-lg-3">
					<input type="text" id="txtPeriodo" name="txtPeriodo" class="form-control" autocomplete="false">
				</div>
			</div>
			<div class="form-group">
				<label for="txtDescripcion" class="col-lg-2">Descripción</label>
				<div class="col-lg-8">
					<textarea id="txtDescripcion" name="txtDescripcion" class="form-control"></textarea>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="reset" class="btn btn-default">Cancelar</button>
			<button type="submit" class="btn btn-info pull-right">Guardar</button>
			<input type="hidden" id="id"/>
		</div>
	</div>
</form>

<div id="dvLista">
</div>
										</div>
				</div>
			</section><!-- /.content -->
		</div><!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Versión</b> 1.0
			</div>
			<strong>Copyright &copy; 2016 <a href="http://iebo.edu.mx">IEBO</a>.</strong> Todos los derechos reservados
		</footer>
	</div>
    
    
    <!-- jQuery 2.1.4 -->
    <script src="templates/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="templates/plugins/jQueryUI/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="templates/plugins/jQueryUI/jquery-ui.css">
    <!-- Bootstrap 3.3.5 -->
    <script src="templates/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="templates/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="templates/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="templates/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="templates/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="templates/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="templates/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="templates/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="templates/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="templates/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="templates/plugins/fastclick/fastclick.min.js"></script>
    <script type="text/javascript" src="templates/plugins/validate/validate.js"></script>
    
    <link rel="stylesheet" href="templates/plugins/datatables/dataTables.bootstrap.css">
    <script src="templates/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="templates/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="templates/plugins/datatables/lenguaje/ES-mx.js"></script>
    
    <script src="templates/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="templates/plugins/upload/js/jquery.iframe-transport.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="templates/plugins/upload/js/jquery.fileupload.js"></script>
    
    <script type="text/javascript" src="templates/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="templates/plugins/datepicker/locales/bootstrap-datepicker.es.js"></script>
    <link rel="stylesheet" href="templates/plugins/datepicker/datepicker3.css" />
     
    <script src="templates/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="templates/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="templates/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    
    <script src="templates/dist/js/app.js" type="text/javascript"></script>
    
    		<script type="text/javascript" src="javascript/examen.class.js"></script>
			<script type="text/javascript" src="templates/javascript/panelExamenes.js"></script>
	    
        
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
      </body>
</html>
<?php }} ?>