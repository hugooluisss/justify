<?php
/**
* Tlocalidad
* Localidades de méxico
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/
class TLocalidad{
	private $idLocalidad;
	private $idMunicipio;
	private $clave;
	private $nombre;
	private $latitud;
	private $longitud;
	private $lat;
	private $lng;
	private $altitud;
	private $activo;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TLocalidad($id = ''){
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
		$rs = $db->Execute("select * from localidad where idLocalidad = ".$id);
		
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
		return $this->idLocalidad;
	}
	
	/**
	* Retorna el identificador del municipio
	*
	* @autor Hugo
	* @access public
	* @return integer Municipio
	*/
	
	public function getIdMunicipio(){
		if ($this->getId() == '') return false;
		
		return $this->idMunicipio;
	}
	
	/**
	* Retorna el nombre del municipio
	*
	* @autor Hugo
	* @access public
	* @return string Nombre del municipio
	*/
	
	public function getNombreMunicipio(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from municipio where idMunicipio = ".$this->getIdMunicipio());
		return $rs->fields['nombre'];
	}
	
	/**
	* Retorna el identificador del estado
	*
	* @autor Hugo
	* @access public
	* @return string Id del estado
	*/
	
	public function getIdEstado(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select b.* from municipio a join estado b using(idEstado) where idMunicipio = ".$this->getIdMunicipio());
		return $rs->fields['idEstado'];
	}
	
	/**
	* Retorna el nombre del estado
	*
	* @autor Hugo
	* @access public
	* @return string Nombre del municipio
	*/
	
	public function getNombreEstado(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select b.* from municipio a join estado b using(idEstado) where idMunicipio = ".$this->getIdMunicipio());
		return $rs->fields['nombre'];
	}
}