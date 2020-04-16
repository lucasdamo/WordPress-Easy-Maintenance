<?php
// Exits if accessed directly
if (! defined ('ABSPATH')) {
	exit;
}

/* The settings page on /wpadmin */
function wpem_maintenance_menu(){
	if(is_admin()){
		?>
		<div class ='wrap'>
			<form method='post' action='options.php'>
			<?php
			settings_fields( 'wpem_maintenance_settings_group' ); ?>
			<table class='form-table'>
				<tr valign="top">
					<th scope="row">Settings:</th>
					<td>
						<div>
							<label for='wpem_maintenance_active'> Enable or Disable:</label>
							<select name='wpem_maintenance_active'>
								<option value="enabled" <?=(get_option('wpem_maintenance_active') == 'enabled')? 'selected' : '' ?>>Enabled</option>
								<option value="disabled" <?=(get_option('wpem_maintenance_active') == 'disabled')? 'selected' : '' ?>>Disabled</option>
							</select>
						</div>
						<div>
							<label for='wpem_maintenance_page_title'> Choose a page title: </label>
							<input type="text" name="wpem_maintenance_page_title" value="<?php echo esc_attr( get_option('wpem_maintenance_page_title') ); ?>" style="min-width:200px;" />
						</div>
						<div>
							<label for='wpem_maintenance_header_hex'> Header Color in Hexadecimal: </label>
							<input type="text" name="wpem_maintenance_header_hex" value="<?php echo esc_attr(get_option('wpem_maintenance_header_hex')); ?>" style="min-width: 200px;" />
						</div>
						<div>
							<label for='wpem_maintenance_h1_text'> Text to show up on header: </label>
							<input type="text" name="wpem_maintenance_h1_text" value="<?php echo esc_attr(get_option('wpem_maintenance_h1_text')); ?>" style="min-width: 200px;" />
						</div>
						<div>
							<label for='wpem_maintenance_title'> Maintenance title: </label>
							<input type='text' name='wpem_maintenance_title' value="<?php echo esc_attr(get_option('wpem_maintenance_title')); ?>" style="min-width: 200px;" />
						</div>
						<div>
							<label for='wpem_maintenance_note'> Maintenance note: </label>
							<input type='text' name='wpem_maintenance_note' value="<?php echo esc_attr(get_option('wpem_maintenance_note')); ?>" style="min-width: 200px;" />
						</div>
					</td>
				</tr>
			</table>
			<div>
				<p> Many more features will come. For now we recommend editing the maintenance-userpage.php as you wish </p>
			</div>
			<?php
			submit_button();
			?>
			</form>
		</div>

	<?php }
}
?>