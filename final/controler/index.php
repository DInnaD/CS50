
<?php
    header("Content-Type: text/html; charset=utf-8");
    require_once("../database.php");
    require_once("../models/articles.php");

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

    else if ($action == "contacts"){
        
        header("Location: contacts.php");
                   
        }        include("http://localhost/Blog/final/views/contacts.php");

    }
    else if ($action == "news"){       
                
        if (!isset($_GET['page']))
        header("Location: index.php");
        $page = $_GET['page'];
        //to models                                           /*sort by last date*/
       /* while ($a = $query->fetch_assoc()) {
            if (mb_strlen($a['category']) > 25) {
                $a['category'] = mb_substr(strip_tags($a['category']), 0, 24) . '...';
            }    
            $a['category'] = htmlspecialchars($a['category']); 
            
            if (mb_strlen($a['header']) > 25) {
                $a['header'] = mb_substr(strip_tags($row['header']), 0, 24) . '...';
            }
            $a['header'] = htmlspecialchars($a['header']);
            
            $a['date'] = date('Y-m-d', $a['date']);
            
           
          
            $a['status'] = published('Опубликовано'  ,$a['status']);
            
            if (mb_strlen($row['content_tizer']) > 60) {
                $a['content_tizer'] = mb_substr(strip_tags($row['content_tizer']), 0, 57) . '...';
            }
            $a['content_tizer'] = nl2br($a['content_tizer']);
            
             if (mb_strlen($row['content']) > 500) {
                $a['content'] = mb_substr(strip_tags($row['content']), 0, 497) . '...';
            }
            $a['content'] = nl2br($a['content']);
            

            
            $records[] = $row;
        }*/
       $articles = article_all_news($link);
       include("http://localhost/Blog/final/views/articles.php");
        
    }
    else if ($action == "articles_main"){
        if (!isset($_GET['page']))
        header("Location: index.php");
        $page = $_GET['page'];
        
        $articles = article_all_news($link);
        include("http://localhost/Blog/final/views/articles_main.php");
        
    }

    else{
        $articles = article_all($link);
        include("../views/articles.php");
    }
    
?>