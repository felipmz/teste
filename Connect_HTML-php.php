<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
</head>
<body>
    <?php
      // chamo arquivo de conexão php ao sql 
      // chama variaveis de cada formulario
      // sql que conecta tabela as variaveis
      // strutuda condicional com mensagens se deu certo ou não
      // botão voltar
    
     include "Connect_DB-php.php"; // conexão com arquivo de que liga DB ao php

      $Nome = $_POST['Nome'];
      $Endereco = $_POST['Endereco'];
      $Email = $_POST['Email'];
      $Telefone = $_POST['Telefone'];
      $D_nascimento = $_POST['D_nascimento'];

      $sql = "INSERT INTO `cadastro de clientes`(`nome`, `endereco`, `email`, `telefone`, `d_nasci`) VALUES ('$Nome','$Endereco','$Email','$Telefone','$D_nascimento')";

     $vari = mysqli_query($conn, $sql);
      
     if ($vari){
        echo $Nome." foi cadastrado com sucesso !";
     } else {
        echo "Erro no cadastro de " .$nome;
     }
    
?>
   <div class="voltar">
    <a href="Index.php"><input type="submit" value="Voltar !"></a>
    
   </div>
</body>
</html>