<?php
$servename = "localhost";
$user = "root";
$password = "";
$db = "agricolas";

// criar a conexão à base de dados do MySql Workbench
$con = new mysqli($servename,$user,$password,$db);

//Verificar se a ligação é feita
if ($con->connect_error) {
    die("Conexão à base de dados falhada! " .$con->connect_error);
}

$con->set_charset("utf8");