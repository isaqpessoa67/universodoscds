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
        <div id = "divVendidos">
        <div class="boxVendidos">
        <div class = "logo">
                <div id = "titulo">
                <h1>Mais vendidos</h1>
                <div class="anosButton">
                <a href="maisVendidos.php">
                <input type="button" value="2023" class = "button" id = "btn_diva">
                </a>
                <a href="maisVendidos22.php">
                <input type="button" value="2022" class = "button" id = "btn_divb">
                </a>
                <a href="maisVendidos21.php">
                <input type="button" value="2021" class = "button">
                </a>
                <a href="maisVendidos20.php">
                <input type="button" value="2020" class = "button">
                </a>
                </div>
                </div>
         </div>
         <div class="mais_vendidosBox2" id = "divb">
            <div class="cd1">
            <img src="img/folklore.png" alt="Foklore" class = "cdPic">
            <div class="textVendidos">
            <h2>Taylor Swift</h2>
            <p>Folklore</p>
            <p>R$59,99</p>
            <a href=".php">
            <input type="button" value="Comprar" class = "button">
            </a>
            </div>
            </div>
            <div class="cd2">
                <img src="img/futurenostalgia.jpg" alt="Future Nostalgia" class = "cdPic">
                <div class="textVendidos">
                <h2>Dua Lipa</h2>
                <p>Future Nostalgia</p>
                <p>R$59,99</p>
                <a href=".php">
                <input type="button" value="Comprar" class = "button">
                </a>
                </div>
            </div>
            <a href="universoHome-comLogin.php">
            <input type="button" value="Voltar" class = "button">
            </a>
            </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</body>
</html>