<?php

session_start();
// Inicializa um array para armazenar mensagens de erro
$erro = [];
$mensagemsucesso = '';


// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Função para sanitizar os dados
    function sanitizeInput($data) {
        $data = trim($data); // Remove espaços em branco no início e no fim
        $data = htmlspecialchars($data); // Converte caracteres especiais em entidades HTML
        return $data;
    }


    // Validação e sanitização de cada campo

    // Nome Completo
    if (empty($_POST["nome_usuario"])) {
        $erro[] = "Nome é obrigatório";
    } else {
        $nome_usuario = sanitizeInput($_POST["nome_usuario"]);
        // Aqui você pode adicionar mais validações específicas para o nome se necessário
    }

    // Email
    if (empty($_POST["email_usuario"])) {
        $erro[] = "Email é obrigatório";
    } else {
        $email_usuario = sanitizeInput($_POST["email_usuario"]);
        if (!filter_var($email_usuario, FILTER_VALIDATE_EMAIL)) {
            $erro[] = "Formato de email inválido";
        }
    }

    // Contato (telefone)
    if (empty($_POST["contato_usuario"])) {
        $erro[] = "Contato é obrigatório";
    } else {
        $contato_usuario = sanitizeInput($_POST["contato_usuario"]);
        // Aqui você pode adicionar validações adicionais para telefone se necessário
    }

    // Data de Nascimento
    if (empty($_POST["nascimento_usuario"])) {
        $erro[] = "Data de Nascimento é obrigatória";
    } else {
        $nascimento_usuario = sanitizeInput($_POST["nascimento_usuario"]);
        // Aqui você pode validar o formato da data se necessário
    }

    // Gênero
    if (!isset($_POST["usuario_genero"])) {
        $erro[] = "Gênero é obrigatório";
    } else {
        $usuario_genero = sanitizeInput($_POST["usuario_genero"]);
        // Aqui você pode validar se o valor do gênero é um dos valores esperados (Masculino, Feminino, Não Binário)
    }

    // Instituição de Ensino (opcional)
    if (!empty($_POST["ensino_usuario"])) {
        $ensino_usuario = sanitizeInput($_POST["ensino_usuario"]);
    }

    // Curso (opcional)
    if (!empty($_POST["curso_usuario"])) {
        $curso_usuario = sanitizeInput($_POST["curso_usuario"]);
    }

    // Período (opcional)
    if (!empty($_POST["periodo_usuario"])) {
        $periodo_usuario = $_POST["periodo_usuario"]; // Não precisa de sanitização aqui, pois é um número
    }

    // Disciplinas/Interesses (opcional)
    if (!empty($_POST["Diciplinas_usuarios"])) {
        $Diciplinas_usuarios = sanitizeInput($_POST["Diciplinas_usuarios"]);
    }

    // Sobre mim (opcional)
    if (!empty($_POST["sobre_usuario"])) {
        $sobre_usuario = sanitizeInput($_POST["sobre_usuario"]);
    }

    // Verifica se houve algum erro de validação
    if (empty($erro)) {
        // Se não houver erros, processa os dados
        // Aqui você pode salvar os dados no banco de dados, enviar por email, etc.

        // Exemplo simples de exibição dos dados processados
        $mensagemsucesso = "Dados atualizados com sucesso!\n\n"
            . "Nome completo:  $nome_usuario\n"
            . "Data de Nascimento: $nascimento_usuario\n"
            . "Email: $email_usuario\n"
            . "Contato: $contato_usuario\n "
            . "Gênero: $usuario_genero\n"
            . "Instituição de ensino: $ensino_usuario\n"
            . "Curso: $curso_usuario \n"
            . "Período: $periodo_usuario\n"
            . "Disciplinas: $Diciplinas_usuarios\n"
            . "Sobre mim: $sobre_usuario\n";

    }
}

// Armazenar erros e mensagem de sucesso na sessão para exibição
$_SESSION['erro'] = $$erro;
$_SESSION['mensagemsucesso'] = $mensagemsucesso;

header('Location: editPerfil.php');
exit();
?>

