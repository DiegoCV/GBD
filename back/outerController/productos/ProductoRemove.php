<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Antes que me hubiera apasionado por mujer alguna, jugué mi corazón al azar y me lo ganó la Violencia.  \\
include_once realpath('../../innerController/ProductosController.php');
include_once realpath('../../dto/NodoLista.php');
$contador =$_POST['contador'];
session_start();
$array = $_SESSION['lista'];
$men ='';
$total = 0;
foreach ($array as $key => $value) {
	if($value->getcontador() == $contador){
		unset($array[$key]);
	}else{
		$men .= $value->gettexto();
		$total += $value->getPrecio();
	}
	
}
$_SESSION['lista'] = $array;
$_SESSION['total']=$total;
echo $men;

//That´s all folks!