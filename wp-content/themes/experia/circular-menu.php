<div class="circular-menu-container">
  <?php
    if ( function_exists('dynamic_sidebar') && is_active_sidebar("experia_circular_menu") ) {
      dynamic_sidebar('experia_circular_menu');
    }
  ?>
</div>
<div class="space-menu"></div>