<?php

echo "Esto es una prueba buena";
// Variables necesarias para la conexion
$host = $_ENV["POSTGRESQL_94_RHEL7_SERVICE_HOST"];
$port = $_ENV["POSTGRESQL_94_RHEL7_SERVICE_PORT"];
$user = $_ENV["POSTGRESQL_USER"];
$pass = $_ENV["POSTGRESQL_PASSWORD"];

// testeo las variables 
if(empty($host))
    $host = "localhost";
if(empty($port))
    $port = "5432";
if(empty($user))
    $user = "edwin";
if(empty($pass))
   $pass = "edwin1983";

$cadenacon = "host=". $host . " port=" . $port . " dbname=sbidb " . " user=". $user ." password=" . $pass;
   
$conn = pg_connect($cadenacon);
if(!$conn){
    echo 'No puede conectarse al motor:' . pg_last_error($conn) . '|'. $cadenaconn;
    return -1;
}

?>