<?php
//Habilitando imagens destacadas
add_theme_support('post-thumbnails');

//Removendo tags do post
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
?>