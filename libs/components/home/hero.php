<div class="hero">
  <div class="heroDish animate-slide-right">
    <img src="<?php echo THEME_URL; ?>_dev/images/hero-dish.jpg" alt="danie">
  </div>
  <div class="heroContent animate-zoom-in" data-delay="0.6">
    <h2>Zasmakuj<br/>naszej<br/>dopracowanej<br/>kuchni.
    <?php get_template_part('/libs/components/atoms/circle-text') ?>
    </h2>
    <div class="heroButtons">
      <a href="<?php echo esc_url(home_url('/')) ?>menu" class="button button--withArrow">
        <img src="<?php echo THEME_URL; ?>_dev/images/right-arrow.svg" alt="read more">
        <span>zobacz menu</span>
      </a>
      <a href="<?php the_field('bookLink', 'option'); ?>" target="_blank" class="button button--white">zarezerwuj stolik</a>
    </div>
    <img class="heroVector" src="<?php echo THEME_URL; ?>_dev/images/hero-vector.svg" alt="vector">
  </div>
  <div class="heroRestaurant animate-slide-left">
    <img src="<?php echo THEME_URL; ?>_dev/images/hero-restaurant.jpg" alt="republika róż restaruacja">
  </div>
</div>