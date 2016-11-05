<?php
include 'database.php';
// include '../includes/objetos/db/dbconfig.php';

class Empleado extends Database{

	protected static $nombre_tabla ="empleado";
	public $id;
	public $nombre;
	public $apellido;
	public $fecha_nacimiento;
	public $fecha_contratacion;
	public $correo;
	public $cedula;
	public $nacionalidad;
	public $tel_local;
	public $tel_personal;
	public $cargo;
	public $salario;
}
?>