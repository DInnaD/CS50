<?php require('header.php') ?>


<section class="active">
        <div class="container">
			<div class="row">
				<div class="col-md-12"> 
				      <div class="right_aside">	
                          <nav class="maian_mnu clearfix">
						    <button class="main_mnu_button hidden-md hidden-lg"><i class="fa fa-bars"></i></button>
					      <ul>
                          <div class="col-md-12">
			      		    <h3><a href="//softgroup.ua" target="_blank">Наши контакты</a></h3>
                          </div>			    	  
                          <div class="col-md-12">
							<p>Украина, 33000, Ровно</p>
							<p>пл.Независимости, 3 оф. 418</p>
							<p>Tel: +38-0362-450-044</p>
                            <p>web: https://www.softgroup.ua</p>				
                              
						  </div>
                              
                                <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3></h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 50.619573 , lng: 26.250624};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCx713Z6MzLSQe5QSC2mtrRE0XIxb1LRns&callback=initMap">
    </script>

  
                              
						  </ul>
						  </nav>
                          
                      </div>
                   </div>
               </div>							
           </div>
       			
</section>



<?php require('footer.php') ?>	