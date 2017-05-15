<?php
    header("Content-Type: text/html; charset=utf-8");



    function articles_all($link){
 
        // Запрос
        $query = "SELECT * FROM `articles` ORDER BY id date DESC LIMIT $offset, $limit ";
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        // Извлечение из БД
        //$a = ""//----------------------------
        
        $n = mysqli_num_rows($result);
        $articles = array();
        
        for ($i = 0; $i < $n; $i++){
            $a = mysqli_fetch_assoc($result);
            $articles[] =$a;
        }
        
        return $articles;
    }

    function articles_get($link, $id_article){
        // Запрос
        $query =srintf("SELECT * FROM `articles` WHERE id=".(int)$id_article);
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
        
        $result = mysqli_query($link, $query);
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
        
        $query = sprintf($sql, $id, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $category), mysqli_real_escape_string($link, $status), mysqli_real_escape_string($link, $date), mysqli_real_escape_string($link, $content_tizer), mysqli_real_escape_string($link, $content));
        
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

 /*  function articles_all_news($link){
        
        $records = array();
        $pages_result = $mysqli->query("SELECT COUNT(*) AS cnt FROM entry")->fetch_assoc();
        $pages = $pages_result['cnt'];
        $sel = $mysqli->query("SELECT entry.*, COUNT(comment.id) AS comments
            FROM entry
            LEFT JOIN comment ON entry.id = comment.entry_id
            GROUP BY entry.id
            ORDER BY date DESC                                             
            LIMIT $offset, $limit"); 
         
        
        return $articles_news;
    }

 

        $pages_result = $mysqli->query("SELECT COUNT(*) AS cnt FROM articles")->fetch_assoc();
        $pages = $pages_result['cnt'];
        //to models 
for ($i = 1; $i <= $pages; $i++): ?>
    <?php if ($i == $page): ?><b><?=$i?></b>
    <?php else: ?><a href="?page=<?=$i?>"><?=$i?></a>
    <?php endif ?>
    //zapros 
        $query("SELECT articles.*, COUNT(articles.id) AS articles
            FROM article
            WITH articles.id = id
            GROUP BY id
            ORDER BY date DESC                                             
            LIMIT $offset, $limit");
      
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
       
        $n = mysqli_num_rows($result);
        $articles = array();
        
        for ($i = 0; $i < $n; $i++){
            $a = mysqli_fetch_assoc($result);
            $articles[] =$a;
        }

       while ($a = $query->fetch_assoc()) {
            if (mb_strlen($a['category']) > 25) {
                $a['category'] = mb_substr(strip_tags($a['category']), 0, 24) . '...';
            }    
            $a['category'] = htmlspecialchars($a['category']); 
            
            if (mb_strlen($a['header']) > 25) {
                $a['header'] = mb_substr(strip_tags($a['header']), 0, 24) . '...';
            }
            $a['header'] = htmlspecialchars($a['header']);
            
            $a['date'] = date('Y-m-d', $a['date']);
            
           
          
            $a['status'] = htmlspecialchars($a['status']);
            
            if (mb_strlen($a['content_tizer']) > 60) {
                $a['content_tizer'] = mb_substr(strip_tags($a['content_tizer']), 0, 57) . '...';
            }
            $a['content_tizer'] = nl2br($a['content_tizer']);
            
             if (mb_strlen($a['content']) > 500) {
                $a['content'] = mb_substr(strip_tags($a['content']), 0, 497) . '...';
            }
            $a['content'] = nl2br($a['content']);
            

            
            $articles_news[] = $a;
        }
 
*/
        
?>