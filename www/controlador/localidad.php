<?php
global $objModulo;

switch($objModulo->getId()){
	case 'localidad':
		switch($objModulo->getAction()){
			case 'autocomplete':
				$db = TBase::conectaDB();
				$rs = $db->Execute("select idLocalidad, a.nombre as localidad, b.nombre as municipio, c.nombre as estado
from localidad a join municipio b using(idMunicipio) join estado c using(idEstado) where a.nombre like '%".$_GET['term']."%' or b.nombre like '%".$_GET['term']."%' or c.nombre like '%".$_GET['term']."%' or concat(c.nombre, ', ', b.nombre, ', ', a.nombre) like '%".$_GET['term']."%' limit 500");
				
				$datos = array();
				while(!$rs->EOF){
					$el = array();
					$el['id'] = $rs->fields['idLocalidad'];
					$el['label'] = $rs->fields['estado'].', '.$rs->fields['municipio'].', '.$rs->fields['localidad'];
					$el['identificador'] = $rs->fields['idLocalidad'];
					foreach($rs->fields as $key => $val)
						$el[$key] = $val;
						
					array_push($datos, $el);
					$rs->moveNext();
				}
				
				echo json_encode($datos);
			break;
		}
	break;
}
?>