<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Cadastro de Usuário</h3>

    <?php
    //copiado do excluir
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        //copiado do listar
        require_once "conexao.php";
        $consulta = $conn->query("SELECT * FROM tbusuarios 
        where id=$id");
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <!-- copiado do formcad -->
        <form name="form1" action="atualizarusuario.php"
        method="post">
        <input type="hidden" name="id" 
        value="<?php echo $linha['id']; ?>">
            <label for="nome">Nome</label>
            <input type="text" name="nome" 
            value="<?php echo $linha['nome']; ?>"><br>
            <label for="email">E-mail</label>
            <input type="email" name="email" 
            value="<?php echo $linha['email']; ?>"><br>
            <label for="senha">Senha</label>
            <input type="text" name="senha" maxlength="20" 
            value="<?php echo $linha['senha']; ?>"><br>
            <label for="endereco">Endereço</label>
            <textarea rols="20" cols="50" name="endereco">
                <?php echo $linha['endereco']; ?>
            </textarea><br>
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" 
            value="<?php echo $linha['telefone']; ?>"><br>
            <input type="submit" value="Atualizar">
        </form>
        <?php
        }//fim do while
    }else{ //else do if (isset(.....))
        echo "<p>Selecione um registro</p>";
    }
        ?>
</body>
</html>