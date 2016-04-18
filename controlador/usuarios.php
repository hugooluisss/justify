<?php
global $objModulo;

switch($objModulo->getId()){
	case 'listaUsuarios':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select a.* from usuario a where idPerfil = 1");
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
						$obj->setStatus("A");
					break;
					case 2:
						$obj = new TAbogado($_POST['id']);
						
						$obj->setPerfil(2);
						$obj->setEmail($_POST['email']);
						$obj->setNombre($_POST['nombre']);
						$obj->setSexo($_POST['sexo']);
						$obj->setStatus("A");
						$obj->setTelefono($_POST['telefono']);
						$obj->setCelular($_POST['celular']);
						
					break;
					case 3:
						$obj = new TCliente($_POST['id']);
						
						$obj->setPerfil(3);
						$obj->setEmail($_POST['email']);
						$obj->setNombre($_POST['nombre']);
						$obj->setSexo($_POST['sexo']);
						$obj->setStatus("A");
						$obj->setTelefono($_POST['telefono']);
						$obj->setCelular($_POST['celular']);
						$obj->setNacimiento($_POST['nacimiento']);
					break;
				}
				if($obj->guardar())
					echo json_encode(array("band" => true, "id" => $obj->getId()));
				else
					echo json_encode(array("band" => false));
			break;
			case 'setPass':
				$obj = new TUsuario($_POST['usuario']);
				echo json_encode(array("band" => $obj->setPass($_POST['pass'])));
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
			case 'validaEmail':
				$db = TBase::conectaDB();
				$rs = $db->Execute("select idUsuario from usuario where email = '".$_POST['txtEmail']."'");
				if ($_POST['usuario'] == '')
					echo $rs->EOF?"true":"false";
				elseif ($rs->EOF)
					echo "true";
				else
					echo $rs->fields['idUsuario'] == $_POST['usuario']?"true":"false";

			break;
			case 'uploadImagenPerfil':
				if (file_exists("repositorio/imagenesUsuarios/img_".$_POST['identificador'].".jpg"))
					unlink("repositorio/imagenesUsuarios/img_".$_POST['identificador'].".jpg");
					
				move_uploaded_file($_FILES["file"]["tmp_name"], "repositorio/imagenesUsuarios/img_".$_POST['identificador'].".jpg");
			break;
		}
	break;
}
?>