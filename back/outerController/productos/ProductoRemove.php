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
foreach ($array as $key => $value) {
	if($value->getcontador() == $contador){
		unset($array[$key]);
	}else{
		$men .= $value->gettexto();
	}
	
}
$_SESSION['lista'] = $array;
echo $men;

//That´s all folks!