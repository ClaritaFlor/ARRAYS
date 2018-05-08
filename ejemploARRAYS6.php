<?php
$equipo_futbol = array
(
array("JUAN","PEPE","CARLOS"),
array("ANTONIO"),
array("FELIPE","JORGE","TEODORO")
);

foreach($equipo_futbol as $equipo)
{
echo "En este equipo juegan: ";
foreach($equipo as $jugador)
{
echo $jugador ." ";
}
echo "<br>";
}
?>