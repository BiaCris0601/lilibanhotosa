<?php
if(isset($_POST['submit']))
{
    include_once('conexao.php');
    $nome_tutor=$_POST['nome_tutor'];
    $nome_pet=$_POST['nome_pet'];
    $raca=$_POST['raca'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $genero=$_POST['genero'];
    $data_nascimento=$_POST['data_nascimento'];
    $endereco=$_POST['endereco'];
    $cidade=$_POST['cidade'];
    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];
    $result=mysqli_query($conexao,"INSERT INTO clientes(nome_tutor,nome_pet,raca,email,telefone,genero,data_nascimento,endereco,cidade,usuario,senha)
    values ($nome_tutor,'$nome_pet','$email','$telefone', '$genero', '$data_nascimento', '$endereco', '$cidade', '$estado','$usuario', '$senha')");
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lili Banho & Tosa</title>
<link href="cadastrostyle.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="logo1.png" type="image/x-icon">
</head>

<body>
<header>
<div class="logo">
<img src="logo1.png" width="220" height="220">
</div>
<nav>
<ul>
<li><a href="login.html">ENTRAR</a></li>
<li><a href="index.html">HOME</a></li>
<li><a href="cadastro.html">CADASTRAR</a></li>
<li><a href="quemsomos.html">QUEM SOMOS</a></li>
<li><a href="servico.html">SERVIÇOS</a></li>
<li><a href="contato.html">CONTATO</a></li>
<li><a href="curiosidade.html">CURIOSIDADES</a></li>
</ul>
</nav>
</header>
<main>
<div class="box">
<form action="cadastro.php" method="post">
<fieldset>
<legend><b>Cadastro de Clientes</b></legend><br>
<div class="campo">
<input type="text" name="nome_tutor" id="nome" class="inputUser" required>
<label for="nome_tutor" class="labelInput"> Nome Tutor</label>
</div><br><br>
<div class="campo">
<input type="text" name="nome_pet" id="nome" class="inputUser" required>
<label for="nome_pet" class="labelInput"> Nome Pet</label>
</div><br><br>
<div class="campo">
<input type="text" name="raca" id="nome" class="inputUser" required>
<label for="raca" class="labelInput"> Raça</label>
</div><br><br>
<div class="campo">
<input type="email" name="email" id="email" class="inputUser" required>
<label for="email" class="labelInput"> Email</label>
</div><br><br>
<div class="campo">
<input type="tel" name="telefone" id="telefone" class="inputUser" required>
<label for="telefone" class="labelInput"> Telefone</label>
</div><br><br>
<label for="data_nascimento"><b> Data de Nascimento:</b></label>
<input type="date" name="data_nascimento" id="data_nascimento" required>
<br><br>
<div class="campo">
<input type="text" name="endereco" id="endereco" class="inputUser" required>
<label for="endereco" class="labelInput"> Endereço</label>
</div><br><br>
<div class="campo">
<input type="text" name="cidade" id="cidade" class="inputUser" required>
<label for="cidade" class="labelInput"> Cidade</label>
</div><br><br>
<div class="campo">
<input type="text" name="usuario" id="usuario" class="inputUser" required>
<label for="usuario" class="labelInput"> Usuário</label>
</div><br><br>
<div class="campo">
<input type="password" name="senha" id="senha" class="inputUser" required>
<label for="senha" class="labelInput"> Senha</label>
</div><br><br>

<input type="submit" name="submit" id="submit"  />
</div>
</div>
</fieldset>
</form>
</main>
<footer>
<div class="rodape">
<ul>
<li><a href="login.html">ENTRAR</a></li>
<li><a href="index.html">HOME</a></li>
<li><a href="cadastro.html">CADASTRAR</a></li>
<li><a href="quemsomos.html">QUEM SOMOS</a></li>
<li><a href="servico.html">SERVIÇOS</a></li>
<li><a href="contato.html">CONTATO</a></li>
<li><a href="curiosidade.html">CURIOSIDADES</a></li>
</ul>
</div>
<div class="rodape">
<img src="local.png">
<h2>Localização</h2>
<p>Rua João de Matos Filho, Nº1.245 - Parque Alian </p>
<p>São João de Meriti - CEP:25550-442</p>
</div>
<div class="rodape">
<img src="contato.png">
<h2>Contatos</h2>
<p>(21)97512-1877</p>
<p>(21)2752-9335</p>
</div>
<div class="rodape">
<img src="email.png">
<h2>E-mail</h2>
<p>lilibanhotosa@gmail.com </p>
</div>
<div class="rodape">
<p>Siga as nossas redes sociais</p>
<a href="#"><img src="facebook.png"></a>
<a href="#"><img src="instagram.png"></a>
<a href="#"><img src="youtube.png"></a>
</div>
</footer>
</body>
</html>