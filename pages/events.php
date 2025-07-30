<?php  

  /* Template Name: Events page */

  get_header();

?>

<section class="events">
  <div class="twoColumns animate-slide-left">
    <div class="twoColumns__text">
      <div class="textWithStamp">
        <h2>Imprezy <br>okolicznościowe <br>w naszej <br>restauracji</h2>
        <?php get_template_part('/libs/components/atoms/circle-text') ?>
      </div>
    </div>
    <div class="twoColumns__image">
      <img src="<?php echo THEME_URL; ?>_dev/images/events1.jpg" alt="udekorowany stół w restauracji republika róż">
    </div>
  </div>
  <div class="twoColumns animate-slide-right">
    <div class="twoColumns__image">
      <img src="<?php echo THEME_URL; ?>_dev/images/events2.jpg" alt="udekorowany stół w restauracji republika róż">
    </div>
    <div class="twoColumns__text bgWhite fontDarkRed">
      <div class="textWithStamp">
        <p>W Republice Róż by Andrzej Gołąbek z przyjemnością organizujemy imprezy okolicznościowe – od urodzin, przez chrzciny i komunie, aż po kameralne przyjęcia weselne czy spotkania firmowe.</p>
      </div>
    </div>
  </div>
  <div class="twoColumns animate-slide-left">
    <div class="twoColumns__text">
      <div class="textWithStamp">
        <p>Nasza elegancka i przytulna przestrzeń, wyśmienita kuchnia oraz indywidualne podejście do każdego wydarzenia sprawiają, że każda okazja staje się niezapomniana. Serdecznie zapraszamy do kontaktu w celu rezerwacji terminu i omówienia szczegółów!</p>
      </div>
    </div>
    <div class="twoColumns__image">
      <img src="<?php echo THEME_URL; ?>_dev/images/events3.jpg" alt="udekorowany stół w restauracji republika róż">
    </div>
  </div>
  
</section>

<?php 
  // map section
  get_template_part('/libs/components/map');

  // testimonials section
  get_template_part('/libs/components/testimonials');
  
  // footer section
  get_footer(); 
?>