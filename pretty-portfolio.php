<?php
/**
 * @package pretty-portfolio
 * @version 1.0
 */
/*
Plugin Name: Pretty Portfolio
Plugin URI: http://sazzadh.com/plugins/pretty-portfolio/
Description: <strong>Image Magnify</strong> is a lightweight image magnifier plugin for wordpress. It add zoom effect on the hover of the image.
Author: Sazzad Hu
Version: 1.0
Author URI: http://sazzadh.com/

PPFOLIO

ppfolio
*/

$path_dir = trailingslashit(str_replace('\\','/',dirname(__FILE__)));
$path_abs = trailingslashit(str_replace('\\','/',ABSPATH));

define('PPFOLIO_URL', site_url(str_replace( $path_abs, '', $path_dir )));
define('PPFOLIO_DRI', $path_dir);

include('assets/phc/phc.php');
