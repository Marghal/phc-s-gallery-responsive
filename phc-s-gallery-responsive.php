<?php
/*
Plugin Name: S Gallery Responsive
Plugin URI: https://github.com/joko-wandiro/phc-s-gallery-responsive
Description: Add S Gallery Responsive jQuery Gallery Plugin with CSS3 Animations to your post / page / widget Wordpress
Version: 1.0.0
Author: Joko Wandiro
Author URI: http://www.phantasmacode.com
*/
define("PHC_S_GALLERY_RESPONSIVE_VERSION", "1.0");
define('PHC_S_GALLERY_RESPONSIVE_NAME', "S Gallery Responsive");
define('PHC_S_GALLERY_RESPONSIVE_IDENTIFIER', "phc-s-gallery-responsive");
define('PHC_S_GALLERY_RESPONSIVE_ID_SCRIPT', "phc_s_gallery_responsive");

load_plugin_textdomain(PHC_S_GALLERY_RESPONSIVE_IDENTIFIER, FALSE, PHC_S_GALLERY_RESPONSIVE_IDENTIFIER . "/languages");

define('PHC_S_GALLERY_RESPONSIVE_PATH', plugin_dir_path(__FILE__));
define('PHC_S_GALLERY_RESPONSIVE_INCLUDE_PATH', PHC_S_GALLERY_RESPONSIVE_PATH . "inc/");
define('PHC_S_GALLERY_RESPONSIVE_THEME_PATH', PHC_S_GALLERY_RESPONSIVE_PATH . "theme/");
define('PHC_S_GALLERY_RESPONSIVE_PATH_URL', plugin_dir_url(__FILE__));
define('PHC_S_GALLERY_RESPONSIVE_THEME_URL', PHC_S_GALLERY_RESPONSIVE_PATH_URL . "theme/");
define('PHC_S_GALLERY_RESPONSIVE_PATH_URL_CSS', PHC_S_GALLERY_RESPONSIVE_PATH_URL . "css/");
define('PHC_S_GALLERY_RESPONSIVE_PATH_URL_JS', PHC_S_GALLERY_RESPONSIVE_PATH_URL . "js/");
define('PHC_S_GALLERY_RESPONSIVE_IMG_URL', PHC_S_GALLERY_RESPONSIVE_PATH_URL . "img/");
define('PHC_S_GALLERY_RESPONSIVE_IMG_DOCUMENTATION_BOW_TO_USE_URL', PHC_S_GALLERY_RESPONSIVE_PATH_URL . 
"img/documentation/how-to-use/");
define('PHC_S_GALLERY_RESPONSIVE_IMG_DOCUMENTATION_THEMES_URL', PHC_S_GALLERY_RESPONSIVE_PATH_URL . 
"img/documentation/themes/");
define('PHC_S_GALLERY_RESPONSIVE_IMG_DOCUMENTATION_NEW_THEMES_URL', PHC_S_GALLERY_RESPONSIVE_PATH_URL . 
"img/documentation/new-themes/");
define("PHC_S_GALLERY_RESPONSIVE_POST_TYPE", "s-gallery-responsive");
define("PHC_S_GALLERY_RESPONSIVE_SUBMENU_CAPABILITY", "manage_options");
define("PHC_S_GALLERY_RESPONSIVE_MENU_SLUG_SETTINGS", PHC_S_GALLERY_RESPONSIVE_ID_SCRIPT . 
"_settings");
define("PHC_S_GALLERY_RESPONSIVE_PAGE_TITLE_SETTINGS", __("Settings", PHC_S_GALLERY_RESPONSIVE_IDENTIFIER));
define("PHC_S_GALLERY_RESPONSIVE_MENU_TITLE_SETTINGS", 
PHC_S_GALLERY_RESPONSIVE_PAGE_TITLE_SETTINGS);
define("PHC_S_GALLERY_RESPONSIVE_MENU_SLUG_DOCUMENTATION", PHC_S_GALLERY_RESPONSIVE_ID_SCRIPT . 
"_documentation");
define("PHC_S_GALLERY_RESPONSIVE_PAGE_TITLE_DOCUMENTATION", __("Documentation", PHC_S_GALLERY_RESPONSIVE_IDENTIFIER));
define("PHC_S_GALLERY_RESPONSIVE_MENU_TITLE_DOCUMENTATION", PHC_S_GALLERY_RESPONSIVE_PAGE_TITLE_DOCUMENTATION);

require_once(PHC_S_GALLERY_RESPONSIVE_INCLUDE_PATH . "backend_ajax.php");
require_once(PHC_S_GALLERY_RESPONSIVE_INCLUDE_PATH . "post_type.php");
require_once(PHC_S_GALLERY_RESPONSIVE_INCLUDE_PATH . "meta_boxes.php");
require_once(PHC_S_GALLERY_RESPONSIVE_INCLUDE_PATH . "manage_columns.php");
require_once(PHC_S_GALLERY_RESPONSIVE_INCLUDE_PATH . "shortcode.php");
require_once(PHC_S_GALLERY_RESPONSIVE_INCLUDE_PATH . "admin_scripts.php");
require_once(PHC_S_GALLERY_RESPONSIVE_INCLUDE_PATH . "pages/settings.php");
require_once(PHC_S_GALLERY_RESPONSIVE_INCLUDE_PATH . "pages/documentation.php");
?>