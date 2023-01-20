<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once "conexao.php";
$consulta = $conn->query("SELECT * FROM tbusuarios;");


while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "Usuário: {$linha['nome']} - {$linha['email']}
     <a href='editarusuario.php?id={$linha['id']}'>Editar</a>
     <a href='excluirusuario.php?id={$linha['id']}'>Excluir</a><br>";
}
?>
</body>
</html>