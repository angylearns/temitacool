<?php 
    function temita_script_enqueue() {
        wp_enqueue_style('estilo_personalizado', get_template_directory_uri() . '/css/temita.css', array(), '1.0.0', 'all');
            // Esta función de arriba lleva entre paréntesis cinco parámetros de los cuales solo el 1º es requerido, el nombre que va a usar WP para ?????????. El 2º es la ruta (con función para conseguir la absouta), el 3º es un array que sirve para ?????????, el 4º es la versión del tema y el 5º es para especificar si este archivo de estilo tiene que aplicarse en todos los dispositivos o solo en uno de diferente resoluión.
        wp_enqueue_script('js_personalizado', get_template_directory_uri() . '/js/temita.js', array(), '1.0.0', true);
            // En este caso, el último parámetros es un booleano que especifica si queremos que nuestro script se imprima en el header o en el footer. Por defecto es false (que se imprime en el header) y lo más lógico es que se imprima en el footer por cuestión de tiempo de carga.
    }

    add_action('wp_enqueue_scripts','temita_script_enqueue');
    // Las funciones van en string porque estamos usando una acción.
?>