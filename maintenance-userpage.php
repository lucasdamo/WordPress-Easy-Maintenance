<?php
// Exits if accessed directly
if (! defined ('ABSPATH')) {
	exit;
} ?>


<head>
	<title><?php echo esc_attr(get_option('wpem_maintenance_page_title')); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo esc_attr(plugins_url('', __FILE__)) . '/userpage.css' ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	.header {
		grid-area: header;
		background-color: <?php echo esc_attr(get_option('wpem_maintenance_header_hex')); ?>;
	}
	</style>
</head>
<body>
	<main class= 'wrapper'>

		<div class= 'box header'>
			<div class='headerlogo'><?php echo esc_attr(get_option('wpem_maintenance_h1_text')); ?></div>
			<ul class= 'nav-ul'>
				<li class= 'nav-li'><a id='selected' href='#'>Home</a></li>
				<li class='nav-li'><a href='<?php echo home_url(add_query_arg(array(),$wp->request)) . '/wp-admin'?>'>Login</a></li>
<!-- 				<li class= 'nav-li'><a href='#'>About Us</a></li> -->
<!-- 				<li class= 'nav-li'><a href='#'>Contact</a></li> -->
			</ul>
		</div>
		<!-- End of header -->

		<div class='box center'>
			<center>
			<h2 class='bodydesct'><?php echo esc_attr(get_option('wpem_maintenance_title')); ?></h2>
			<p class='bodydescp'> <?php echo esc_attr(get_option('wpem_maintenance_note')); ?></p>
			</center>
		</div>
	</main>
	<!-- End of the body -->
</body>

</html>
