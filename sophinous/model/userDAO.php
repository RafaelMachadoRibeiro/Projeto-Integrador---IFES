<?php
    require_once 'crud.php';
    require_once 'user.php';


    class UserDAO extends CRUD{
        
        protected $table = 'User';

        public function insert($user){

            $sql="INSERT INTO $this->table (user,nome,email,datans,senha) VALUES (:user,:nome,:email,:datans,:senha)";

            $stmt = Database::prepare($sql);
            $stmt->bindParam(':user',$user->getUser());
            $stmt->bindParam(':nome',$user->getNome());
            $stmt->bindParam(':email',$user->getEmail());
            $stmt->bindParam(':datans',$user->getNasc());
            $stmt->bindParam(':senha',$user->getSenha());

            return $stmt->execute();

        }

        public function update($id,$user){
            $sql="UPDATE $this->table SET user = :user, nome = :nome, email = :email , datans = :datans , senha = :senha WHERE id = :id ";
            $stmt = Database::prepare($sql);
            $stmt->bindParam(':user',$user->getUser());
            $stmt->bindParam(':nome',$user->getNome());
            $stmt->bindParam(':email',$user->getEmail());
            $stmt->bindParam(':datans',$user->getNasc());
            $stmt->bindParam(':senha',$user->getSenha());
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            
            return $stmt->execute();
        }



    }

?>