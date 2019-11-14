<?php
get_header('page'); ?>
<div id="conteudo">
  <div id="blog-single">
    <div class="bx">
      <div class="container">
        <div class="row ">
          <div class="col-md-8">
          <?php
          $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

          $args = array(
            'posts_per_page' => 5,
            'paged' => $paged
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ):
            while ( $query->have_posts() ) : $query->the_post();
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
            <nav aria-label="Page navigation" class="col">
              <ul class="pagination justify-content-center">
              <?php
              $big = 999999999; // need an unlikely integer

              $pag = paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $query->max_num_pages,
                'type' => 'array',
                'prev_text'          => __('<i class="fas fa-chevron-left" aria-hidden="true"></i>'),
                'next_text'          => __('<i class="fas fa-chevron-right" aria-hidden="true"></i>')
              ) );
              if(count($pag) > 0){
                foreach($pag as $p){
                ?>
                  <li class="page-item"><?php echo $p; ?></li>
                <?php
                }
              }
              ?>
              </ul>
            </nav>
          <?php
          endif;
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
