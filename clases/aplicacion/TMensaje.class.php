<?php
/**
* TMensaje
* Comunicación entre los usuarios
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/
class TMensaje{
	private $idMensaje;
	private $destinatario;
	private $remitente;
	private $fecha;
	private $mensaje;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TMensaje($id = ''){
		$this->remitente = new TUsuario;
		$this->destinatario = new TUsuario;
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
		$rs = $db->Execute("select * from mensaje where idMensaje = ".$id);
		
		if ($rs->EOF) return false;
		
		foreach($rs->fields as $key => $val){
			switch($key){
				case 'remitente':
					$this->remitente = new TUsuario($val);
				break;
				case 'destinatario':
					$this->destinatario = new TUsuario($val);
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
		return $this->idMensaje;
	}
	
	/**
	* Establece el remitente
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setRemitente($id = ''){
		$this->remitente = new TUsuario($id);
		
		return true;
	}
	
	/**
	* Establece el destinatario
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setDestinatario($id = ''){
		$this->destinatario = new TUsuario($id);
		
		return true;
	}
	
	/**
	* Establece el mensaje
	*
	* @autor Hugo
	* @access public
	* @param string $id Cuerpo del mensaje
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setMensaje($val = ''){
		$this->mensaje = $val;
		
		return true;
	}
	
	/**
	* Retorna el mensaje
	*
	* @autor Hugo
	* @access public
	* @return string mensaje
	*/
	
	public function getMensaje(){
		return $this->mensaje;
	}
	
	/**
	* Retorna la fecha
	*
	* @autor Hugo
	* @access public
	* @return string fecha
	*/
	
	public function getFecha(){
		if ($this->getId() == '') return date("Y-m-d H:s:i");
		
		return $this->fecha;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		if ($this->remitente == '' or $this->destinatario == 0) return false;
		
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO mensaje(remitente, destinatario, fecha) VALUES(".$this->remitente->getId().", ".$this->destinatario->getId().", now());");
			
			if (!$rs) return false;
			
			$this->idMensaje = $db->Insert_ID();
		}		
		
		if ($this->idMensaje == '')
			return false;
		
		$rs = $db->Execute("UPDATE mensaje
			SET
				mensaje = '".$this->getMensaje()."'
			WHERE idMensaje = ".$this->getId());
			
		return $rs?true:false;
	}
	
	/**
	* Establece el mensaje como leido
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setLeido(){
		if ($this->getId() == '') return false;
		$db = TBase::conectaDB();
		$rs = $db->Execute("update mensaje set leido = 1 where idMensaje = ".$this->getId());
		
		return $rs?true:false;
	}
}