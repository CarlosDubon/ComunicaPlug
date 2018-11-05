<?php

class FSlider extends WP_Widget {

    function __construct(){
        // Constructor del Widget.
        $widget_ops = array('classname'=>'FSlider', 'description'=>'Cierra un slider');
        $this->parent::__construct('FSlider','Cierre de Slider <slider>',$widget_ops);
    }

    function widget($args,$instance){
        // Contenido del Widget que se mostrará en la Sidebar
        echo '</div>';
    }

    function update($new_instance, $old_instance){
        // Función de guardado de opciones
       
    }

    function form($instance){
       
    }
}

?>