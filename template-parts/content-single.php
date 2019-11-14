<?php
/**
 * Template part for displaying single posts.
 *
 * @package site
 */

while ( have_posts() ) : the_post(); ?>
<!-- Start Blog Items -->
<div class="single-blog-text">
  <!--  Blog Item img -->
  <?php the_post_thumbnail('', array(
    'class' => "img-responsive",
  )); ?><br>
  <!--  Blog Text content -->
  <div class="blog-text-content">
    <?php the_content(); ?>
    <!-- Start Blog Post Footer -->
    <div class="blog-post-footer">
        <div class="tags">
          <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
        </div>
    </div>
    <!-- End Blog Post Footer -->
  </div>
</div>
<!-- End Blog Items -->
<?php endwhile; // End of the loop. ?>
