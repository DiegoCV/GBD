<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */
 
//    Antes que me hubiera apasionado por mujer alguna, jugué mi corazón al azar y me lo ganó la Violencia.  \\
include_once realpath('../../innerController/ProductosController.php');
include_once realpath('../../dto/NodoLista.php');
$cod = $_POST['cod'];
$contador =$_POST['contador']."P";
session_start();
if($contador == 1){
	$array = array();
	$_SESSION['lista'] = $array;
}
$Productos=ProductosController::select($cod);
$NOMBRE= $Productos->getNOMBRE_PRODUCTO();
$CODIGO=$Productos->getidPRODUCTOS();
$PRECIOVENTA=$Productos->getPRECIOVENTA_PRODUCTO();
$CATEGORIA=$Productos->getCATEGORIA_idCATEGORIA()->getNOMBRE_CATEGORIA();							
$rta="<tr id=\" $contador \">
		<td class=\"mdl-data-table__cell--non-numeric\">$NOMBRE</td>
		<td>$CODIGO</td>
		<td>$PRECIOVENTA</td>
		<td>$CATEGORIA</td>
		<td><button onclick=\"retirarProducto('$contador')\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect\"><i class=\"zmdi zmdi-more\"></i></button></td>
	</tr>";

$nodo = new NodoLista();
$nodo->setcontador($contador);
$nodo->settexto($rta);
$nodo->setPrecio($PRECIOVENTA);
$nodo->setidProductos($CODIGO);

$array = $_SESSION['lista'];
array_push($array,$nodo);
$_SESSION['lista'] =$array;
$men='';
$total = 0;

foreach ($array as $key => $value) {
	$men .= $value->gettexto();
	$total += $value->getPrecio();
}
$_SESSION['total']=$total;
echo $men;

//That´s all folks!
