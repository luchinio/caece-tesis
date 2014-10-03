<?php

include_once('utils.php');

$id = $_GET['id'];
$fecha = $_GET['fecha'];

$tipo = $_FILES['uploadedfile']['name'];

mkdir($id, 0755, true);

$target_path  = "./".$id."/";

if($tipo == 'Mediciones.txt'){

	$target_path = $target_path . 'Mediciones-' . $fecha . '.txt';
	
}
else {

	$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);

}

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) 
{
    guardar_log('Se guardo el archivo '.$target_path);
} 
else
{
    guardar_log('Hubo error con el archivo! '.$target_path);
}

?>