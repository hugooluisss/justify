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
	public $localidad;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TUsuario($id = ''){
		$this->perfil = new TPerfil();
		$this->localidad = new TLocalidad();
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
			switch($key){
				case 'contrasena':
					$this->contrasena = '';
				break;
				case 'idPerfil':
					$this->perfil = new TPerfil($val);
				break;
				case 'idLocalidad':
					$this->localidad = new TLocalidad($val);
				break;
				default:
					$this->$key = $val;
			}
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
	* Retorna el estado de la cuenta de usuario
	*
	* @autor Hugo
	* @access public
	* @return char identificador del estado
	*/
	
	public function getStatus(){
		return $this->status;
	}
	
	/**
	* Establece el nombre
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setNombre($val = ''){
		$this->nombre = $val;
		
		return true;
	}
	
	/**
	* Retorna el nombre
	*
	* @autor Hugo
	* @access public
	* @return string Nombre
	*/
	
	public function getNombre(){
		return $this->nombre;
	}
	
	/**
	* Establece el sexo
	*
	* @autor Hugo
	* @access public
	* @param char $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setSexo($val = 'H'){
		$this->sexo = $val;
		
		return true;
	}
	
	/**
	* Retorna el sexo
	*
	* @autor Hugo
	* @access public
	* @return char Sexo
	*/
	
	public function getSexo(){
		return $this->sexo;
	}
	
	/**
	* Establece la localidad
	*
	* @autor Hugo
	* @access public
	* @param integer $val localidad
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setLocalidad($val = ''){
		$this->localidad = new TLocalidad($val);
		
		return true;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		if ($this->perfil->getId() == '') return false;
		if ($this->localidad->getId() == '') return false;
		
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO usuario(idPerfil, idLocalidad) VALUES(".$this->perfil->getId().", ".$this->localidad->getId().");");
			if (!$rs) return false;
			
			$this->idUsuario = $db->Insert_ID();
		}		
		
		if ($this->idUsuario == '')
			return false;
		
		$rs = $db->Execute("UPDATE usuario
			SET
				idPerfil = ".$this->perfil->getId().",
				idLocalidad = ".$this->localidad->getId().",
				email = ".$this->getEmail().",
				modificacion = now(),
				status = '".$this->getStatus()."',
				nombre = '".$this->getNombre()."',
				sexo '".$this->getSexo()."'
			WHERE idUsuario = ".$this->idUsuario);
			
		return $rs?true:false;
	}
	
	/**
	* Guarda la contraseña
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPass($pass = ''){
		if ($this->getId() == '') return false;
		if ($pass == '') return false;
		
		$db = TBase::conectaDB();
				
		$rs = $db->Execute("UPDATE usuario
			SET
				contrasena = md5('".$pass."')
				modificacion = now()
			WHERE idUsuario = ".$this->idUsuario);
			
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
		$rs = $db->Execute("delete from usuario where idUsuario = ".$this->getId());
		
		return $rs?true:false;
	}
}
?>