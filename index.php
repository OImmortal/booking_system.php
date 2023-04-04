<?php
    session_start();
    include("./Classes/MySQl.php");
    require("./View/View.php");
    require("./Classes/Class.php");
    @$url = $_GET['url'];
    if($url == '') {
        $url = "home";
    }

    $painel = new Painel;
    $painel->destroySession();  

    View::render("header");
    View::render($url);
    View::render("footer");
?>



