<?php
require '../db/conexao.php';

if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];

    $sql = "INSERT INTO cliente (nome, email, telefone, endereco, cpf, cidade, estado, cep) 
            VALUES ('$nome', '$email', '$telefone', '$endereco', '$cpf', '$cidade', '$estado', '$cep')";

    if ($conexao->query($sql) === TRUE) {
        echo "<script>alert('Cliente cadastrado com sucesso!'); window.location.href='cad_cliente.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar.'); window.location.href='cad_cliente.php';</script>";
    }
}
?>
 
