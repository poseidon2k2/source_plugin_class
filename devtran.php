<?php
/*
Plugin Name: DevTran Plugin
Plugin URI: https://zippy.sg/
Description: Booking System, Manage Oder, Monthly Payment...
Version: 5.0 Author: Zippy SG
Author URI: https://zippy.sg/
License: GNU General Public
License v3.0 License
URI: https://zippy.sg/
Domain Path: /languages

Copyright 2024

*/

namespace DevTran;

defined('ABSPATH') or die('°_°’');

/* ------------------------------------------
 // Constants
 ------------------------------------------------------------------------ */
/* Set plugin version constant. */

if (!defined('DEVTRAN_VERSION')) {
    define('DEVTRAN_VERSION', '4.0');
  }

/* Set plugin name. */

if (!defined('DEVTRAN_NAME')) {
    define('DEVTRAN_NAME', 'Dev Tran');
  }
  
  if (!defined('DEVTRAN_PREFIX')) {
    define('DEVTRAN_PREFIX', 'devtran');
  }
  
  if (!defined('DEVTRAN_BASENAME')) {
    define('DEVTRAN_BASENAME', plugin_basename(__FILE__));
  }
  
  /* Set constant path to the plugin directory. */
  
  if (!defined('DEVTRAN_DIR_PATH')) {
    define('DEVTRAN_DIR_PATH', plugin_dir_path(__FILE__));
  }
  
  /* Set constant url to the plugin directory. */
  
  if (!defined('DEVTRAN_URL')) {
    define('DEVTRAN_URL', plugin_dir_url(__FILE__));
  }

/* ------------------------------------------
// Includes
 --------------------------- --------------------------------------------- */
 require DEVTRAN_DIR_PATH . '/includes/autoload.php';
 require DEVTRAN_DIR_PATH . 'vendor/plugin-update-checker/plugin-update-checker.php';

use  DevTran\Src\Main\Main;

main::get_instance();