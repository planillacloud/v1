<?php
include '../includes/empleado.php';
include '../includes/dbconfig.php';

if(isset($_POST)){
    $empleado = new Empleado();
    //determinar la fecha actual del registro
    $empleado->fecha_contratacion = date("Y-m-d");
    //formatear la fecha de nacimiento para insertar a la db
    $_POST['fecha_nacimiento'] = date("Y-m-d", strtotime($_POST['fecha_nacimiento']));
    //Asignando los atributos al obj con la data de la variable $_POST
    foreach ($_POST as $key => $value) {
		$empleado->$key = $value;
    }
    try{
	    $empleado->insertar(); // Se inserta en la db
		echo $empleado->nombre;
		return true;
	}
	catch(Exception $e){
	    echo $e->getMessage();
	    exit;
	}
}
?>