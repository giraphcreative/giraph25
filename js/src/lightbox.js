

// lightbox functionality for both people and work
jQuery(document).ready(function($){

    var lightbox_close = function(){
        $( '.lightbox-container:visible' ).removeClass( 'open' );
    };

    $( '.work .work-item' ).click(function(){
        var $lightbox = $('.lightbox-container');
        $lightbox.find( 'img' ).attr( 'src', $(this).find( 'img' ).attr( 'src' ) );
        $lightbox.find( '.content' ).html( $(this).find( '.item-description' ).html() );
        $lightbox.addClass( 'open' );
    });

    $( '.who .person' ).click(function(){
        var $lightbox = $('.lightbox-container');
        $lightbox.find( 'img' ).attr( 'src', $(this).css('background-image').replace('")','').replace('url("','') );
        $lightbox.find( '.content' ).html( $(this).find( '.person-content' ).html() );
        $lightbox.addClass( 'open' );
    });

    $( ".lightbox-close" ).click( lightbox_close );

});

