<?php
/**
* Plugin Name: Current Year Shortcode VICT
* Version: 1.17
* Description: A shortcode to display the current year.
* Requires at least: 6.0
* Requires PHP: 8.0
* Author: Voordelig ICT
* Author URI: https://voordeligict.nl 
* License: GPLv2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function vict_showYear() {
    $year = gmdate('Y');
    return $year;
  }
  add_shortcode('vict_year', 'vict_showYear');
  
?>