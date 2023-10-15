<?php
require_once 'conectar.php';

$id_para_excluir = 2;

$sql = "DELETE FROM funcionarios WHERE id=$id_para_excluir";

if (mysqli_query($conn, $sql)) {
    echo "Registro excluído com sucesso!";
} else {
    echo "Erro ao excluir registro: " . mysqli_error($conn);
}
?>