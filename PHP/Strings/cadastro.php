<?php

require 'autoload.php';

$usuario = new \Alura\Usuario($_POST['nome']);
$contato = new \Alura\Contato($_POST['email']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Curso Strings</title>
</head>
<body>

<div class="mx-5 my-5">
<h1>Cadastro feito com sucesso.</h1>
<p>Seguem os dados de sua conta:</p>
<ul class="list-group">
    <li class="list-group-item">Primeiro nome: <?php echo $usuario->getNome(); ?></li>
    <li class="list-group-item">Sobrenome: <?php echo $usuario->getSobrenome(); ?></li>
    <li class="list-group-item">Usuário: <?php echo $contato->getUsuario(); ?></li>
    <li class="list-group-item">Senha: <?php echo $_POST['senha']; ?></li>
    <li class="list-group-item">Telefone: <?php echo $_POST['telefone']; ?></li>
    <li class="list-group-item">Email: <?php echo $_POST['email']; ?></li>
    <li class="list-group-item">Endereço: <?php echo $_POST['endereco']; ?></li>
</ul>
</div>
</body>
</html>
