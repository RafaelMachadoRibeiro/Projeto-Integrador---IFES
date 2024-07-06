<?php
require_once 'crud.php';
require_once 'user.php';

class userDAO extends CRUD {
    
    protected $table = 'usuario';

    public function insert($usuario) {
        $sql = "INSERT INTO $this->table (User, Nome, Email, Datans, senha) VALUES (:user, :nome, :email, :datans, :senha)";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':user', $usuario->getUser());
        $stmt->bindParam(':nome', $usuario->getNome());
        $stmt->bindParam(':email', $usuario->getEmail());
        $stmt->bindParam(':datans', $usuario->getNasc());
        $stmt->bindParam(':senha', $usuario->getSenha());
        return $stmt->execute();
    }

    public function update($id, $usuario) {
        $sql = "UPDATE $this->table SET user = :user, nome = :nome, email = :email, datans = :datans, senha = :senha WHERE id = :id";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':user', $usuario->getUser());
        $stmt->bindParam(':nome', $usuario->getNome());
        $stmt->bindParam(':email', $usuario->getEmail());
        $stmt->bindParam(':datans', $usuario->getNasc());
        $stmt->bindParam(':senha', $usuario->getSenha());
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
?>
