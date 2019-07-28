		<!-- IS PRODUCTS VIEW -->

      		<div class="container"> 
        		<div class="content row">
          			<div class="col-lg-12">	
			            <div class="page-header <?=$langcode?>"><h1><?=$ui->line('products')?></h1></div>
			            <div class="row">
						<?
							for ($i=0; $i <= 15 ; $i++) { 
							echo " 			            	
							<div class='col-sm-4'>
            					<div class='seriestop ". $langcode . "'>
                  					<div class='seriesop'><a href='tools/errorManager'><img src='" . $records[$i]['series_picture'] . "' alt='" . $records[$i]['series_title'] . "'></a></div>
                    				<h3><a href='tools/errorManager''>" . $records[$i]['series_title'] . "</a></h3>
                  				</div>
                  				<div class='seriesbottom'>" . $records[$i]['series_description'] . "</div>
                			</div>";
                			}
						?>
						    <div class="clear"></div>
						</div> 
					</div><!-- /.col-lg-12 -->
			    </div><!-- /.content row -->
		    </div><!-- /.container -->

	 	<div class="clear"></div>