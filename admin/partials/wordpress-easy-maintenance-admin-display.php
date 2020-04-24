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
 <div class ='wrap'>
 	<form method='post' action='options.php'>
 	<?php
 	settings_fields( 'wordpress_easy_maintenance_admin_display' ); ?>
 	<table class='form-table'>
 		<tr valign="top">
 			<th scope="row">Settings:</th>
 			<td>
 				<div>
 					<label for='wordpress_easy_maintenance_active'> Enable or Disable:</label>
 					<select name='wordpress_easy_maintenance_active'>
 						<option value="enabled" <?=(get_option('wordpress_easy_maintenance_active') == 'enabled')? 'selected' : '' ?>>Enabled</option>
 						<option value="disabled" <?=(get_option('wordpress_easy_maintenance_active') == 'disabled')? 'selected' : '' ?>>Disabled</option>
 					</select>
 				</div>
 				<div>
 					<label for='wordpress_easy_maintenance_page_title'> Choose a page title: </label>
 					<input type="text" name="wordpress_easy_maintenance_page_title" value="<?php echo esc_attr( get_option('wordpress_easy_maintenance_page_title') ); ?>" style="min-width:200px;" />
 				</div>
 				<div>
 					<label for='wordpress_easy_maintenance_h1_text'> Primary text: </label>
 					<input type="text" name="wordpress_easy_maintenance_h1_text" value="<?php echo esc_attr(get_option('wordpress_easy_maintenance_h1_text')); ?>" style="min-width: 200px;" />
 				</div>
 				<div>
 					<label for='wordpress_easy_maintenance_h2_text'> Secondary text: </label>
 					<input type='text' name="wordpress_easy_maintenance_h2_text" value="<?php echo esc_attr(get_option('wordpress_easy_maintenance_h2_text')); ?>" style="min-width: 200px;" />
 				</div>
 			</td>
 		</tr>
 	</table>
 	<?php
 	submit_button();
 	?>
 	</form>
 </div>
