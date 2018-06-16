<?php
include_once realpath('../../innerController/ProductosController.php');

move_uploaded_file($_FILES['archivo']['tmp_name'], "plantilla/" . $_FILES['archivo']['name']);

unlink("plantilla/" . $_FILES['archivo']['name']);

echo '<script language="javascript">alert(\'Completado\');window.location="../../../front/home1.php"</script>';