<?php
/* -------------------------------------------------
        Funciones personalizadas para mi tema
------------------------------------------------- */


/* 1. Añadido de Estilos */

function my_load_styles() 
{
    //Vamos a usar una fx nativa WP para registrar estilos
    wp_register_style('theme_style', get_stylesheet_uri(), '', '1.0', 'all');

    //Cargar el estilo
    wp_enqueue_style('theme_style');
}
//Asociar load_styles() a una acción de wp
add_action('wp_enqueue_scripts','my_load_styles');

/* 2. Añadido de Sidebar */
function my_register_sidebars()
{
    //Fx crear areas dinamicas para insertar widgets dinamicos. Los argumentos se pasan dentro de un array
    register_sidebar( array (
        //Como primer parametro: el nombre de referencia, en 2do parametro el texto de dominio(que esta en style.css) 
        'name'              =>  __('Sidebar Principal', 'jha'),
        'id'                =>  'main_sidebar',
        'description'       =>  __('Este es el sidebar principal', 'jha'),
        
        //before_widget, define el elemento que ira antes de cada widget
        //- Class de acuerdo  a la plantilla de sidebar.php y se le agrega un identificador con la misma estructura que id, reemplazando el número
        'before_widget'     =>  '<div id="%1$s" class="widget %2$s">',
        'after_widget'      =>  '</div>',

        //Before_title, de acuerdo a la plantilla de sidebar.php
        'before_title'     =>  '<h3 class="widget-title">',
        'after_title'       =>  '</h3>',
        
    ) );

}

//Asociar la función register_sidebars() a la acción de widgets_initi (cuando wp inicialice los widgets)
add_action('widgets_init', 'my_register_sidebars');
?>