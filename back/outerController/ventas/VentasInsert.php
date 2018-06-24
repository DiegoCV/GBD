<?php
include_once realpath('../../innerController/VentasController.php');
include_once realpath('../../innerController/Ventas_has_productosController.php');
include_once realpath('../../dto/NodoLista.php'); 

$cliente = $_POST['cliente'];  
session_start();
$idVendedor = $_SESSION['idADMINISTRADOR'];

$idVENTAS = null;
$IVA_VENTAS = '0.19';
$FECHACOMPRA_VENTAS = null;
$clientes= new Clientes();
$clientes->setIdCLIENTES($cliente);
$vendedor= new Vendedor();
$vendedor->setIdVENDEDOR($idVendedor);

$last_id = VentasController::insert($idVENTAS, $IVA_VENTAS, $FECHACOMPRA_VENTAS, $clientes, $vendedor);

$array = $_SESSION['lista'];
$productos = array();
foreach ($array as $key => $value) {
	array_push($productos, $value->getidProductos());
}
Ventas_has_productosController::insertar($last_id, $productos);
echo "ok";
//That´s all folks!