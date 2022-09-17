
<?php

if(isset($_POST['submit']))
{
include_once('config.php');

$email = $_POST['email_cliente'];
$senha = $_POST['senha_cliente'];
$nome = $_POST['nome_cliente'];
$rg = $_POST['rg_cliente'];
$cpf = $_POST['cpf_cliente'];
$endereco = $_POST['endereco_cliente'];
$bairro = $_POST['bairro_cliente'];
$cidade = $_POST['cidade_cliente'];
$estado = $_POST['estado_cliente'];
$cep = $_POST['cep_cliente'];
$dtNasc = $_POST['dtNasc_cliente'];
$renda = $_POST['renda_cliente'];

$result = mysqli_query($conexao, "INSERT INTO tb_cliente(email_cli, senha_cli, nome_cli, rg_cli, cpf_cli, endereco_cli, bairro_cli, cidade_cli, estado_cli, cep_cli, dtNasc_cli, renda_cli)
VALUES ('$email', '$senha', '$nome', '$rg', '$cpf', '$endereco', '$bairro', '$cidade', '$estado', '$cep', '$dtNasc', '$renda')");

}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style-login.css">
</head>
<body>
    <main class="main">
        <div class="container">
            <div class="card-login">
                <div class="titulo">
                    <p>LOGIN</p>
                </div>
                <div class="style-hr01">

                </div>
                <div class="formulario01">
                    <form action="">
                        <div class="dados">
                            <input type="email" name="" id="" placeholder="*Email:" class="input-text"> <br>
                            <input type="password" name="" id="" placeholder="*Senha:" class="input-text"> <br>
                        </div>
                        <!--
                        <p class="funcao03">O que você é?</p>
                        <div class="input-radio">
                        <input type="radio" name="funcao01" id="funcao01" class="">
                        <label for="funcao" class="">Colaborador</label> <br>
                        <input type="radio" name="funcao01" id="funcao02">
                        <label for="funcao02">Cliente</label>
                        </div>
                        -->
                        <br>
                        <a href="pos-login.html" class="logar"><input type="submit" class="btn-cadastrar" value="ENTRAR" onclick="logar(); return false"></input></a>
                    </form>
                    <div class="criar-conta01">
                        Não possui uma conta? <a href="html-cadastro.php" class="criar-conta02">Crie uma agora mesmo!</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        function logar(){
            alert('Login efetuado com sucesso!');
            location.href="pos-login.php";
        }
    </script>
</body>
</html>