<?php 
require_once 'templates/header.php';


?>
  <link rel="stylesheet" href="css/styleM.css">
  <main class="main">

    <!-- Formulário de postagem -->
    <div class="newPost">

      <div class="infoUser">
        <div class="imgUser">
          <img src="img/do-utilizador.png" alt="">
        </div>
        <strong>Usuário</strong>
      </div>

      <form action="" class="formPost" id="formPost">
        <textarea name="textarea" placeholder="Fazer uma publicação ...." id="textarea"></textarea>
        <div class="iconsAndButton">
          <div class="icons">
            <button type="button" class="btnFileForm" id="btnImage">
              <img src="img/adicionar-imagem.png" alt="Adicionar uma imagem">
            </button>
            <button type="button" class="btnFileForm" id="btnGif">
              <img src="img/arquivo-gif.png" alt="Adicionar um gif">
            </button>
            <button type="button" class="btnFileForm" id="btnVideo">
              <img src="img/adicionar-video.png" alt="Adicionar um vídeo">
            </button>
            <button type="button" class="btnFileForm" id="btnPDF">
              <img src="img/arquivo.png" alt="Adicionar um PDF">
            </button>
          </div>
          <button type="submit" id="botao" class="btnSubmitForm">Publicar</button>
        </div>
      </form>
    </div>

    <ul class="posts" id="posts"></ul>
    <template id="post-template">
      <li class="post">
        <div class="infoUserPost">
          <div class="imgUserPost"><img src="img/do-utilizador.png" alt="User Image"></div>
          <div class="nameAndHour">
            <strong>Usuário</strong>
            <p class="time"></p>
          </div>
        </div>
        <p class="postContent"></p>
        <div class="actionBtnPost">
          <button type="button" class="filesPost like" onclick="likePost()">
            <img src="img/heart.svg" alt="Curtir"> Curtir
          </button>
          <button type="button" class="filesPost comment" onclick="commentPost()">
            <img src="img/comment.svg" alt="Comentar"> Comentar
          </button>
          <button type="button" class="filesPost share">
            <img src="img/share.svg" alt="Compartilhar"> Compartilhar
          </button>
        </div>
      </li>
    </template>
  </main>

  <script src="js/PostFeedRev2.js"></script>

<?php 

require_once 'templates/footer.php';

?>