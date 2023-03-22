<div class="padding-150">
    <div class="form-container">
        <div class="login-container">
            <h1>Logar-se</h1>
            <form action="" method="post">
                <label for="E-mail">Informe seu E-mail</label>
                <input type="email" name="email" id="">
                <label for="Senha">Informe sua Senha</label>
                <input type="password" name="senha" id="">
                <input type="submit" value="Logar-se" name="login">
                <a href="">Esqueceu a Senha?</a>
            </form>
        </div>
        <div class="cad-container">
            <h1>Cadastrar-se</h1>
            <form action="" method="post">
                <label for="Nome">Informe seu nome completo</label>
                <input type="text">
                <label for="E-mail">Informe um E-mail</label>
                <input type="email" name="" id="">
                <label for="">Informe seu CPF</label>
                <input type="text">
                <label for="Senha">Informe uma Senha</label>
                <input type="password" name="" id="">
                <label for="Confirmar senha">Confirme a Senha</label>
                <input type="password" name="" id="">
                <p>*A Senha devem estar iguais</p>
                <input type="submit" value="Cadastrar-se">
            </form>
        </div>
    </div>
</div>
<?php 

    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $painel = new Painel;
        $painel->newLogin($email,$senha);
    }

?>