<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Dashboard</title>
</head>
<body>
 <?php include 'autenticar.php'
 ?>
 <?php
// dashboard.php

// Verificar se a variável de sessão está definida
if(isset($_SESSION['logado'])) {
    $logado = $_SESSION['logado'];
} else {
    $logado = 'Convidado';  // ou qualquer outro valor padrão
}
?>

    <header>
        <!-- Cabeçalho do dashboard -->
        <h1>Dashboard</h1>
        <p>Bem-vindo, <?php echo $logado?>!</p>
    </header>


    <nav>
        <!-- Barra de navegação -->
        <ul>
            <li><a href="#">Página Inicial</a></li>
            <li><a href="#">Relatórios</a></li>
            <li><a href="#">Configurações</a></li>
        
        </ul>
    </nav>

    <main>
        <!-- Conteúdo principal do dashboard -->
        <section>
            <h2>Painel de Controle</h2>
            <p>Seu conteúdo aqui...</p>
        </section>

    </main>

    <footer>
        <!-- Rodapé do dashboard -->
        <p>&copy; <?php echo date("Y"); ?> Seu Nome. Todos os direitos reservados.</p>
    </footer>

</body>
</html>