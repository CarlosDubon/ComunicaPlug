<?php
/**
* Plugin Name: ComunicaPlug
* Description: Utilidades
* Version: 1.0.0
* Author: Comunica  
*/

function ComunicaPlug(){
    include_once(plugin_dir_path( __FILE__ ).'/includes/widget/widget.php');
    register_widget('radio');
}
add_action('widgets_init','ComunicaPlug');