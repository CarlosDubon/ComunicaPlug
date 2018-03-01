<?php
/**
* Plugin Name: ComunicaPlug
* Description: Utilidades
* Version: 1.0.0
* Author: Comunica  
*/

function mpw_create_widget(){
    include_once(plugin_dir_path( __FILE__ ).'/includes/widget/widget.php');
    register_widget('radio');
}
add_action('widgets_init','radio');