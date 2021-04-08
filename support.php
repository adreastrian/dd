<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wpmanageninja.com/
 * @since             1.0.0
 * @package           DD
 *
 * @wordpress-plugin
 * Plugin Name:       DD
 * Plugin URI:        https://wpmanageninja.com/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            WPManageNinja
 * Author URI:        https://wpmanageninja.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dd
 * Domain Path:       /languages
 */

require 'vendor/autoload.php';

use \Illuminate\Support\Debug\Dumper;

/**
 * Dump the passed variables and end the script.
 *
 * @param  mixed
 *
 * @return void
 */
function dd()
{
    $args = func_get_args();

	header('Content-Type: text/html; charset=UTF-8');

    foreach ($args as $x) {
        (new Dumper)->dump($x);
    }

    die(1);
}
