

// lightbox functionality for both people and work
jQuery(document).ready(function($){

    var lightbox_close = function(){
        $( '.lightbox-container:visible' ).removeClass( 'open' );
    };

    $( '.work .work-item' ).click(function(){
        var $lightbox = $('.lightbox-container');
        $lightbox.find( 'img' ).attr( 'src', $(this).find( 'img' ).attr( 'src' ) );
        $lightbox.addClass( 'open' );
    });

    $( ".lightbox-close" ).click( lightbox_close );

});

