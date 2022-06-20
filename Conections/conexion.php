<?php

function conectar(){

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "banda";

    $conecta = mysql_connect($server,$user,$pass) or die ("Error de Conexion de base de Datos");
    mysql_select_db($db,$conecta);
    return $conecta;
}

function conectasql(){

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "banda";
    $consql = new mysqli($server,$user,$pass,$db);
    if ($consql->connect_error) die ("Fatal Error");
}

?>