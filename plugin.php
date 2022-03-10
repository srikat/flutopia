<?php
/*
Plugin Name:	Flutopia
Plugin URI:		https://github.com/srikat/flutopia
Description:	Fluid type scale and space via Utopia.
Version:		1.0.0
Author:			Sridhar Katakam
Author URI:		https://wpdevdesign.com/
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt

This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with This plugin. If not, see {URI to Plugin License}.
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'wp_enqueue_scripts', 'flutopia_enqueue_files' );
function flutopia_enqueue_files() {
	wp_enqueue_style( 'utopia', plugin_dir_url( __FILE__ ) . 'assets/css/utopia.css' );
	wp_enqueue_style( 'flutopia', plugin_dir_url( __FILE__ ) . 'assets/css/flutopia.css' );
}
