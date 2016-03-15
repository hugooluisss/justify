<?php
global $objModulo;

switch($objModulo->getId()){
	case 'listaEspecialidades':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from especialidad");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cespecialidad':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TEspecialidad($_POST['id']);
						
				$obj->setNombre($_POST['nombre']);
				$obj->setDescripcion($_POST['descripcion']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TEspecialidad($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>