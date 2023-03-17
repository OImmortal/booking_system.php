<?php
    require("./Classes/MySQl.php");
    require("./View/View.php");

    @$url = $_GET['url'];
    if($url == '') {
        $url = "home";
    }

    View::render("header");
    View::render($url);
    View::render("footer");
?>



