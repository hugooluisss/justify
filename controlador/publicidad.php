<?php
global $objModulo;

switch($objModulo->getId()){
	case 'listaPublicidad':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from publicidad a join paquete b using(idPaquete) where idUsuario = ".$_POST['abogado']." order by inicio desc, fin desc");
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
						
				$obj->setPaquete($_POST['paquete']);
				$obj->setInicio($_POST['inicio']);
				
				echo json_encode(array("band" => $obj->guardar($_POST['abogado'])));
			break;
			case 'del':
				$obj = new TPublicidad($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
			case 'get':
				$db = TBase::conectaDB();
				
				$rs = $db->Execute("select * from publicidad a join paquete b using(idPaquete) where idUsuario = ".$_POST['abogado']." and estado = 'A' and now() between inicio and fin");
				
				$rs->fields['band'] = ($rs->EOF)?false:true;
				echo json_encode($rs->fields);
			break;
			case 'pago':
				$paquete = new TPaquete($_POST['paquete']);
				$abogado = new TAbogado($_POST['abogado']);
				global $ini;
				
				try{
					Conekta::setApiKey($ini['conekta']['private']);
					Conekta::setLocale('es');
					
					$charge = Conekta_Charge::create(array(
							'description'=> 'Suscripción '.$paquete->getNombre(),
							'amount'=> $paquete->getPrecio() * 100,
							'currency'=> "MXN",
							'card'=> $_POST['token'],
							'details'=> array(
								'name'=> $abogado->getNombre(),
								'phone'=> $abogado->getTelefono() == ''?'0105155555':$abogado->getTelefono(),
								'email'=> $abogado->getEmail(),
								'line_items'=> array(
									array(
										'name'=> $paquete->getNombre(),
										'description'=> $paquete->getDescripcion(),
										'unit_price'=> $paquete->getPrecio() * 100,
										'quantity'=> 1,
										'sku'=> $paquete->getId(),
										'type'=> 'suscripcion'
									)
								),
								'billing_address'=> array(
									'street1'=> $abogado->getDireccion(),
									'street2'=> '',
									'street3'=> null,
									'city'=> '',
									'state'=>'',
									'zip'=> '',
									'country'=> 'Mexico',
									'email'=> $abogado->getEmail()
								),
								'shipment'=> array(
									'carrier'=> 'estafeta',
									'service'=> 'international',
									'price'=> 0.00,
									'address'=> array(
										'street1'=> '.',
										'street2'=> null,
										'street3'=> null,
										'city'=> '.',
										'state'=> '.',
										'zip'=> '.',
										'country'=> 'Mexico'
									)
								)
							)
						)
					);
					
					if ($charge->status == 'paid'){
						$obj = new TPublicidad();
						
						$obj->setPaquete($paquete->getId());
						$obj->setInicio(date("Y-m-d"));
						
						echo json_encode(array("band" => $obj->guardar($abogado->getId())));
						
						$result = array("band" => true);
					}else
						$result = array("band" => false, "mensaje" => "El pago fue rechazado");
					
				}catch(Exception $e){
					$result = array("band" => false, "mensaje" => $e->getMessage());
				}
				
				echo json_encode($result);
			break;
		}
	break;
}
?>