


jQuery(document).ready(function($){
    
    // reusable function to track scrolling as related to specific element ('target' is a selector)
    var scrolled = function( target, callback, offset = 300 ) {
        $(window).on( 'scroll', function(){
            var distance_from_top = $(document).scrollTop();
            var distance_of_target = $( target ).offset().top - offset;
            if ( distance_from_top >= distance_of_target ) {
                callback();
            }
        });
    }

    // main header
    $( '.header h1' ).addClass('visible');

    // main intro
    setTimeout( function(){
        $( '.header p' ).addClass('visible');
    }, 1000 );


    $(window).on( 'scroll', function(){
        var distance_from_top = $(document).scrollTop();
        if ( distance_from_top >= 200 ) {
            $( 'header' ).addClass( 'scrolled' );
        } else {
            $( 'header' ).removeClass( 'scrolled' );
        }
    });


    // actions when scrolled to the what component
    scrolled( '.what', function(){

        // main header
        $( '.what h2:not(.visible)' ).addClass('visible');

        // header intro
        setTimeout( function(){
            $('.what .intro:not(.visible)').addClass('visible');
        }, 200 );

        // icon one
        setTimeout( function(){
            var icon_one = $( '.what .icon:nth-child(1):not(.visible)' );
            var icon_one_image = icon_one.find( '.icon-image-inner img' );
            icon_one.addClass( 'visible' );
            setTimeout( function(){
                icon_one_image.show();
            }, 500 );
        }, 300 );

        // icon two
        setTimeout( function(){
            var icon_two = $( '.what .icon:nth-child(2):not(.visible)' );
            var icon_two_image = icon_two.find( '.icon-image-inner img' );
            icon_two.addClass( 'visible' );
            setTimeout( function(){
                icon_two_image.show();
            }, 500 );
        }, 600 );

        // icon three
        setTimeout( function(){
            var icon_three = $( '.what .icon:nth-child(3):not(.visible)' );
            var icon_three_image = icon_three.find( '.icon-image-inner img' );
            icon_three.addClass( 'visible' );
            setTimeout( function(){
                icon_three_image.show();
            }, 500 );
        }, 900 );
    });


    // why animations
    scrolled( '.why', function(){

        // main header
        $( '.why h2:not(.visible)' ).addClass('visible');

        // header intro
        setTimeout( function(){
            $('.why .content-left:not(.visible)').addClass('visible');
        }, 200 );

        // header intro
        setTimeout( function(){
            $('.why .content-right:not(.visible)').addClass('visible');
        }, 600 );


        // item count that will increment and make the work items fade in one at a time
        var count = 1;
        $( '.statistics .stat' ).each(function(){
            
            var item = $(this);
            // stat two
            setTimeout( function(){
                item.find( '.stat-inner:not(.visible)' ).addClass( 'visible' );
            }, ( 600 + ( count * 200 ) ) );

            count = count + 1;
        });

    });

    
    // work animation
    scrolled( '.work-container', function(){

        $( '.work-container h2:not(.visible)' ).addClass('visible');
        
        // item count that will increment and make the work items fade in one at a time
        var count = 1;
        $( '.work-container .work .work-item:not(.visible)').each(function(){
            
            var item = $(this);
            // stat two
            setTimeout( function(){
                item.addClass( 'visible' );
            }, ( count * 200 ) );

            count = count + 1;
        });

    });


    // who animation
    scrolled( '.who', function(){

        $( '.who .title:not(.visible)' ).addClass('visible');

        // header intro
        setTimeout( function(){
            $('.who .who-people:not(.visible)').addClass('visible');
        }, 200 );

                // header intro
        setTimeout( function(){
            $('.who .who-people .collaborators:not(.visible)').addClass('visible');
        }, 600 );

        // item count that will increment and make the work items fade in one at a time
        var count = 1;
        $( '.who .who-people .person:not(.visible)').each(function(){
            
            var item = $(this);
            // stat two
            setTimeout( function(){
                item.addClass( 'visible' );
            }, ( count * 200 ) );

            count = count + 1;
        });

    });


    // who animation
    scrolled( '.partner', function(){

        // header intro
        setTimeout( function(){
            $('.partner .logo:not(.visible)').addClass('visible');
        }, 400 );

                // header intro
        setTimeout( function(){
            $('.partner .content:not(.visible)').addClass('visible');
        }, 600 );

    });


    // who animation
    scrolled( '.form-container', function(){

        // header intro
        setTimeout( function(){
            $('.form-container h2:not(.visible)').addClass('visible');
        }, 300 );

                // header intro
        setTimeout( function(){
            $('.form-container .form:not(.visible)').addClass('visible');
        }, 600 );

                // header intro
        setTimeout( function(){
            $('.form-container .content:not(.visible)').addClass('visible');
        }, 900 );

    });

});

