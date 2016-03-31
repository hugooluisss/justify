<?php
/**
* TUsuario
* Usuarios del sistema
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

include_once("clases/aplicacion/TUsuario.class.php");
class TCliente extends TUsuario{
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
	public function TCliente($id = ''){
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
		$rs = $db->Execute("select * from cliente where idUsuario = ".$id);
		
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
	* Establece la fecha de nacimiento
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setNacimiento($val = ''){
		$this->nacimiento = $val;
		return true;
	}
	
	/**
	* Retorna la fecha de nacimiento
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getNacimiento(){
		return $this->nacimiento;
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
		
		if (! parent::guardar()) return false;
		
		$rs = $db->Execute("select idUsuario from cliente where idUsuario = ".$this->getId());
		if ($rs->EOF){
			$rs = $db->Execute("INSERT INTO cliente(idUsuario) VALUES(".$this->getId().");");
			if (!$rs) return false;
		}
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE cliente
			SET
				".($this->getNacimiento() != ''?("nacimiento = '".$this->getNacimiento()."',"):"")."
				telefono = '".$this->getTelefono()."',
				celular = '".$this->getCelular()."'
			WHERE idUsuario = ".$this->getId());
			
		return $rs?true:false;
	}
}