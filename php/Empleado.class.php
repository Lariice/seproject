<?php
if ( !defined("__EMPLEADO__") ){
	define("__EMPLEADO__","");
	include("DataConnection.class.php");
	
	class Empleado{
		private $CURP;
		private $nombre;
		private $direccion;
		private $tipo;
		private $contraseņa;
		
		public function __construct($curp,$nombre,$direccion,$tipo,$contraseņa)
		{
			$this->CURP = $curp;
			$this->nombre = $nombre;
			$this->direccion = $direccion;
			$this->tipo = $tipo;
			$this->contraseņa = $contraseņa;		
		}
		
		public static function iniciarSesion($curp,$contraseņa){
			$db = new DataConnection();
			$result = $db->executeQuery("SELECT * FROM Empleado WHERE CURP='".$curp."' and Contrasena='".$contraseņa."'");			
			if ( $dato = mysql_fetch_assoc($result) ){
				$empleado = new Empleado($dato["CURP"],$dato["Nombre"],$dato["Direccion"],$dato["Area"],$dato["Contrasena"]);
				return $empleado;
			}
			return false;		
		}
		
		public function getNombre(){
			return $this->nombre;
		}
			
	}
}
?>