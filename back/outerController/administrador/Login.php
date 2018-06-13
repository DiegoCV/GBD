<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Te veeeeeooooo  \\
include_once realpath('../../innerController/AdministradorController.php');
include_once realpath('../../innerController/VendedorController.php');
$USUARIO = $_POST['USUARIO'];
$PASS = $_POST['PASS'];
$tipo = $_POST['tipo'];
if($tipo == 1){
$administrador = AdministradorController::login($USUARIO, $PASS);
if($administrador!=null){
$idADMINISTRADOR=$administrador->getIdADMINISTRADOR();
setcookie("idADMINISTRADOR","$idADMINISTRADOR");
 session_start();   
 	$_SESSION['idADMINISTRADOR'] = $idADMINISTRADOR;
 	$_SESSION['nombre_usuario'] = $administrador->getNOMBRE();
 	$_SESSION['tipo'] = 'Administrador';
echo '<script language="javascript">window.location="../../../front/tienda.php"</script>';
}else{
echo '<script language="javascript">window.location="../../../index.html"</script>';
}
}else{
	$vendedor = VendedorController::login($USUARIO, $PASS);
	if($vendedor!=null){
setcookie("idADMINISTRADOR",$vendedor->getIdVENDEDOR());
 session_start();   
 	$_SESSION['idADMINISTRADOR'] = $vendedor->getIdVENDEDOR();
 	$_SESSION['nombre_usuario'] = $vendedor->getNOMBRE_VENDEDOR();
 	$_SESSION['tienda'] = $vendedor->getTIENDA_idTIENDA();
 	$_SESSION['tipo'] = 'vendedor';
echo '<script language="javascript">window.location="../../../front/home.php"</script>';
}else{
echo '<script language="javascript">window.location="../../../index.html"</script>';
}
}


//That´s all folks!