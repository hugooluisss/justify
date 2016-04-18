<?php
global $objModulo;

switch($objModulo->getId()){
	case 'cmensajes':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TMensaje($_POST['id']);
						
				$obj->setRemitente($_POST['remitente']);
				$obj->setDestinatario($_POST['destinatario']);
				$obj->setMensaje($_POST['mensaje']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'getNewMensajes':
				$db = TBase::conectaDB();
				$rs = $db->Execute("select count(*) as sinLeer from mensaje where leido = 0 and destinatario = ".$_POST['id']);
				
				echo json_encode(array("band" => $rs?true:false, "sinLeer" => $rs->fields['sinLeer']));
			break;
			case 'getListaRemitentes':
				$db = TBase::conectaDB();
				$rs = $db->Execute("select remitente, fecha from mensaje where destinatario =  ".$_POST['id']." group by remitente order by fecha desc;");
				
				$datos = array();
				$usuario = new TUsuario;
				while(!$rs->EOF){
					$usuario->setId($rs->fields['remitente']);
					switch($usuario->perfil->getId()){
						case '2': #abogado
							$aux = $db->Execute("select * from usuario a join abogado b using(idUsuario) where idUsuario = ".$usuario->getId());
							$rs->fields["remitente"] = $aux->fields;
							$rs->fields["remitente"]['tipo'] = $usuario->perfil->getNombre();
						break;
						case '3':
							$aux = $db->Execute("select * from usuario a join cliente b using(idUsuario) where idUsuario = ".$usuario->getId());
							$rs->fields["remitente"] = $aux->fields;
							$rs->fields["remitente"]['tipo'] = $usuario->perfil->getNombre();
						break;
					}
					
					array_push($datos, $rs->fields);
					$rs->moveNext();
				}
				
				echo json_encode($datos);
			break;
			case 'getConversacion':
				$db = TBase::conectaDB();
				
				$rs = $db->Execute("select * from mensaje where (remitente = ".$_POST['usuario1']." and destinatario = ".$_POST['usuario2'].") or (remitente = ".$_POST['usuario2']." and destinatario = ".$_POST['usuario1'].") order by fecha desc");
				
				$datos = array();
				$usuario = new TUsuario;
				while(!$rs->EOF){
					$usuario->setId($rs->fields['remitente']);
					$rs->fields['nombreRemitente'] = $usuario->getNombre(); 
					array_push($datos, $rs->fields);
					$rs->moveNext();
				}
				
				$db->Execute("update mensaje set leido = 1 where destinatario = ".$_POST['usuario1']);
				
				echo json_encode($datos);
			break;
		}
	break;
}
?>