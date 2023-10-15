<?php
require 'conectar.php';
$mensagem = ''; // Variavel alert

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Variaveis Formulario
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $codigo_barras = $_POST['codigo_barras'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $descricao = $_POST['descricao'];

    //Evitar injeção de SQL
    $sql = "INSERT INTO produtos (nome, categoria, codigo_barras, preco, quantidade, descricao) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'ssssss', $nome, $categoria, $codigo_barras, $preco, $quantidade, $descricao);

    $resultado = mysqli_stmt_execute($stmt);

    if (!$resultado) {
        die('Erro na inserção: ' . mysqli_error($conn));
    } else {
        //Quando o usuario for cadastrado
        $mensagem = $nome.' cadastrado com sucesso!';
        session_start();
        $_SESSION['mensagem'] = $mensagem;
        header('Location: formCadastroProd.php');
        exit;
    }
}