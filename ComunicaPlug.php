<?php
/**
* Plugin Name: ComunicaPlug
* Description: Utilidades
* Version: 1.0.0
* Author: Comunica  
*/

function ComunicaPlug(){
    include_once(plugin_dir_path( __FILE__ ).'/includes/widget/ISlider.php');
    register_widget('ISlider');
    //include_once(plugin_dir_path( __FILE__ ).'/includes/widget/FSlider.php');
    //register_widget('FSlider');
}
add_action('widgets_init','ComunicaPlug');