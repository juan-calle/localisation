		<!--- ****************** FOOTER ************************ -->
		
		<div>
			<footer class="container">
				<div class="row footban">
					<div class="col-sm-3">
						<section class="widget_nav_menu">
							<div class="<?=$langcode?>">
								<h3><?=$ui->line('products')?></h3>
								<ul>
									<li><a href="tools/errorManager">dLive</a></li>
									<li><a href="tools/errorManager">iLive <?=$ui->line('series')?></a></li>
									<li><a href="tools/errorManager">Qu <?=$ui->line('series')?></a></li>
									<li><a href="tools/errorManager">GLD <?=$ui->line('series')?></a></li>
									<li><a href="tools/errorManager">GL <?=$ui->line('series')?></a></li>
									<li><a href="tools/errorManager">ICE-16</a></li>
									<li><a href="tools/errorManager">ME <?=$ui->line('system')?></a></li>
									<li><a href="tools/errorManager">GR <?=$ui->line('series')?></a></li>
									<li><a href="tools/errorManager">GS <?=$ui->line('series')?></a></li>
									<li><a href="tools/errorManager">IDR <?=$ui->line('series')?></a></li>
									<li><a href="tools/errorManager">MixWizard4 <?=$ui->line('series')?></a></li>
									<li><a href="tools/errorManager">PA <?=$ui->line('series')?></a></li>
									<li><a href="tools/errorManager">XB <?=$ui->line('series')?></a></li>
									<li><a href="tools/errorManager">Xone <?=$ui->line('series')?></a></li>
									<li><a href="tools/errorManager">ZED <?=$ui->line('series')?></a></li>
								</ul>
							</div>
						</section>
					</div>

					<div class="col-sm-3">
						<section class="widget_nav_menu">
							<div class="<?=$langcode?>">
								<h3><?=$ui->line('support')?></h3>
								<ul>
									<l><a href="#"><?=$ui->line('support')?></a></li>
									<li><a href="#"><?=$ui->line('registerAproduct')?></a></li>
								</ul>
							</div>
						</section>

						<section class="<?=$langcode?>">
								<h3><?=$ui->line('subscribe')?></h3>
								<div class="form-container">
									<form method="post" action="#">
										<p><input type="text" name="firstname" title="First name" placeholder="<?=$ui->line('firstName')?>" value="" /></p>
										<p><input type="text" name="lastname" title="Last name" placeholder="<?=$ui->line('lastName')?>" value="" /></p>
										<p><input type="text" name="email" title="Email" placeholder="<?=$ui->line('email')?>" value="" /></p>
										<p><input type="text" name="country" title="Country" placeholder="<?=$ui->line('country')?>" value="" /></p>

										<p><label><?=$ui->line('selectLists')?></label></p>
			   							<p><label><input name="Qu Series" type="checkbox" value=""/> Qu <?=$ui->line('series')?></label></p>
									    <p><label><input name="GLD Series" type="checkbox" value=""/> GLD <?=$ui->line('series')?></label></p>
									    <p><label><input name="iLive Systems" type="checkbox" value=""/> iLive <?=$ui->line('systems')?></label></p>
									    <p><label><input name="Analogue Live Sound" type="checkbox" value=""/> <?=$ui->line('analogueLiveSound')?></label></p>
									    <p><label><input name="Xone DJ" type="checkbox" value=""  /> Xone DJ</label></p>

										<div class="submit-btn-<?=$langcode?>"></div>
									</form>
								</div>
						</section>
					</div>

					<div class="col-sm-3">
						<section class="widget_nav_menu">
							<div class ="<?=$langcode?>">
								<h3><?=$ui->line('company')?></h3>
								<ul>
									<li><a href="#"><?=$ui->line('aboutA&H')?></a></li>
									<li><a href="#"><?=$ui->line('careersA&H')?></a></li>
									<li><a href="#"><?=$ui->line('A&Hworldwide')?></a></li>
									<li><a href="#"><?=$ui->line('contactA&H')?></a></li>
									<li><a href="#"><?=$ui->line('privacyStatement')?></a></li>
									<li><a href="#"><?=$ui->line('legal')?></a></li>
								</ul>
							</div>
						</section>

						<section>
									<img src="<?=base_url('public/assets/img/footer/AH_Queens_Award_2012.gif')?>" alt="QUEEN’S AWARD FOR ENTERPRISE WINNER 2012">
						</section>
					</div>

					<div class="col-sm-3">
						<section>
							<div class="<?=$langcode?>"><h3><?=$ui->line('connect')?></h3>			
									<div class="footsocs">
										<a href="https://twitter.com/allen_heath" target="_blank"><img src="<?=base_url('public/assets/img/footer/twitter.png')?>" alt="Allen &amp; Heath on Twitter" /></a>
										<a href="https://www.facebook.com/AllenHeathofficial" target="_blank"><img src="<?=base_url('public/assets/img/footer/facebook.png')?>" alt="Allen &amp; Heath on FaceBook" /></a>
										<a href="http://www.youtube.com/user/AllenandHeathUK" target="_blank"><img src="<?=base_url('public/assets/img/footer/youtube.png')?>" alt="Allen &amp; Heath on YouTube" /></a>
										<a href="http://instagram.com/allenandheath" target="_blank"><img src="<?=base_url('public/assets/img/footer/instagram.png')?>" alt="Allen &amp; Heath on Instagram" /></a>
									</div>
							</div>
						</section>

						<section class="widget_nav_menu">
							<div class="<?=$langcode?>"><h3><?=$ui->line('blogs&Forums')?></h3>
								<ul>
									<li><a href="#">iLive <?=$ui->line('blog')?></a></li>
									<li><a href="#"><?=$ui->line('digitalCommunity')?></a></li>
									<li><a href="#">Xone <?=$ui->line('community')?></a></li>
								</ul>
							</div>
						</section>
					</div>
				</div>

				<div class="copyright">&copy; <?=date("Y")?> Allen &amp; Heath Limited. <?=$ui->line('copyright')?></div>
			</footer>
		</div>

		<div id="subfootouter"></div>
		<div id="cookie-law-info-bar"><span><?=$ui->line('cookiemsg')?><a href="#" id="cookie_action_close_header"  class="small cli-plugin-button cli-plugin-main-button"><?=$ui->line('accept')?></a><a href="#" id="CONSTANT_OPEN_URL" target="_blank"  class="cli-plugin-main-link"><?=$ui->line('findOutMore')?></a></span></div>		

		<!--- ****************** SCRIPTS ************************ -->

		<script type="text/javascript" src='<?=base_url()?>public/js/jquery-min.js'></script>
		<script type='text/javascript' src='<?=base_url()?>public/third_party/cookie-law-info/js/cookielawinfo.js'></script>
		<script type="text/javascript">
			//<![CDATA[
			jQuery(document).ready(function() {
				cli_show_cookiebar({
					settings: '{"animate_speed_hide":"500","animate_speed_show":"500","background":"#0a0a0a","border":"#444","border_on":false,"button_1_button_colour":"#cc0033","button_1_button_hover":"#a30029","button_1_link_colour":"#fff","button_1_as_button":true,"button_2_button_colour":"#333","button_2_button_hover":"#292929","button_2_link_colour":"#cc0033","button_2_as_button":false,"font_family":"inherit","header_fix":false,"notify_animate_hide":true,"notify_animate_show":false,"notify_div_id":"#cookie-law-info-bar","notify_position_horizontal":"right","notify_position_vertical":"bottom","scroll_close":false,"scroll_close_reload":false,"showagain_tab":false,"showagain_background":"#fff","showagain_border":"#000","showagain_div_id":"#cookie-law-info-again","showagain_x_position":"100px","text":"#ffffff","show_once_yn":false,"show_once":"10000"}'
				});
			});
			//]]>
		</script>
		<script type='text/javascript' src='<?=base_url()?>public/third_party/software-download/easy-dropdown/jquery.easydropdown.min.js'></script> 
		<script type='text/javascript' src='<?=base_url()?>public/third_party/software-download/software-download-plugin.js'></script>
		</script>
		<script type='text/javascript' src='<?=base_url()?>public/js/plugins.js'></script> 
		<script type='text/javascript' src='<?=base_url()?>public/js/main.js'></script>
		<script type='text/javascript' src='<?=base_url()?>public/js/jquery.flexslider-min.js'></script> 	
		<script type='text/javascript' src='<?=base_url()?>public/js/jquery.fancybox.js'></script> 
	</body>
</html> 