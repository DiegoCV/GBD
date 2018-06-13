<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Vva 'l doro  \\
include_once realpath('../../innerController/CategoriaController.php');

$list=CategoriaController::listAll();
$rta='';
foreach ($list as $obj => $Categoria) {	
	$rta.='<option value="'.$Categoria->getidCATEGORIA().'">'.$Categoria->getNOMBRE_CATEGORIA().'</option>';
}
echo $rta;

				