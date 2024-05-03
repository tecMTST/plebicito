<?php function plebiscito_enqueue_styles() {
    // Registre o estilo CSS do tema
    wp_enqueue_style( 'plebiscito-style', get_stylesheet_uri() );
}
// Adicione o hook para a função acima
add_action( 'wp_enqueue_scripts', 'plebiscito_enqueue_styles' );