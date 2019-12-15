<?php
get_header(); ?>
<div id="content">
  <?php get_template_part( 'breadcrumb' ); ?>
  <div id="blog">
    <div class="container mb-3">
      <h1>Resultados por: <?php echo get_search_query() ?></h1><br>
      <?php
      // Start the loop.
      while ( have_posts() ) : the_post();

      ?>
        <div class="mb-5">
          <a class="img-link" href="<?php the_permalink() ?>" title="">
            <?php the_title("<h3>","</h3>");?>
            <div class="autor"><?php the_author()?> - <?php echo get_the_date('F j, Y') ?></div>
          </a>
        </div>
      <?php
        // End of the loop.
      endwhile;
      ?>
    </div>
    <?php get_template_part( 'newsletter' ); ?>
  </div>
</div>

<?php get_footer(); ?>
