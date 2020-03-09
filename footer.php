<?php 
        
        $home = get_template_directory_uri();
        wp_footer(); 
        
        ?>


<footer>
    <div class="container py-5"> 
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="bold pb-3">CONNECT & FOLLOW</h2>
            </div>
            <div class="col-12 col-lg-6 text-center font">
                <?= do_shortcode('[wd_hustle id="Newsletter" type="embedded"/]') ?>
            </div>
            <div class="col-12 col-lg-6">
                
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>

<script src="<?= $home ?>/assets/js/tilt.jquery.js"></script>
<script src="<?= $home ?>/assets/js/main.js"></script>

</body>

</html>