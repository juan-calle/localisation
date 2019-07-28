		<!-- IS FRONT PAGE -->

    		<div class="container">
                <div id="tabbanner"></div>
    	  		<div class="content row">
    				<div class="col-lg-12">	
    					<div class="prodsingletabs">
    						<ul class="nav nav-tabs <?=$langcode?>">
						    	<li><a href="#"><?=$ui->line('company')?></a></li>
						    	<li><a href="#"><?=$ui->line('aboutA&H')?></a></li>
						    	<li><a href="#"><?=$ui->line('careersA&H')?></a></li>
						    	<li><a href="#"><?=$ui->line('A&Hworldwide')?></a></li>
						    	<li><a href="#"><?=$ui->line('contactA&H')?></a></li>
						    	<li><a href="#"><?=$ui->line('privacyStatement')?></a></li>
    						</ul>
    					</div>

    					<div class="page-header <?=$langcode?>"><h1><?=$title?></h1></div>

						<div class="col-sm-6 <?=$langcode?>">
							<?=$records[0]['page_content']?>
						</div>
						<div class="col-sm-6">
							<p><img src="<?=base_url('public/assets/img/company/company_' . $langcode . '.jpg')?>" alt="Allen &amp; Heath Company" /></p>
						</div>

					</div><!-- /.col-lg-12 -->
	          	</div><!-- /.content row -->
	  		</div><!-- /.container -->