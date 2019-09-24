jQuery(function () {
    jQuery("#orphita-drag-submit").submit(function (e) {
        var list_sortable = jQuery('#orphita-drag-drop').sortable('toArray').toString();
        var security = jQuery('#iheu-ajax-nonce').val();
        jQuery.post({
            url: iheu_hover_drag_drop_ajax.ajaxurl,
            beforeSend: function () {
                jQuery("#orphita-drag-saving").slideDown();
                jQuery("#orphita-drag-drop").slideUp();
                jQuery("#orphita-drag-and-drop-data-close").slideUp();
                jQuery('#orphita-drag-and-drop-data-submit').val('Saving...');
            },
            data: {
                action: 'iheu_hover_admin_ajax_data',
                list_order: list_sortable,
                security: security
            },
            success: function () {
                setTimeout(function () {
                   location.reload();
                }, 500);
            }
        });
        e.preventDefault();
        return false;
    });
});
  