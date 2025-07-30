<?php
  $image = get_sub_field('post_image_value');
?>
      
<img src="<?php echo $image['url']; ?>" class="animate-zoom-in" alt="<?php echo $image['title']; ?>">