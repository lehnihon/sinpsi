<?php
get_header(); ?>
<div id="content">
  <?php get_template_part( 'breadcrumb' ); ?>
  <div id="blog">
    <div class="container">
      <?php
      $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
      $args = array(
        'posts_per_page' => 9,
        'paged' => $paged,
        'post_type' => 'classified'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ):
      ?>
      <div class="row">
        <?php
        while ( $query->have_posts() ) : $query->the_post();
        ?>
          <div class="col-sm-4 mb-sm-5 container-article">
            <article>
              <a class="img-link" style='background-image: url("<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>");' href="<?php the_permalink() ?>" title="">
                <div class="post-date">
                  <span>
                    <strong><?php echo get_the_date( 'd' );?></strong><br><?php echo get_the_date( 'M' );?>
                  </span>  
                </div>
                <div class="post-category">
                  <span>
                  <?php
                  $cat_list = get_the_category(get_the_ID());
                  custom_category_list($cat_list);
                  ?>
                  </span>
                </div>
              </a>
              <div class="article-box">
                <?php the_title('<h2>','</h2>'); ?>
                <div class="autor">
                  <div class="autor-name">
                    Por <?php the_author()?>
                  </div>
                  <div class="options">
                    <div class="comment op"><span class="comment-qtd">1</span><i class="far fa-comment-alt"></i></div>
                    <div class="op"><i class="fas fa-share-alt"></i></div>
                  </div>
                </div>
                <div class="description">
                  <?php
                  the_excerpt_shortcode();
                  ?>
                </div>  
                <a class="mais" href="<?php the_permalink() ?>" title="mais">CONTINUAR A LER</a>
              </div>
            </article>
          </div>
        <?php
          // End of the loop.
        endwhile;
        ?>
      </div>
      <nav class="row">
        <div class="col-12">
          <ul class="pagination">
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
        </div>
      </nav>
      <?php
      endif;
      ?>
    </div>
    <?php get_template_part( 'newsletter' ); ?>
  </div>
</div>

<?php get_footer(); ?>
