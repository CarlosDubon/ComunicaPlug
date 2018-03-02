<?php

class ISlider extends WP_Widget {

    function ISlider(){
        // Constructor del Widget.
        $widget_ops = array('classname'=>'Slider', 'description'=>'Inicia un nuevo slider');
        $this->WP_Widget('ISlider','Inicio de Slider <slider>',$widget_ops);
    }

    function widget($args,$instance){
        // Contenido del Widget que se mostrará en la Sidebar
        echo '<div class="slider">';
    }

    function update($new_instance, $old_instance){
        // Función de guardado de opciones
       
    }

    function form($instance){
       
    }
}

?>