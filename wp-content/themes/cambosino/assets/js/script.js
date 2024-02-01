$( function() {

	var CAMBOSINO = {
		
		init: function() {

		    this.loadBackgroundImage();
			this.mMenu();
            this.slickSlider();
            this.freezeHeader();

		},

        loadBackgroundImage: function() {

            if ( $( '.has-bg' ).length ) {

                $( '.has-bg' ).each( function() {

                    var bg = $( this ).attr( 'data-bg' );

                    $( this ).css({

                        'background' : 'url( ' + bg + ' ) no-repeat center center',

                        'background-size' : 'cover'

                    });

                });

            }

            if ( $( '.client' ).length ) {

                $( '.client' ).slick({
                    arrows: true,
                    dots: false,
                    slidesToShow: 6,
                    slidesToScroll: 6,
                    infinite: false,
                    autoplay: true,
                    responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 4
                        }
                    }, {
                        breakpoint: 768,
                        settings: {
                        slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    }, {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    }]
                });

            }

        },
		
		mMenu: function() {
			
			$( '.navbar-toggler' ).on( 'click', function( e ) {

		        e.preventDefault();

                $( '.slidein-menu, .slidein-menu-backdrop' ).addClass( 'show' );

            });


            $( '.slidein-menu-btn-close, .slidein-menu-backdrop' ).on( 'click', function( e ) {

                e.preventDefault();

                $( '.slidein-menu, .slidein-menu-backdrop' ).removeClass( 'show' );

            });

            $( window ).on( 'resize', function() {

                if ( $( window ).width() > 991 ) {

                    $( '.slidein-menu, .slidein-menu-backdrop' ).removeClass( 'show' );

                }

            });
			
		},

		slickSlider: function() {

            if ( $( '.hero' ).length ) {

                $( '.hero' ).slick({
                    arrows: false,
                    dots: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: false,
                });

            }

        },

        freezeHeader: function() {

            $( window ).on( 'load resize scroll', function() {

                var winH = $( window ).scrollTop();

                var headerH = $( '.header' ).height();

                if ( winH > headerH ) {

                    $( '.header-main' ).addClass( 'fixed-top' );

                } else {

                    $( '.header-main' ).removeClass( 'fixed-top' );

                }

            });

        }
		
	}
	
	$( document ).ready( function() {

        CAMBOSINO.init();
		
	});
	
});