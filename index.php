<?php

/*
Plugin Name: WP Sortables
Plugin URI: http://wordpress.org/
Description: Enter description here.
Author: Jörn Lund
Version: 0.0.2
Author URI: https://github.com/mcguffin
License: GPL3
Github Repository: mcguffin/wp-sortables
Text Domain: wp-sortables
Domain Path: /languages/
*/

/*  Copyright 2018  Jörn Lund

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
Plugin was generated by WP Plugin Scaffold
https://github.com/mcguffin/wp-plugin-scaffold
Command line args were: ``
*/


namespace Sortables;

if ( ! defined('ABSPATH') ) {
	die('FU!');
}


define( 'SORTABLES_FILE', __FILE__ );
define( 'SORTABLES_DIRECTORY', plugin_dir_path(__FILE__) );
define( 'SORTABLES_PLUGIN', pathinfo( SORTABLES_DIRECTORY, PATHINFO_FILENAME ) . '/' . pathinfo( __FILE__, PATHINFO_BASENAME ) );

require_once SORTABLES_DIRECTORY . 'include/autoload.php';

Core\Core::instance();








if ( is_admin() || defined( 'DOING_AJAX' ) ) {

	// don't WP-Update actual repos!
	if ( ! file_exists( SORTABLES_DIRECTORY . '/.git/' ) ) {
		AutoUpdate\AutoUpdateGithub::instance();
	}

	Admin\Admin::instance();



}

