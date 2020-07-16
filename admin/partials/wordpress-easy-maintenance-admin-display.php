<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/lucasdamo/WordPress-Easy-Maintenance
 * @since      2.0.0
 *
 * @package    Wordpress_Easy_Maintenance
 * @subpackage Wordpress_Easy_Maintenance/admin/partials
 *
 */


?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class='wrap'>
	<form method='post' action='options.php'>
		<?php
		settings_fields('wordpress_easy_maintenance_admin_display'); ?>

		<div class="card">
			<div class="wordpress_easy_maintenance_align_input_form">
				<h5 class="card-title">General</h5>
				<div>
					<label for='wordpress_easy_maintenance_active'> Enable or Disable:</label>
					<select name='wordpress_easy_maintenance_active'>
						<option value="enabled" <?= (get_option('wordpress_easy_maintenance_active') == 'enabled') ? 'selected' : '' ?>>Enabled</option>
						<option value="disabled" <?= (get_option('wordpress_easy_maintenance_active') == 'disabled') ? 'selected' : '' ?>>Disabled</option>
					</select>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="wordpress_easy_maintenance_align_input_form">
				<h5 class="card-title">Access control</h5>
				<div>
					<label for='wordpress_easy_maintenance_roles'>Roles</label>
					<select multiple size="6" name='wordpress_easy_maintenance_roles'>
						<option>A</option>
						<option>B</option>
						<option>C</option>
					</select>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="wordpress_easy_maintenance_align_input_form">
				<h5 class="card-title">Appearence</h5>
				<div>
					<label for='wordpress_easy_maintenance_page_title'>Choose a page title: </label>
					<input type="text" name="wordpress_easy_maintenance_page_title" value="<?php echo esc_attr(get_option('wordpress_easy_maintenance_page_title')); ?>" style="min-width:200px;" />
				</div>
				<div>
 					<label for='wordpress_easy_maintenance_h1_text'> Primary text: </label>
 					<input type="text" name="wordpress_easy_maintenance_h1_text" value="<?php echo esc_attr(get_option('wordpress_easy_maintenance_h1_text')); ?>" style="min-width: 200px;" />
				 </div>
				 <div>
 					<label for='wordpress_easy_maintenance_h2_text'> Secondary text: </label>
 					<input type='text' name="wordpress_easy_maintenance_h2_text" value="<?php echo esc_attr(get_option('wordpress_easy_maintenance_h2_text')); ?>" style="min-width: 200px;" />
 				</div>
			</div>
		</div>

		<?php
		submit_button();
		?>
	</form>
</div>