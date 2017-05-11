<?php
    header("Content-Type: text/html; charset=utf-8");
    require_once("../database.php");
    require_once("http://localhost/Blog/final/models/articles.php");

    $link = db_connect();

    if (isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action ="";

    if ($action == "add"){
        if (!empty($_POST)){
            article_new($link, $_POST['title'], $_POST['category'], $_POST['status'], $_POST['date'], $_POST['content_tizer'], $_POST['content']);
            header("Location: index.php");
        }
        include("http://localhost/Blog/final/views/article_admin.php");    
    }
    else if ($action == "edit"){
        if (!isset($_GET['id']))
            header("Location: index.php");
        $id = (int)$_GET['id'];
        
        if (!empty($_POST) && $id > 0){
            article_edit($link, $id, $_POST['title'], $_POST['category'], $_POST['status'], $_POST['date'], $_POST['content_tizer'], $_POST['content']);
            header("Location: index.php");
        }
        
        $article = article_get($link, $id);
        include("../views/article_admin.php");
    } else if ($action == "delete"){
        $id = $_GET['id'];
        article_delete($link, $id);
        header("Location: index.php");
    }

    else if ($action == "cantacts"){

    }
    else if ($action == "news"){
        
    }
    else if ($action == "articles_main"){
        if (!isset($_GET['page']))
            header("Location: index.php");
        $page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
        $limit = 10;
        /*paginator*/
        $offset = ($page - 1) * $limit;
        $records = array();
        $pages_result = $mysqli->query("SELECT COUNT(*) AS cnt FROM entry")->fetch_assoc();
        $pages = $pages_result['cnt'];
        $sel = $mysqli->query("SELECT entry.*, COUNT(comment.id) AS comments
            FROM entry
            LEFT JOIN comment ON entry.id = comment.entry_id
            GROUP BY entry.id
            ORDER BY date DESC                                             
            LIMIT $offset, $limit");                                             /*sort by last date*/
        while ($a = $sel->fetch_assoc()) {
            if (mb_strlen($a['category']) > 25) {
                $a['category'] = mb_substr(strip_tags($a['category']), 0, 24) . '...';
            }    
            $a['category'] = htmlspecialchars($a['category']); 
            
            if (mb_strlen($a['header']) > 25) {
                $a['header'] = mb_substr(strip_tags($row['header']), 0, 24) . '...';
            }
            $a['header'] = htmlspecialchars($a['header']);/**/
            
            $a['date'] = date('Y-m-d', $a['date']);/**/
            
           
          
            $a['status'] = published('Опубликовано'  ,$a['status']);
            
            if (mb_strlen($row['content-tizer']) > 60) {
                $a['content-tizer'] = mb_substr(strip_tags($row['content-tizer']), 0, 57) . '...';
            }
            $a['content-tizer'] = nl2br($a['content-tizer']);
            

            
            $records[] = $row;
        }
        require('http://localhost/Blog/final/views/articles_main.php');
        
        if (!empty($_POST) && $id > 0){
            article_edit($link, $id, $_POST['title'], $_POST['category'], $_POST['status'], $_POST['date'], $_POST['content_tizer'], $_POST['content']);
            header("Location: index.php");
        }
        
        $article = article_get($link, $id);
        include("http://localhost/Blog/final/views/articles_main.php");
    }

    else{
        $articles = article_all($link);
        include("../views/articles.php");
    }
    
?>