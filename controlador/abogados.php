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
		
		$rs = $db->Execute("select * from usuario a join abogado b using(idUsuario) where idPerfil = 2");
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
			case 'getData':
				$db = TBase::conectaDB();
				$rs = $db->Execute("select * from usuario a join abogado b using(idUsuario) where idUsuario = ".$_POST['id']);
				
				echo json_encode($rs->fields);
			break;
			case 'guardar':
				$obj = new TAbogado();
				
				$obj->setId($_POST['id']);
				$obj->setCurriculum($_POST['curriculum']);
				$obj->setSobreMi($_POST['sobreMi']);
				$obj->setNombre($_POST['nombre']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
		}
	break;
}
?>