<?php
//copiado do excluir
if(isset($_POST['id'])){
    $id=$_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    require_once "conexao.php";
    $sql = "UPDATE tbusuarios 
    SET nome='$nome',email='$email',senha='$senha',
    endereco='$endereco',telefone='$telefone' where id=$id";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<p>Atualizado com sucesso!</p>";
}else{
    echo "<p>Selecione um registro</p>";
    echo "<a href='listarusuarios.php'>Listar registros</a>";
}
?>