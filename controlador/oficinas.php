<?php
global $objModulo;

switch($objModulo->getId()){
	case 'oficinas':
		$smarty->assign("abogado", $_GET['id']);
	break;
	case 'listaOficinas':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from oficina where idUsuario = ".$_POST['id']);
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'coficinas':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TOficina($_POST['id']);
						
				$obj->setDireccion($_POST['direccion']);
				$obj->setLatitud($_POST['latitud']);
				$obj->setLongitud($_POST['longitud']);
				$obj->setTelefono($_POST['telefono']);
				$obj->setAbogado($_POST['abogado']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TOficina($_POST['id']);
				
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>