<?php
include_once realpath('../../innerController/ProductosController.php');
include_once realpath('../../Classes/PHPExcel.php');

$ruta = "plantilla/" . $_FILES['archivo']['name'];
move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta);

$archivo = $ruta;
$inputFileType = PHPExcel_IOFactory::identify($archivo);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($archivo);

$sheet = $objPHPExcel->getSheet(0); 

$highestRow = $sheet->getHighestRow(); 
$highestColumn = $sheet->getHighestColumn();
//echo "fila $highestRow";
//echo "columna $highestColumn";

session_start();

for ($row = 2; $row <= $highestRow; $row++){
		if($sheet->getCell("A".$row)->getValue() == null){
			break;
		}
		$idPRODUCTOS=null;
		$proveedores=1; 
		$NOMBRE_PRODUCTO=$sheet->getCell("A".$row)->getValue();
		$UNIDAD_PRODUCTO=$sheet->getCell("B".$row)->getValue(); 
		$COSTO_PRODUCTO=$sheet->getCell("C".$row)->getValue(); 
		$CANTIDAD_PRODUCTO=$sheet->getCell("D".$row)->getValue(); 
		$PRECIOVENTA_PRODUCTO=$sheet->getCell("E".$row)->getValue(); 
		$VALORMINIMO_PRODUCTO=$sheet->getCell("F".$row)->getValue(); 
		$FECHAINGRESO_PRODUCTO=$sheet->getCell("G".$row)->getValue(); 
		$FECHAVENCIMIENTO_PRODUCTO=$sheet->getCell("H".$row)->getValue(); 
		$categoria=$sheet->getCell("I".$row)->getValue();
		$tienda=$_SESSION['tienda']; 
		ProductosController::insert2($idPRODUCTOS, $proveedores, $NOMBRE_PRODUCTO, $UNIDAD_PRODUCTO, $COSTO_PRODUCTO, $CANTIDAD_PRODUCTO, $PRECIOVENTA_PRODUCTO, $VALORMINIMO_PRODUCTO, $FECHAINGRESO_PRODUCTO, $FECHAVENCIMIENTO_PRODUCTO, $categoria, $tienda);
	}

unlink("plantilla/" . $_FILES['archivo']['name']);

echo '<script language="javascript">alert(\'Completado\');window.location="../../../front/home1.php"</script>';