<?php

class radio extends WP_Widget {

    function radio(){
        // Constructor del Widget.
        $widget_ops = array('classname'=>'radio', 'description'=>'Agrega una radio del departamento de comunicaciones');
        $this->WP_Widget('radio','Radio Comunica',$widget_ops);
    }

    function widget($args,$instance){
        // Contenido del Widget que se mostrará en la Sidebar
        extract($args);
        $url = $instance['url'];
        ?>
        <div class="col-md-6">
            <div class="card text-white bg-primary mb-3">
              <div class="card-header">Header</div>
              <div class="card-body">
                <h4 class="card-title">Primary card title</h4>
                <p class="card-text"><?php echo $url; ?></p>
              </div>
            </div>
        </div>
        <?php
    }

    function update($new_instance, $old_instance){
        // Función de guardado de opciones
        $instance = $old_instance;
        $instance['url']=wp_strip_all_tags($new_instance['url']);
        return $instance;
    }

    function form($instance){
        $defaults = array ('image'=>'','url'=>'');
        
        extract(wp_parse_args((array)$instance,$defaults));
        $image=$instance['image'];
        $url=$instance['url'];
        ?>
            <p>
                <label>URL</label>
                <input class="widefat" type="text" name="<?php echo $this->get_field_name('url'); ?>" value="<?php echo esc_attr($url);  ?>">
            </p>
        <?php
    }
}

?>