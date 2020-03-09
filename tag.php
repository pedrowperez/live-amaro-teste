<?php

$home = get_template_directory_uri();
get_header();


    include(TEMPLATEPATH . "/model-layout/menu.php");

    $src = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>



<section>
    <div class="container pb-5">
        <div class="row py-5">
            <div class="col-12 mt-5 pt-5">
                <h2 class="my-5 text-center upper">
                 <?= get_queried_object()->name ?>
                </h2>
            </div>
            
            <?php
            $blog_query_single = array(
                'posts_per_page' => -1,
                'tag' => get_queried_object()->slug,
            );
            $blog_items = new WP_Query($blog_query_single);
            if ($blog_items->have_posts()) :
              while ($blog_items->have_posts()) :
                $blog_items->the_post();
      
                $src = get_the_post_thumbnail_url(get_the_ID(), 'full');
      
                ?>

            <a href="<?= the_permalink(); ?>" class="col-12 col-md-4">
                <div class="card d-flex align-items-end js-tilt" data-tilt style="background-image: url(<?= $src ?>)">
                    <div class="box">
                    <p class="btn-outline-primary mb-0"> <?= isotope_terms('name', 'category'); ?> </p>
                        <h3 class="">
                            <?= the_title() ?>
                        </h3>
                      
                    </div>
                </div>
            </a>
            <?php 

            endwhile;  
            wp_reset_postdata(); 
            endif; ?>

        </div>
    </div>
</section>

<?php  get_footer();?>