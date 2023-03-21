<?php
    require("./Classes/MySQl.php");
    require("./View/View.php");

    @$url = $_GET['url'];
    if($url == '') {
        $url = "home";
    }

    MySql::createTable("tb_usuários",["id" => "int", "nome" => "varchar(255)"]);

    View::render("header");
    View::render($url);
    View::render("footer");
?>



