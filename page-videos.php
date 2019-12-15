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
        'post_type' => 'video',
        'paged' => $paged
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ):
      ?>
      <div class="row">
        <?php
        while ( $query->have_posts() ) : $query->the_post();
          $link = get_post_meta(get_the_ID(), 'link', true);
          $linkpart = explode("?v=",$link);
          $linkpart_var = explode("&",$linkpart[1]);
        ?>
          <div class="col-sm-4 mb-sm-5 container-article">
            <article>
              <div class=" embed-responsive embed-responsive-4by3 mb-3">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo (count($linkpart_var))? $linkpart_var[0]: ""; ?>" width="560" height="315" frameborder="0"></iframe>
              </div>
              <div class="article-box">
                <?php the_title('<h2>','</h2>'); ?>
                <div class="autor">
                  <div class="autor-name">
                    Por <?php the_author()?>
                  </div>
  
                </div>
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
