<?php
/**
* TUsuario
* Usuarios del sistema
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/
class TUsuario{
	private $idUsuario;
	public $perfil;
	private $email;
	private $contrasena;
	private $registro;
	private $modificacion;
	private $ultimologin;
	private $status;
	private $nombre;
	private $sexo;
	private $pais;
	private $estado;
	private $ciudad
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TUsuario($id = ''){
		$this->perfil = new TPerfil();
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
		$rs = $db->Execute("select * from usuario where idUsuario = ".$id);
		
		if ($rs->EOF) return false;
		
		foreach($rs->fields as $key => $val){
			case 'contrasena':
				$this->contrasena = '';
			break;
			case 'idPerfil':
				$this->perfil = new TPerfil($val);
			break;
			default:
				$this->$key = $val;
		}
		
		return true;
	}
	
	/**
	* Retorna el identificador del objeto
	*
	* @autor Hugo
	* @access public
	* @return integer identificador
	*/
	public function getId(){
		return $this->idUsuario;
	}
	
	/**
	* Establece el valor de tipo de usuario
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar por default es 3 que hace referencia a un cliente
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPerfil($val = 3){
		$this->perfil->setId($val);
		
		return true;
	}
	
	/**
	* Establece el email
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setEmail($val = ''){
		$this->email = $val;
		return true;
	}
	
	/**
	* Retorna el email o nombre de usuario
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getEmail(){
		return $this->email;
	}
	
	/**
	* Retorna la fecha en la que se registro
	*
	* @autor Hugo
	* @access public
	* @return string Fecha en la que se registró
	*/
	
	public function getRegistro(){
		return $this->registro;
	}
	
	/**
	* Guarda la fecha del ultimo login
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setUltimoLogin($val = ''){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("update usuario set ultimoLogin = now() where idUsuario = ".$this->getId());
		return true;
	}
	
	/**
	* Retorna la fecha en la que inició sesión por última vez
	*
	* @autor Hugo
	* @access public
	* @return string timestamp
	*/
	
	public function getUltimoLogin(){
		return $this->ultimologin;
	}
	
	/**
	* Establece el estado, r es registrado, es decir, solo falta que confirme su cuenta; a es activo, s es suspendido y e es eliminado
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setStatus($val = 'P'){
		
		$valores = array('R', 'A', 'S', 'E');
		if (!in_array($val, $valores)) return false;
		
		$this->status = $val;
		
		return true;
	}
	
	/**
	* Retorna el email o nombre de usuario
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
}
?>