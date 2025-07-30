<?php get_header(); ?>

<main class="postMain">
  <div class="postsHeader container animate-zoom-in">
    <div class="postsHeader__text">
      <h2>
        <div class="titleWithCircle">
          Republika Róż,
          <?php get_template_part('/libs/components/atoms/circle-text') ?>
        </div>
        <div>tutaj się dzieje wiele rzeczy.</div>
      </h2>
    </div>
  </div>
  <section class="archivePosts container">
    <?php if ( have_posts() ) : ?>
    <div class="postList">
      <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" class="animate-fade-up">
        <?php if ( the_post_thumbnail() ) : ?>
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        <?php endif; ?>
        <div class="postContent">
          <header class="entryHeader">
            <h2 class="entryTitle">
              <?php the_title(); ?>
            </h2>
          </header>
          <div class="entryExcerpt">
            <?php the_excerpt(); ?>
          </div>
          <a href="<?php the_permalink(); ?>">
            <img src="<?php echo THEME_URL; ?>_dev/images/right-arrow.svg" alt="read more">
            <span>czytaj więcej</span>
          </a>
        </div>
      </article>
      <?php endwhile; ?>
    </div>

    <div class="pagination">
      <?php
        the_posts_pagination( array(
          'prev_text' => '« Poprzednia',
          'next_text' => 'Następna »',
        ) );
      ?>
    </div>
    <?php else : ?>
    <p>Brak postów do wyświetlenia.</p>
    <?php endif; ?>
  </section>

  <?php get_template_part('/libs/components/map') ?>
</main>

<?php get_footer(); ?>