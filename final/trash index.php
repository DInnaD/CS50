<h3><a href="index.php?action=add&id<?=$_GET['action']?>&id=<?=$_GET['id']?>">Добавить статью</a></h3> iz views main
<h3><a href="index.php?action=add&id<?=isset($_GET['action']) ? html($_GET['action']) : ''?>&id=<?=isset($_GET['id'])  ? html($_GET['id']) : ''?>">Добавить статью</a></h3> 
<?php 
    require_once("database.php");
    require_once("models/articles.php");

    $link = db_connect();
    $articles = articles_all_news($link);

    include("views/articles.php");
?>