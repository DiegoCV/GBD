<?php
include_once realpath('../../innerController/Ventas_has_productosController.php');

class VentasHasProductos{

	public function insertar($idVenta,$productos){	
		foreach ($productos as $key => $value) {
			$ventas= new Ventas();
			$ventas->setIdVENTAS($Ventas_idVENTAS);
			Ventas_has_productosController::insert($ventas, $value);
		}			
	}
}

?>