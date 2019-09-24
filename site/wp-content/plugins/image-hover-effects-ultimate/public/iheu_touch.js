jQuery('.image-ultimate-hover').on('touchstart', function (e) {
    "use strict";
    var link = jQuery(this);
    if (link.hasClass("iheu-touch")) {
        return true;
    } else {
        link.addClass("iheu-touch");
        jQuery(".image-ultimate-hover").not(this).removeClass("iheu-touch");
        e.preventDefault();
        return false;
    }
});