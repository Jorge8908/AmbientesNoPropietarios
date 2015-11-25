<?php


session_start();

// Definimos las constantes que nos pueden ser útiles en todo el sitio.
define('DOCUMENT_ROOT_RELATIVA', '/examen/');
define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);

// incluimos las utilidades
require_once( 'utils.php' );




// Si no hay una sesión creada, redireccionar al index para que inicie sesión.
// print_r($_SERVER['REQUEST_URI']);
// echo '/' . urlencode(DOCUMENT_ROOT_RELATIVA) . 'index.php[\?\w*]?/';
if( !preg_match( "/" . urlencode(DOCUMENT_ROOT_RELATIVA) . 'index.php[\?\w*]?/', urlencode($_SERVER['REQUEST_URI']))  &&
    $_SERVER['REQUEST_URI'] != DOCUMENT_ROOT_RELATIVA . 'registro.php' ){
    if( !isset( $_SESSION['email'] ) ) {
        http_redirect( 'index.php' );
    }
}