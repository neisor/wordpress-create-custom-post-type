<?php
/**
 * Plugin Name: Create Custom Post Types
 * Plugin URI: https://ariseo.sk
 * Description: This plugin creates a custom post type in WordPress
 * Version: 5.2.1
 * Author: Antonio Raffaele Iannaccone - ariseo
 * Author URI: https://ariseo.sk
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0
 * Text Domain: ariseo
 * Domain Path: /languages
 *
 * WC requires at least: 4.5
 * WC tested up to: 4.8
 * Woo: 4652610:f6f1f8a56a16a3715b30b21fb557e78f
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package MojSuperPlugin
 */

	function create_my_custom_post_types() {
		// This creates a Book post type in WordPress
		register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
	}
	
	add_action( 'init', 'create_my_custom_post_types' );
