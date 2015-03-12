<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<?php wp_head();?>
</head>
<body>

<div class="row black border1">
	<div class="container">
		<div class="col-xs-12 .col-md-6 col-lg-4">			
		</div>

			<div class="col-xs-12 col-lg-4 centerlogo">
				<a href="<?php bloginfo('url'); ?>/Home" class="logo uplogo"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"></a>
			</div>

			<div class="col-xs-12 col-lg-4">				
			</div>
	</div>

	<div class="container center dowm1">
		<div class="col-xs-12 col-lg-4"></div>
				<div class="col-xs-12 col-lg-4">
					<div class="col-xs-12 col-lg-12">
						<ul class="nav nav-pills down1">
					  			<li class="<?php is_active('home'); ?>"><a class="btn btn-primary activity space btn-sm round"  href="<?php bloginfo('url'); ?>/home">Home</a></li>
								<li class="<?php is_active('about'); ?>"><a class="btn btn-primary space btn-sm round" href="<?php bloginfo('url'); ?>/about">About</a></li>
								<li class="<?php is_active('advertise'); ?>"><a class="btn btn-primary space btn-sm round" href="<?php bloginfo('url'); ?>/advertise">Advertise</a></li>
								<li class="<?php is_active('contact'); ?>"><a class="btn btn-primary space btn-sm round" href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
				  			</ul>
					</div>
				</div>
			<div class="col-xs-12 col-lg-4"></div>
	</div>

</div>

  <div class="container fullwidth">

