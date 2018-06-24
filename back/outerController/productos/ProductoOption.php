<?php

include_once realpath('../../innerController/ProductosController.php');

$list=ProductosController::listAll();
$rta="";
foreach ($list as $obj => $Productos) {	
	$rta.='<option value="'.$Productos->getidPRODUCTOS().'">'.$Productos->getNOMBRE_PRODUCTO().'</option>'; 
}
echo $rta;
