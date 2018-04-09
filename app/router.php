<?php

  // Import helpers.
  require_once './app/helpers.php';

  // Router, collecting all uri segments.
  $uri = explode( '/', $_SERVER[ 'REQUEST_URI' ] );

  // If file then serve the requested resource as-is.
  if ( preg_match( '/\.(?:png|jpg|jpeg|gif|css|js|mp4|json|svg|webp)$/', $_SERVER[ "REQUEST_URI" ] ) ) {
    return false;
  }

  // echo '<pre>';
  // print_r( $uri );
  // echo '</pre>';
  // Array
  // (
  //     [0] => 
  //     [1] => hello
  //     [2] => mellos
  // )

  if ( empty( $uri[ 1 ] ) ) {
    $page = 'homepage';
    require_once './site/index.php';
  }