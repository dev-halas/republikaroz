<?php  

  /* Template Name: Gallery page */

  get_header();
?>

<section class="gallery">
  <div class="galleryHeader container animate-zoom-in">
    <h1>
      Smaczne dania, dużo uśmiechu, <br>stylowe wnętrza
      <?php get_template_part('/libs/components/atoms/circle-text') ?>
    </h1>
  </div>
  <div class="container">
    <div class="galleryWrapper">
      <div class="animate-zoom-in"><img src="<?php echo THEME_URL; ?>_dev/images/image_1.jpg" alt=""></div>
      <div class="animate-zoom-in"><img src="<?php echo THEME_URL; ?>_dev/images/image_2.png" alt=""></div>
      <div class="animate-zoom-in"><img src="<?php echo THEME_URL; ?>_dev/images/image_3.png" alt=""></div>
      <div class="animate-zoom-in"><img src="<?php echo THEME_URL; ?>_dev/images/image_4.jpg" alt=""></div>
    </div>
  </div>
</section>

<?php 
  // map section
  get_template_part('/libs/components/map');

  // footer section
  get_footer(); 
?>