<?php
global $objModulo;

switch($objModulo->getId()){
	case 'listaPublicidad':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from publicidad where idUsuario = ".$_POST['abogado']." order by prioridad desc, inicio desc, fin desc");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cpublicidad':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TPublicidad($_POST['id']);
						
				$obj->setPrioridad($_POST['prioridad']);
				$obj->setInicio($_POST['inicio']);
				$obj->setFin($_POST['fin']);
				
				echo json_encode(array("band" => $obj->guardar($_POST['abogado'])));
			break;
			case 'del':
				$obj = new TPublicidad($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>