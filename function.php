<?php
/**
 * Plugin Name: Remove empty p tag
 * Description: This plugin removes empty p and br tag from the content. 
 * Version: 1.0.0
 * Author: Dev02ali
 * Author URI: https://dev02ali.wordpress.com/
 * Author Email: dev02ali@gmail.com
 * License: GPLv2
 */

   remove_filter('the_content', 'wpautop');
   remove_filter('the_excerpt', 'wpautop');
?>