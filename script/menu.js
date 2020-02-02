$.fn.extend({
    threeBarToggle: function(options) {
        var defaults = {
            color: 'black',
            width: 25,
            height: 20,
            speed: 400,
            animate: true
        }
        var options = $.extend(defaults, options); 
        
        return this.each(function() {
            $(this).empty().css({'width': options.width, 'height': options.height, 'background': 'transparent'});
            $(this).addClass('tb-menu-toggle');
            $(this).prepend('<i></i><i></i><i></i>').on('click', function(event) {
                event.preventDefault();
                $(this).toggleClass('tb-active-toggle');
                if (options.animate) { 
                    $(this).toggleClass('tb-animate-toggle');
                }
                $('.tb-mobile-menu').slideToggle(options.speed);
            });
            $(this).children().css('background', options.color);
        });
    },
    
    accordionMenu: function(options) {
        var defaults = {
            speed: 400
        }
        var options =  $.extend(defaults, options);

        return this.each(function() {
            $(this).addClass('tb-mobile-menu');
            var menuItems = $(this).children('li');
            menuItems.find('.sub-menu').parent().addClass('tb-parent');
            $('.tb-parent ul').hide();
            $('.tb-parent > a').on('click', function(event) {
                event.stopPropagation();
                event.preventDefault();
                $(this).siblings().slideToggle(options.speed);
            });
        });
    }
});

$('#menu-toggle').threeBarToggle({color: '#ffffff', width: 30, height: 25});
$('#menu').accordionMenu();