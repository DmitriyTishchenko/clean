( function( $ ) {

    wp.customize( 'test_link_color', function( value ) {
        value.bind( function( newval ) {
            //Do stuff (newval variable contains your "new" setting data)
            $('a').css('color', newval );
        } );
    } );

    wp.customize( 'test_phone', function( value ) {
        value.bind( function( newval ) {
            $( '.test-phone span' ).html( newval );
        } );
    } );

    wp.customize( 'test_show_phone', function( value ) {
        value.bind( function( newval ) {
            false === newval ? $( '.test-phone' ).fadeOut() : $( '.test-phone' ).fadeIn();
        } );
    } );

})( jQuery );