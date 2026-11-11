<?php
$conexao = new mysqli("localhost", "root", "", "barbearia");
if ($conexao->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conexao->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $primeiro_nome = $_POST['Primeiro_nome'];
    $sobrenome     = $_POST['sobrenome'];
    $email         = $_POST['email'];
    $telefone      = $_POST['telefone'];
    $rua_bairro    = $_POST['endereco'];     
    $complemento   = $_POST['complemento'];   
    $cpf           = $_POST['cpf'];
    $cidade        = $_POST['cidade'];
    $estado        = $_POST['estado'];
    $cep           = $_POST['cep'];
    $sql = "INSERT INTO cliente (primeiro_nome, sobrenome, email, telefone, rua_bairro, complemento, cpf, cidade, estado, cep) 
            VALUES ('$primeiro_nome', '$sobrenome', '$email', '$telefone', '$rua_bairro', '$complemento', '$cpf', '$cidade', '$estado', '$cep')";
    if ($conexao->query($sql) === TRUE) {
        echo "<script>alert('Cliente cadastrado com sucesso!'); window.location.href='cad_cliente.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar no banco de dados.'); window.location.href='cad_cliente.php';</script>";
    }
}
?>
