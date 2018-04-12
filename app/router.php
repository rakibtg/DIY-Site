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

  $module = trim( $uri[ 1 ] );

  if ( empty( $module ) ) {
    $page = './site/pages/homepage.php';
  } else if ( $module === 'login' ) {
    $page = './site/admin/login.php';
  } else if ( $module === 'new-story' ) {
    $page = './site/admin/new-story.php';
  }

  // Adding the index page.
  require_once './site/index.php';