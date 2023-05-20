    <footer>
        <p>This is my footer.</p>

        <?php
            // Acá llamamos al menú footer
            wp_nav_menu(array('theme_location'=>'secundario'));
        ?>
    </footer>
    
    <?php 
        wp_footer();
    ?>

</body>
</html>