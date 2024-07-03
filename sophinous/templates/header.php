<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styleMp.css">
  <script src="js/menu.js"></script>
  <title>Sophinous</title>
</head>

<body>
<header>
        <div class="dir">
            <img id="img" src="img/WhatsApp Image 2024-04-08 at 11.42.03.jpeg" alt="logo">
            <input onkeyup="filterFunction()" type="text" id="txtBusca" placeholder="Pesquisar..." />
            <div id="myDropdown" class="dropdown-content">
                <a href="perfil_user.php">Rafael Ribeiro Machado</a>
                <a href="">Bruno Almeida Machado</a>
                <a href="">Mateus Correia De Andrade</a>
                <a href="">Boaz</a>
                <a href="">Richard</a>
                <a href="">Henrique</a>
                <a href="">João Pedro</a>
            </div>
            <button onclick="myFunction()" id="btnBusca"><img id="iconb" src="img/lupa.png" alt=""></button>
        </div>
        <h2>Sophinous</h2>
        <nav>
            <ul class="menu">
                <l><a href="menu.php"><img class="icon" src="img/casa.png" alt=""></a></l>
                <li><a href="arquivos.php"><img class="icon" src="img/pasta.png" alt=""></a></li>
                <l><a href="calendario.php"><img class="icon" src="img/data-limite.png" alt=""></a></l>
                <l><a id="user"><img class="icon" src="img/do-utilizador.png" alt=""></a></l>
                <l><a href="index.php"><img class="icon" src="img/porta.png" alt=""></a></l>
            </ul>
        </nav>
    </header>