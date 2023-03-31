<?php
/* 
    Plugin Name: CTP Generator and Taxonomies
    Plugin URI: https://www.linkedin.com/in/christian-morales-63b2a8196/
    Description: This is a plugin for generate a custom type posts and taxonomies
    Version: 0.0.1
    Author: Christian Daniel Morales
*/

include_once('custom_post_type.php');
include_once('taxonomies_post_type.php');
include_once('shortcode_dishes.php');

$shortcode = new Shortcode();
$shortcode->showAllDishesPostType();
$shortcode->showDishesInfront();
$shortcode->showOnePostInFront();
$shortcode->widgetCustomPostTypes();

function activate(){}

function deactivate(){
    flush_rewrite_rules();
}
function delete(){
}

register_activation_hook(__FILE__,'activate');
register_deactivation_hook(__FILE__,'deactivate');
register_uninstall_hook(__FILE__,'delete');
