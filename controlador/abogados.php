<?php
global $objModulo;

switch($objModulo->getId()){
	case 'abogados':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from especialidad order by nombre");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("especialidades", $datos);
	break;
	case 'listaAbogados':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select a.* from usuario a where idPerfil = 2");
		$datos = array();
		while(!$rs->EOF){
			$rsEsp = $db->Execute("select idEspecialidad from abogadoespecialidad where idAbogado = ".$rs->fields['idUsuario']);
			$rs->fields["especialidades"] = array();
			while(!$rsEsp->EOF){
				array_push($rs->fields["especialidades"], $rsEsp->fields);
				$rsEsp->moveNext();
			}
			
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cabogados':
		switch($objModulo->getAction()){
			case 'addEspecialidad':
				$obj = new TAbogado;
				$obj->setId($_POST['abogado']);
				
				echo json_encode(array("band" => $obj->addEspecialidad($_POST['especialidad'])));
			break;
			case 'delEspecialidad':
				$obj = new TAbogado;
				$obj->setId($_POST['abogado']);
				
				echo json_encode(array("band" => $obj->delEspecialidad($_POST['especialidad'])));
			break;
		}
	break;
}
?>