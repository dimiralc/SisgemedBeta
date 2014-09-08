<?php
// El objetivo de este demo no es realizar una busqueda con php, sino mostrar lo simple
// que es programar una rutina de autocompletado con jQuery UI, por esta razon no vamos
// a realizar nada importante en este archivo.

// recuperamos el criterio de la busqueda
$criterio = strtolower($_GET["term"]);
if (!$criterio) return;
?>
<?php

// esta es una lista con algunas opciones, aunque en la practica estos datos deben salir de 
// alguna tabla en una base de datos
$medicamento = array(
	"Tarjeta de red Wi-Fi",
	"Tarjeta madre ECO",
	"Ventilador Inteligente"
	);

// lo que haremos es algo extremadamente sencillo, recuerda que este no es el objetivo del demo:
// recorre el arreglo y si encuentras el texto, imprime el elemento.
// cada elemento debe tener la forma:
// { label : "lo que quieras que aparezca escrito", value: { datos del producto... } }
$contador = 0;
foreach ($medicamento as $med) 
{
	if (strpos(strtolower($med), $criterio) !== false) 
	{
		if ($contador++ > 0) print ", "; // agregamos esta linea porque cada elemento debe estar separado por una coma
		print "{ \"label\" : \"$med\", \"value\" : { \"descripcion\" : \"$med } }";
	}
} // siguiente producto
?>]