<?php get_header(); ?>

<div id="content">
  <div id="banner" class="mt-2">
    <div class="row no-gutters">
      <div class="col-sm">
        <div class="banner-sind">
          <div class="banner-box">
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/users.png"; ?>"/>
            <h2>Sindicalize-se</h2>
            <h4>Junte-se a quem<br> luta por você!</h4>
          </div>
          <a class="btn-sind" href="#">Saiba Mais</a>
        </div>
      </div>
      <div class="col-sm-5 px-1">
        <div class="banner-post">
          <a class="owl-noticias-e" href="#"><i class="fas fa-chevron-left"></i></a>
          <a class="owl-noticias-d" href="#"><i class="fas fa-chevron-right"></i></a>
          <div class="owl-noticias owl-carousel">
            <?php
            $args = array(
              'posts_per_page' => 6,
              'category_name' => 'destaque' 
            );
            $query = new WP_Query( $args );
            while ( $query->have_posts() ) : $query->the_post();
            ?>
            <article style='background-image: url("<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>");'>
              <div class="post-date">
                <span>
                  <strong><?php echo get_the_date( 'd' );?></strong><br><?php echo get_the_date( 'M' );?>
                </span>  
              </div>
              <a href="<?php the_permalink() ?>">
                <div class="post-cat">EM DESTAQUE</div>
                <h2 class="main-title"><?php the_title(); ?></h2>
              </a>
              <div class="options">
                <div class="comment op"><span class="comment-qtd"><?php echo get_comments_number(get_the_ID());?></span><i class="far fa-comment-alt"></i></div>
              </div>
            </article>
            <?php
            endwhile;
            ?>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="banner-parc">
          <div class="banner-box">
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/hand.png"; ?>"/>
            <h2>Parceiros</h2>
            <h4>Descontos e Benefícios<br> Para Sindicalizados</h4>
          </div>
          <a class="btn-sind" href="#">Saiba Mais</a>
        </div>
      </div>
    </div>
  </div>
  <div id="page-home">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 news">
          <h2>Mais Notícias</h2>
          <?php
          $args = array(
            'posts_per_page' => 3,
            'orderby' => 'rand',
          );
          $query = new WP_Query( $args );
          while ( $query->have_posts() ) : $query->the_post();
          ?>
          <a href="<?php the_permalink() ?>">
            <article>
              <div class="row">
                <div class="col-sm-3">
                  <div style='background-image: url("<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>");' class="mais-image">
                  </div>
                </div>
                <div class="col-sm-9">
                  <h3><?php the_title() ?></h3>
                  <p class="article-date"><?php echo get_the_date('d')." de ".get_the_date('F Y'); ?></p>
                </div>
              </div>
            </article>
          </a>
          <?php
          endwhile;
          ?>
          <div class="row">
            <div class="col-12">
              <a class="btn-full-gray" href="<?php echo home_url( '/noticias' ); ?>">Mais Notícias</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mt-lg-0 mt-4">
          <div class="row mb-3">
            <div class="col-12">
              <h2>Área do Sócio</h2>
              <a class="login-area" href="#">
                <div class="login-left">
                  <h4>
                    Clique aqui
                  </h4>
                  <p>para efetuar o login</p>
                </div>
                <div class="login-right">
                  <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/key.png"; ?>"/>
                </div>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <h2>Vídeos</h2>
              <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/_FzaRaQRun4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="row mt-xl-2 mt-lg-5">
            <div class="col-12">
              <a class="btn-full-gray" href="#">Mais Vídeos</a>
            </div>
          </div>        
        </div>
        <div class="col-lg-3 mt-lg-0 mt-4">
          <h2>Convênios</h2>
          <a class="convenio" href="#" style='background-image: url("<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/convenio.jpg"; ?>");'">     
          </a>
        </div>
      </div>
      <div class="row no-gutters classified">
        <div class="col-12 title">
          <div class="row">
            <div class="col-sm-3">
              <h2>Classificados</h2>
            </div>
            <div class="col-sm-9">
              <ul class="menu-filter">
                <li><a class="tabs-link active" data-clas="todos" href="#">Todos</a></li>
                <li><a class="tabs-link" data-clas="vagas" href="#">Vagas</a></li>
                <li><a class="tabs-link" data-clas="zona-norte" href="#">Zona Norte</a></li>
                <li><a class="tabs-link" data-clas="zona-sul" href="#">Zona Sul</a></li>
                <li><a class="tabs-link" data-clas="zona-leste" href="#">Zona Leste</a></li>
                <li><a class="tabs-link" data-clas="zona-oeste" href="#">Zona Oeste</a></li>
               
              </ul>
            </div>
          </div>
        </div>

        <!-- TODOS -->
        <div class="col-12 todos tabs-custom tabs-custom-active">
          <div class="row">
            <?php
            $args = array(
              'posts_per_page' => 4,
              'post_type' => 'classified',
              'orderby' => 'rand',
            );
            $query = new WP_Query( $args );
            while ( $query->have_posts() ) : $query->the_post();
              $preco = get_post_meta(get_the_ID(), 'preco', true);
              $tipo = get_post_meta(get_the_ID(), 'tipo', true);
            ?> 
              <div class="col-md-3">
                <a href="#">
                  <article>
                    <?php the_post_thumbnail('home-thumb', array(
                      'class' => "e-cinza img-fluid",
                    )); ?>
                    <?php the_title('<h3>','</h3>') ?>
                    <p class="type"><?php echo $tipo; ?></p>
                    <p class="price">R$ <?php echo $preco; ?></p>
                  </article>
                </a>
              </div>
            <?php
            endwhile;
            ?>
            <a class="plus" href="<?php echo home_url( '/classificados' ); ?>"><span>+</span></a>
          </div>
        </div>

        <!-- ZONA NORTE -->
        <div class="col-12 zona-norte tabs-custom">
          <div class="row">
            <?php
            $args = array(
              'posts_per_page' => 4,
              'post_type' => 'classified',
              'orderby' => 'rand',
              'tax_query' => array(
                array(
                    'taxonomy' => 'localidade',
                    'field' => 'slug',
                    'terms' => 'zona-norte'
                ),
              )
            );
            $query = new WP_Query( $args );
            while ( $query->have_posts() ) : $query->the_post();
              $preco = get_post_meta(get_the_ID(), 'preco', true);
              $tipo = get_post_meta(get_the_ID(), 'tipo', true);
            ?> 
           <div class="col-md-3">
              <a href="#">
                <article>
                  <?php the_post_thumbnail('home-thumb', array(
                    'class' => "e-cinza img-fluid",
                  )); ?>
                  <?php the_title('<h3>','</h3>') ?>
                  <p class="type"><?php echo $tipo; ?></p>
                  <p class="price">R$ <?php echo $preco; ?></p>
                </article>
              </a>
            </div>
            <?php
            endwhile;
            ?>
            <a class="plus" href="<?php echo home_url( '/classificados' ); ?>"><span>+</span></a>
          </div>
        </div>

        <!-- ZONA SUL -->
        <div class="col-12 zona-sul tabs-custom">
          <div class="row">
            <div class="col-md-3">
              <a href="#">
                <article>
                  <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/noticias.jpg"; ?>"/>
                  <h3>Salas Fradique</h3>
                  <p class="type">Locação</p>
                  <p class="price">R$ 500</p>
                </article>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <article>
                  <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/noticias.jpg"; ?>"/>
                  <h3>Salas Fradique</h3>
                  <p class="type">Locação</p>
                  <p class="price">R$ 500</p>
                </article>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <article>
                  <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/noticias.jpg"; ?>"/>
                  <h3>Salas Fradique</h3>
                  <p class="type">Locação</p>
                  <p class="price">R$ 500</p>
                </article>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <article>
                  <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/noticias.jpg"; ?>"/>
                  <h3>Salas Fradique</h3>
                  <p class="type">Locação</p>
                  <p class="price">R$ 500</p>
                </article>
              </a>
            </div>
            <a class="plus" href="#"><span>+</span></a>
          </div>
        </div>

        <!-- ZONA LESTE -->
        <div class="col-12 zona-leste tabs-custom">
          <div class="row">
            <div class="col-md-3">
              <a href="#">
                <article>
                  <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/noticias.jpg"; ?>"/>
                  <h3>Salas Fradique</h3>
                  <p class="type">Locação</p>
                  <p class="price">R$ 500</p>
                </article>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <article>
                  <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/noticias.jpg"; ?>"/>
                  <h3>Salas Fradique</h3>
                  <p class="type">Locação</p>
                  <p class="price">R$ 500</p>
                </article>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <article>
                  <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/noticias.jpg"; ?>"/>
                  <h3>Salas Fradique</h3>
                  <p class="type">Locação</p>
                  <p class="price">R$ 500</p>
                </article>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <article>
                  <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/noticias.jpg"; ?>"/>
                  <h3>Salas Fradique</h3>
                  <p class="type">Locação</p>
                  <p class="price">R$ 500</p>
                </article>
              </a>
            </div>
            <a class="plus" href="#"><span>+</span></a>
          </div>
        </div>

        <!-- ZONA OESTE -->
        <div class="col-12 zona-oeste tabs-custom">
          <div class="row">
            <div class="col-md-3">
              <a href="#">
                <article>
                  <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/noticias.jpg"; ?>"/>
                  <h3>Salas Fradique</h3>
                  <p class="type">Locação</p>
                  <p class="price">R$ 500</p>
                </article>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <article>
                  <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/noticias.jpg"; ?>"/>
                  <h3>Salas Fradique</h3>
                  <p class="type">Locação</p>
                  <p class="price">R$ 500</p>
                </article>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <article>
                  <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/noticias.jpg"; ?>"/>
                  <h3>Salas Fradique</h3>
                  <p class="type">Locação</p>
                  <p class="price">R$ 500</p>
                </article>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <article>
                  <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/noticias.jpg"; ?>"/>
                  <h3>Salas Fradique</h3>
                  <p class="type">Locação</p>
                  <p class="price">R$ 500</p>
                </article>
              </a>
            </div>
            <a class="plus" href="#"><span>+</span></a>
          </div>
        </div>

        <!-- VAGAS -->
        <div class="col-12 vagas tabs-custom">
          <div class="row">
            <div class="col-md-3">
              <a href="#">
                <article>
                  <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/noticias.jpg"; ?>"/>
                  <h3>Salas Fradique</h3>
                  <p class="type">Locação</p>
                </article>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <article>
                  <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/noticias.jpg"; ?>"/>
                  <h3>Salas Fradique</h3>
                  <p class="type">Locação</p>
                </article>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <article>
                  <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/noticias.jpg"; ?>"/>
                  <h3>Salas Fradique</h3>
                  <p class="type">Locação</p>
                </article>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <article>
                  <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/noticias.jpg"; ?>"/>
                  <h3>Salas Fradique</h3>
                  <p class="type">Locação</p>
                </article>
              </a>
            </div>
            <a class="plus" href="#"><span>+</span></a>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
