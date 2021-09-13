<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Styles -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <?php wp_head(); ?>


</head>

<body>
    <header class="container-fluid">
        <section class="container" id="menu">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#"><h2>TRAVEL AGENCY<span>WEBSITE</span></h2></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <?php 

                      wp_nav_menu(
                        array(
                          'theme_location'	=> 'header_menu',
                          'menu'				=> 'menu',
                          'menu_class'		=> 'navbar-nav ml-auto mt-2 mt-lg-0',
                          'echo'				=> true,
                          'fallback_cb'		=> 'wp_page_menu',
                          'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
                          'depth'				=> 2,
                          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                          'walker'            => new WP_Bootstrap_Navwalker(),
                          'container_id'      => 'navbarNavDropdown',
                          'container_class'   => 'collapse navbar-collapse',
                        )
                      );

                    ?>
                    
                  
                </div>
            </nav>
        </section>
      </header>