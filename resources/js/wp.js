(function($){
    $('.wp1, .wp2').waypoint(function(){
        $(this).addClass('shake');
    }, { offset: 600 });
})(jQuery);