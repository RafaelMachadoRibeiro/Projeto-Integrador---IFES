<?php

require_once(__DIR__.'/../model/userDAO.php');

class IndexControlador {

    public function __construct() { }

    public function listar() {
        try {
            $userDAO = new userDAO();
            return $userDAO->findAll();
        } catch (Exception $excecao) {
            throw $excecao;
        }
    }

    public function excluircliente() {
        try {
            $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            if (isset($_POST['btnoperacao'])) {
                $clienteDAO = new ClienteDAO();
                if ($clienteDAO->delete($id)) {
                    $_SESSION['mensagem'] = "Excluido com sucesso!";
                } else {
                    $_SESSION['mensagem'] = "Erro ao excluir!";
                }
                header('Location: '.  dirname($_SERVER['HTTP_REFERER']) . '/index.php');
            }
        } catch (Exception $excecao) {
            throw $excecao;
        }
    }

    public function incluircliente() {
        try {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            if (isset($_POST['btnoperacao'])) {
                $user = htmlspecialchars($_POST['txtusuario']);
                $nome = htmlspecialchars($_POST['txtnome']);
                $email = htmlspecialchars($_POST['txtemail']);
                $datans = htmlspecialchars($_POST['txtdata']);
                $senha = htmlspecialchars($_POST['txtsenha']);
                $userDAO = new userDAO();    
                $usuario = new usuario($user, $nome, $email, $datans, $senha, 1);    
                if ($userDAO->insert($usuario)) {
                    $_SESSION['mensagem'] = "Cadastro com sucesso!";
                } else {
                    $_SESSION['mensagem'] = "Erro ao cadastrar!";
                }
                header('Location: '.  dirname($_SERVER['HTTP_REFERER']) . '/index.php');
            }
        } catch (Exception $excecao) {
            throw $excecao;
        }
    }

    public function atualizarcliente() {
        try {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            if (isset($_POST['btnoperacao'])) {
                $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
                $user = htmlspecialchars($_POST['txtusuario']);
                $nome = htmlspecialchars($_POST['txtnome']);
                $email = htmlspecialchars($_POST['txtemail']);
                $datans = htmlspecialchars($_POST['txtdata']);
                $senha = htmlspecialchars($_POST['txtsenha']);
                $userDAO = new userDAO();    
                $usuario = new usuario($user, $nome, $email, $datans, $senha, 1);    
                if ($userDAO->update($id, $usuario)) {
                    $_SESSION['mensagem'] = "Atualizado com sucesso!";
                } else {
                    $_SESSION['mensagem'] = "Erro ao atualizar!";
                }
                header('Location: '.  dirname($_SERVER['HTTP_REFERER']) . '/index.php');
            }
        } catch (Exception $excecao) {
            throw $excecao;
        }
    }
}

if (isset($_POST['btnoperacao'])) {
    $operacao = htmlspecialchars($_POST['btnoperacao']);
    $IndexControlador = new IndexControlador();
    switch ($operacao) {
        case 'excluir':
            $IndexControlador->excluircliente();
            break;
        case 'incluir':
            $IndexControlador->incluircliente();
            break;
        case 'atualizar':
            $IndexControlador->atualizarcliente();
            break;
    }
}
?>
