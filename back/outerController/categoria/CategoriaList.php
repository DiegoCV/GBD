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
	$rta.="<tr>\n";
	$rta.="<td>".$Categoria->getidCATEGORIA()."</td>\n";
	$rta.="<td>".$Categoria->getNOMBRE_CATEGORIA()."</td>\n";	
	$rta.='<td class="actions">
        
            <a type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-trash-o"></i></a>
        </td>';
	$rta.="</tr>\n";
}
echo $rta;

				
//That�s all folks!