<?php

  // Boot the template
  function bootTemplate( $page= 'homepage', $title = 'DIY Site' ) {
    require_once './site/template/header.php';
    require_once './site/template/body.php';
    require_once './site/template/right-sidebar.php';
    require_once './site/template/footer.php';
  }