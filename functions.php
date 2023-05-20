<?php 
    function temita_script_enqueue() {
        // Esta función lleva entre paréntesis cinco parámetros de los cuales solo el 1º es requerido, el nombre que va a usar WP para ?????????. El 2º es la ruta (con función para conseguir la absouta), el 3º es un array que sirve para ?????????, el 4º es la versión del tema y el 5º es para especificar si este archivo de estilo tiene que aplicarse en todos los dispositivos o solo en uno de diferente resoluión.
        wp_enqueue_style('estilo_personalizado', get_template_directory_uri() . '/css/temita.css', array(), '1.0.0', 'all');
            
        // En este caso, el último parámetro es un booleano que especifica si queremos que nuestro script se imprima en el header o en el footer. Por defecto es false (que se imprime en el header) y lo más lógico es que se imprima en el footer por cuestión de tiempo de carga.
        wp_enqueue_script('js_personalizado', get_template_directory_uri() . '/js/temita.js', array(), '1.0.0', true);
    }

    // Las funciones van en string porque estamos usando una acción.
    add_action('wp_enqueue_scripts','temita_script_enqueue');

    // Si necesitamos activar un theme_support específico o cuando creamos un plugin personalizado, es mejor poner el hook add_theme_support() dentro de una función.
    function temita_setup() {
        // Con este hook (que podemos poner solo, sin función, si estamos dentro de functions.php del theme al que queremos activar el menú) podemos activar muchas cosas que se verán en otro momento.
        add_theme_support('menus');
        
        // En cuanto a menúes, también podemos crearlos personalizados, permiténdonos eso la habilidad de llamar a dicho menú desde donde queramos en nuestro panel de administración, la habilidad de decidir qué menú queremos mostrar y en qué determinada página o post. 
        // Como queremos crear este theme support a la misma vez que el otro, podemos extender la función temita_setup().
        // En los argumentos de register_nav_menu() tenemos que especificar 2 parámetros: el 1º es la localización del theme, básicamente el nombre único de nuestro menú personalizado; el 2º es una descripción que ayuda a entender qué es este menú. (Lo imprimimos en header.php)
        register_nav_menu('primario', 'Primario is the primary header navigation');
        register_nav_menu('secundario', 'Secundario is the footer navigation');
    }

    // Esta función la podemos activar durante dos momentos específicos: after the theme setup o DURANTE la iniciación ('init'), pues si ponemos tanto la función como el hook después de estos momentos, no van a funcionar.
    add_action('after_setup_theme', 'temita_setup')

?>