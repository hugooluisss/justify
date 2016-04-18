<?php
global $objModulo;

switch($objModulo->getId()){
	case 'clientes':
	break;
	case 'listaClientes':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from usuario a join cliente b using(idUsuario) where idPerfil = 3");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cclientes':
		switch($objModulo->getAction()){
			case 'getData':
				$db = TBase::conectaDB();
				$rs = $db->Execute("select * from usuario a join cliente b using(idUsuario) where idUsuario = ".$_POST['id']);
				
				echo json_encode($rs->fields);
			break;
			case 'guardar':
				$obj = new TCliente();
				
				$obj->setId($_POST['id']);
				$obj->setTelefono($_POST['telefono']);
				$obj->setCelular($_POST['celular']);
				$obj->setNombre($_POST['nombre']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
		}
	break;
}
?>