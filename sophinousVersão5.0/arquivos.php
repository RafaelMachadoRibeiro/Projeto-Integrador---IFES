<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styleMp.css">
  <link rel="stylesheet" href="css/arquivo.css">
  <script src="js/menu.js" defer></script>
  <title>Arquivos</title>
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

  <div class="container">
    <aside class="sidebar">
      <button id="progWeb">Programação para Web</button><br>
      <button id="s_redes">Serviço de redes</button><br>
      <button id="p_redes">Projeto de redes</button><br>
      <button id="t_redes">Tópicos de redes</button><br>
      <button id="a_web">Aplicativos Gráficos para web</button>
    </aside>
    <main class="content">
      <div class="folder"><img src="img/pasta.png" alt="Pasta"><span>aula1.zip</span></div>
      <div class="folder"><img src="img/pasta.png" alt="Pasta"><span>aula1.zip</span></div>
      <div class="folder"><img src="img/pasta.png" alt="Pasta"><span>aula1.zip</span></div>
      <div class="folder"><img src="img/pasta.png" alt="Pasta"><span>aula1.zip</span></div>
      <div class="folder"><img src="img/pasta.png" alt="Pasta"><span>aula1.zip</span></div>
      <div class="folder"><img src="img/pasta.png" alt="Pasta"><span>aula1.zip</span></div>
    </main>
  </div>
  <div class="action-buttons">
    <button id="add" class="btn-action"><img src="img/add.png" alt="Adicionar"></button>
    <button id="remover" class="btn-action"><img src="img/lixeira.png" alt="Excluir"></button>
  </div>

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
