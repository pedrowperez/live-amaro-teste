<?php

$home = get_template_directory_uri();
get_header();


    include(TEMPLATEPATH . "/model-layout/menu.php");

    while (have_posts()) : the_post();
    $post_date = get_the_date( 'd/m/Y' );
    $src = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>


<section id="interna" >
    <div class="container mt-5 pt-5">
        <div class="row d-flex align-items-center pt-5 pb-0">
            <div class="col-12 col-lg-6">
                <img src="<?= $src ?>" alt="" class="w-100">
            </div>
            <div class="col-12 col-lg-6">
                <div>
                    <legend class="bold mb-2 mt-3 mt-lg-0">
                         <?= isotope_terms('name', 'category'); ?>
                    </legend>
                    <h1>
                        <?= the_title() ?>
                    </h1>
                </div>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 py-5 d-flex flex-wrap justify-content-around box-tags">
                <?= show_tags() ?>
            </div>
        </div>
    </div>
</section>

<div class="container">
<?= the_content() ?>
</div>

<?php endwhile; ?>


<section>
    <div class="container py-5">
        <div class="row pb-5">
            <div class="col-12 mt-5">
                <h2 class="my-5 text-center upper">
                CONFIRA OUTROS EPISÓDIOS DE <?= isotope_terms('name', 'category'); ?>.
                </h2>
            </div>
            
            <?php
            
            $blog_query_single = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
            //   'category_name' => isotope_terms('slug', 'category')
            );
            $blog_items = new WP_Query($blog_query_single);
            if ($blog_items->have_posts()) :
              while ($blog_items->have_posts()) :
                $blog_items->the_post();
      
                $src = get_the_post_thumbnail_url(get_the_ID(), 'full');
      
                ?>

            <a href="<?= the_permalink(); ?>" class="col-12 col-md-6 col-lg-4 mt-md-4 mt-lg-0 ">
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

<section>
    <div class="container">
        <?= do_shortcode('[forminator_quiz id="25"]') ?>
    </div>
</section>

<?php  get_footer();?>