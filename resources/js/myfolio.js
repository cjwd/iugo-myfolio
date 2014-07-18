define([
    'classie',
    'wpsticky',
    'smooth-scroll'   
], function( classie ){
    'use strict';

    var scripts = {

        init: function() {
            this.stickyNav();
            this.scroll();
            this.spmenu();
        },

        stickyNav: function(){
            $('.site-nav').waypoint('sticky');
        },

        scroll: function(){
            $('.site-nav a').smoothScroll();
        },

        /*spmenu: function(){
            var menuRight = document.getElementById( 'spmenu-right' ),
                menuTop = document.getElementById( 'spmenu-top' ),
                showRightPush = document.getElementById( 'showRightPush' ),
                showTop = document.getElementById( 'showTop' ),
                hideRightPush = document.getElementById( 'hideRightPush' ),
                navLinks = $('.hideRightPush'),
                body = document.body;

            showRightPush.onclick = function() {
                classie.toggle( this, 'active' );
                classie.toggle( body, 'spmenu-push-toleft' );
                classie.toggle( menuRight, 'spmenu-open' );
            };

            hideRightPush.onclick = function() {
                classie.toggle( body, 'spmenu-push-toleft' );
                classie.remove( menuRight, 'spmenu-open');
            };

            showTop.onclick = function() {
                classie.toggle( this, 'active' );
                classie.toggle( menuTop, 'spmenu-open' );
            };

            navLinks.on('click', function(){
                console.log('clicked');
                classie.toggle( this, 'active' );
                classie.toggle( body, 'spmenu-push-toleft' );
                classie.remove( menuRight, 'spmenu-open');
            });
                
        }*/

    }

    return scripts;
});