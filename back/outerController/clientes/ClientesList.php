<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Recuerda, cuando enciendas la molotov, debes arrojarla  \\
include_once realpath('../../innerController/ClientesController.php');

$list=ClientesController::listAll();
$rta="";
foreach ($list as $obj => $Clientes) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Clientes->getidCLIENTES()."</td>\n";
	$rta.="<td>".$Clientes->getNOMBRE_CLIENTES()."</td>\n";
	$rta.="<td>".$Clientes->getDIRECCION_CLIENTES()."</td>\n";
	$rta.="<td>".$Clientes->getFECHANACIMIENTO_CLIENTES()."</td>\n";
	$rta.="<td>".$Clientes->getEMAIL_CLIENTES()."</td>\n";
	$rta.='<td class="actions">
         
            <a type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-trash-o"></i></a>
        </td>';
	$rta.="</tr>\n";
} 
echo $rta;

//That´s all folks!