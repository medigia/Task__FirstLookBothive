jQuery(document).ready(function() {

    setTimeout(function() {
        jQuery('.animateDown').addClass('done');
        jQuery('.goFull').addClass('done');
        jQuery('.slideOutWFade').addClass('done');
        jQuery('.groowy').addClass('active');
        jQuery('.middle-canvas').addClass('animated');
    }, 4000);
    setTimeout(function() {
        jQuery('.line-to-denmark').addClass('animated');
    }, 6000);
    setTimeout(function() {
        jQuery('.animated').addClass('done');
        jQuery('.line-to-denmark').addClass('done');
        jQuery('.denmark').addClass('animated');
    }, 7000);
    setTimeout(function() {
        jQuery('.denmark').addClass('done');
    }, 8000);
});