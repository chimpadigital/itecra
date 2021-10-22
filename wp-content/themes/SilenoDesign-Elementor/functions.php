<?php // Tema hijo SilenoDesign

// enqueue estilos para el tema padre
function example_enqueue_styles() {
    wp_enqueue_style('dt-the7', get_template_directory_uri() .'/style.css');
  
  // EN CASO QUE NO PRIORICE EL CSS DEL PADRE, QUITAR COMENTARIOS DEL RENGLON DE ABAJO
  // wp_enqueue_style('---->nombre-carpeta-tema-hijo<-----', get_stylesheet_directory_uri() .'/style.css', array('---->nombre-carpeta-tema-padre<-----'));
  
}
add_action('wp_enqueue_scripts', 'example_enqueue_styles');

//Cambiamos el logo
add_action( 'login_enqueue_scripts', 'bs_change_login_logo' );
function bs_change_login_logo() { ?> 

<?php 
}

add_filter( 'login_message', 'wordpresss_login_message' );

//Cambiamos la URL del logo			  
add_filter( 'login_headerurl', 'bs_login_logo_url' );
function bs_login_logo_url($url) {
    return '#';}

//Cambiamos el título de la URL del logo
add_filter( 'login_headertitle', 'bs_login_logo_url_title' );
function bs_login_logo_url_title() {
    return '';}