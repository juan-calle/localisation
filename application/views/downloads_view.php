		<!-- IS DOWNLOADS PAGE -->

		 	<div class="container">	  
		  		<div class="content row">
					<div class="col-lg-12">	 
		        		<div class="page-header <?=$langcode?>"><h1><?=$title?></h1></div>

						<?=$records[0]['page_content']?>
		  				<div class="row">
		  					<div class="col-lg-6">
		  						<select id="select-series">
		  							<option value="none"><?=$ui->line('selectproduct') . $ui->line('series')?></option>
		  							<option value="discontinued"><?=$ui->line('discontinued')?></option>
		  							<option value="dlive-series">dLive <?=$ui->line('series')?></option>
		  							<option value="gl-series">GL <?=$ui->line('series')?></option>
		  							<option value="gld-series">GLD <?=$ui->line('series')?></option>
		  							<option value="gr-series">GR <?=$ui->line('series')?></option>
		  							<option value="gs-series">GS <?=$ui->line('series')?></option>
		  							<option value="ice-16">ICE-16</option>
		  							<option value="idr-series">iDR <?=$ui->line('series')?></option>
		  							<option value="ilive-series">iLive <?=$ui->line('series')?></option>
		  							<option value="me-system">ME <?=$ui->line('system')?></option>
		  							<option value="mixwizard4-series">MixWizard4 <?=$ui->line('series')?></option>
		  							<option value="pa-series">PA <?=$ui->line('series')?></option>
		  							<option value="qu">Qu <?=$ui->line('series')?></option>
		  							<option value="xb-series">XB <?=$ui->line('series')?></option>
		  							<option value="xone-series">Xone <?=$ui->line('series')?></option>
		  							<option value="zed-series">ZED <?=$ui->line('series')?></option>
	  							</select>
  							</div>
						</div>
			      	</div><!-- /.col-lgl12 -->
	          	</div><!-- /.content row -->
		  	</div><!-- /.container -->

		<div class="clear"></div>