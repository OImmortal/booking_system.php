<div class="padding-150">
    <div class="form-container">
        <div class="login-container">
            <h1>Logar-se</h1>
            <form action="" method="post" id="login-form">
                <label for="E-mail">Informe seu E-mail</label>
                <input type="email" name="email-login" id="email-login">
                <label for="Senha">Informe sua Senha</label>
                <input type="password" name="senha-login" id="senha-login">
                <input type="submit" value="Logar-se" name="login">
                <a href="">Esqueceu a Senha?</a>
            </form>
        </div>
        <div class="cad-container">
            <h1>Cadastrar-se</h1>
            <form action="" method="post">
                <label for="Nome">Informe seu nome completo</label>
                <input type="text" name="nome" id="nome">
                <label for="E-mail">Informe um E-mail</label>
                <input type="email" name="email-register" id="email">
                <label for="">Informe seu CPF</label>
                <input type="text" name="cpf" id="cpf">
                <label for="Senha">Informe uma Senha</label>
                <input type="password" name="senha-register" id="senha">
                <label for="Confirmar senha">Confirme a Senha</label>
                <input type="password" name="confirmSenha" id="">
                <p>*A Senha devem estar iguais</p>
                <input type="submit" value="Cadastrar-se" name="register">
            </form>
        </div>
    </div>
</div>
<?php 
    $painel = new Painel;
    
    
    if(isset($_POST['login'])) {
        $email = $_POST['email-login'];
        $senha = $_POST['senha-login'];
        $painel->newLogin($email,$senha);
        $_SESSION['id'] = Painel::getDados("id","tb_usuarios",["email", $email]);
    }
    

    if(isset($_POST['register'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email-register'];
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha-register'];
        $confirmSenha = $_POST['confirmSenha'];

        if($senha == $confirmSenha) {
            $painel = new Painel;
            $painel->newUser($nome,$email,$cpf,$confirmSenha);
        } else {
            echo "Senhas não combinam";
        }
    }

?>