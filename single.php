<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="content">
  <?php get_template_part( 'breadcrumb' ); ?>
  <div id="blog-single">
    <div class="container">
      <div class="row justify-content-center">
        <div class="blog-content col-sm-10">
          <?php
          if(has_post_thumbnail(get_the_ID())):
            the_post_thumbnail('single-post', array(
              'class' => "img-fluid mb-4",
            ));
          endif;
          ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>
        <div class="tags col-sm-10">
          <div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-lg-3 mb-lg-0 mb-3 self-align-center">
                  <?php echo get_avatar( get_the_author_meta( 'ID' ) , '','','', array('class' => 'img-fluid img-avatar') ); ?>
                </div>
                <div class="col-lg-9">
                  <h5><?php the_author(); ?></h5>
                  <p><?php  the_author_meta('description'); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="related col-sm-10">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="destaque">Publicações relacionadas</h2>
            </div>
            <div class="col-sm-12">
              <div class="owl-related owl-carousel owl-theme">
                <?php
                $args = array(
                  'posts_per_page' => 6,
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ):
                  while ( $query->have_posts() ) : $query->the_post();
                ?>
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
                <?php
                  endwhile;
                endif;
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="comments col-sm-10">
          <?php
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
