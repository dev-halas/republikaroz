<?php get_header(); ?>

<main>
  
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
        <a href="<?php the_permalink(); ?>">
          
          <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
          <?php endif; ?>
            
          <?php the_title(); ?>  
        
        </a>

      <?php endwhile; ?>
      
      <?php else : ?>
        <p>Brak realizacji do wyświetlenia.</p>
      <?php endif; ?>

    <?php the_posts_pagination(); ?>
</main>

<?php get_footer(); ?>