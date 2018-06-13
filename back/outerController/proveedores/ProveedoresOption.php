<?php
include_once realpath('../../innerController/ProveedoresController.php');

$list=ProveedoresController::listAll();
$rta="";
foreach ($list as $obj => $Proveedores) {	
	$rta.='<option value="'.$Proveedores->getidPROVEEDORES().'">'.$Proveedores->getNOMBREEMPRESA_PROVEEDORES().'</option>';
}
echo $rta;