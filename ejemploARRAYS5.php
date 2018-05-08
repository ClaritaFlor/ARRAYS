<?php 
$equipo = array('portero'=>'JUAN', 'defensa'=>'JOSE', 'medio'=>'PEPE', 'delantero'=>'LEO');
echo "<h1>EL EQUIPO ESTA COMPUESTO POR:</h1>";
echo "<br>";
foreach($equipo as $posicion=>$jugador)
	{
	echo "El " . $posicion . " es " . $jugador;
	echo "<br>";
	}
?>