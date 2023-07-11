<?php


include_once('conexao.php');

$nome=$_POST['nome'];
$endereco=$_POST['endereco'];
$contato=$_POST['contato'];
$idade=$_POST['idade'];
$genero=$_POST['genero'];
$cpf=$_POST['cpf'];


$sql = 'INSERT INTO tb_clientes(nome, endereco, contato, idade, genero, cpf) VALUE (:nome, :endereco, :contato, :idade, :genero, :cpf)';
$stmt = $conn -> pepare($sql);

$stmt-> bindParam(':nome', $nome);
$stmt-> bindParam(':endereco', $endereco);
$stmt-> bindParam(':contato', $contato);
$stmt-> bindParam(':idade', $idade);
$stmt-> bindParam(':genero', $genero);
$stmt-> bindParam(':cpf', $cpf);

$stmt->execute();