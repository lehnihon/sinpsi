<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package site
 */

?>


<!-- Start Blog -->
<div class="blog-items">
    <!--  Blog Text -->
    <div class="blog-text">
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
