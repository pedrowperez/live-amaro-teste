$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll > 0) {

        document.querySelector(".logo-amaro").style.WebkitTransform = "scale(.8)";
        $('nav').removeClass('py-4')

    } else {
        document.querySelector(".logo-amaro").style.WebkitTransform = "scale(1)";
        $('nav').addClass('py-4')

    }

});


$(document).on('click', '.effect-menu .off', function(e) {
    e.preventDefault();

    $('nav').removeClass('position-absolute');
    $('nav').removeClass('w-100');
    $('nav').addClass('fixed-top');
    $('#martinluzmenu').addClass('state-0');
    tl.play();
    tlLetterWhite.play();
    $(this).removeClass('off');
    $(this).addClass('on');
});

$(document).on('click', '.effect-menu .on', function(e) {
    e.preventDefault();

    $('nav').addClass('position-absolute');
    $('nav').addClass('w-100');
    $('nav').removeClass('fixed-top');
    $('#martinluzmenu').removeClass('state-0');
    tl.reverse();
    tlLetterWhite.reverse();
    $(this).addClass('off');
    $(this).removeClass('on');
});

(function($) {
    $(document).ready(function() {

        //TILT

        const tilt = $('.js-tilt').tilt({
            perspective: 1600,
            easing: "cubic-bezier(.03,.98,.52,.99)",
            glare: true,
            maxGlare: .1
        });

        tilt.on('change', function(e, transforms) {});

    });
})(jQuery);