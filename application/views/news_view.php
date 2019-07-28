		<!-- IS NEWS ENTRY -->

			<div class="container">
			    <div class="content row">
			    	<div class="col-lg-12">		      
						<div class="col-sm-1">&nbsp;</div>
			       		<div class="col-sm-10 blog">
			        		<div class="page-header <?=$langcode?>">
			        			<h1><?=$page_records[0]['page_title']?></h1>
			        		</div>
 							<?
 								// echo "<pre>";
 								// print_r($records);
 								// echo "</pre><br>";								

								for ($i=0; $i <= sizeof($records) - 1 ; $i++) { 
									$image = $records[$i]['news_picture']; 
									$imgPath = base_url($image);
									echo "
									<article class='hentry'>
			 							<div class='col-sm-3'><a href='#'><img width='2400' height='1598' src='" . $imgPath . "'></a></div>
			  							<div class='col-sm-9 " . $langcode . "'>"
			    							. $records[$i]['news_title'] .
			    							"<time class='published'>December 9, 2015</time>
			  								<div>" . $records[$i]['news_summary'] . "</div>
			  							</div>
			    						<div class='btmore'><a href='tools/errorManager'>" . $ui->line('more') . "</a></div>
			    						<div class='clear'></div>
									</article>";
								}
							?>

	        			</div><!-- /.col-sm-10 -->
	         			
	         			<div class="col-sm-1">&nbsp;</div>
	      			</div><!-- /.col-lg-12 -->
	          	</div><!-- /.content row -->
	  		</div><!-- /.container -->