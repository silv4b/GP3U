<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');

include 'DAO/Conexao.php';

$conn = new conexao();
$conexao = $conn->conecta();

$dia = date("d");
$mes = date("m");
$ano = date("Y");

$hra = date("H");
$min = date("i");
$seg = date("s");

$horaSaida = "$hra:$min:$seg";
$dataSaida = "$dia/$mes/$ano";

//$matricula = $_SESSION['matricula'];
$idlogoff = $_SESSION['iddoacesso'];

$inseresaida = "UPDATE logacesso SET horalogout = '$horaSaida', datalogout = '$dataSaida' WHERE id = '$idlogoff'";

mysqli_query($conexao, $inseresaida) or die(mysqli_error($conexao));

echo "att";

//atualizasessao.php