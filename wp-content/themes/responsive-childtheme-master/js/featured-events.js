jQuery(document).ready(function($) {

$('.featured-event:visible, .widget-wrapper').hover(
        function(){
          $(this).find('.info-bar').slideDown('fast');
        },
        function() {
          $(this).find('.info-bar').slideUp('fast');
        });
});
