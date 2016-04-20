<?php
global $objModulo;

switch($objModulo->getId()){
	case 'listaPaquetes':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from paquete");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cpaquete':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TPaquete($_POST['id']);
						
				$obj->setNombre($_POST['nombre']);
				$obj->setDescripcion($_POST['descripcion']);
				$obj->setPrecio($_POST['precio']);
				$obj->setTipo($_POST['tipo']);
				$obj->setCantidad($_POST['cantidad']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TPaquete($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
			case 'get':
				$db = TBase::conectaDB();
				
				$rs = $db->Execute("select * from paquete");
				$datos = array();
				while(!$rs->EOF){
					array_push($datos, $rs->fields);
					$rs->moveNext();
				}
				
				echo json_encode($datos);
			break;
		}
	break;
}
?>