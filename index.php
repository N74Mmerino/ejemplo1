<?php 

$nombre = $_GET['n']; 
$apellido = $_GET['a'];
$anioNacimiento = 1985;
$supuestaEdad = 2024 - $anioNacimiento; 

echo 'Apellido: ' . $apellido . '. Nombre: ' . $nombre ; 
echo '<br>';
echo 'Nacio hace ' .$supuestaEdad. ' años';
echo '<br>';
echo $nombre . ' este es el nombre';


    