require.config({
    
    paths: {
        'jquery': '../../vendors/jquery/dist/jquery',
        'wpsticky': '../../vendors/jquery-waypoints/shortcuts/sticky-elements/waypoints-sticky',
        'waypoints': '../../vendors/jquery-waypoints/waypoints',
        'smooth-scroll': '../../vendors/jquery.smooth-scroll/jquery.smooth-scroll',
        'classie': '../../vendors/classie'
    },
    
    shim: {
        'wpsticky': {
            deps: [
                'jquery',
                'waypoints'
            ]
        },

        'waypoints': {
            deps: [
                'jquery'
            ]
        },

        'smooth-scroll': {
            deps: [
                'jquery'
            ]
        }
    }
});

require([
    'resources/js/myfolio.js'

], function ( MF, Touch ) {
    'use strict';
    MF.init();
});
