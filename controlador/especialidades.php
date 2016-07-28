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
			case 'getLista':
				$db = TBase::conectaDB();
				$datos = array();
				
				if ($_POST['id'] == ''){
					$rs = $db->Execute("select a.*, sum(if (b.idEspecialidad is null, 0, 1)) as total from especialidad a left join abogadoespecialidad b using(idEspecialidad) 
left join oficina c on b.idAbogado = c.idUsuario left join publicidad d using(idUsuario) where d.estado = 'A' group by a.idEspecialidad order by nombre desc");
				
					while(!$rs->EOF){
						if ($rs->fields['idAbogado'] == '')
							$rs->fields['agregado'] = 'no';
						else
							$rs->fields['agregado'] = 'si';
							
						array_push($datos, $rs->fields);
						$rs->moveNext();
					}
				}else{
					$rs = $db->Execute("select * from especialidad");
					
					while(!$rs->EOF){
						$rsAux = $db->Execute("select * from abogadoespecialidad where idAbogado = ".$_POST['id']." and idEspecialidad = ".$rs->fields['idEspecialidad']);
						
						if ($rsAux->EOF)
							$rs->fields['agregado'] = 'no';
						else
							$rs->fields['agregado'] = 'si';
							
						array_push($datos, $rs->fields);
						$rs->moveNext();
					}
				}
				
				echo json_encode($datos);
			break;
		}
	break;
}
?>