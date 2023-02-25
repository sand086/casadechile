<?php

class ControladorEmpleados{


/*=============================================
MOSTRAR EMPLEADOS
=============================================*/

	static public function ctrMostrarEmpleados(){

		$tabla = "empleados";

		$respuesta = ModeloEmpleados::mdlMostrarEmpleados($tabla);

		return $respuesta;
	
	}

/*=============================================
EDITAR EMPLEADO
=============================================*/

	static public function ctrActualizarEmpleado($id,$nombre,$aniversario,$sueldo,$estatus){

		$tabla = "empleados";

		$respuesta = ModeloEmpleados::mdlActualizarEmpleado($tabla,$id,$nombre,$aniversario,$sueldo,$estatus);

		return $respuesta;
	
	}

/*=============================================
INSERTAR EMPLEADO
=============================================*/

	static public function ctrInsertarEmpleado($nombre,$aniversario,$sueldo,$estatus){

		$tabla = "empleados";

		$respuesta = ModeloEmpleados::mdlInsertarEmpleado($tabla,$nombre,$aniversario,$sueldo,$estatus);
		
		return $respuesta;
	
	}
}