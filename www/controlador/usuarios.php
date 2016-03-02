<?php
global $objModulo;

switch($objModulo->getId()){
	case 'listaUsuarios':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select num_personal from usuario");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, array("obj" => new TTrabajador($rs->fields['num_personal']), "user" => new TUsuario($rs->fields['num_personal'])));
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
		
		$rs = $db->Execute("select * from tipoUsuario");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("tipoUsuario", $datos);
	break;
	case 'cusuarios':
		switch($objModulo->getAction()){
			case 'autocomplete':
				$db = TBase::conectaDB("sip");
				$rs = $db->Execute("select num_personal from ficha_personal 
					where nombres like '%".$_GET['term']."%' 
						or apellido_p like '%".$_GET['term']."%' 
						or apellido_m like '%".$_GET['term']."%'
						or concat(nombres, ' ', apellido_p, ' ', apellido_m) like '%".$_GET['term']."%'
						or concat(apellido_p, ' ', apellido_m, ' ', nombres) like '%".$_GET['term']."%'
				");
				
				$obj = new TTrabajador;
				$datos = array();
				while(!$rs->EOF){
					$el = array();
					
					$obj->setId($rs->fields['num_personal']);
					$el['id'] = $obj->getId();
					$el['label'] = $obj->getNombreCompleto();
					$el['nip'] = $obj->getPass() <> '';
					$el['identificador'] = $obj->getId();
					
					array_push($datos, $el);
					$rs->moveNext();
				}
				
				echo json_encode($datos);
			break;
			case 'add':
				$obj = new TUsuario($_POST['num_personal']);
				
				echo json_encode(array("band" => $obj->add()));
			break;
			case 'del':
				$obj = new TUsuario($_POST['usuario']);
				echo json_encode(array("band" => $obj->del()));
			break;
			case 'setPerfil':
				$obj = new TUsuario($_POST['usuario']);
				echo json_encode(array("band" => $obj->setTipo($_POST["tipo"])));
			break;
			case 'getFoto':
		        $ancho = $_GET["ancho"] == ''?25:$_GET["ancho"]; 
		        $alto = $_GET["alto"] == ''?25:$_GET["alto"]; 
		        
		        $fuente = @imagecreatefromjpeg(str_replace(" ", "%20", $datosPlantilla['urlFotosTrabajadores'].$sesion['fotografia']));
		        $imgAncho = imagesx ($fuente); 
				$imgAlto =imagesy($fuente); 
				$imagen = imagecreatetruecolor($ancho,$alto); 
				
				imagecopyresampled($imagen,$fuente,0,0,0,0,$ancho,$alto,$imgAncho,$imgAlto); 
				
				Header("Content-type: image/jpg"); 
				imagejpeg($imagen);
			break;
		}
	break;
}
?>