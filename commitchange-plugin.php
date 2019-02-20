<?php
/*
Plugin Name: CommitChange Plugin
Plugin URI: https://help.commitchange.com/article/59-wordpress-plugin
Description: The simplest way to add CommitChange widgets into your WordPress site.
Author: CommitChange
Author URI: https://commitchange.com
Version: 0.2
*/
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

$cc_options = get_option('cc_settings');

include('scripts.php');
include('settings.php');