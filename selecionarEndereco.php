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
        <div id = "divCadastro">
        <div class="boxCadastro">
        <div class = "logo">
                <div id = "titulo">
                <h1>Endereço</h1>
                </div>
         </div>
        <div class="divc1">
        <input type="text" id="txtBusca" placeholder="Nome Completo"/>
        <input type="text" id="txtBusca" placeholder="CEP"/>
        <input type="text" id="txtBusca" placeholder="Cidade"/>
        </div>
        <div class="divc2">
        <input type="text" id="txtBusca" placeholder="Estado"/>
        <input type="text" id="txtBusca" placeholder="Rua/Avenida"/>
        <input type="Password" id="txtBusca" placeholder="Número"/>
        <input type="Password" id="txtBusca" placeholder="Bairro"/>
        <input type="Password" id="txtBusca" placeholder="Telefone"/>
        </div>
        <a href="confirmaçao.php">
        <input type="button" value="Confirmar" class = "button">
        </a>
        <a href="maisVendidos.php">
        <input type="button" value="Voltar" class = "button">
        </a>
        </div>
        </div>
    </div>
</body>
</html>