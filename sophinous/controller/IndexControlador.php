<?php 

//Classe de acesso ao banco de dados
//__DIR__ -> O diretório físico do arquivo, por exemplo: D:\marta\IFES\ProgramacaoWeb\usbwebserver_v8.6\usbwebserver\root\codigoprogwebphp\mvc\controller
require_once(__DIR__.'/../model/userDAO.php');


class IndexControlador {
	

	public function __construct() { }
	


	/*Lista os clientes */
	public function listar() {
		try {
			
			//instancia classes de banco
			$userDAO = new userDAO();
			
			return $clienteDAO->findAll();

		}
		catch (Exception $excecao) {
			throw $excecao;
		}
	}


	/*Excluir o cliente */
	public function excluircliente() {
		try {
			$id =filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT); 					

			//Se a sessão não existir, então inicia a sessão
			if (session_status() === PHP_SESSION_NONE) {
				session_start();
			}
			
			//verifica se o botão deletar foi acionado
			if(isset($_POST['btnoperacao'])):
				
				
				//instancia um objeto cliente
				$clienteDAO = new ClienteDAO();	
				
				
				//exclui o cliente
				if($clienteDAO->delete($id)):
					$_SESSION['mensagem'] = "Excluido com sucesso!";					
				else:
					$_SESSION['mensagem'] = "Erro ao excluir!";					
				endif;
				header('Location: '.  dirname($_SERVER['HTTP_REFERER']) . '/index.php');
				
			endif;	

		}
		catch (Exception $excecao) {
			throw $excecao;
		}
	}

	/*Incluir cliente */
	public function incluircliente(){

		try {
				//Se a sessão não existir, então inicia a sessão
				if (session_status() === PHP_SESSION_NONE) {
					session_start();
				}


				//verifica se o botão cadastrar foi acionado
				if(isset($_POST['btnoperacao'])):
					
					//sanitiza os campos do formulário
					//FILTER_SANITIZE_STRING está depreciado , então usar a função htmlspecialchars
					$nome=htmlspecialchars($_POST['nome']);
					$sobrenome=htmlspecialchars($_POST['sobrenome']);
					$email=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
					$idade=filter_var($_POST['idade'], FILTER_SANITIZE_NUMBER_INT);

					//instancia o cliente
					$clienteDAO = new ClienteDAO();	
					$cliente = new Cliente(0,$nome,$sobrenome,$email,$idade,1);	
					
					
					//insere o cliente
					if($clienteDAO->insert($cliente)):
						$_SESSION['mensagem'] = "Cadastro com sucesso!";
						
					else:
						$_SESSION['mensagem'] = "Erro ao cadastrar!";		
						
					endif;
					
					header('Location: '.  dirname($_SERVER['HTTP_REFERER']) . '/index.php');
				endif;	

			
		}
		catch (Exception $excecao) {
			throw $excecao;
		}

	}



	/*Atualizar cliente */
	public function atualizarcliente(){

		try {
				//Se a sessão não existir, então inicia a sessão
				if (session_status() === PHP_SESSION_NONE) {
					session_start();
				}


				//verifica se o botão cadastrar foi acionado
				if(isset($_POST['btnoperacao'])):
					
					//sanitiza os campos do formulário
					//FILTER_SANITIZE_STRING está depreciado , então usar a função htmlspecialchars
					$nome=htmlspecialchars($_POST['nome']);
					$sobrenome=htmlspecialchars($_POST['sobrenome']);
					$email=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
					$idade=filter_var($_POST['idade'], FILTER_SANITIZE_NUMBER_INT);
					$id =filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT); 
					
					
					//instancia o objeto cliente
					$clienteDAO = new ClienteDAO();	
					$cliente = new Cliente(0,$nome,$sobrenome,$email,$idade,1);	

					
					//atualiza o cliente
					if($clienteDAO->update($id,$cliente)):
						$_SESSION['mensagem'] = "Atualizado com sucesso!";
						
					else:
						$_SESSION['mensagem'] = "Erro ao cadastrar!";		
						
					endif;
					
					header('Location: '.  dirname($_SERVER['HTTP_REFERER']) . '/index.php');
				endif;	

			
		}
		catch (Exception $excecao) {
			throw $excecao;
		}

	}
}

if (isset($_POST['btnoperacao'])===true){

	//sanitiza a string de operação obtida por meio do post
	$operacao=htmlspecialchars($_POST['btnoperacao']);
	
	
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