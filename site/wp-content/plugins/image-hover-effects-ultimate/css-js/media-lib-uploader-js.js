
jQuery(document).ready(function ($) {
    var custom_uploader;
    jQuery('#iheu-image-upload-button').click(function (e) {
        e.preventDefault();
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }

        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: true
        });
        custom_uploader.on('select', function () {
            console.log(custom_uploader.state().get('selection').toJSON());
            attachment = custom_uploader.state().get('selection').first().toJSON();
            jQuery('#iheu-image-upload-url').val(attachment.url);
                       
            jQuery("#iheb-add-new-item-data").css({
                "overflow-x": "hidden",
                "overflow-y": "auto"

            });
            jQuery("body").css({
                "overflow" : "hidden"
            });
          
        });
        custom_uploader.open();
    });
});


jQuery(document).ready(function ($) {
    var custom_uploader;
    jQuery('#iheu-hover-image-upload-button').click(function (e) {
        e.preventDefault();
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }

        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: true
        });
        custom_uploader.on('select', function () {
            console.log(custom_uploader.state().get('selection').toJSON());
            attachment = custom_uploader.state().get('selection').first().toJSON();
            jQuery('#iheu-hover-image-upload-url').val(attachment.url);
                       
            jQuery("#iheb-add-new-item-data").css({
                "overflow-x": "hidden",
                "overflow-y": "auto"

            });
            jQuery("body").css({
                "overflow" : "hidden"
            });
          
        });
        custom_uploader.open();
    });
});