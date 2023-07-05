<?php
function registrarVisita($pagina, $url)
{
    $fecha = date("Y-m-d");
    $ip = $_SERVER["REMOTE_ADDR"] ?? "";
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("INSERT INTO visitas(fecha, ip, pagina, url) VALUES(?, ?, ?, ?)");
    return $sentencia->execute([$fecha, $ip, $pagina, $url]);
}


function obtenerConexion()
{
    $password = "";
    $user = "root";
    $dbName = "ciudado_ceano";
    $database = new PDO('mysql:host=localhost;dbname=' . $dbName, $user, $password);
    $database->query("set names utf8;");
    $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $database;
}
