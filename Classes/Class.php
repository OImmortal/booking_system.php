<?php 

class Painel {

    public function newLogin($email,$senha) {
        if($_POST['login']) {
            $sql = MySql::Connect()->prepare("SELECT * FROM `tb_usuarios` WHERE email = ? AND `senha` = ?");
            $sql->execute(array($email,$senha));

            if($sql->rowCount() == 1) {
                echo "Usuário logado";
            }
        }
    }

    public function newUser() {
        
    }

}

?>