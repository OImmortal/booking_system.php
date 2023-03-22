<?php
    include("./Classes/MySQl.php");
    require("./View/View.php");
    require("./Classes/Class.php");
    @$url = $_GET['url'];
    if($url == '') {
        $url = "home";
    }

    View::render("header");
    View::render($url);
    View::render("footer");
?>



