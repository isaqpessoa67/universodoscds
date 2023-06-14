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
              <li><a href="universoHome-ADM.php">Home</a></li>
              <li><a href="usuarios.php">Usuários</a></li>
              <li><a href="cds.php">Cds</a></li>
            </div>
          </div>
        </div>
    </nav>
    <div class = "container">
        <div id = "divHome">
        <div class = "logo">
                <img src="img/cd.png" alt="" srcset="">
                <div id = "titulo">
                <h1>PÁGINA DO</h1>
                <h1>ADMIN</h1>
                </div>
            </div>
        <div id = "divBusca">
        <input type="button" value="Usuários" class = "button">
        <a href="cds.php">
        <input type="button" value="Visualizar CDS" class = "button">
        </a>
        </div>
        </div>
    </div>
</body>
</html>