/* 
 * Interaction design based on:
 * http://dribbble.com/shots/1254439--GIF-Mobile-Form-Interaction?list=users
 */
$(document).ready(function(){

    // Test for placeholder support
    $.support.placeholder = (function(){
        var i = document.createElement('input');
        return 'placeholder' in i;
    })();

    // Hide labels by default if placeholders are supported
    if($.support.placeholder) {
        $('#contact-form li').each(function(){
            $(this).addClass('js-hide-label');
        });  

        // Code for adding/removing classes here
        $('#contact-form li').find('input, textarea').on('keyup blur focus', function(e){
            
            // Cache our selectors
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
});


/*=============================================*\
    Validation
\*=============================================*/

$( function() {
            $( "#contact-form" ).validate( {
                rules: {
                    fullname: {
                        required: true,
                        minlength: 3
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true
                    }
                },
                messages: {
                    name: {
                        required: "Your name is mandatory",
                        minlength: $.validator.format( "Your name must have at least {0} characters." )
                    },
                    email: {
                        required: "Need an email address",
                        email: "The email address must be valid"
                    }
                },
                onsubmit: true,
                errorElement: "span"
            } );
        } );