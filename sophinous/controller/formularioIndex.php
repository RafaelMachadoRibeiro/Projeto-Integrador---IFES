<?php
session_start(); // Inicializa a sessão para armazenar mensagens de erro e sucesso

// Função para validar campos obrigatórios
function validateRequired($value, $fieldName) {
    if (empty($value)) {
        return "$fieldName é obrigatório.";
    }
    return null;
}

// Função para sanitizar os dados usando htmlspecialchars
function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}

// Verifica se o formulário de login foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form_login"])) {
    $txtusuario = sanitizeInput($_POST["txtusuario"]);
    $txtsenha = sanitizeInput($_POST["txtsenha"]);

    $errors = [];
    $successMessage = '';

    // Validar campos obrigatórios
    $errors[] = validateRequired($txtusuario, "Login");
    $errors[] = validateRequired($txtsenha, "Senha");

    // Verificar se houve erros
    $errors = array_filter($errors);

    if (empty($errors)) {
        // Processar login aqui (por exemplo, verificar no banco de dados)
        // Em caso de sucesso, redireciona com uma mensagem de sucesso
        $successMessage = "Login realizado com sucesso!";
    }
}

// Verifica se o formulário de cadastro foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form_cadastro"])) {
    $txtUsuario = sanitizeInput($_POST["txtusuario"]);
    $txtnome = sanitizeInput($_POST["txtnome"]);
    $txtdata = sanitizeInput($_POST["txtdata"]);
    $txtemail = sanitizeInput($_POST["txtemail"]);
    $txtSenha = sanitizeInput($_POST["txtsenha"]);
    $txtCsenha = sanitizeInput($_POST["txtCsenha"]);

    $errors = [];
    $successMessage = '';

    // Validar campos obrigatórios
    $errors[] = validateRequired($txtUsuario, "Nome de Usuário");
    $errors[] = validateRequired($txtnome, "Nome Completo");
    $errors[] = validateRequired($txtdata, "Data de Nascimento");
    $errors[] = validateRequired($txtemail, "Email");
    $errors[] = validateRequired($txtSenha, "Senha");
    $errors[] = validateRequired($txtCsenha, "Confirmar Senha");

    // Validar se as senhas coincidem
    if ($txtSenha != $txtCsenha) {
        $errors[] = "As senhas não coincidem.";
    }

    // Verificar se houve erros
    $errors = array_filter($errors);

    if (empty($errors)) {
        // Processar cadastro aqui (por exemplo, salvar no banco de dados)
        // Em caso de sucesso, redireciona com uma mensagem de sucesso
        $successMessage = "Cadastro realizado\n\n"
            . "Nome de Usuário: $txtUsuario\n"
            . "Nome Completo: $txtnome\n"
            . "Data de Nascimento: $txtdata\n"
            . "Email: $txtemail";
    }
}

// Armazenar erros e mensagem de sucesso na sessão para exibição
$_SESSION['errors'] = $errors;
$_SESSION['successMessage'] = $successMessage;

header('Location: index.php');
exit();
?>
