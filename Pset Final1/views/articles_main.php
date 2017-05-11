<?php require('header.php') ?>
<style type="text/css">
    .content_tizer {
        font-size: 0.8em;
        margin-bottom: 20px;
    }

    .date, .status {
        margin-right: 10px;
    }

    .content {
        padding-top: 5px;
        padding-left: 15px;
    }

    

    h10 {
        margin-bottom: 10px;
    }

    .pages {
        margin-bottom: 20px;
    }

</style>
      <section class="active">
        <div class="container">
			<div class="row">
				<div class="col-md-12"> 
				      <div class="right_aside">	
                          <nav class="maian_mnu clearfix">
						    <button class="main_mnu_button hidden-md hidden-lg"><i class="fa fa-bars"></i></button>

            <ul> 
            <h3><a href="http://localhost/Blog/final/views/article_admin.php">Добавить статью</a></h3>   
            <?php foreach($articles as $a): ?>   
                <div class="article">
                <div>
                    1<span><h3><?=$a['title'] ?></h3></span>
         a<span><em><a href="index.php?action=edit&id=<?=$a['id']?>"><i class="icon-edit"></i></a></em></span>
                    
                    b<span><em><a href="index.php?action=delete&id=<?=$a['id']?>"><i class="icon-trash"></i></a></em></span>
                    2<span><em><?=$a['category'] ?></em></span>           

                    3<p><?=$a['content_tizer']?></p>

                    
                    4<span><em><?=$a['status']?></em></span>
                    5<span><em><?=$a['date']?></em></span>                 

                    
                 
                    <?php endforeach ?>
        </ul>                   
        </div>
<div class="pages">
<strong>Pages:</strong>
<?php for ($i = 1; $i <= $pages; $i++): ?>
    <?php if ($i == $page): ?><b><?=$i?></b>
    <?php else: ?><a href="?page=<?=$i?>"><?=$i?></a>
    <?php endif ?>

<?php endfor ?>
</div>                
        
						  </nav>
                      </div>
                   </div>
               </div>							
           </div>
       			
</section>
                        

 

                    <?php require('footer.php') ?> 