

    
<?php require('header.php') ?>
       <section class="active">
        <div class="container">
			<div class="row">
				<div class="col-md-12"> 
				      <div class="right_aside">	
                          <nav class="maian_mnu clearfix">
						    <button class="main_mnu_button hidden-md hidden-lg"><i class="fa fa-bars"></i></button>

            <ul> 
            <h3><a href="../index.php?action=add<?=isset($_GET['action']) ? html($_GET['action']) : ''?>&id=<?=isset($_GET['id'])  ? html($_GET['id']) : ''?>">Добавить статью</a></h3>    
             
            
            <?php if(isset($articles_news) && $articles_news !=NULL)                  
            foreach($articles_news as $a) : ?>   
                <div class="article">
                <div>
                    1<span><h3><?=isset($a['title']) ? html($a['title']) : ''?></h3></span>
                    
                    a<span><em><a href="index.php?action=edit&id=<?=isset($a['id']) ? html($a['id']) : ''?>"><i class="icon-edit"></i></a></em></span>
                    
                    b<span><em><a href="index.php?action=delete&id=<?=isset($a['id']) ? html($a['id']) : ''?>"><i class="icon-trash"></i></a></em></span>
                    2<span><em><?=isset($a['category']) ? html($a['category']) : ''?></em></span>           

                    3<p><?=isset($a['content_tizer']) ? html($a['content_tizer']) : ''?></p>

                    
                    4<span><em><?=isset($a['status']) ? html($a['status']) : ''?></em></span>
                    5<span><em><?=isset($a['date']) ? html($a['date']) : ''?></em></span>
                    

                    
                    </div> 
                    6<p><?=isset($a['content']) ? html($a['content']) : ''?></p>
            </div>
                    <?php endforeach ?>
                
          
            
        </ul>                   
        </div>
    <div class="pages">
<strong>Pages:</strong>
       
</div>
        
						  </nav>
                      </div>
                   </div>
               </div>							
           </div>
       			
</section>
                      
            
<?php require('footer.php') ?>