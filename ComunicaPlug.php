<?php
/**
* Plugin Name: ComunicaPlug
* Description: Utilidades
* Version: 1.0.0
* Author: Comunica  
*/

function ComunicaPlug(){
    require plugin_dir_path( __FILE__ ).'/includes/widget/ISlider.php';
    register_widget('ISlider');
    require plugin_dir_path( __FILE__ ).'/includes/widget/FSlider.php';
    register_widget('FSlider');
    require plugin_dir_path( __FILE__ ).'/includes/widget/Podcast.php';
    register_widget('Podcast');
}
add_action('widgets_init','ComunicaPlug');