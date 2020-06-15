<!DOCTYPE html>
<html>
<head>
	
	<title> <?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?> </title>
	<meta charset="utf-8">
	<meta name="description" content="My Shahadat website refers Shahadat Hossain from Dhaka, Bangladesh. Shahadat completed his B.Sc in Computer Science and Engineering from Bangladesh University and a Diploma from Feni Computer Institute.">
    <meta name="keywords" content="Shahadat website,shahadat's website,B.sc engineer,Diploma engineer, web develper">
    <meta name="author" content="Shahadat Hossain">
    <link rel="icon" href="<?= get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>
<body>
	<header>	
		<div class="container-fluid">		
			<div class="row">
				<div class="col-md-12">				
					<nav class="navbar navbar-default navbar-fixed-top">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="<?= get_site_url(); ?>"><?= get_bloginfo('name');?></a>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					    <?php
				            wp_nav_menu( array(
				                'menu'              => 'primary',
				                'theme_location'    => 'primary_menu',
				                'depth'             => 4,
				                'menu_class'        => 'nav navbar-nav navbar-right',
				                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                'walker'            => new wp_bootstrap_navwalker())
				            );
				        ?>
					    </div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
				
				</div>
			</div>
		</div>		
	</header>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 col-xs-12">
			<div class="text-right" >
				<?php dynamic_sidebar('language') ?>
			</div>
		</div>
	</div>
</div>
