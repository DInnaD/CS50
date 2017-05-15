
<?php

    header("Content-Type: text/html; charset=utf-8");
    require_once("../database.php");
    require_once("../models/articles.php");

    $link = db_connect();
    $articles = articles_all($link);

    include("../views/articles.php")
        

    
?>