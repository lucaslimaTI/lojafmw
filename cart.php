<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu carrinho </title>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style-cart.css">
    
</head>
<body>
    <header>
        <nav>
            <a class="logo" href="#"><h3>f.MW</h3></a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="pos-login.php">PRODUTOS</a></li>
                <li><a href="#">PROMOÇÕES</a></li>
                <li><a href="#">SOBRE</a></li>
                <a href="#">
                    <img src="heart.svg" alt="Favoritos" class="favoritos">
                </a>

                <a href="#">
                    <img src="person.svg" alt="Meu perfil" class="person">
                </a>

                <a href="#">
                    <img src="cart2.svg" alt="Carrinho de compras" class="carrinho">
                    
                </a>
                <a href="cart.html" class="style-cart"><span>0</span></a>
                <li><a href="index.php">Sair</a></li>
                
            </ul>
           
        </nav>
    </header>

        <div class="space-secoes">
            <p class="msg-compra">FINALIZAÇÃO DA COMPRA</p>
        </div>
            
      
        <div class="products-container">
            <div class="product-header">
                <h5 class="product-title">PRODUTO</h5>
                <h5 class="price">PREÇO</h5>
                <h5 class="quantity">QUANTIDADE</h5>
                <h5 class="total">TOTAL</h5>
            </div>
            <form action="pos-login.php" method="POST">
            <div class="products">

            </div>
        </div>
        <div class="finalizar-carrinho" >
            <input class="btn-carrinho" type="submit" name="enviar" id="" value="Finalizar pedido" onclick="finalizar(); dt_compra2();">
        </div>
        <input type="text" class="none-input" name="dt_compra1" id="data-compra">
    </form>
       
    <script src="mobile-navbar.js"></script>
    <script>
        function finalizar() {
            alert('COMPRA FINALIZADA COM SUCESSO!');
        }
    </script>

    <script>
        
        function dt_compra2() {
            dt_compra = new Date();
            var data = new Date();
            var dia = String(data.getDate()).padStart(2, '0');
            var mes = String(data.getMonth() + 1).padStart(2, '0');
            var ano = data.getFullYear();
            dataAtual = ano + '-' + mes + '-'  +dia ;
            document.querySelector('#data-compra').value = dataAtual;
        }
    </script>

    <script>
        function calcular() {
            var n1 = parseInt(document.getElementById('n1').value);
            var valor_produto = 160.00;
            valor_produto = valor_produto * n1;
            document.getElementById('resultado').innerHTML = ('Valor total da compra: R$' + valor_produto + ',00');
            document.querySelector('#final').value = valor_produto;
        }
    </script>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="main.js"></script>
    
</body>
</html>