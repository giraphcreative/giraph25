

// lightbox functionality for both people and work
jQuery(document).ready(function($){

    $( '.work .work-item' ).click(function(){
        var $lightbox = $('.lightbox-container');
        $lightbox.find( 'img' ).attr( 'src', $(this).find( 'img' ).attr( 'src' ) );
        $lightbox.addClass( 'open' );
    });

});

