<?php

class Podcast extends WP_Widget {

    function Podcast(){
        // Constructor del Widget.
        $widget_ops = array('classname'=>'Podcast', 'description'=>'Podcast');
        $this->WP_Widget('Podcast','Crea tu podcasr',$widget_ops);
    }

    function widget($args,$instance){
        // Contenido del Widget que se mostrará en la Sidebar
        echo $before_widget;
        echo '[audio=”http://www.ivoox.com/dire-straits-sultans-of-swing_md_371616_1.mp3″%5D <a href="http://www.ivoox.com/dire-straits-sultans-of-swing-audios-mp3_rf_371616_1.html" title="Dire Straits, "Sultans of swing "">Ir a descargar</a>';
        echo $after_widgets;
    }

    function update($new_instance, $old_instance){
        // Función de guardado de opciones
       
    }

    function form($instance){
       
    }
}

?>