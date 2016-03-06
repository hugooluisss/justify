<?php
global $objModulo;

switch($objModulo->getId()){
	case 'listaUsuarios':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select a.*, concat(d.nombre, ', ', c.nombre, ', ', b.nombre) as localidad from usuario a join localidad b using(idLocalidad) join municipio c using(idMunicipio) join estado d using(idEstado) where idPerfil = 1");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'abogados':
		$db = TBase::conectaDB();
	break;
	case 'listaAbogados':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select a.*, concat(d.nombre, ', ', c.nombre, ', ', b.nombre) as localidad from usuario a join abogado aa using(idUsuario) join localidad b using(idLocalidad) join municipio c using(idMunicipio) join estado d using(idEstado) where idPerfil = 1");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cusuarios':
		switch($objModulo->getAction()){
			case 'add':
				switch($_POST['perfil']){
					case 1: #administrador
						$obj = new TUsuario($_POST['id']);
						
						$obj->setPerfil($_POST['perfil']);
						$obj->setEmail($_POST['email']);
						$obj->setNombre($_POST['nombre']);
						$obj->setSexo($_POST['sexo']);
						$obj->setLocalidad($_POST['localidad']);
						$obj->setStatus("A");
					break;
				}
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TUsuario($_POST['usuario']);
				echo json_encode(array("band" => $obj->eliminar()));
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