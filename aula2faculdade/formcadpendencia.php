<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendências</title>
</head>
<body>
    <h3>Cadastro de Pendências</h3>
    <form name="form1" action="inserirpendencia.php"
    method="post">
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao"><br>
        <label for="usuario">Usuário</label>
        <select name="usuario">
            <?php
            $sql="Select * from tbusuarios order by nome";
            require_once "conexao.php";
            $consulta = $conn->query($sql);
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='{$linha['id']}'>{$linha['nome']}</option>";
            }
            ?>
        </select>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>