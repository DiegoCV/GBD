<?php

include_once realpath('../../innerController/ClientesController.php');

$list=ClientesController::listAll();
$rta='<option value="1">Ordinario</option>';
foreach ($list as $obj => $Clientes) {
	$rta.='<option value="'.$Clientes->getidCLIENTES().'">'.$Clientes->getNOMBRE_CLIENTES().'</option>'; 	
}
echo $rta;
 