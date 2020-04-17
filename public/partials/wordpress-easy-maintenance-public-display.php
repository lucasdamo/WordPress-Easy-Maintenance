<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://github.com/lucasdamo/WordPress-Easy-Maintenance
 * @since      2.0.0
 *
 * @package    Wordpress_Easy_Maintenance
 * @subpackage Wordpress_Easy_Maintenance/public/partials
 * @author     Lucas Damo <contact@lucasdamo.com>
 *
 * TODO: Improve design and UI
 */

?>
<head>
	<title><?php echo esc_attr(get_option('wordpress_easy_maintenance_page_title')); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
	.header {
		grid-area: header;
		background-color: <?php echo esc_attr(get_option('wordpress_easy_maintenance_header_hex')); ?>;
	}
	</style>
</head>
<body>
	<main class= 'wrapper'>

		<div class= 'box header'>
			<div class='headerlogo'><?php echo esc_attr(get_option('wordpress_easy_maintenance_h1_text')); ?></div>
			<ul class= 'nav-ul'>
				<li class= 'nav-li'><a id='selected' href='#'>Home</a></li>
				<li class='nav-li'><a href='<?php echo home_url( $path = "wp-login.php", $scheme = 'absolute' ); ?>'>Login</a></li>
			</ul>
		</div>

		<div class='box center'>
			<center>
			<h2 class='bodydesct'><?php echo esc_attr(get_option('wordpress_easy_maintenance_title')); ?></h2>
			<p class='bodydescp'> <?php echo esc_attr(get_option('wordpress_easy_maintenance_note')); ?></p>
			</center>
		</div>
	</main>
</body>

</html>
