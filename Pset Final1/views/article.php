<?php require('header.php') ?>
      
       <section class="active">
        <div class="container">
			<div class="row">
				<div class="col-md-12"> 
				      <div class="right_aside">	
                          <nav class="maian_mnu clearfix">
						    <button class="main_mnu_button hidden-md hidden-lg"><i class="fa fa-bars"></i></button>


                    <ul>
                    <a href="http://localhost/Blog/final/views/article_admin.php">Добавить статью</a>

                    <div class="article">
		                <div>
                    1<span><h3><?=$article['title'] ?></h3></span>
                    

                    
                    2<span><em><?=$article['category'] ?></em></span>
                    
                    0<p></p>
		    3<p><?=$article['content_tizer']?></p>
                    
                    4<span><em><?=$article['status']?></em></span>
                    5<span><em><?=$article['date']?></em></span></div>
		    6<p><?=$article['content']?></p>	
                </div>
		    
                    
                </div>
                </ul>            
            </div>

                    
						  </nav>
                      </div>
                   </div>
               </div>							
           </div>
       			
</section> 
                       
<?php require('footer.php') ?>                        
              
