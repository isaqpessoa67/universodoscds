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
        <div id = "divHome">
        <div class = "logo">
                <img src="img/cd.png" alt="" srcset="">
                <div id = "titulo">
                <h1>UNIVERSO</h1>
                <h1>DOS CDS</h1>
                </div>
            </div>
        <div id = "divBusca">
        <div class="divBusca-pesquisa">
        <input type="text" id="txtBusca" placeholder="Buscar CD por título, gênero, música..."/>
        <input type="button" value="Buscar" class = "button-pink">
        </div>
        <a href="maisvendidos.php">
        <input type="button" value="Mais vendidos" class = "button">
        </a>
        <a href="promocoes.php">
        <input type="button" value="Promoções" class = "button">
        </a>
        </div>
        <div class="conta">
          <div class="perfilfoto">
          <img src="img/perfilrosa.png" alt="Perfil" id = "itemImage">
          </div>
          <div class="perfilAcoes">
          <h3>Roberta Bezerra</h3>
          <a href="universohome.php">
          <input type="button" value="Sair da conta" class = "button">
          </a>
          </div>
        </div>
        </div>
    </div>
</body>
</html>