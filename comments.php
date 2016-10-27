<?php if(have_comments() ) { ?>
    <h3>
        <?php comments_number( 
            __('No hay comentarios aún', 'jha'), 
            __('Hay un comentario publicado', 'jha'), 
            __('Hay % comentarios', 'jha') 
        ); ?>
    </h3>

    <ol id="comments-list">
    <?php 
        wp_list_comments(  ) 
    ?>
    </ol>
    <?php paginate_comments_links( ); ?>
<?php } ?>

<?php 
    paginate_comments_links( );
    comment_form( );
?>