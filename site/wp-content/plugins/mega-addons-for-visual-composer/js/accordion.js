jQuery(document).ready(function($) {
    var icons = {
        "header": "fa fa-plus",
        "activeHeader": "fa fa-minus"
    }

    $( ".mega-accordion" ).each(function(index, el) {
        var active  = $(this).data('active');
        var anim    = $(this).data('anim');
        var event    = $(this).data('event');
        $(this).accordion({
            animate: anim,
            event: event,
            icons: icons,
            active: active,
            collapsible: true,
            heightStyle: "content",
        });
    });

});