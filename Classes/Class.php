<?php 

class Painel {

    public function newLogin($email,$senha) {
        if($_POST['login']) {
            $sql = MySql::Connect()->prepare("SELECT * FROM `tb_usuarios` WHERE email = ? AND `senha` = ?");
            $sql->execute(array($email,$senha));

            if($sql->rowCount() == 1) {
                $_SESSION['online'] = true;
                header("Location: Home");
            }
        }

        // $email = $_POST['email'];
        // $senha = $_POST['senha'];
        // if($email === 'admin@a' && $senha === 'a123') {
        //     $_SESSION['online'] = true;
        // }
    
    }

    public function newUser($nome,$email,$cpf,$senha) {
        if($this->ExistUser($email,$cpf) == false) {
            if(isset($_POST['register'])) {
                $sql = MySql::Connect()->prepare("INSERT INTO tb_usuarios (nome,email,CPF,senha,`id.user_type`) VALUES(?,?,?,?,?)");
                $sql->execute(array($nome,$email,$cpf,$senha,4));
            }
        } else {
            echo "Erro ao cadastrar usuário";
        }

    }

    private function ExistUser($email,$cpf) {
        $sql = MySql::Connect()->prepare("SELECT * FROM tb_usuarios WHERE email = ? AND CPF = ?");
        $sql->execute(array($email,$cpf));

        if($sql->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function destroySession() {
        if(isset($_REQUEST['loggout']) && $_REQUEST['loggout'] == 1) {
            $_SESSION['online'] = false;
            header("Location: Page-login");
        }
    }

    public static function Alert() {
        echo "alerta";
    }
}

?>