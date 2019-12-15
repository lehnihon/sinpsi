<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo get_site_icon_url(); ?>" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body>
  <div id="header">
    <div class="text-center">
      <a href="<?php echo home_url( '' ); ?>">
        <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/logo.jpg"; ?>"/>
      </a>
    </div>
    <div class="nav-container">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav social-media mr-auto">
              <li class="nav-item">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a target="_blank" href="https://www.instagram.com/explore/locations/161749811103625/sindicato-dos-psicologos-no-estado-de-sao-paulo/"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
              </li>
            </ul>
            <ul class="navbar-nav main-nav">
              <li class="nav-item <?php echo (get_query_var('pagename') == '')? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo home_url( '' ); ?>">Home</a>
              </li>
              <li class="nav-item <?php echo (get_query_var('pagename') == 'quem-somos')? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo home_url( '/quem-somos' ); ?>">Quem Somos</a>
              </li>
              <li class="nav-item <?php echo (get_query_var('pagename') == 'diretoria')? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo home_url( '/diretoria' ); ?>">Diretoria</a>
              </li>
              <li class="nav-item <?php echo (get_query_var('pagename') == 'sindicalize')? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo home_url( '/sindicalize' ); ?>">Sindicalize</a>
              </li>
              <li class="nav-item <?php echo (get_query_var('pagename') == 'fale-conosco')? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo home_url( '/fale-conosco' ); ?>">Fale Conosco</a>
              </li>
              <li class="nav-item <?php echo (get_query_var('pagename') == 'acordos-e-convencoes')? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo home_url( '/acordos-e-convencoes' ); ?>">Acordo e Convenções</a>
              </li>
            </ul>
            <div class="navbar-nav search ml-auto">
              <?php get_search_form() ?>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>

