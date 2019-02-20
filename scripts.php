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
function cc_script() {
	global $cc_options;
?>

<script type='text/javascript' id='commitchange-script' data-npo-id= <?php echo $cc_options['npo_id']; ?> src='https://us.commitchange.com/js/donate-button.v2.js'></script>
</script>
<?php
}

add_action( 'wp_head' , 'cc_script' );