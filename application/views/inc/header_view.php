<!--- ****************** HEADER ************************ -->


<!DOCTYPE html>
<html lang="<?=$langcode?>">
	<head>
		<meta charset="utf-8">
		<title>
			<?=isset($title) ? $title : 'Error';?> | Allen &amp; Heath
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<link rel="icon" type="image/x-icon" href="<?=base_url()?>public/assets/favicon.ico">	
		<link rel="stylesheet" href="<?=base_url()?>public/third_party/bootstrap-collapse/css/bootstrap.css"> 
		<link rel="stylesheet" href="<?=base_url()?>public/third_party/cookie-law-info/css/cookielawinfo.css">
	 	<link rel="stylesheet" href="<?=base_url()?>public/third_party/easy-dropdown/easydropdown-small.css">
		<link rel="stylesheet" href="<?=base_url()?>public/third_party/software-download/software-download.css"> 
		<link rel="stylesheet" href="<?=base_url()?>public/third_party/software-download/easy-dropdown/easydropdown.css">
		<link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.css">
		<link rel="stylesheet" href="<?=base_url()?>public/css/app.css">
		<link rel="stylesheet" href="<?=base_url()?>public/css/style.css">
	</head>

	<body class="home">
		<div class="banner navbar-fixed-top">
			<div class="container">
				<a class="navbar-brand" href="home"><img class="toplogo" src="<?=base_url('public/assets/img/header/topLogo.png')?>" alt="Allen &amp; Heath" height="31" width="215"/></a>

				<!-- Visible in mobile devices-->
				<button data-target=".nav-main" data-toggle="collapse" type="button" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<nav class="nav-main nav-collapse collapse">
					<ul class="nav navbar-nav <?=$langcode?>">
						<li><a href="<?=base_url('products')?>"><?=$ui->line('products');?></a></li>
						<li><a href="<?=base_url('solutions')?>"><?=$ui->line('solutions');?></a></li>
						<li><a href="<?=base_url('wheretobuy')?>"><?=$ui->line('wheretobuy');?></a></li>
						<li><a href="<?=base_url('downloads')?>"><?=$ui->line('downloads');?></a></li>
						<li><a href="<?=base_url('support')?>"><?=$ui->line('support');?></a></li>
						<li><a href="<?=base_url('company')?>"><?=$ui->line('company');?></a></li>
						<li><a href="<?=base_url('news')?>"><?=$ui->line('news');?></a></li>
						<li> 
						
							<!-- Calling the language switcher controller every time the dropdown selection changes. Inside that class, the switchlang  method is called -->
	  						<select class="dropdown-small" onchange="javascript:window.location.href='<? base_url();?>tools/languageSwitcher/switchLang/'+this.value;">
		  							<option value="english" <?if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"';?>>English</option>
		  							<option value="bulgarian" <?if($this->session->userdata('site_lang') == 'bulgarian') echo 'selected="selected"';?>>български</option>
		  					</select>
						</li>
					</ul>    
				</nav>
			</div>
		</div>

		<div class="dropit"></div>
		
		<div>
      		<div class="container">
        		<div class="breadcrumbs">
           			<!-- Breadcrumb -->
           			<a title="Go to Allen &amp; Heath." href="<?=base_url()?>"><?=$ui->line('home')?></a> &gt; <?=$title?>
    			</div>
  			</div>
    	</div>