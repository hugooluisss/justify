<?php
/**
* TUsuario
* Usuarios del sistema
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

include_once("clases/aplicacion/TUsuario.class.php");
class TAbogado extends TUsuario{
	private $idUsuario;
	private $sobreMi;
	private $curriculum;
	private $direccion;
	private $latitud;
	private $longitud;
	private $telefono;
	private $celular;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TAboado($id = ''){
		parent::TUsuario();
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
		
		if (! parent::setId($id)) return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from abogado where idUsuario = ".$id);
		
		if ($rs->EOF) return false;
		
		foreach($rs->fields as $key => $val){
			switch($key){
				default:
					$this->$key = $val;
			}
		}
		
		return true;
	}
	
	/**
	* Establece sobreMi
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setSobreMi($val = ''){
		$this->sobreMi = $val;
		return true;
	}
	
	/**
	* Retorna sobreMi
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getSobreMi(){
		return $this->sobreMi;
	}
	
	/**
	* Establece el curriculum
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCurriculum($val = ''){
		$this->curriculum = $val;
		return true;
	}
	
	/**
	* Retorna el curriculum
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getCurriculum(){
		return $this->curriculum;
	}
	
	/**
	* Establece la direccion
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setDireccion($val = ''){
		$this->email = $val;
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
	* Retorna la latitud
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
	* Establece el telefono
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
	* Retorna el telefono
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getTelefono(){
		return $this->telefono;
	}
	
	/**
	* Establece el celular
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCelular($val = ''){
		$this->celular = $val;
		return true;
	}
	
	/**
	* Retorna el celular
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getCelular(){
		return $this->celular;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		$db = TBase::conectaDB();
		
		//if ($this->idItem == '')
		if (! parent::guardar()) return false;
		
		$rs = $db->Execute("select idUsuario from abogado where idUsuario = ".$this->idAbogado);
		if ($rs->EOF){
			$rs = $db->Execute("INSERT INTO abogado(idItem) VALUES(".$this->idAbogado.");");
			if (!$rs) return false;
		}
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE abogado
			SET
				sobreMi = '".mysql_escape_string($this->getSobreMi())."',
				curriculum = '".mysql_escape_string($this->getCurriculum())."',
				direccion = '".mysql_escape_string($this->getDireccion())."',
				latitud = '".$this->getLatitud()."',
				longitud = '".$this->getLongitud()."',
				telefono = '".$this->getTelefono()."',
				celular = '".$this->getCelular()."'
			WHERE idUsuario = ".$this->idUsuario);
			
		return $rs?true:false;
	}
}