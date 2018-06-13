<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Te veeeeeooooo  \\
include_once realpath('../../innerController/AdministradorController.php');

$tienda = $_POST['tienda'];
 session_start();   
 	$_SESSION['tienda'] = $tienda;
 	//var_dump($tienda);


echo 'home1.php';


//That´s all folks!