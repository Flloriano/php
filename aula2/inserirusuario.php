<?php
if(isset($_POST['nome'])&&isset($_POST['email'])){
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $endereco = $_POST['endereco'];
  $telefone = $_POST['telefone'];

  echo "<p>Os dados digitados foram:</p>";
  echo $nome . "<br>" . $email . "<br>" . $senha;
  echo "<br>" . $endereco . "<br>" . $telefone;
  require_once "conexao.php";
  $sql = "INSERT INTO tbusuarios 
  (nome,email,senha,tipo,endereco,telefone)
  values ('$nome','$email','$senha',1,'$endereco','$telefone')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<p>Salvo com sucesso!</p>";
}else{
  echo "<p>Digite os dados no formulário</p>";
  echo "<a href='formcadusuario.html'>Novo Usuário</a>";
}
echo "<br><a href='listarusuarios.php'>Listagem</a>";

?>