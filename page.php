<?php
get_header('page'); ?>
<div id="conteudo">
  <div id="blog-single">
    <div class="bx">
      <div class="container">
        <div class="row ">
          <div class="col-md-12">
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
    </div>
  </div>

<?php get_footer('page'); ?>
