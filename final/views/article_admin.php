
<?php require('header.php') ?> 

       <section class="active">
        <div class="container">
			<div class="row">
				<div class="col-md-12"> 
				      <div class="right_aside">	
                          <nav class="maian_mnu clearfix">
						    <button class="main_mnu_button hidden-md hidden-lg"><i class="fa fa-bars"></i></button>

            <div>

        <ul>
        <div class="container">   		                      
                <form class="form-horizontal" method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">

                         <div class="form-group">
                         <div class="form-group">
<h3>Форма добавления статьи</h3>
                    <label>
                        Название
                        <input type="text" name="title" value="<?=$article['title']?>" class="form-control" autofocus required>
                    </label>
                    </div>
                    		<div class="form-group">
                    <label>
                        Название категории
                        <input type="text" name="title" value="<?=$article['category']?>" class="form-control" autofocus required>
                    </label>
                    </div>
                              <div class="form-group">
                    <label>
                        Дата
                        <input type="date" name="date" value="<?=$article['date']?>" class="form-control" required>
                    </label>
                    </div>
                    <div class="form-group">
                    <label>
                        Статус: "Опубликовано"
                        <input type="text" name="title" value="<?=$article['status']?>" class="form-control" autofocus required>
                    </label>
                    </div>
                    <div class="form-group">
	
                    <label>
                        Краткое содержимое
                        <textarea name="content" class="form-control" required><?=$article['content_tizer']?></textarea>
                    </label>
                    </div>
                    <div class="form-group">
	
                    <label>
                        Содержимое
                        <textarea name="content" class="form-control" required><?=$article['content']?></textarea>
                    </label>
                    </div>        

                         <div class="form-group">
                                        
                    <input type="submit" value="Сохранить" class="btn">
		
                </form>                     
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