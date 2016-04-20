<?php
/**
* TPublicidad
* Para el control de la publicidad de los abogados
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/
class TPublicidad{
	private $idPublicidad;
	private $idAbogado;
	private $paquete;
	private $inicio;
	private $estado;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TPublicidad($id = ''){
		$this->setId($id);
		
		return true;
	}
	
	/**
	* Carga los datos del objeto
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	public function setId($id = ''){
		if ($id == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from publicidad where idPublicidad = ".$id);
		
		if ($rs->EOF) return false;
		
		foreach($rs->fields as $key => $val){
			switch($key){
				case 'idPaquete':
					$this->paquete = new TPaquete($val);
				break;
				default:
					$this->$key = $val;
			}
		}
		
		return true;
	}
	
	/**
	* Retorna el identificador
	*
	* @autor Hugo
	* @access public
	* @return integer Identificador
	*/
	
	public function getId(){
		return $this->idPublicidad;
	}
		
	/**
	* Establece la fecha de inicio
	*
	* @autor Hugo
	* @access public
	* @param date $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setInicio($val = ''){
		$this->inicio = $val;
		return true;
	}
	
	/**
	* Retorna la fecha de inicio
	*
	* @autor Hugo
	* @access public
	* @return date Fecha
	*/
	
	public function getInicio(){
		return $this->inicio;
	}
	
	/**
	* Establece el paquete
	*
	* @autor Hugo
	* @access public
	* @param date $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPaquete($val = ''){
		$this->paquete = new TPaquete($val);
		
		return true;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar($abogado = 0){
		if ($abogado == '' or $abogado == 0) return false;
		if ($this->paquete->getId() == '') return false;
		
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO publicidad(idUsuario, idPaquete, estado) VALUES('".$abogado."', ".$this->paquete->getId().", 'A');");
			if (!$rs) return false;
			
			$this->idPublicidad = $db->Insert_ID();
		}
		
		if ($this->idPublicidad == '')
			return false;
		
		$fin = $this->paquete->getTermina($this->getInicio());
		$rs = $db->Execute("UPDATE publicidad
			SET
				inicio = '".$this->getInicio()."',
				fin = '".$fin."'
			WHERE idPublicidad = ".$this->getId());
			
		return $rs?true:false;
	}
	
	/**
	* Elimina el objeto de la base de datos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("delete from publicidad where idPublicidad = ".$this->getId());
		
		return $rs?true:false;
	}
}