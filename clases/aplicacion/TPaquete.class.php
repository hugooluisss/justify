<?php
/**
* TPaquetes
* Para el control de la publicidad de los abogados
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/
class TPaquete{
	private $idPaquete;
	private $nombre;
	private $descripcion;
	private $precio;
	private $cantidad;
	private $tipo;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TPaquete($id = ''){
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
		$rs = $db->Execute("select * from paquete where idPaquete = ".$id);
		
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
		return $this->idPaquete;
	}

	/**
	* Establece el nombre
	*
	* @autor Hugo
	* @access public
	* @param int $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setNombre($val = ""){
		$this->nombre = $val;
		
		return true;
	}
	
	/**
	* Retorna el nombre
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getNombre(){
		return $this->nombre;
	}
	
	/**
	* Establece la descripcion
	*
	* @autor Hugo
	* @access public
	* @param int $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setDescripcion($val = ""){
		$this->descripcion = $val;
		
		return true;
	}
	
	/**
	* Retorna la descripcion
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getDescripcion(){
		return $this->descripcion;
	}
	
	/**
	* Establece el precio
	*
	* @autor Hugo
	* @access public
	* @param int $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPrecio($val = 0){
		$this->precio = $val;
		
		return true;
	}
	
	/**
	* Retorna el precio
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getPrecio(){
		return $this->precio;
	}
	
	/**
	* Establece el tipo del periodo
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setTipo($val = ''){
		$this->tipo = $val;
		
		return true;
	}
	
	/**
	* Retorna el tipo del periodo
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getTipo(){
		return $this->tipo;
	}
	
	/**
	* Establece la cantidad
	*
	* @autor Hugo
	* @access public
	* @param int $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCantidad($val = 0){
		$this->cantidad = $val;
		
		return true;
	}
	
	/**
	* Retorna la cantidad
	*
	* @autor Hugo
	* @access public
	* @return integer Cantidad
	*/
	
	public function getCantidad(){
		return $this->cantidad;
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
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO paquete(nombre) VALUES('');");
			if (!$rs) return false;
			
			$this->idPaquete = $db->Insert_ID();
		}		
		
		if ($this->idPaquete == '')
			return false;
		
		$rs = $db->Execute("UPDATE paquete
			SET
				nombre = '".$this->getNombre()."',
				descripcion = '".$this->getDescripcion()."',
				precio = ".$this->getPrecio().",
				tipo = '".$this->getTipo()."',
				cantidad = ".$this->getCantidad()." 
			WHERE idPaquete = ".$this->getId());
			
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
		$rs = $db->Execute("delete from paquete where idPaquete = ".$this->getId());
		
		return $rs?true:false;
	}
	
	/**
	* Retorna la fecha de termino del paquete en base a una fecha de inicio
	*
	* @autor Hugo
	* @access public
	* @param string $inicio Fecha de inicio
	* @return boolean True si se realizó sin problemas
	*/
	
	function getTermina($inicio = ''){
		if ($this->getId() == '') return false;
		if ($inicio == '') return false;
		
		switch($this->getTipo()){
			case 'Dia':
				return date("Y-m-d", strtotime("+".$this->getCantidad()." days", strtotime($inicio)));
			break;
			case 'Mes':
				$inicio = strtotime("+".$this->getCantidad()." month", strtotime($inicio));
				return date("Y-m-d", $inicio);
			break;
			case 'Año':
				return date("Y-m-d", strtotime("+".$this->getCantidad()." years", strtotime($inicio)));
			break;
			default: return false;
		}
	}
}