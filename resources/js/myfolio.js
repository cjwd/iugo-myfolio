define([
    'classie',
    'wpsticky',
    'smooth-scroll',
    'jqvalidation'   
], function( classie ){
    'use strict';

    var scripts = {

        init: function() {
            this.stickyNav();
            this.scroll();
            this.contactForm();
            this.validateForm();
        },

        stickyNav: function(){
            $('.site-nav').waypoint('sticky');
        },

        scroll: function(){
            $('.site-nav a').smoothScroll();
        },

        validateForm: function(){
            $('#contact-form').validate();
        },

        contactForm: function() {
            $.support.placeholder = function(){
                var input = document.createElement('input');
                return 'placeholder' in input;
            }

            if($.support.placeholder) {
                var $li = $('.form-fields li');

                $li.each(function(){
                    $(this).addClass('js-hide-label');
                });

                $li.find('input, textarea').on('keyup blur focus', function(e){
            
                    var $this = $(this),
                        $parent = $this.parent();

                    if (e.type == 'keyup') {
                        if( $this.val() == '' ) {
                            $parent.addClass('js-hide-label'); 
                        } else {
                            $parent.removeClass('js-hide-label');   
                        }                     
                    } 
                    else if (e.type == 'blur') {
                        if( $this.val() == '' ) {
                            $parent.addClass('js-hide-label');
                        } 
                        else {
                            $parent.removeClass('js-hide-label').addClass('js-unhighlight-label');
                        }
                    } 
                    else if (e.type == 'focus') {
                        if( $this.val() !== '' ) {
                            $parent.removeClass('js-unhighlight-label');
                        }
                    }
                });


            }

        }

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