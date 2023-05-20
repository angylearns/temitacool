<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blablebli</title>
    <?php 
    // Esta función imprime scrips o datos en la etiqueta head del front
        wp_head();      
    ?>


</head>
<body>
    <?php
        // Aquí ponemos el hook que llama al menú principal, que es el primario.
        wp_nav_menu(array('theme_location'=>'primario'));
    ?>