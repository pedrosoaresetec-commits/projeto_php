<?php
require __DIR__ . '/verifica_login.php';
require __DIR__ . '/../conexao.php';
$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conexao, $sql);
?>
