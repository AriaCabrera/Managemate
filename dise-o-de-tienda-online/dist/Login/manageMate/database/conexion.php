<?php
$server="35.223.193.107";
$user="solecito";
$password="zUrl990513";
$database="MangeMateDB_USERS";
$conex = new mysqli($server, $user, $password, $database);
    
    if($conex->connect_errno){
    echo("Fallo al conectar a MySQL: (" . $conex->connect_errno . ") " . $conex->connect_error);
    }
    //echo ($mysqli->host_info . "\n");


?>