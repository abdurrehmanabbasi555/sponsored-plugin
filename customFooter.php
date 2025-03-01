<?php
/**
 * Plugin Name: Custom Footer Text
 * Description: A simple plugin to display text "This is custom footer text.." at your footer.
 * Version: 1.0
 */

 function custom_footer_text(){
    echo '<p>This is custom footer text..</p>';
 } 

 add_action('wp_footer', 'custom_footer_text');
?>