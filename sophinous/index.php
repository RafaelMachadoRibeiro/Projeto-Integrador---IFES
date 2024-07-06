<?php
session_start();
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$successMessage = isset($_SESSION['successMessage']) ? $_SESSION['successMessage'] : '';
unset($_SESSION['errors']);
unset($_SESSION['successMessage']);
?>

<?php require_once 'templates/headerIndex.php'; 

include_once 'controller/IndexControlador.php';

?>


<section class="meio">
    <article>
        <img id="logo" src="img/WhatsApp Image 2024-04-08 at 11.42.03.jpeg" alt="logo">
        <p>Somos uma rede social acadêmica que tem como objetivo transformar o ambiente acadêmico em algo menos
            exclusivo e mais diversificado. Nossa ideia é utilizar nossa plataforma para integrar alunos de todo o
            Brasil e diminuir a distância entre o ensino médio e as universidades, permitindo que pessoas com menos
            experiência acadêmica recebam ajuda e apoio de pessoas que já passaram pelo que elas estão passando.
            Além de ser uma simples rede social, também oferecemos um ambiente online que permite ao estudante criar
            mecanismos que os auxiliem a melhorar e organizar seu ambiente acadêmico. </p>
    </article>
</section>

<?php if (!empty($successMessage)): ?>
    <script>
        alert(`<?php echo $successMessage; ?>`);
    </script>
<?php endif; ?>

<div id="modal" class="hide">
    <div class="FECHAR">
        <button id="close-modal"><img id="icon" src="img/botao-fechar.png" alt="fechar"></button>
    </div>
    <div class="titulo">
        <h1>Sophinous</h1>
    </div>
    <img id="login1" src="img/WhatsApp Image 2024-04-08 at 11.42.03.jpeg" alt="Logo">

    <a id="menu" href="/Modelo ppi/menu.php"></a>
    <div id="modal_login">
        <form class="form" method="POST" action="formularioIndex.php">
            <input type="hidden" name="form_login" value="1">
            <div class="form-control">
                <input type="text" name="txtusuario" id="txtusuario" placeholder="Login:">
                <small><?php echo in_array("Login é obrigatório.", $errors) ? "Login é obrigatório." : ""; ?></small>
            </div>

            <div class="form-control">
                <input type="password" name="txtsenha" id="txtsenha" placeholder="Senha:">
                <small><?php echo in_array("Senha é obrigatório.", $errors) ? "Senha é obrigatório." : ""; ?></small>
            </div>

            <button id="entrar" type="submit">Entrar</button>
            <button type="reset">Limpar</button>
            <button id="but_cad">Cadastrar</button>
        </form>
    </div>
</div>

<div id="modal_cadastro" class="hide">
    <div class="titulo_cadastro">
        <h1>Sophinous</h1>
        <button id="close-modalCad"><img id="icon" src="img/botao-fechar.png" alt="fechar"></button>
    </div>
    <img id="login2" src="img/WhatsApp Image 2024-04-08 at 11.42.03.jpeg" alt="Logo">

    <div id="cadastro">
        <form class="form_cadastro" method="POST" action="controller/IndexControlador.php">
            <input type="hidden" name="form_cadastro" value="1">
            <div class="form-control">
                <input type="text" name="txtusuario" id="txtUsuario" placeholder="Nome de Usuário:">
                <small><?php echo in_array("Nome de Usuário é obrigatório.", $errors) ? "Nome de Usuário é obrigatório." : ""; ?></small>
            </div>
            <div class="form-control">
                <input type="text" name="txtnome" id="txtnome" placeholder="Nome Completo:">
                <small><?php echo in_array("Nome Completo é obrigatório.", $errors) ? "Nome Completo é obrigatório." : ""; ?></small>
            </div>
            <div class="form-control">
                <input type="email" name="txtemail" id="txtemail" placeholder="Email:">
                <small><?php echo in_array("Email é obrigatório.", $errors) ? "Email é obrigatório." : ""; ?></small>
            </div>
            <div class="form-control">
                <input type="date" name="txtdata" id="txtdata" placeholder="Data de Nascimento:">
                <small><?php echo in_array("Data de Nascimento é obrigatório.", $errors) ? "Data de Nascimento é obrigatório." : ""; ?></small>
            </div>
            <div class="form-control">
                <input type="password" name="txtsenha" id="txtSenha" placeholder="Senha:">
                <small><?php echo in_array("Senha é obrigatório.", $errors) ? "Senha é obrigatório." : ""; ?></small>
            </div>
            <div class="form-control">
                <input type="password" name="txtCsenha" id="txtCsenha" placeholder="Confirmar Senha:">
                <small><?php echo in_array("Confirmar Senha é obrigatório.", $errors) ? "Confirmar Senha é obrigatório." : ""; ?></small>
            </div>
            <div class="form-control">
                <small><?php echo in_array("As senhas não coincidem.", $errors) ? "As senhas não coincidem." : ""; ?></small>
            </div>
            <button type="submit" name="btnoperacao" class="btn" value="incluir">Cadastrar</button>
            <button type="reset">Limpar</button>
        </form>
    </div>
</div>

<?php require_once 'templates/footerIndex.php'; ?>
