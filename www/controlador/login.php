<?php
global $objModulo;

switch($objModulo->getId()){
	case 'logout':
		unset($_SESSION['usuario']);
		session_destroy();
		
		header('Location: index.php');
	break;
	default:
		switch($objModulo->getAction()){
			case 'login': case 'validarCredenciales':
				$db = TBase::conectaDB("sip");
				
				$rs = $db->Execute("select num_personal, nip from ficha_personal where upper(curp) = upper('".$_POST['usuario']."') and estatus_laboral = 1");
				
				$result = array('band' => false, 'mensaje' => 'Error al consultar los datos');
				if($rs->EOF)
					$result = array('band' => false, 'mensaje' => 'La CURP no es válida'); 
				elseif(strtoupper($rs->fields['nip']) <> strtoupper($_POST['pass']))
					$result = array('band' => false, 'mensaje' => 'NIP inválido');
				else{
					$obj = new TUsuario($rs->fields['num_personal']);
					if ($obj->getId() == '')
						$result = array('band' => false, 'mensaje' => 'Acceso denegado');
					else
						$result = array('band' => true);
				}
					
				
				if($result['band']){
					$obj = new TUsuario($rs->fields['num_personal']);
					$sesion['usuario'] = 			$obj->getId();
					$sesion['navegador'] = 			$obj->getNavegador();
					$sesion['sistemaOperativo'] = 	$obj->getSistemaOperativo();
					$sesion['fotografia'] = 		$obj->getFoto();
					
					$_SESSION[SISTEMA] = $sesion;
				}
				
				echo json_encode($result);
			break;
			case 'logout':
				$_SESSION[SISTEMA] = array();
				session_destroy();
				
				header ("Location: index.php");
			break;
		}
	break;
}
?>