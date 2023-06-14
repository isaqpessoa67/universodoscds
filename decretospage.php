<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
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
        <div id = "divEscolhido">
        <div class="cdEscolhido_box">
            <div class="cdEscolhido">
            <img src="img/decretosreais.png" alt="Midnights" class = "cdPic">
            <div class="textEscolhido">
            <h2>Marilia Mendonça -
              <br>Decretos Reais Vol. 2</h2>
            <p>R$59,99</p>
            <p>Envio: grátis</p>
            <p>Chegará sexta-feira, dia 26 de maio</p>
            <div class="quantidadeSelect_box">
            <p>Quantidade:</p>
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
            </div>
            <div class="buttonCompra">
            <input type="button" value="Adicionar ao carrinho" class = "button">
            <a href="selecionarEndereco.php">
            <input type="button" value="Comprar agora" class = "button">
            </a>
            </div>
            <a href="promocoes.php">
            <input type="button" value="Voltar" class = "button">
            </a>
            </div>
            </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</body>
</html>