
<?php

if(isset($_POST['submit']))
{
include_once('config.php');

$descricao      = $_POST['desc_prod'];
$quantidade     = $_POST['qtd_prod'];
$valor          = $_POST['valor_prod'];
$data_compra    = $_POST['dt_compra1'];
$cod_prod       = $_POST['cod_prod'];

$result = mysqli_query($conexao, "INSERT INTO tb_pedido_produto(desc_pedido, qtd_pedido, valor_pedido, dt_compra)
VALUES ('$descricao', '$quantidade', '$valor', '$data_compra')");

$retirar_estoque = mysqli_query($conexao, "UPDATE tb_produto set qtd_prod = qtd_prod - $quantidade where cod_prod = $cod_prod");
}

if(isset($_POST['enviar']))
{
include_once('config.php');

$descricao      = $_POST['desc_prod'];
$quantidade     = $_POST['qtd_prod'];
$valor          = $_POST['valor_prod'];
$data_compra    = $_POST['dt_compra1'];

$result = mysqli_query($conexao, "INSERT INTO tb_pedido_produto(desc_pedido, qtd_pedido, valor_pedido, dt_compra)
VALUES ('$descricao', '$quantidade', '$valor', '$data_compra')");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja F.MW</title>
    <link rel="stylesheet" href="style-index.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="linha-no-topo">

        </div>
        <div class="frase">
            <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="35" fill="currentColor" class="truck" viewBox="0 0 16 16">
                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
            <br>
               Loja For Man For Woman com os melhores pre??os e variedades - FRETE GRATIS PARA TODO O BRASIL!
            </p>
        </div>
        <nav>
            <a class="logo" href="pos-login.php"><h3>f.MW</h3></a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="#">PRODUTOS</a></li>
                <li><a href="#">PROMO????ES</a></li>
                <li><a href="#">SOBRE</a></li>
                
                <a href="#">
                    <img src="heart.svg" alt="Favoritos" class="favoritos">
                </a>

                <a href="#">
                    <img src="person.svg" alt="Meu perfil" class="person">
                </a>

                <a href="cart.php">
                    <img src="cart2.svg" alt="Carrinho de compras" class="carrinho">
                </a>
                <a href="cart.php" class="style-cart"><span>0</span></a>
                <li><a href="index.php">Sair</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="div-capa">
        <img src="capa11.png" class="capa" alt="">
    </div>
        <div class="space-secoes03">
            <p>CAMISAS</p>
        </div>
            <div class="header02" id="header02">
                <div class="secoes-prod">
                    
                    <a href="html-comprar1.html" class="add-carrinho"><img src="tshirt 01-png.png" class="camisa04" alt="">
                        <ul class="listas">
                            <li>Camisa Manga Curta - Unissex</li>
                            <li><br> R$250 <button class="btn-comprar">COMPRAR</button></li>
                        </ul>
                    </a>
                    <a href="html-comprar2.html" class="add-carrinho"><img src="cavada.png" class="camisa05" alt="">
                        <ul class="listas">
                            <li>Camisa Cavada </li>
                            <br>
                            <li>R$170 <button class="btn-comprar">COMPRAR</button></li>
                        </ul>
                    </a>
                    <a href="html-comprar3.html" class="add-carrinho"><img src="camisa 03-png.png" class="camisa03" alt="">
                        <ul class="listas">
                            <li>Camisa Manga Longa - Unissex</li>
                            <br>
                            <li> R$350 <button class="btn-comprar">COMPRAR</button></li>
                        </ul>
                    </a>
                </div>
            </div>

            <div class="space-secoes">
                <p>CAL??AS</p>
            </div>

            <div class="header02" id="header02">
                <div class="secoes-prod">
                    <a href="html-comprar4.html" class="add-carrinho"><img src="calca 01-png.png" class="calca01" alt="">
                        <ul class="listas">
                            <li>Cal??a Social</li>
                            <br>
                            <li> R$210 <button class="btn-comprar">COMPRAR</button></li>
                        </ul>
                    </a>
                    <a href="html-comprar5.html" class="add-carrinho"><img src="calca 02-png.png" class="calca02" alt="">
                        <ul class="listas">
                            <li>Cal??a Esportiva - Unissex</li>
                            <li><br>R$205 <button class="btn-comprar">COMPRAR</button></li>
                        </ul>
                    </a>
                </div>
            </div>

            <div class="space-secoes">
                <p>CAL??ADOS</p>
            </div>

            <div class="header02" id="header02">
                <div class="secoes-prod">
                    
                    <a href="html-comprar6.html" class="add-carrinho"><img src="sapato 01-png.png" class="sapato01" alt="">
                        <ul class="listas">
                            <li>Sapato - Feminino Salto alto Grosso </li>
                            <br>
                            <li>R$190 <button class="btn-comprar">COMPRAR</button></li>
                        </ul>
                    </a>
                    <a href="html-comprar7.html" class="add-carrinho"><img src="tenis 01-png.png" class="tenis01" alt="">
                        <ul class="listas">
                            <li>Tenis - Unissex</li>
                            <br>
                            <li> R$180 <button class="btn-comprar">COMPRAR</button></li>
                        </ul>
                    </a>
                    <a href="html-comprar8.html" class="add-carrinho"><img src="sapatenis 01-png.png" class="sapatenis01" alt="">
                        <ul class="listas">
                            <li>Sapa t??nis - Masculino</li>
                            <br>
                            <li> R$160 <button class="btn-comprar">COMPRAR</button></li>
                        </ul>
                    </a>
                </div>
            </div>

            <div class="space-secoes02">

            </div>
    <script src="mobile-navbar.js"></script>
    <script src="main.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>