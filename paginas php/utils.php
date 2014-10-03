<?php

function guardar_log($mensaje){
		$ruta = realpath("")."/log.txt";
		
		$id = fopen($ruta,"a+");
		$string = date("Y-m-d H:i:s")." - USER:XXX - ".$mensaje."\r\n";
		fputs($id, $string);
		fclose($id);
	}
	
?>