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
				$obj->setEncargado($_POST['encargado']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TOficina($_POST['id']);
				
				echo json_encode(array("band" => $obj->eliminar()));
			break;
			case 'listaOficinasJSON':
				$db = TBase::conectaDB();
		
				$rs = $db->Execute("select * from oficina where idUsuario = ".$_POST['abogado']);
				$datos = array();
				while(!$rs->EOF){
					$rs->fields['json'] = json_encode($rs->fields);
					array_push($datos, $rs->fields);
					$rs->moveNext();
				}
				
				echo json_encode($datos);
			break;
			case 'listaOficinasCercanasJSON':
				$db = TBase::conectaDB();
		
				$rs = $db->Execute("select a.*, b.*, c.*, latitud - ".$_POST['latitud']." as latitude2, longitud - ".$_POST['longitud']." as longitud2 from oficina a join abogado b using(idUsuario) join usuario c using(idUsuario) join publicidad d using(idUsuario) where now() between d.inicio and d.fin and d.estado = 'A' order by latitude2, longitud2");
				$datos = array();
				while(!$rs->EOF){
					array_push($datos, $rs->fields);
					$rs->moveNext();
				}
				
				echo json_encode($datos);
			break;
			case 'listaOficinas':
				$db = TBase::conectaDB();
		
				$rs = $db->Execute("select a.*, b.*, c.* from oficina a join abogado b using(idUsuario) join usuario c using(idUsuario) join publicidad d using(idUsuario) where now() between d.inicio and d.fin and d.estado = 'A' and idUsuario in (select idAbogado from abogadoespecialidad where idEspecialidad = ".$_POST['id'].")");
				
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