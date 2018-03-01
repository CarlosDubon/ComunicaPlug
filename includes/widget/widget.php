<?php

class radio extends WP_Widget {

    function radio(){
        // Constructor del Widget.
        $widget_ops = array('classname'=>'radio', 'description'=>'Agrega una radio del departamento de comunicaciones');
        $this->WP_Widget('radio','Radio Comunica',$widget_ops);
    }

    function widget($args,$instance){
        // Contenido del Widget que se mostrará en la Sidebar
        echo $before_widget;
        ?>
        <div class="col-md-6">
            <div class="card text-white bg-primary mb-3">
              <div class="card-header">Header</div>
              <div class="card-body">
                <h4 class="card-title">Primary card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
        </div>
        <?php
        echo $after_widget;
    }

    function update($new_instance, $old_instance){
        // Función de guardado de opciones
        $instance = $old_instance;
        $instance["ruta"]=strip_tags($new_instance['ruta']);
        return instance;
    }

    function form($instance){
        // Formulario de opciones del Widget, que aparece cuando añadimos el Widget a una Sidebar
    }
}

?>