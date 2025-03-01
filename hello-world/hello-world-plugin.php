<?php
/**
 * Plugin Name: Hello World
 * Description: A simple plugin that displays hello world on the dashboard of the website
 * Author: Abdurrehman Abbasi
 * Version: 1.0.0
 * Author URI: https://dev-abdurrehmanabbasi.pantheonsite.io/
 * Plugin URI: https://github.com/abdurrehmanabbasi555
 */

 //Admin Notices

 add_action( "admin_notices", "hw_show_success_message" );

 function hw_show_success_message(){

    echo "<div class='notice notice-success is-dismissible'><p>Hello, I am a success message..</p></div>";
 }

add_action( "admin_notices", "hw_show_error_message" );
 
 function hw_show_error_message(){
    echo "<div class='notice notice-error is-dismissible'><p>Hello, I am an error message..</p></div>";
 }

 add_action( "admin_notices", "hw_show_warning_message" );
 
 function hw_show_warning_message(){
    echo "<div class='notice notice-warning is-dismissible'><p>Hello, I am a warning message..</p></div>";
 }

 //Admin Dashboard Widgets

 add_action( "wp_dashboard_setup", "hw_show_dashboard_widget" );
 
 function hw_show_dashboard_widget(){
    wp_add_dashboard_widget( "hello_world", "Hello World Widget", "hw_custom_admin_widget" );
 }

 function hw_custom_admin_widget(){
    echo "Hello, I am a custom admin widget..";
 }
?>