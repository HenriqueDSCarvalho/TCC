<?php
require_once 'conectar.php';

$sql = "SELECT * FROM funcionarios";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . " - Login: " . $row["login"] . "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}
?>