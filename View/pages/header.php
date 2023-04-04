<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./View/pages/style/estilo-page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <header class="padding-150">
        <a href="Home" class="logo">Booking System</a>
        <div class="right">
            <?php 
                if(!isset($_SESSION['online']) || $_SESSION['online'] == false) {
            ?>
            <ul>
                <li><a href="">Anuncie</a></li>
                <li><a href="Page-login">Cadastre-se</a></li>
                <li><a href="Page-login">Logar-se</a></li>
            </ul>
            <?php } else {?>
                <div class="perfil">
                    <h4><a href="Perfil">Nome do Usuário</a></h4>
                    <a href="&loggout=1">Sair <i class="fa-solid fa-right-from-bracket"></i></a>
                </div>
            <?php } ?>
        </div>
        <h2>Encontre sua proxima estadia</h2>
        <h4>Os melhores hotéis de todo o Brasil</h4>
        <form action="" method="post">
            <input type="text" placeholder="Pesquise..">
            <input type="submit" value="Procurar">
        </form>
    </header>