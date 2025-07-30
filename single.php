<?php 
  get_header(); 
  the_post();
?>

  <main class="postMain">
    <div class="postsHeader container animate-zoom-in">
      <div class="postsHeader__text textCenter">
        <h1>
          <?php echo the_title(); ?>
        </h1>
      </div>
    </div>
    <div class="container singlePostContent">

      <?php if (have_rows('post_content')) :

        while (have_rows('post_content')) : the_row();

          $layout = get_row_layout();

            if (file_exists(locate_template("/libs/components/parts/{$layout}.php"))) {
              include(locate_template("/libs/components/parts/{$layout}.php"));
            }

        endwhile;
      
      endif; ?>


    </div>
    <?php get_template_part('/libs/components/map') ?>
  </main>

<?php get_footer(); ?>