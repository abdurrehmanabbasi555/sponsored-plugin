<?php
/**
 * Plugin Name: Thanks For Reading
 * Description: A simple plugin to display text "Thanks For Reading" at the end of your page.
 * Version: 1.0
 */

 add_filter('the_content', 'wp_learn_amend_content');

 function wp_learn_amend_content($content){
    return $content . '<p>Thanks for reading!</p>';
 }
?>