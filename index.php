<?php
get_header(); ?>


<?php if(is_front_page()) { 
 include(TEMPLATEPATH.'/model-pages/home.php'); 
 } ?>

<?php get_footer();?>
