

    
<?php require('header.php') ?>
       <section class="active">
        <div class="container">
			<div class="row">
				<div class="col-md-12"> 
				      <div class="right_aside">	
                          <nav class="maian_mnu clearfix">
						    <button class="main_mnu_button hidden-md hidden-lg"><i class="fa fa-bars"></i></button>

            <ul> 
            <h3><a href="ihttp://localhost/Blog/final/views/article_admin.php">Добавить статью</a></h3>   
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
                    

                    
                    </div> 
                    6<p><?=$a['content']?></p>
            </div>
                    <?php endforeach ?>
        </ul>                   
        </div>
        
						  </nav>
                      </div>
                   </div>
               </div>							
           </div>
       			
</section>
                      
            
<?php require('footer.php') ?> 