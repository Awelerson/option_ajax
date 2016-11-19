<?php

require_once('conexao.php');

$cantor = isset($_GET['cantor']) ? $_GET['cantor'] : '';

$con = new conexao();
$pdo = $con->Conectar();


$buscaMusica = $pdo->prepare("select * from musica where cantor_nome = '$cantor' ");

$buscaMusica->execute();
$m = $buscaMusica->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($m);



?>