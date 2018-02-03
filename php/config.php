<?php

function conexion(){
    $server = "localhost";
    $user = "lagunal";
    $pass = "";
    $database = "c9";
    $conex = mysqli_connect($server,$user,$pass,$database);
    return $conex;
    
    
}