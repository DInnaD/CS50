<?php
    header("Content-Type: text/html; charset=utf-8");

    function article_all_news($link){
        $page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
        $limit = 10;
        /*paginator*/
        $offset = ($page - 1) * $limit;
        $records = array();
        $pages_result = $mysqli->query("SELECT COUNT(*) AS cnt FROM articles")->fetch_assoc();
        $pages = $pages_result['cnt'];
        
             //zapros 
        $query("SELECT articles.*, COUNT(articles.id) AS articles
            FROM article
            WITH articles.id = id
            GROUP BY id
            ORDER BY date DESC                                             
            LIMIT $offset, $limit"); 
        // Запрос
       // $query = "SELECT * FROM `articles` ORDER BY id date DESC";
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        // Извлечение из БД
        $a = mysqli_num_rows($result);
        $articles = array();
        
        for ($i = 0; $i < $a; $i++){
            $row = mysqli_fetch_assoc($result);
            $articles[] =$row;
        }
        
        return $articles;
    }

    function article_all($link){
 
        // Запрос
        $query = "SELECT * FROM `articles` ORDER BY id date DESC";
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        // Извлечение из БД
        $a = mysqli_num_rows($result);
        $articles = array();
        
        for ($i = 0; $i < $a; $i++){
            $row = mysqli_fetch_assoc($result);
            $articles[] =$row;
        }
        
        return $articles;
    }

    function article_get($link, $id_article){
        // Запрос
        $query = "SELECT * FROM `articles` WHERE id=".(int)$id_article;
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));

        $article = mysqli_fetch_assoc($result);
        
        return $article;
    }

    function article_new($link, $title, $category, $status, $date, $content_tizer, $content){
        // Подготовка
        $title = trim($title);
        $category = trim($category); 
        $status = trim($status); 
        $content_tizer = trim($content_tizer);         
        $content = trim($content);
        // Проверка
        if ($title == '')
            return false;
        // Запрос
        $t = "INSERT INTO articles (title, category, status, date, content_tizer, content) VALUE ('%s', '%s', '%s', '%s', '%s', '%s')";
        
        $query = sprintf($t, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $category), mysqli_real_escape_string($link, $status), mysqli_real_escape_string($link, $date), mysqli_real_escape_string($link, $content_tizer), mysqli_real_escape_string($link, $content));
        
        $result = mysqli_query($link, $query);;
        if (!$result)
            die(mysqli_error($link));
            
        return true;
    }

    function article_edit($link, $id, $title, $category, $status, $date, $content_tizer, $content){
        // Подготовка
        $title = trim($title);
        $category = trim($category); 
        $status = trim($status); 
        $content_tizer = trim($content_tizer);         
        $content = trim($content);
        $id = (int)$id;
        
        // Проверка
        if ($title == '')
            return false;
        
        // Запрос
        $sql = "UPDATE articles SET title='%s', category='%s', status='%s', date='%s', content_tizer='%s', content='%s' WHERE id = %d";
        
        $query = sprintf($sql, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $category), mysqli_real_escape_string($link, $status), mysqli_real_escape_string($link, $date), mysqli_real_escape_string($link, $content_tizer), mysqli_real_escape_string($link, $content), $id);
        
        $result = mysqli_query($link, $query);;
        if (!$result)
            die(mysqli_error($link));
            
        return mysqli_affected_rows($link);
    }

    function article_delete($link, $id){
        // Подготовка
        $id = (int)$id;
        
        // Проверка
        if ($id == '')
            return false;
        
        $query = sprintf("DELETE FROM articles WHERE id=%d", (int)$id);
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));

        return mysqli_affected_rows($link);        
    }

    function article_intro($text, $len = 500){
        return mb_substr($text, 0, $len);
    }
?>