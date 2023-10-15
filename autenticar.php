<?php
session_start();
require_once 'conectar.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Utilize Prepared Statements para evitar injeção SQL
    $sql = "SELECT * FROM funcionarios WHERE login = ? AND senha = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $login, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Credenciais corretas, redirecionar para a página de sucesso ou realizar outras ações
        $logado = $login;
        session_start();
        $_SESSION['logado'] = $logado; //Variavel recebe o nome do usuario
        header('Location: teste.php'); //Redireciona para a pagina ao confirmar o usuario no bamco
    } else {
        // Credenciais inválidas
        echo "Usuário e/ou senha incorretos.";
    }

    $stmt->close();
}

?>