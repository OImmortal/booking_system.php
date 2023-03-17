<?php

    class View {

        public static function render($page, $urlPage = "./View/pages/") {
                include($urlPage.$page.".php");
        }

    }

?>