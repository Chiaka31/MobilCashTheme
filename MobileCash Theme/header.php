
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- https://developer.wordpress.org/reference/functions/wp_head/ -->
    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
      
    <? wp_head(); ?>
  </head>

  <body body_class>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="/index.php">Mobile Cash</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
         <!-- <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item active">
              <a class="nav-link" href="/index/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about-us/">About Us</a>
            </li>
              <ul>
                <li><a href="/mission/">Mission</a></li>
                <li><a href="/team/">Team</a></li>
                <li><a href="/location/">Location</a></li>
              </ul>
            <li class="nav-item">
              <a class="nav-link disabled" href="/contact/">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="/blog/">Blog</a>
            </li>
          </ul> -->
            
       <?php 
        wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => false,
            'container_class' => false,
            'container_id'    => false,
            'menu_class'      => 'navbar-nav me-auto mb-2 mb-md-0',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
            
        ?>
            
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>