(function($) {
    var owlnot = $(".owl-noticias");
    owlnot.owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        touchDrag: false,
        mouseDrag: false,
        responsive:{
            0:{
                items:1,
            },
            900:{
                items:1,
            }
        }
    });
    var owlrel = $(".owl-related");
    owlrel.owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        touchDrag: false,
        mouseDrag: false,
        responsive:{
            0:{
                items:1,
            },
            900:{
                items:3,
            }
        }
    });
    
    $('.owl-noticias-e').on('click',function(e) {
        e.preventDefault();
        owlnot.trigger('prev.owl.carousel');
    });
    $('.owl-noticias-d').on('click',function(e) {
        e.preventDefault();
        owlnot.trigger('next.owl.carousel');
    });
    $('.search-btn').on('click',function(e){
        if($('.search-input:hidden').length){
            $('.search-input').show('slow');
            e.preventDefault();
        }
    });
    $('.tabs-link').on('click',function(e){
        e.preventDefault();
        var link = $(this).data('clas');
        $('.tabs-link').removeClass('active');
        $(this).addClass('active');
        $('.tabs-custom').hide();
        $('.'+link).show('slow');
    });
})(jQuery);
