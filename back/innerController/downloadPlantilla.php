<?php
header("Content-disposition: attachment; filename=plantilla.xlsx");
header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
readfile("C:/xampp/htdocs/GBD/back/innerController/plantilla.xlsx");
?>