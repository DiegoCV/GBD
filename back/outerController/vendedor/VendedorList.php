<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Nuestra empresa cuenta con una divisi�n s�lo para las frases. Disfr�talas  \\
include_once realpath('../../innerController/VendedorController.php');

$list=VendedorController::listAll();
$rta='';
foreach ($list as $obj => $Vendedor) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Vendedor->getUSUARIO_VENDEDOR()."</td>\n";
	$rta.="<td>".$Vendedor->getNOMBRE_VENDEDOR()."</td>\n";	
	$rta.='<td class="actions">
            
            <a type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-trash-o"></i></a>
        </td>';
	$rta.="</tr>\n";
}
echo $rta;

//That�s all folks! 