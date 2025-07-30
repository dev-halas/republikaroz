<?php  

  /* Template Name: Menu page */

  get_header();

  $menu_categories = get_field('menu');

?>

<section class="menu">
  <div class="menuHeader container animate-zoom-in">
    <div class="menuHeader__text">
      <h2>
        Zobacz, co możesz<br>u nas zjeść.
      </h2>
      <?php get_template_part('/libs/components/atoms/circle-text') ?>
    </div>
    <a href="<?php the_field('bookLink', 'option'); ?>" target="_blank" class="button button--white">
      zarezerwuj stolik
    </a>
  </div>
  <?php 
    if( $menu_categories ): 
    foreach( $menu_categories as $menu_category ) :
  ?>
  
  <div class="menuItem">
    <div class="menuCategory">
      <div class="menuCategory__title animate-zoom-in">
        <h2><?php echo $menu_category['menu_header']?></h2>
      </div>
      <?php 
        $menu_items = $menu_category['menu_item'];
        if($menu_items) :
      ?>
      <div class="menuCategory__items">
        <?php foreach( $menu_items as $menu_item ) : ?>
          <div class="menuDish animate-fade-up">
            <img src="<?php echo $menu_item['menu_item_image']['url']; ?>" alt="<?php echo $menu_item['menu_item_title']; ?>" class="menuDish__image">
            <div class="menuDish__details">
              <div class="menuDish__description">
                <h3><?php echo $menu_item['menu_item_title']; ?></h3>
                <div>
                  <?php echo $menu_item['menu_item_ingredients']; ?>
                </div>
              </div>
              <span class="menuDish__price"><?php echo $menu_item['menu_item_price']; ?></span>
            </div>
          </div>
        <?php endforeach;?>
        </div>
      <?php endif; ?>

    </div>
    
  </div>
  <?php 
    endforeach;
    endif; 
  ?>

  <div class="bookTable">
    <a href="<?php the_field('bookLink', 'option'); ?>" target="_blank" class="button button--white">
      zarezerwuj stolik
    </a>
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