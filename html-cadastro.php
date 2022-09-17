<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="style-cadastro.css">
</head>
<body>
    <main class="main">
        <div class="container">
            <div class="card-cadastro">
                <div class="titulo">
                    <p>CADASTRO</p>
                </div>
                <div class="style-hr01">

                </div>
                <div class="formulario01">
                    <form action="html-login.php" method="POST">
                        <div class="dados">
                            <input type="email"     name="email_cliente"        id="email_cliente" placeholder="*Email:"                class="input-text"  autocomplete="off"> <br>
                            <input type="password"  name="senha_cliente"        id="senha_cliente" placeholder="*Senha:"                class="input-text"  autocomplete="off"> <br>
                            <input type="text"      name="nome_cliente"         id="nome_cliente" placeholder="*Nome:"                  class="input-text"  autocomplete="off"> <br>
                            <input type="text"      name="rg_cliente"           id="rg_cliente" placeholder="*RG:"                      class="input-text"  autocomplete="off"> <br>
                            <input type="text"      name="cpf_cliente"          id="cpf_cliente"placeholder="*CPF:"                     class="input-text"  autocomplete="off"> <br>
                            <input type="text"      name="endereco_cliente"     id="endereco_cliente"placeholder="*Endereço:"           class="input-text"  autocomplete="off"> <br>
                            <input type="text"      name="bairro_cliente"       id="bairro_cliente"placeholder="*Bairro:"               class="input-text"  autocomplete="off"> <br>
                            <input type="text"      name="cidade_cliente"       id="cidade_cliente"placeholder="*Cidade:"               class="input-text"  autocomplete="off"> <br>
                            <input type="text"      name="estado_cliente"       id="estado_cliente"placeholder="*Estado:"               class="input-text"  autocomplete="off"> <br>
                            <input type="text"      name="cep_cliente"          id="cep_cliente"placeholder="*Cep:"                     class="input-text"  autocomplete="off"> <br>
                            <input type="date"      name="dtNasc_cliente"       id="dtNasc_cliente"placeholder="*Data de Nascimento:"   class="input-text"  autocomplete="off"> <br>
                            <input type="text"      name="renda_cliente"        id="renda_cliente"placeholder="*Renda:"                 class="input-text"  autocomplete="off"> <br>
                        </div>
                        <p class="funcao03">O que você é?</p>
                        <div class="input-radio">
                        <input type="radio" name="funcao01" id="funcao01" class="">
                        <label for="funcao" class="">Colaborador</label> <br>
                        <input type="radio" name="funcao01" id="funcao02">
                        <label for="funcao02">Cliente</label>
                        </div>
                        <br>
                        <input type="submit" class="btn-cadastrar" name="submit" id="" value="CADASTRAR" onclick="cadastrar()">
                        <button class="btn-cadastrar" onclick="voltar(); return false;">VOLTAR</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script>
       function cadastrar(){
            alert('Usuario cadastrado com sucesso - Boas Compras!');
        }
    </script>
</body>
</html>