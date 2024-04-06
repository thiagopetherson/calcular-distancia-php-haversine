<?php

session_start();
 
function calcularDistanciaEntrePontos($lat1, $lon1, $lat2, $lon2)
{
  $raioTerra = 6371;
 
  $lat1Rad = deg2rad($lat1);
  $lon1Rad = deg2rad($lon1);
  $lat2Rad = deg2rad($lat2);
  $lon2Rad = deg2rad($lon2);

  $deltaLat = $lat2Rad - $lat1Rad;
  $deltaLon = $lon2Rad - $lon1Rad;
 
  $parteA = sin($deltaLat / 2) * sin($deltaLat / 2) + cos($lat1Rad) * cos($lat2Rad) * sin($deltaLon / 2) * sin($deltaLon / 2);
  $parteC = 2 * atan2(sqrt($parteA), sqrt(1 - $parteA)); 

  $distanciaKm = $raioTerra * $parteC;

  return $distanciaKm;
}
 
$latitude1 = $_POST["latitude1"];
$longitude1 = $_POST["longitude1"];
$latitude2 = $_POST["latitude2"];
$longitude2 = $_POST["longitude2"];

$resultado = calcularDistanciaEntrePontos($latitude1, $longitude1, $latitude2, $longitude2);
 
$_SESSION['distancia'] = $resultado;

header('Location: index.php');
exit();

?>