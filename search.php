<?php
get_header('page'); ?>
<div id="conteudo">
  <div id="blog-single">
    <div class="bx">
      <div class="container">
        <div class="row ">
          <div class="col-md-8">
          <h1>Resultados por: <?php echo get_search_query() ?></h1><br>
          <?php
          // Start the loop.
          while ( have_posts() ) : the_post();

          ?>
            <article>
              <?php the_title('<h1>','</h1>'); ?>
              <a class="img-link" href="<?php the_permalink() ?>" title="">
                <?php
                if(has_post_thumbnail(get_the_ID())):
                  the_post_thumbnail('single-post', array(
                    'class' => "img-fluid",
                  ));
                endif;
                ?>
                  <div style="display:none" class="mask"></div>
                </a>
              <div class="autor"><?php the_author()?> - <?php echo get_the_date('F j, Y') ?></div>
            <?php
            the_excerpt();
            ?>
            <a class="mais" href="<?php the_permalink() ?>" title="mais">mais...</a>
            </article>
          <?php
            // End of the loop.
          endwhile;
          ?>
          </div>
          <div class="col-md-4">
            <?php echo get_sidebar(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer('page'); ?>
