jQuery(document).ready(function () {
    jQuery('.iheu-vendor-color').each(function () {
        jQuery(this).minicolors({
            control: jQuery(this).attr('data-control') || 'hue',
            defaultValue: jQuery(this).attr('data-defaultValue') || '',
            format: jQuery(this).attr('data-format') || 'hex',
            keywords: jQuery(this).attr('data-keywords') || '',
            inline: jQuery(this).attr('data-inline') === 'true',
            letterCase: jQuery(this).attr('data-letterCase') || 'lowercase',
            opacity: jQuery(this).attr('data-opacity'),
            position: jQuery(this).attr('data-position') || 'bottom left',
            swatches: jQuery(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
            change: function (value, opacity) {
                if (!value)
                    return;
                if (opacity)
                    value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });

    });
    jQuery('#iheb-add-new-item').on('click', function () {
        jQuery("#iheb-add-new-item-data").modal("show");
        jQuery("#iheu-image-upload-url").val(null);
        jQuery("#iheu-hover-image-upload-url").val(null);
        jQuery("#iheu-title").val(null);
        jQuery("#iheu-icon-2-link").val(null);
        jQuery("#iheu-icon-2").val(null);
        jQuery("#iheu-icon-1-link").val(null);
        jQuery("#iheu-icon-1").val(null);
        jQuery("#iheu-desc").val(null);
        jQuery("#iheu-bottom").val(null);
        jQuery("#iheu-link").val(null);
        jQuery("#item-id").val(null);
    });
    jQuery('[data-toggle="tooltip"]').tooltip();

});
jQuery('#image-hover-ultimate-drag-id').on('click', function () {
    jQuery("#image-hover-ultimate-drag-and-drop-data").modal("show");
});
jQuery('#orphita-drag-and-drop').on('click', function () {
    jQuery("#orphita-drag-and-drop-data").modal("show");
    jQuery("#orphita-drag-saving").slideUp();
    jQuery("#orphita-drag-drop").slideDown();
    jQuery("#orphita-drag-and-drop-data-close").slideDown();
    jQuery('#orphita-drag-and-drop-data-submit').val('Submit');

});

setTimeout(function () {
    jQuery('#orphita-drag-drop').sortable({
        axis: 'y',
        opacity: 0.7
    });
}, 500);
