<?php
if (!defined('ABSPATH'))
    exit;

if (!isset($_GET['styleid'])) {
    iheu_vendor_js_css('new');
    wp_enqueue_style('general-style', plugins_url('css-js/general-style.css', __FILE__));
    include image_hover_ultimate_plugin_url . 'public/style-new.php';
}
if (isset($_GET['styleid'])) {
    iheu_vendor_js_css('style');
    $id = $_GET['styleid'];
    global $wpdb;
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $id), ARRAY_A);
    include image_hover_ultimate_plugin_url . 'public/' . $styledata['style_name'] . '.php';
    iheu_media_scripts();
}

function iheu_vendor_js_css($data) {
    wp_enqueue_style('Open+Sans', 'https://fonts.googleapis.com/css?family=Open+Sans');
    wp_enqueue_style('iheu-vendor-style', plugins_url('css-js/style.css', __FILE__));
    wp_enqueue_script('iheu-vendor-bootstrap-jss', plugins_url('css-js/bootstrap.min.js', __FILE__));
    wp_enqueue_style('iheu-vendor-bootstrap', plugins_url('css-js/bootstrap.min.css', __FILE__));
    $faversion = get_option('oxi_addons_font_awesome_version');
    $faversion = explode('||', $faversion);
    wp_enqueue_style('font-awesome-' . $faversion[0], $faversion[1]);
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    wp_enqueue_script('jQuery');
    if ($data == 'style') {
        wp_enqueue_script('ctu-vendor-minicolors-js', plugins_url('css-js/jquery.minicolors.min.js', __FILE__));
        wp_enqueue_style('ctu-vendor-minicolors', plugins_url('css-js/jquery.minicolors.css', __FILE__));
        wp_enqueue_script('ctu-vendor-jss', plugins_url('css-js/vendor.js', __FILE__));
        wp_enqueue_script('ctu-vendor-font-select', plugins_url('css-js/font-select.js', __FILE__));
        wp_enqueue_script('YouTubePopUps', plugins_url('css-js/YouTubePopUps.js', __FILE__));
        $jquery = 'setTimeout(function () {
                                        jQuery(".oxi-addons-tutorials").grtyoutube({autoPlay: true, theme: "light"});
                                    }, 500);';
        wp_add_inline_script('YouTubePopUps', $jquery);
    }
    wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
}

function iheu_media_scripts() {
    wp_enqueue_media();
    wp_register_script('iheu_media_scripts', plugins_url('css-js/media-lib-uploader-js.js', __FILE__));
    wp_enqueue_script('iheu_media_scripts');
}

function iheu_admin_style_panel_tab2($styleid, $listdata) {
    ?>
    <div class="iheu-style-panel-right">
        <div class="iheb-add-new-item-panel">
            <div class="iheb-add-new-item-heading">
                Add New
            </div>
            <div class="iheb-add-new-item"  id="iheb-add-new-item">
                <span>
                    <i class="fas fa-plus-circle"></i>
                    Add new Items
                </span>

            </div>
        </div>
        <div class="iheu-shortcode">
            <div class="iheu-shortcode-heading">
                Shortcodes
            </div>
            <div class="iheu-shortcode-body">
                <em>Shortcode for posts/pages/plugins</em>
                <p>Copy & paste the shortcode directly into any WordPress post or page.</p>
                <input type="text" class="form-control" onclick="this.setSelectionRange(0, this.value.length)" value="[iheu_ultimate_oxi id=&quot;<?php echo $styleid; ?>&quot;]">
                <span></span>
                <em>Shortcode for templates/themes</em>
                <p>Copy & paste this code into a template file to include the slideshow within your theme.</p>
                <input type="text" class="form-control" onclick="this.setSelectionRange(0, this.value.length)" value="&lt;?php echo do_shortcode(&#039;[iheu_ultimate_oxi  id=&quot;<?php echo $styleid; ?>&quot;]&#039;); ?&gt;">
                <span></span>
                <em>Apply on Visual Composer</em>
                <p>Go on Visual Composer and get Our element on Content bar as Image Hover Ultimate</p>
            </div>
        </div>
        <div class="orphita-add-new-item-panel">
            <div class="orphita-add-new-item-heading">
                Quick Tutorials
            </div>
            <a class="orphita-add-new-item oxi-addons-tutorials" youtubeid="fUZ1SC0UAtY">
                <span>
                    <i class="fab fa-youtube"></i>
                </span>                        
            </a>
        </div>
        <div class="orphita-add-new-item-panel">
            <div class="orphita-add-new-item-heading">
                Image Rearrange
            </div>
            <div class="orphita-add-new-item" id="orphita-drag-and-drop">
                <span>
                    <i class="fas fa-cogs"></i>
                </span>

            </div>
        </div>
        <div id="orphita-drag-and-drop-data" class="modal fade bd-example-modal-sm" role="dialog">
            <div class="modal-dialog modal-sm">
                <form id="orphita-drag-submit">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Rearrange Image</h4>
                        </div>
                        <div class="modal-body">
                            <div class="alert text-center" id="orphita-drag-saving">
                                <i class="fa fa-spinner fa-spin"></i>
                            </div>
                            <?php
                            echo ' <ul class="list-group" id="orphita-drag-drop">';
                            foreach ($listdata as $value) {
                                echo '<li class="list-group-item" id ="' . $value['id'] . '"><img src="' . $value['image'] . '"  width="80"></li>';
                            }
                            echo '</ul>';
                            ?>
                        </div>
                        <div class="modal-footer">    
                            <input type="hidden" name="iheu-ajax-nonce" id="iheu-ajax-nonce" value="<?php echo wp_create_nonce("iheu_ajax_data"); ?>"/>
                            <button type="button" id="orphita-drag-and-drop-data-close" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <input type="submit" id="orphita-drag-and-drop-data-submit" class="btn btn-primary" value="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>   
    </div>
    <?php
}

function iheu_admin_style_item_data($title, $files, $link, $bottom, $image, $hoverimage, $itemid) {
    ?>
    <div id="iheb-add-new-item-data" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add or Modify Form of Image Hover</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="ctu-title">Title</label>
                            <input type="text "class="form-control" id="iheu-title" name="iheu-title" value="<?php echo iheu_html_special_charecter($title); ?>">
                            <small class="form-text text-muted">Add Your Image Hover Title.</small>
                        </div>
                        <div class="form-group">
                            <label for="ctu-details">Description:</label>
                            <textarea class="form-control" rows="4" id="iheu-desc" name="iheu-desc"><?php echo iheu_html_special_charecter($files); ?></textarea>
                            <small class="form-text text-muted">Add Your Description Unless make it blank.</small>
                        </div>
                        <div class="form-group">
                            <label for="iheu-link">Link</label>
                            <input type="text "class="form-control" id="iheu-link" name="iheu-link" value="<?php echo $link; ?>">
                            <small class="form-text text-muted">Add Your Desire Link or Url Unless make it blank</small>
                        </div>
                        <div class="form-group">
                            <label for="iheu-bottom">Bottom Text</label>
                            <input type="text "class="form-control" id="iheu-bottom" name="iheu-bottom" value="<?php echo iheu_html_special_charecter($bottom); ?>">
                            <small class="form-text text-muted">Add Bottom text If you Need Unless make it blank</small>
                        </div>
                        <div class="form-group">
                            <label for="ctu-title">Image Url</label>
                            <div class="col-xs-12-div">
                                <div class="col-xs-8-div">
                                    <input type="text "class="form-control" id="iheu-image-upload-url" name="iheu-image-upload-url" value="<?php echo $image; ?>">
                                </div>
                                <div class="col-xs-4-div">
                                    <button type="button" id="iheu-image-upload-button" name="iheu-image-upload-button" class="btn btn-default">Upload Image</button>
                                </div>
                            </div>
                            <small class="form-text text-muted">Add or Modify Your Image link.</small>
                        </div>
                        <div class="form-group">
                            <label for="ctu-title" class="iheu-hover-image-upload-url">Hover Background Image</label>
                            <div class="col-xs-12-div">
                                <div class="col-xs-8-div">
                                    <input type="text "class="form-control" id="iheu-hover-image-upload-url" name="iheu-hover-image-upload-url" value="<?php echo $hoverimage; ?>">
                                </div>
                                <div class="col-xs-4-div">
                                    <button type="button" id="iheu-hover-image-upload-button" name="iheu-hover-image-upload-button" class="btn btn-default">Upload Image</button>
                                </div>
                            </div>
                            <small class="form-text text-muted">This Image will shown as Background image on Hover Image.</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="item-id" name="item-id" value="<?php echo $itemid ?>">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <?php wp_nonce_field("iheuitemdata") ?>
                        <input type="submit" class="btn btn-primary" id="item-submit" name="submit" value="submit">
                    </div>
                </div>
            </form>

        </div>
    </div>
    <?php
}

function iheu_jquery_file_pass($styleid) {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery("#iheb-preview-data-background").on("change", function () {
                var idvalue = jQuery('#iheb-preview-data-background').val();
                jQuery("<style type='text/css'> #iheb-preview-data{background-color:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#iheu-item").on("change", function () {
                var idvalue = jQuery('#iheu-item').val();
                jQuery(".image-ultimate-hover-padding-<?php echo $styleid; ?>").removeClass("image-ultimate-responsive-1");
                jQuery(".image-ultimate-hover-padding-<?php echo $styleid; ?>").removeClass("image-ultimate-responsive-2");
                jQuery(".image-ultimate-hover-padding-<?php echo $styleid; ?>").removeClass("image-ultimate-responsive-3");
                jQuery(".image-ultimate-hover-padding-<?php echo $styleid; ?>").removeClass("image-ultimate-responsive-4");
                jQuery(".image-ultimate-hover-padding-<?php echo $styleid; ?>").removeClass("image-ultimate-responsive-5");
                jQuery(".image-ultimate-hover-padding-<?php echo $styleid; ?>").removeClass("image-ultimate-responsive-6");
                jQuery(".image-ultimate-hover-padding-<?php echo $styleid; ?>").addClass(idvalue);
            });
            jQuery("#iheu-directions").on("change", function () {
                var idvalue = jQuery('#iheu-directions').val();
                jQuery(".image-ultimate-hover-<?php echo $styleid; ?>").removeClass("left_to_right");
                jQuery(".image-ultimate-hover-<?php echo $styleid; ?>").removeClass("right_to_left");
                jQuery(".image-ultimate-hover-<?php echo $styleid; ?>").removeClass("top_to_bottom");
                jQuery(".image-ultimate-hover-<?php echo $styleid; ?>").removeClass("bottom_to_top");
                jQuery(".image-ultimate-hover-<?php echo $styleid; ?>").addClass(idvalue);
            });
            jQuery("#image-radius").on("change", function () {
                var idvalue = jQuery('#image-radius').val() + '%';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?>,.image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{ border-radius: " + idvalue + "; -moz-border-radius:  " + idvalue + "; -webkit-border-radius:  " + idvalue + ";} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#image-width").on("change", function () {
                var idvalue = jQuery('#image-width').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-map-<?php echo $styleid; ?>{ max-width:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#image-height").on("change", function () {
                var idvalue = parseInt(jQuery('#image-height').val(), 10);
                var idvalue2 = parseInt(jQuery('#image-width').val(), 10);
                var datawidth = idvalue / idvalue2 * 100;
                jQuery("<style type='text/css'> .image-ultimate-map-<?php echo $styleid; ?>:after{ padding-bottom:" + datawidth + "%;} </style>").appendTo(".iheb-preview-data");
            });

            jQuery("#image-margin").on("change", function () {
                var idvalue = jQuery('#image-margin').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-padding-<?php echo $styleid; ?>{ padding:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#image-padding").on("change", function () {
                var idvalue = jQuery('#image-padding').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{ padding:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#image-square-padding").on("change", function () {
                var idvalue = jQuery('#image-square-padding').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3{ padding-left:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3{ padding-right:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p{ padding-left:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p{ padding-right:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");

            });
            jQuery("#background-color").on("change", function () {
                var idvalue = jQuery('#background-color').val();
                jQuery("<style type='text/css'>.image-ultimate-hover-<?php echo $styleid; ?> .iheu-info{ background-color:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
                jQuery("<style type='text/css'>.image-ultimate-hover-<?php echo $styleid; ?> .iheu-info-2 .iheu-info{ background-color:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");

            });
            jQuery("#content-alignment").on("change", function () {
                var idvalue = jQuery('#content-alignment').val();
                jQuery("<style type='text/css'>.image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
                jQuery("<style type='text/css'>.image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info .iheu-data{" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
            });

            jQuery("#inner-shadow").on("change", function () {
                var idvalue = 'inset 0 0 0 ' + jQuery('#inner-shadow').val() + 'px ' + jQuery('#inner-shadow-color').val() + ', 0 1px 2px rgba(0,0,0,0.3)';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before{ box-shadow:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#inner-shadow-color").on("change", function () {
                var idvalue = 'inset 0 0 0 ' + jQuery('#inner-shadow').val() + 'px ' + jQuery('#inner-shadow-color').val() + ', 0 1px 2px rgba(0,0,0,0.3)';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before{ box-shadow:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#box-shadow").on("change", function () {
                var idvalue = '0 0 ' + jQuery('#box-shadow').val() + 'px ' + jQuery('#box-shadow-color').val();
                jQuery("<style type='text/css'>.image-ultimate-hover-<?php echo $styleid; ?>{ box-shadow:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#box-shadow-color").on("change", function () {
                var idvalue = '0 0 ' + jQuery('#box-shadow').val() + 'px ' + jQuery('#box-shadow-color').val();
                jQuery("<style type='text/css'>.image-ultimate-hover-<?php echo $styleid; ?>{ box-shadow:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#heading-font-size").on("change", function () {
                var idvalue = jQuery('#heading-font-size').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3{ font-size:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#heading-font-color").on("change", function () {
                var idvalue = jQuery('#heading-font-color').val();
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3{ color:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#heading-background-color").on("change", function () {
                var idvalue = jQuery('#heading-background-color').val();
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3{ background-color:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
            });
            jQuery('#heading-font-familly').fontselect().change(function () {
                var font = jQuery(this).val().replace(/\+/g, ' ');
                font = font.split(':');
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3{ font-family:" + font[0] + ";} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#heading-padding").on("change", function () {
                var idvalue = jQuery('#heading-padding').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3{ padding-top:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3{ padding-bottom:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#heading-margin-top").on("change", function () {
                var idvalue = jQuery('#heading-margin-top').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3{ margin-top:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#heading-font-weight").on("change", function () {
                var idvalue = jQuery('#heading-font-weight').val();
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3{ font-weight:" + idvalue + ";} </style>").appendTo(".iheb-preview-data");
            });
            jQuery('#heading-underline-yes').change(function () {
                if (jQuery(this).prop('checked')) {
                    jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3{  border-bottom: 1px solid currentColor;} </style>").appendTo(".iheb-preview-data");
                }
            });
            jQuery('#heading-underline-no').change(function () {
                if (jQuery(this).prop('checked')) {
                    jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3{  border-bottom: none;} </style>").appendTo(".iheb-preview-data");
                }
            });
            jQuery("#heading-padding-bottom").on("change", function () {
                var idvalue = jQuery('#heading-padding-bottom').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3{ padding-bottom: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#heading-margin-bottom").on("change", function () {
                var idvalue = jQuery('#heading-margin-bottom').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3{ margin-bottom: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#heading-padding-bottom").on("change", function () {
                var idvalue = jQuery('#heading-padding-bottom').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info h3{     text-shadow: 0 0 1px " + idvalue + ", 0 1px 2px rgba(0, 0, 0, 0.3); ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#desc-font-size").on("change", function () {
                var idvalue = jQuery('#desc-font-size').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?>  .iheu-info p{ font-size: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#desc-font-color").on("change", function () {
                var idvalue = jQuery('#desc-font-color').val();
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?>  .iheu-info p{ color: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery('#desc-font-familly').fontselect().change(function () {
                var font = jQuery(this).val().replace(/\+/g, ' ');
                font = font.split(':');
                jQuery("<style type='text/css'>  .image-ultimate-hover-<?php echo $styleid; ?>  .iheu-info p{ font-family:" + font[0] + ";} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#desc-font-weight").on("change", function () {
                var idvalue = jQuery('#desc-font-weight').val();
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?>  .iheu-info p{ font-weight: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#desc-padding-bottom").on("change", function () {
                var idvalue = jQuery('#desc-padding-bottom').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?>  .iheu-info p{ padding-bottom: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#bottom-font-size").on("change", function () {
                var idvalue = jQuery('#bottom-font-size').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{ font-size: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#bottom-font-color").on("change", function () {
                var idvalue = jQuery('#bottom-font-color').val();
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{ color: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{ border-color: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#bottom-font-background").on("change", function () {
                var idvalue = jQuery('#bottom-font-background').val();
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{ background-color: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery('#bottom-font-familly').fontselect().change(function () {
                var font = jQuery(this).val().replace(/\+/g, ' ');
                font = font.split(':');
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{ font-family:" + font[0] + ";} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#bottom-font-weight").on("change", function () {
                var idvalue = jQuery('#bottom-font-weight').val();
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{ font-weight: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#bottom-hover-color").on("change", function () {
                var idvalue = jQuery('#bottom-hover-color').val();
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{ color: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#bottom-hover-background").on("change", function () {
                var idvalue = jQuery('#bottom-hover-background').val();
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{ background-color: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#bottom-border-radius").on("change", function () {
                var idvalue = jQuery('#bottom-border-radius').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{ border-radius: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#bottom-padding-top-bottom").on("change", function () {
                var idvalue = jQuery('#bottom-padding-top-bottom').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{ padding-top: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{ padding-bottom: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#bottom-padding-left-right").on("change", function () {
                var idvalue = jQuery('#bottom-padding-left-right').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{ padding-left: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{ padding-right: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            var idvalues = jQuery('#bottom-align').val();
            if (idvalues === "float: left;") {
                jQuery(".bottom-margin-right-js").slideUp();
                jQuery(".bottom-margin-left-js").slideDown();
            }
            if (idvalues === 'margin: 0 auto;') {
                jQuery(".bottom-margin-right-js").slideUp();
                jQuery(".bottom-margin-left-js").slideUp();
            }
            if (idvalues === 'float: right;') {
                jQuery(".bottom-margin-right-js").slideDown();
                jQuery(".bottom-margin-left-js").slideUp();
            }
            jQuery("#bottom-margin-left").on("change", function () {
                var idvalue = jQuery('#bottom-margin-left').val() + '%';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{ margin-left: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#bottom-margin-right").on("change", function () {
                var idvalue = jQuery('#bottom-margin-right').val() + '%';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{ margin-right: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#bottom-align").on("change", function () {
                var idvalue = jQuery('#bottom-align').val();
                if (idvalue === "float: left;") {
                    jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{ float: left;} </style>").appendTo(".iheb-preview-data");
                    jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{ margin-left:" + jQuery('#bottom-margin-left').val() + "% ;} </style>").appendTo(".iheb-preview-data");
                    jQuery(".bottom-margin-right-js").slideUp();
                    jQuery(".bottom-margin-left-js").slideDown();
                }
                if (idvalue === 'margin: 0 auto;') {
                    jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{ margin: 0 auto ; float: none;} </style>").appendTo(".iheb-preview-data");
                    jQuery(".bottom-margin-right-js").slideUp();
                    jQuery(".bottom-margin-left-js").slideUp();
                }
                if (idvalue === 'float: right;') {
                    jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{ float: right;} </style>").appendTo(".iheb-preview-data");
                    jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{ margin-right:" + jQuery('#bottom-margin-right').val() + "% ;} </style>").appendTo(".iheb-preview-data");
                    jQuery(".bottom-margin-right-js").slideDown();
                    jQuery(".bottom-margin-left-js").slideUp();
                }
            });
            jQuery("#button-font-size").on("change", function () {
                var idvalue = jQuery('#button-font-size').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data .fa{ font-size: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#button-font-color").on("change", function () {
                var idvalue = jQuery('#button-font-color').val();
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data .fa{ color: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#button-font-background").on("change", function () {
                var idvalue = jQuery('#button-font-background').val();
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data .fa{ background-color: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#button-hover-color").on("change", function () {
                var idvalue = jQuery('#button-hover-color').val();
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data .fa:hover{ color: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#button-hover-background").on("change", function () {
                var idvalue = jQuery('#button-hover-background').val();
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data .fa:hover{ background-color: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#button-border-radius").on("change", function () {
                var idvalue = jQuery('#button-border-radius').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data .fa{ border-radius: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#button-height-width").on("change", function () {
                var idvalue = jQuery('#button-height-width').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data .fa{ width: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data .fa{ height: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data .fa{ line-height: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });
            jQuery("#button-margin-right").on("change", function () {
                var idvalue = jQuery('#button-margin-right').val() + 'px';
                jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:first-child{ margin-right: " + idvalue + " ;} </style>").appendTo(".iheb-preview-data");
            });



        });
    </script>
    <?php
}

function iheu_button_left_admin_panel($styledata) {
    ?>
    <div class="col-sm-6 nopadding">
        <select class="form-control" id="bottom-align" name="bottom-align">
            <option value="float: left;"     <?php
            $bottomalign = $styledata[77];
            if ($bottomalign == 'float: left;') {
                echo 'selected';
            };
            ?>>Left</option>
            <option value="margin: 0 auto;"     <?php
            if ($bottomalign == 'margin: 0 auto;') {
                echo 'selected';
            };
            ?>>Center</option>
            <option value="float: right;"     <?php
            if ($bottomalign == 'float: right;') {
                echo 'selected';
            };
            ?>>Right</option>
        </select>
    </div>
    <?php
}

function iheu_headign_underline_admin_panel($data) {
    ?>

    <label class="btn btn-info <?php
    if ($data == 'yes') {
        echo 'active';
    }
    ?>">
        <input type="radio" name="heading-underline" id="heading-underline-yes" autocomplete="off"  value="yes" <?php
        if ($data == 'yes') {
            echo 'checked';
        }
        ?>> Yes
    </label>
    <label class="btn btn-info <?php
    if ($data == 'no') {
        echo 'active';
    }
    ?>">
        <input type="radio" name="heading-underline" id="heading-underline-no" autocomplete="off" value="no" <?php
        if ($data == 'no') {
            echo 'checked';
        }
        ?>> No
    </label>

    <?php
}

function iheu_content_alignment_admin_data($data) {
    ?>

    <div class="col-sm-6 nopadding">
        <select class="form-control" id="content-alignment" name="content-alignment">
            <option <?php
            if ($data == 'vertical-align: top;text-align: left;') {
                echo 'selected';
            }
            ?> value="vertical-align: top;text-align: left;">Top Left</option>
            <option <?php
            if ($data == 'vertical-align: top;text-align: center;') {
                echo 'selected';
            }
            ?> value="vertical-align: top;text-align: center;">Top Center</option>
            <option <?php
            if ($data == 'vertical-align: top;text-align: right;') {
                echo 'selected';
            }
            ?> value="vertical-align: top;text-align: right;">Top Right</option>
            <option <?php
            if ($data == 'vertical-align: middle;text-align: left;') {
                echo 'selected';
            }
            ?> value="vertical-align: middle;text-align: left;">Middle Left</option>
            <option <?php
            if ($data == 'vertical-align: middle;text-align: center;') {
                echo 'selected';
            }
            ?> value="vertical-align: middle;text-align: center;">Middle Center</option>
            <option <?php
            if ($data == 'vertical-align: middle;text-align: right;') {
                echo 'selected';
            }
            ?> value="vertical-align: middle;text-align: right;">Middle Right</option>
            <option <?php
            if ($data == 'vertical-align: bottom;text-align: left;') {
                echo 'selected';
            }
            ?> value="vertical-align: bottom;text-align: left;">Bottom Left</option>
            <option <?php
            if ($data == 'vertical-align: bottom;text-align: center;') {
                echo 'selected';
            }
            ?> value="vertical-align: bottom;text-align: center;">Bottom Center</option>
            <option <?php
            if ($data == 'vertical-align: bottom;text-align: right;') {
                echo 'selected';
            }
            ?> value="vertical-align: bottom;text-align: right;">Bottom Right</option>
        </select>
    </div>
    <?php
}

function iheu_item_admin_data($data) {
    ?>
    <option value="image-ultimate-responsive-1"     <?php
    if ($data == 'image-ultimate-responsive-1') {
        echo 'selected';
    };
    ?>>Single Item per Row</option>
    <option value="image-ultimate-responsive-2"     <?php
    if ($data == 'image-ultimate-responsive-2') {
        echo 'selected';
    };
    ?>>2 Items per Row</option>
    <option value="image-ultimate-responsive-3"     <?php
    if ($data == 'image-ultimate-responsive-3') {
        echo 'selected';
    };
    ?>>3 Items per Row</option>
    <option value="image-ultimate-responsive-4"     <?php
    if ($data == 'image-ultimate-responsive-4') {
        echo 'selected';
    };
    ?>>4 Items per Row</option>
    <option value="image-ultimate-responsive-5"     <?php
    if ($data == 'image-ultimate-responsive-5') {
        echo 'selected';
    };
    ?>>5 Items per Row</option>
    <option value="image-ultimate-responsive-6"     <?php
    if ($data == 'image-ultimate-responsive-6') {
        echo 'selected';
    };
    ?>>6 Items per Row</option>
    <option value="image-ultimate-responsive-7"     <?php
    if ($data == 'image-ultimate-responsive-7') {
        echo 'selected';
    };
    ?>>7 Items per Row</option>
    <option value="image-ultimate-responsive-8"     <?php
    if ($data == 'image-ultimate-responsive-8') {
        echo 'selected';
    };
    ?>>8 Items per Row</option>

    <?php
}

function iheu_image_animation_admin_data($data) {
    ?>
    <optgroup label="No Animation">
        <option <?php
        if ($data == '') {
            echo 'selected';
        }
        ?> value="">No Animation</option>
    <optgroup label="Attention Seekers">
        <option <?php
        if ($data == 'bounce') {
            echo 'selected';
        }
        ?> value="bounce">bounce</option>
        <option <?php
        if ($data == 'flash') {
            echo 'selected';
        }
        ?> value="flash">flash</option>
        <option <?php
        if ($data == 'pulse') {
            echo 'selected';
        }
        ?> value="pulse">pulse</option>
        <option <?php
        if ($data == 'rubberBand') {
            echo 'selected';
        }
        ?> value="rubberBand">rubberBand</option>
        <option <?php
        if ($data == 'shake') {
            echo 'selected';
        }
        ?> value="shake">shake</option>
        <option <?php
        if ($data == 'swing') {
            echo 'selected';
        }
        ?> value="swing">swing</option>
        <option <?php
        if ($data == 'tada') {
            echo 'selected';
        }
        ?> value="tada">tada</option>
        <option <?php
        if ($data == 'wobble') {
            echo 'selected';
        }
        ?> value="wobble">wobble</option>
        <option <?php
        if ($data == 'jello') {
            echo 'selected';
        }
        ?> value="jello">jello</option>
    </optgroup>
    <optgroup label="Bouncing Entrances">
        <option <?php
        if ($data == 'bounceIn') {
            echo 'selected';
        }
        ?> value="bounceIn">bounceIn</option>
        <option <?php
        if ($data == 'bounceInDown') {
            echo 'selected';
        }
        ?> value="bounceInDown">bounceInDown</option>
        <option <?php
        if ($data == 'bounceInLeft') {
            echo 'selected';
        }
        ?> value="bounceInLeft">bounceInLeft</option>
        <option <?php
        if ($data == 'bounceInRight') {
            echo 'selected';
        }
        ?> value="bounceInRight">bounceInRight</option>
        <option <?php
        if ($data == 'bounceInUp') {
            echo 'selected';
        }
        ?> value="bounceInUp">bounceInUp</option>
    </optgroup>
    <optgroup label="Fading Entrances">
        <option <?php
        if ($data == 'fadeIn') {
            echo 'selected';
        }
        ?> value="fadeIn">fadeIn</option>
        <option <?php
        if ($data == 'fadeInDown') {
            echo 'selected';
        }
        ?> value="fadeInDown">fadeInDown</option>
        <option <?php
        if ($data == 'fadeInDownBig') {
            echo 'selected';
        }
        ?> value="fadeInDownBig">fadeInDownBig</option>
        <option <?php
        if ($data == 'fadeInLeft') {
            echo 'selected';
        }
        ?> value="fadeInLeft">fadeInLeft</option>
        <option <?php
        if ($data == 'fadeInLeftBig') {
            echo 'selected';
        }
        ?> value="fadeInLeftBig">fadeInLeftBig</option>
        <option <?php
        if ($data == 'fadeInRight') {
            echo 'selected';
        }
        ?> value="fadeInRight">fadeInRight</option>
        <option <?php
        if ($data == 'fadeInRightBig') {
            echo 'selected';
        }
        ?> value="fadeInRightBig">fadeInRightBig</option>
        <option <?php
        if ($data == 'fadeInUp') {
            echo 'selected';
        }
        ?> value="fadeInUp">fadeInUp</option>
        <option <?php
        if ($data == 'fadeInUpBig') {
            echo 'selected';
        }
        ?> value="fadeInUpBig">fadeInUpBig</option>
    </optgroup>
    <optgroup label="Flippers">
        <option <?php
        if ($data == 'flip') {
            echo 'selected';
        }
        ?> value="flip">flip</option>
        <option <?php
        if ($data == 'flipInX') {
            echo 'selected';
        }
        ?> value="flipInX">flipInX</option>
        <option <?php
        if ($data == 'flipInY') {
            echo 'selected';
        }
        ?> value="flipInY">flipInY</option>
    </optgroup>

    <optgroup label="Lightspeed">
        <option <?php
        if ($data == 'lightSpeedIn') {
            echo 'selected';
        }
        ?> value="lightSpeedIn">lightSpeedIn</option>
    </optgroup>

    <optgroup label="Rotating Entrances">
        <option <?php
        if ($data == 'rotateIn') {
            echo 'selected';
        }
        ?> value="rotateIn">rotateIn</option>
        <option <?php
        if ($data == 'rotateInDownLeft') {
            echo 'selected';
        }
        ?> value="rotateInDownLeft">rotateInDownLeft</option>
        <option <?php
        if ($data == 'rotateInDownRight') {
            echo 'selected';
        }
        ?> value="rotateInDownRight">rotateInDownRight</option>
        <option <?php
        if ($data == 'rotateInUpLeft') {
            echo 'selected';
        }
        ?> value="rotateInUpLeft">rotateInUpLeft</option>
        <option <?php
        if ($data == 'rotateInUpRight') {
            echo 'selected';
        }
        ?> value="rotateInUpRight">rotateInUpRight</option>
    </optgroup>
    <optgroup label="Sliding Entrances">
        <option <?php
        if ($data == 'slideInUp') {
            echo 'selected';
        }
        ?> value="slideInUp">slideInUp</option>
        <option <?php
        if ($data == 'slideInDown') {
            echo 'selected';
        }
        ?> value="slideInDown">slideInDown</option>
        <option <?php
        if ($data == 'slideInLeft') {
            echo 'selected';
        }
        ?> value="slideInLeft">slideInLeft</option>
        <option <?php
        if ($data == 'slideInRight') {
            echo 'selected';
        }
        ?> value="slideInRight">slideInRight</option>
    </optgroup>
    <optgroup label="Zoom Entrances">
        <option <?php
        if ($data == 'zoomIn') {
            echo 'selected';
        }
        ?> value="zoomIn">zoomIn</option>
        <option <?php
        if ($data == 'zoomInDown') {
            echo 'selected';
        }
        ?> value="zoomInDown">zoomInDown</option>
        <option <?php
        if ($data == 'zoomInLeft') {
            echo 'selected';
        }
        ?> value="zoomInLeft">zoomInLeft</option>
        <option <?php
        if ($data == 'zoomInRight') {
            echo 'selected';
        }
        ?> value="zoomInRight">zoomInRight</option>
        <option <?php
        if ($data == 'zoomInRight') {
            echo 'selected';
        }
        ?> value="zoomInRight">zoomInUp</option>
    </optgroup>

    <optgroup label="Specials">
        <option <?php
        if ($data == 'hinge') {
            echo 'selected';
        }
        ?> value="hinge">hinge</option>
        <option <?php
        if ($data == 'rollIn') {
            echo 'selected';
        }
        ?> value="rollIn">rollIn</option>
    </optgroup>

    <?php
}

function iheu_font_weight_admin_panel($fontweight) {
    ?>
    <option value="100"     <?php
    if ($fontweight == '100') {
        echo 'selected';
    };
    ?>>100</option>
    <option value="200"     <?php
    if ($fontweight == '200') {
        echo 'selected';
    };
    ?>>200</option>
    <option value="300"     <?php
    if ($fontweight == '300') {
        echo 'selected';
    };
    ?>>300</option>
    <option value="400"     <?php
    if ($fontweight == '400') {
        echo 'selected';
    };
    ?>>400</option>
    <option value="500"     <?php
    if ($fontweight == '500') {
        echo 'selected';
    };
    ?>>500</option>
    <option value="600"     <?php
    if ($fontweight == '600') {
        echo 'selected';
    };
    ?>>600</option>
    <option value="700"     <?php
    if ($fontweight == '700') {
        echo 'selected';
    };
    ?>>700</option>
    <option value="800"     <?php
    if ($fontweight == '800') {
        echo 'selected';
    };
    ?>>800</option>
    <option value="900"     <?php
    if ($fontweight == '900') {
        echo 'selected';
    };
    ?>>900</option>
    <option value="normal" <?php
    if ($fontweight == 'normal') {
        echo 'selected';
    };
    ?>>Normal</option>
    <option value="bold"    <?php
    if ($fontweight == 'bold') {
        echo 'selected';
    };
    ?>>Bold</option>
    <option value="lighter" <?php
    if ($fontweight == 'lighter') {
        echo 'selected';
    };
    ?>>Lighter</option>
    <option value="initial"   <?php
    if ($fontweight == 'initial') {
        echo 'selected';
    };
    ?>>Initial</option>
            <?php
        }

        function iheu_content_animation_admin_panel($contentanimation) {
            ?>
    <option value="iheu-no-animation" <?php
    if ($contentanimation == 'iheu-no-animation') {
        echo 'selected';
    }
    ?>>No Animation</option>
    <option value="iheu-fade-up" <?php
    if ($contentanimation == 'iheu-fade-up') {
        echo 'selected';
    }
    ?>>Fade Up</option>
    <option value="iheu-fade-down" <?php
    if ($contentanimation == 'iheu-fade-down') {
        echo 'selected';
    }
    ?>>Fade Down</option>
    <option value="iheu-fade-left" <?php
    if ($contentanimation == 'iheu-fade-left') {
        echo 'selected';
    }
    ?>>Fade Left</option>
    <option value="iheu-fade-right" <?php
    if ($contentanimation == 'iheu-fade-right') {
        echo 'selected';
    }
    ?>>Fade Right</option>
    <option value="iheu-fade-up-big" <?php
    if ($contentanimation == 'iheu-fade-up-big') {
        echo 'selected';
    }
    ?>>Fade Up Big</option>
    <option value="iheu-fade-down-big" <?php
    if ($contentanimation == 'iheu-fade-down-big') {
        echo 'selected';
    }
    ?>>Fade Down Big</option>
    <option value="iheu-fade-left-big" <?php
    if ($contentanimation == 'iheu-fade-left-big') {
        echo 'selected';
    }
    ?>>Fade Left Big</option>
    <option value="iheu-fade-right-big" <?php
    if ($contentanimation == 'iheu-fade-right-big') {
        echo 'selected';
    }
    ?>>Fade Right Big</option>
    <option value="iheu-zoom-in" <?php
    if ($contentanimation == 'iheu-zoom-in') {
        echo 'selected';
    }
    ?>>Zoom In</option>
    <option value="iheu-zoom-out" <?php
    if ($contentanimation == 'iheu-zoom-out') {
        echo 'selected';
    }
    ?>>Zoom Out</option>
    <option value="iheu-flip-x" <?php
    if ($contentanimation == 'iheu-flip-x') {
        echo 'selected';
    }
    ?>>Flip X</option>
    <option value="iheu-flip-y" <?php
    if ($contentanimation == 'iheu-flip-y') {
        echo 'selected';
    }
    ?>>Flip Y</option>
    <?php
}
