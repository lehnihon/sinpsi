<?php
get_header(); ?>
<div id="content">
  <?php get_template_part( 'breadcrumb' ); ?>
  <div class="container">
      <div class="row">
        <div class="col-12 pb-5">
          <?php
          // Start the loop.
          while ( have_posts() ) : the_post();

            the_content();
            // End of the loop.
          endwhile;
          ?>
        </div>
      </div>
  </div>

  <?php get_template_part( 'newsletter' ); ?>

</div>
<?php get_footer(); ?>
