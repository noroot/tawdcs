<?php
/**
 * Plugin Name: HTML Minify
 * Plugin URI: https://benmarshall.me/html-minify
 * Description: Simple & light-weight plugin that allows you to minify the HTML output of your site.
 * Version: 1.0.0
 * Author: Ben Marshall
 * Text Domain: htmlminify
 * Domain Path: /languages
 * Author URI: https://benmarshall.me
 * License: GPL2
 */

/*  Copyright 2015  Ben Marshall  (email : me@benmarshall.me)

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

/**
 * Security Note: Blocks direct access to the plugin PHP files.
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * Include the HTML minify options
 */
require_once( dirname( __FILE__) . '/html-minify-options.php' );

/**
 * Include the HTML minify functionality
 */
require_once( dirname( __FILE__) . '/html-minify-process.php' );
