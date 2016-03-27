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
	private $prioridad;
	private $inicio;
	private $fin;
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
		return $this->idPublicidad;
	}

	/**
	* Establece la prioridad
	*
	* @autor Hugo
	* @access public
	* @param int $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPrioridad($val = 0){
		$this->prioridad = $val;
		return true;
	}
	
	/**
	* Retorna la prioridad
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getPrioridad(){
		return $this->prioridad;
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
	* Establece la fecha de fin
	*
	* @autor Hugo
	* @access public
	* @param date $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setFin($val = ''){
		$this->fin = $val;
		return true;
	}
	
	/**
	* Retorna la fecha de fin
	*
	* @autor Hugo
	* @access public
	* @return date Fecha
	*/
	
	public function getFin(){
		return $this->fin;
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
		
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO publicidad(idUsuario, estado) VALUES('".$abogado."', 'A');");
			if (!$rs) return false;
			
			$this->idPublicidad = $db->Insert_ID();
		}		
		
		if ($this->idPublicidad == '')
			return false;
		
		$rs = $db->Execute("UPDATE publicidad
			SET
				inicio = '".$this->getInicio()."',
				fin = '".$this->getFin()."',
				prioridad = ".$this->getPrioridad()."
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