<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package site
 */

?>

<!-- Start Blog -->
<div class="blog-items">
    <!--  Blog Item img -->
    <?php the_post_thumbnail('blog-thumb', array(
      'class' => "img-responsive",
    )); ?>
    <!--  Blog Text -->
    <div class="blog-text">
        <!--  Blog Text top -->
        <div class="blog-text-top">
            <p><?php the_author(); ?></p>
            <p><?php echo get_the_date('F j, Y'); ?> </p>
        </div>
        <!--  Blog Text content -->
        <div class="blog-text-content">
            <h2><?php the_title( '<h2>', '</h2>' );?></h2>
            <?php the_excerpt(); ?>
            <!-- Button -->
            <div class="button">
                <a class="btn-main" href="<?php the_permalink(); ?>">Veja Mais</a>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Item 1 -->

