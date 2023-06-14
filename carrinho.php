<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/scripts.js" defer></script>
</head>
<body>
<nav>
        <div class="navbar">
          <div class="container nav-container">
              <input class="checkbox" type="checkbox" name="" id="" />
              <div class="menuin">
              <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
              </div>  
            </div>
            <div class="menu-items">
              <li><a href="universoHome-comLogin.php">Home</a></li>
              <li><a href="maisVendidos.php">Mais vendidos</a></li>
              <li><a href="promocoes.php">Promoções</a></li>
            </div>
          </div>
        </div>
    </nav>
    <div class = "container">
        <div id = "divCarrinho">
        <div class="boxCarrinho">
        <div class = "logo">
                <div id = "titulo">
                <h1>CARRINHO</h1>
                </div>
         </div>
        <div class="itensCarrinho">
            <div id="item1">
              <div class="itemContent">
              <img src="img/didy.jpeg" alt="Lana Del Rey" id = "itemImage">
              </div>
              <div class="itemButtons">
              <h3 class = "textCarrinho">Lana Del Rey - Didy</h3>
                <input type="button" value="Excluir" id = "excluirBtn">
                <select name="quantidade" id = "selectAno">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
              <P class = "textCarrinho" id = "preco">Preço: 59,99</P>
              </div>
            </div>
        </div>
        <div class="totalCarrinho">
          <div class="totalFrete">
          <h1>Total com frete:</h1>
          <p>R$ 59,99</p>
          </div>
          <div class="continuarButton">
            <a href="selecionarEndereco.php">
            <input type="button" value="Continuar" class = "button" id = "continuarB">
            </a>
            <a href="didypage.php">
            <input type="button" value="Voltar" class = "button" id = "continuarB2">
            </a>
          </div>
        </div>
        </div>
        </div>
    </div>
</body>
</html>