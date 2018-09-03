/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

    /*toggle label active*/

    $('.radio-control label').eq(0).addClass('active');

    $('.radio-control label').on('click', function() {
        $('.radio-control label').removeClass('active');
        $(this).addClass('active');
    });

    /*navigation top*/

    $('.go-on-top').on('click', function(e) {
        e.preventDefault();
        var body = $("html, body");
        body.stop().animate({scrollTop:0}, 500, 'swing')
    });


} )( jQuery );
