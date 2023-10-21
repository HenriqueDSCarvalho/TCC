<?php
require_once 'conectar.php';
require_once 'alertas.php';
$mensagem = ''; // Variavel alert

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Variaveis Formulario
    $login = $_POST['login'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $permissao = $_POST['permissao'];

    //Evitar injeção de SQL
    $sql = "INSERT INTO funcionarios (login, email, senha, permissao) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'ssss', $login, $email, $senha, $permissao);

    $resultado = mysqli_stmt_execute($stmt);

    if (!$resultado) {
        die('Erro na inserção: ' . mysqli_error($conn));
    } else {
        //Quando o usuario for cadastrado
        $mensagem = $login.' cadastrado com sucesso!';
        session_start();
        $_SESSION['mensagem'] = $mensagem;
        header('Location: formCadastro.php');
        exit;
    }
}