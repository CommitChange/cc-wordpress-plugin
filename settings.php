<?php
/*
	CommitChange Wordpress Plugin
	Copyright (C) 2013 CommitChange

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License along
    with this program; if not, write to the Free Software Foundation, Inc.,
	51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

function cc_options_page() {

	global $cc_options;

	ob_start(); ?>
	<div class="wrap">
		<h2>CommitChange Plugin Settings</h2>
		
		<form method="post" action="options.php">

			<?php settings_fields('cc_settings_group'); ?>
			<h3><?php _e('Nonprofit ID', 'cc_domain'); ?></h3>

			<label class="description" for="cc_settings[npo_id]"><?php _e('Please enter your CommitChange nonprofit ID', 'cc_domain'); ?></label><br />
			<input id="cc_settings[npo_id]" name="cc_settings[npo_id]" type="number" value="<?php echo $cc_options['npo_id']; ?>"/>

			<p class="submit">
				<input type="submit" class="button button-primary" value="<?php _e('Save Settings', 'cc_domain'); ?>" />
			</p>

		</form>
		
	</div>
	<?php
	echo ob_get_clean();
}

function cc_add_options_link() {
	add_options_page('CommitChange Plugin Settings', 'CommitChange', 'manage_options', 'cc-options', 'cc_options_page');
	//add_options_page is WP magic for creating an options page
}

add_action('admin_menu', 'cc_add_options_link');

function cc_register_settings() {
	// creates options in the options table in the database
	register_setting('cc_settings_group', 'cc_settings');
}

add_action('admin_init', 'cc_register_settings');