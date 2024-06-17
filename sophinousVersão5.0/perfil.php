<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil usuário</title>
    <link rel="stylesheet" href="css/styleMp.css">
    <link rel="stylesheet" href="css/styleProfile.css">
    <script src="js/menu.js" defer></script>
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
    <section class="container">
        <article class="containerImg">
            <div class="imgProfile"><img src="img/do-utilizador.png" alt=""></div>
        </article>
        <article class="">
            <h1>Usuario</h1>
            <h1>IFES - Campus Serra</h1>
            <h1>Tecnico Informática</h1>
            <a href="editPerfil.php">
                <button>Editar Perfil</button>
            </a>
            <div class="divisor"></div>
            <article class="container2">
                <div id="post1" class="post">
                    <img src="img/Captura de tela 2024-06-01 142351.png" alt="">
                </div>
                <div id="post2" class="post">
                    <img src="img/Captura de tela 2024-06-01 142420.png" alt="">
                </div>
                <div id="post3" class="post">
                    <img src="img/Captura de tela 2024-06-01 142450.png" alt="">
                </div>
            </article>
        </article>
    </section>

    <div id="popuPerfil" class="hidden">
        <div class="perfil-header">
            <img src="img/do-utilizador.png" alt="User Image" class="imagemPerfil">
            <h3>Usuário</h3>
        </div>
        <div class="perfil-stats">
            <p id="contadorSeguindo">Seguindo: <span>100</span></p>
            <p id="contadorSegidores">Seguidores: <span>150</span></p>
        </div>
        <button id="botaoEdi" onclick="entrar()">Perfil</button>
    </div>
</body>

</html>