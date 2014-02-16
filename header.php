<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> -->
<html>
	<?php //wp_head(); ?>
	<head>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	</head>
<body>
		<div id="centerdiv">

<div id="wungiheader">

	<div id="logo">
		<img src="/wp-content/themes/wungi/wungilogo.png" class="logoimage"/>
	</div>
			
	<?php 
		wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); 
		include 'signup.php';
	?>

	

</div>

