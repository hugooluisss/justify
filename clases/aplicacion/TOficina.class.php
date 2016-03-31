<?php
/**
* TOficina
* Oficina de un abogado
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/
class TOficina{
	private $idOficina;
	private $idUsuario;
	private $direccion;
	private $latitud;
	private $longitud;
	private $telefono;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TOficina($id = ''){
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
		$rs = $db->Execute("select * from oficina where idOficina = ".$id);
		
		if ($rs->EOF) return false;
		
		foreach($rs->fields as $key => $val){
			$this->$key = $val;
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
		return $this->idOficina;
	}

	/**
	* Establece la dirección
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setDireccion($val = ''){
		$this->direccion = $val;
		return true;
	}
	
	/**
	* Retorna la direccion
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getDireccion(){
		return $this->direccion;
	}
	
	/**
	* Establece la latitud
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setLatitud($val = ''){
		$this->latitud = $val;
		return true;
	}
	
	/**
	* Retorna  la latitud
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getLatitud(){
		return $this->latitud;
	}
	
	/**
	* Establece la longitud
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setLongitud($val = ''){
		$this->longitud = $val;
		return true;
	}
	
	/**
	* Retorna la longitud
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getLongitud(){
		return $this->longitud;
	}
	
	/**
	* Establece el teléfono
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setTelefono($val = ''){
		$this->telefono = $val;
		return true;
	}
	
	/**
	* Retorna el teléfono
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getTelefono(){
		return $this->telefono;
	}
	
	/**
	* Establece el id del abogado
	*
	* @autor Hugo
	* @access public
	* @param int $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setAbogado($val = ''){
		$this->idUsuario = $val;
		return true;
	}
	
	/**
	* Retorna el id del abogado
	*
	* @autor Hugo
	* @access public
	* @return int Identificador
	*/
	
	public function getAbogado(){
		return $this->idUsuario;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @param int $abogado Identificador del abogado
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO oficina(idUsuario) VALUES(".$this->getAbogado().");");
			if (!$rs) return false;
			
			$this->idOficina = $db->Insert_ID();
		}		
		
		if ($this->idOficina == '')
			return false;
		
		$rs = $db->Execute("UPDATE oficina
			SET
				direccion = '".$this->getDireccion()."',
				latitud = '".$this->getLatitud()."',
				longitud = '".$this->getLongitud()."',
				telefono = '".$this->getTelefono()."'
			WHERE idOficina = ".$this->getId());
			
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
		$rs = $db->Execute("delete from oficina where idOficina = ".$this->getId());
		
		return $rs?true:false;
	}
}