<?php
include_once realpath('../../innerController/CategoriaController.php');

$array = array("Congelados",
"Frutos secos",
"Refrescos",
"Vinos",
"Conservas de pescado",
"Encurtidos salinos",
"Productos típicos de otros países",
"Conservas cárnicas",
"Legumbres",
"Conservas vegetales",
"Congelados",
"Lácteos",
"Embutidos envasados",
"Salsas",
"Salazones",
"Productos biológicos",
"Café",
"Galletas y chocolate",
"Caramelos y bombones",
"Conservas de fruta",
"Zumos y néctares",
"Alimentos para animales",
"Miel",
"Snacks",
"Huevos",
"Charcutería",
"Quesos",
"Carnicería",
"Pescados y mariscos",
);

foreach ($array as $key => $value) {
	CategoriaController::insert(null,$value);
}
echo "OK";

