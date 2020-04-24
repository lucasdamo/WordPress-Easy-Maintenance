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
	<title><?php echo esc_attr(get_option('wordpress_easy_maintenance_page_title')); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
	<div class="main-div">
		<a class="link" href="<?php echo home_url(add_query_arg(array(),$wp->request)) . '/wp-admin'?>">Login</a>
		<div class="main-box centered">
			<h1><?php echo esc_attr(get_option('wordpress_easy_maintenance_h1_text')); ?></h1>
			<h2><?php echo esc_attr(get_option('wordpress_easy_maintenance_h1_text')); ?></h2>
		</div>
	</div>

</body>

</html>
