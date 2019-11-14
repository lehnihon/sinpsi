<?php
get_header(); ?>
<div id="content">
  <div id="blog">
    <div class="container">
      <div class="row">
        <div class="title col-12 my-3">
          <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
        </div>
      </div>
      <div class="row">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="col-sm-4 mb-sm-5 container-article">
            <article>
              <a class="img-link" style='background-image: url("<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>");' href="<?php the_permalink() ?>" title="">
                <div class="post-date">
                  <span>
                  <strong>16</strong> <br> SET
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
        <div class="col-12 text-center">
          <?php the_posts_pagination( array(
          'prev_text'          => __('<i class="fas fa-chevron-left" aria-hidden="true"></i>'),
          'next_text'          => __('<i class="fas fa-chevron-right" aria-hidden="true"></i>'),
          ) ); ?>
        </div>
      </nav>
    </div>
    <?php get_template_part( 'newsletter' ); ?>
  </div>
</div>

<?php get_footer(); ?>