<?php
require_once 'conectar.php';

$novo_nome = "Novo Nome";
$novo_email = "novo_email@example.com";
$id_para_atualizar = 1;

$sql = "UPDATE funcionarios SET nome='$novo_nome', login ='$novo_email' WHERE id=$id_para_atualizar";

if (mysqli_query($conn, $sql)) {
    echo "Registro atualizado com sucesso!";
} else {
    echo "Erro ao atualizar registro: " . mysqli_error($conn);
}
?>