<?php
require_once 'cadastro.php';

   // Cadastro com sucesso
    if (isset($_SESSION['mensagem'])) {
        echo '<script>alert("'. $_SESSION['mensagem'] . '");</script>';
        unset($_SESSION['mensagem']);
    }
?>