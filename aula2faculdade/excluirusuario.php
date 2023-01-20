<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            require_once "conexao.php";
            $sql="delete from tbusuarios where id=$id";
            $conn->exec($sql);
            echo "<p>Excluído com sucesso</p>";
        } else {
            echo "<p>Selecione um registro</p>";
        }
        echo "<a href='listarusuarios.php'>Listagem</a>";
    ?>
</body>
</html>