$(function () {
    var headerHeight = $('header').outerHeight();
    var footerHeight = $('footer').outerHeight();
    if ($('#wpadminbar').length) {
    adminBar = $('#wpadminbar').outerHeight();
    }else{
        adminBar = 0;
    }
    $('#offCanvas').css({
        'top': 0,
        'padding-top': headerHeight
    });
    // mobile menu style
        $('.mobile_menu_button .triggerMobileMenu').click(function () {
        $(this).toggleClass('open');
        var targetID = $(this).data('toggle');
        $('#' + targetID).toggleClass('is-open');
        $(this).find('.tab').toggleClass('active');
        $('body').toggleClass('has-overflow');
    });
    $('ul#mobile-menu li a').click(function(){
        $('body').toggleClass('has-overflow');
        $('.off-canvas').toggleClass('is-open');
    });
        /////// slow scroll //////
    $('ul#main-menu li a').click(function(e){
        var scrollToElement = e.currentTarget.hash;
        var scrollTo = headerHeight - 30;
        if ($(scrollToElement).length) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(scrollToElement).offset().top - scrollTo
        }, 1000);
        }
    });
    $(window).on('resize scroll', function() {
    
    });
})
