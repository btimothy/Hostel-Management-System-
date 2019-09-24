<?php
if (!defined('ABSPATH'))
    exit;
image_hover_ultimate_user_capabilities();
$styleid = (int) $_GET['styleid'];
global $wpdb;
$table_list = $wpdb->prefix . 'image_hover_ultimate_list';
$table_name = $wpdb->prefix . 'image_hover_ultimate_style';
$icon1 = '';
$link1 = '';
$icon2 = '';
$link2 = '';
$image = '';
$itemid = '';
$opennewtab = '';
$backgoundimage = '';
$valuedata1 = '';
$valuedata2 = '';

if (!empty($_POST['submit']) && $_POST['submit'] == 'submit') {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'iheuitemdata')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $ihicon1 = sanitize_text_field($_POST['iheu-icon-1']);
        $ihicon1link = sanitize_text_field($_POST['iheu-icon-1-link']);
        $ihicon2 = sanitize_text_field($_POST['iheu-icon-2']);
        $ihicon2link = sanitize_text_field($_POST['iheu-icon-2-link']);
        $ihimage = sanitize_text_field($_POST['iheu-image-upload-url']);
        $ihhoverimage = sanitize_text_field($_POST['iheu-hover-image-upload-url']);
        if ($_POST['item-id'] == '') {
            $wpdb->query($wpdb->prepare("INSERT INTO {$table_list} (data1, data1link, data2, data2link, image, hoverimage, styleid) VALUES ( %s, %s, %s, %s, %s, %s, %d)", array($ihicon1, $ihicon1link, $ihicon2, $ihicon2link, $ihimage, $ihhoverimage, $styleid)));
        }
        if ($_POST['item-id'] != '' && is_numeric($_POST['item-id'])) {
            $item_id = (int) $_POST['item-id'];
            $wpdb->update("$table_list", array("data1" => $ihicon1, "data1link" => $ihicon1link, "data2" => $ihicon2, "data2link" => $ihicon2link, "image" => $ihimage, "hoverimage" => $ihhoverimage), array('id' => $item_id), array('%s', '%s', '%s', '%s', '%s', '%s'), array('%d'));
        }
    }
}
if (!empty($_POST['edit']) && is_numeric($_POST['item-id'])) {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'iheueditdata')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $item_id = (int) $_POST['item-id'];
        $data = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_list WHERE id = %d ", $item_id), ARRAY_A);
        $icon1 = $data['data1'];
        $link1 = $data['data1link'];
        $icon2 = $data['data2'];
        $link2 = $data['data2link'];
        $image = $data['image'];
        $hoverimage = $data['hoverimage'];
        $itemid = $data['id'];
        echo '<script type="text/javascript"> jQuery(document).ready(function () {setTimeout(function() { jQuery("#iheb-add-new-item-data").modal("show")  }, 500); });</script>';
    }
}
if (!empty($_POST['delete']) && is_numeric($_POST['item-id'])) {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'iheudeletedata')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $item_id = (int) $_POST['item-id'];
        $wpdb->query($wpdb->prepare("DELETE FROM {$table_list} WHERE id = %d ", $item_id));
    }
}
if (!empty($_POST['data-submit']) && $_POST['data-submit'] == 'Save') {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'iheueffectsstyle')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $data = 'iheu-item |' . sanitize_text_field($_POST['iheu-item']) . '|'
                . 'image-radius |' . sanitize_text_field($_POST['image-radius']) . '|'
                . 'image-width |' . sanitize_text_field($_POST['image-width']) . '|'
                . 'image-height |' . sanitize_text_field($_POST['image-height']) . '|'
                . 'image-margin |' . sanitize_text_field($_POST['image-margin']) . '|'
                . 'image-padding |' . sanitize_text_field($_POST['image-padding']) . '|'
                . 'background-color |' . sanitize_text_field($_POST['background-color']) . '|'
                . 'content-alignment ||'
                . 'open-in-new-tab |' . sanitize_text_field($_POST['open-in-new-tab']) . '|'
                . 'image-animation |' . sanitize_text_field($_POST['image-animation']) . '|'
                . 'animation-durations |' . sanitize_text_field($_POST['animation-durations']) . '|'
                . 'content-animation ||'
                . 'inner-shadow |' . sanitize_text_field($_POST['inner-shadow']) . '|'
                . 'inner-shadow-color |' . sanitize_text_field($_POST['inner-shadow-color']) . '|'
                . 'box-shadow ||'
                . 'box-shadow-color ||'
                . 'heading-font-size ||'
                . 'heading-font-color ||'
                . 'heading-font-familly ||'
                . 'heading-font-weight ||'
                . 'heading-underline ||'
                . 'heading-padding-bottom ||'
                . 'heading-margin-bottom ||'
                . 'desc-font-size ||'
                . 'desc-font-color ||'
                . 'desc-font-familly ||'
                . 'desc-font-weight ||'
                . 'desc-padding-bottom ||'
                . 'bottom-font-size ||'
                . 'bottom-font-color ||'
                . 'bottom-font-background ||'
                . 'bottom-font-familly ||'
                . 'bottom-font-weight ||'
                . 'bottom-hover-color ||'
                . 'bottom-hover-background ||'
                . 'bottom-border-radius ||'
                . 'bottom-padding-top-bottom ||'
                . 'bottom-padding-left-right ||'
                . 'bottom-align ||'
                . 'bottom-margin-left ||'
                . 'bottom-margin-right | |'
                . 'iheu-css |' . sanitize_text_field($_POST['iheu-css']) . '|'
                . 'button-font-size |' . sanitize_text_field($_POST['button-font-size']) . '|'
                . 'button-font-color |' . sanitize_text_field($_POST['button-font-color']) . '|'
                . 'button-font-background |' . sanitize_text_field($_POST['button-font-background']) . '|'
                . 'button-hover-color |' . sanitize_text_field($_POST['button-hover-color']) . '|'
                . 'button-hover-background |' . sanitize_text_field($_POST['button-hover-background']) . '|'
                . 'button-border-radius |' . sanitize_text_field($_POST['button-border-radius']) . '|'
                . 'button-height-width |' . sanitize_text_field($_POST['button-height-width']) . '|'
                . 'button-margin-right |' . sanitize_text_field($_POST['button-margin-right']) . '|'
                . 'iheu-directions |' . sanitize_text_field($_POST['iheu-directions']) . '|';

        $data = sanitize_text_field($data);
        $wpdb->query($wpdb->prepare("UPDATE $table_name SET css = %s WHERE id = %d", $data, $styleid));
    }
}
$listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
$styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
$styledata = $styledata['css'];
$styledata = explode('|', $styledata);
?>
<div class="wrap">
    <?php echo iheu_promote_free(); ?>
    <div class="iheu-admin-wrapper">
        <div class="iheu-admin-row">
            <div class="iheu-style-panel-left">
                <div class="iheu-style-setting-panel">
                    <form method="post" id="oxi-style-submit">

                        <div class="ctu-ultimate-wrapper-3"> 
                            <ul class="ctu-ulimate-style-3">  
                                <li ref="#ctu-ulitate-style-3-id-6">
                                    General
                                </li>  
                                <li ref="#ctu-ulitate-style-3-id-5">
                                    Icon Settings
                                </li> 
                                <li ref="#ctu-ulitate-style-3-id-2">
                                    Custom CSS
                                </li>
                                <li ref="#ctu-ulitate-style-3-id-1">
                                    Support
                                </li>
                            </ul>

                            <div class="ctu-ultimate-style-3-content">
                                <div class="ctu-ulitate-style-3-tabs" id="ctu-ulitate-style-3-id-6">
                                    <div class="iheu-admin-style-settings-div-left">
                                        <div class="form-group row form-group-sm">
                                            <label for="iheu-item" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Customize How mane Item You want to Show in a single Row ">Item Per Row </label>
                                            <div class="col-sm-6 nopadding">
                                                <select class="form-control" id="iheu-item" name="iheu-item">
                                                    <?php iheu_item_admin_data($styledata[1]); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="iheu-directions" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Customize How Which type of Effects You Want to Use ">Effects Directions </label>
                                            <div class="col-sm-6 nopadding">
                                                <select class="form-control" id="iheu-directions" name="iheu-directions">
                                                    <option <?php
                                                    if ($styledata[101] == 'left_to_right') {
                                                        echo 'selected';
                                                    }
                                                    ?> value="left_to_right">Left to Right</option>
                                                    <option <?php
                                                    if ($styledata[101] == 'right_to_left') {
                                                        echo 'selected';
                                                    }
                                                    ?> value="right_to_left">Right to Left</option>
                                                    <option <?php
                                                    if ($styledata[101] == 'top_to_bottom') {
                                                        echo 'selected';
                                                    }
                                                    ?> value="top_to_bottom">Both</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="image-radius"  class="col-sm-6 oxi-control-label"  data-toggle="tooltip" data-placement="top" title="Radius Your Image, for example to make Circle make 50">Image Radius</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0"  max="50" step="1" id="image-radius" name="image-radius" value="<?php echo $styledata[3]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="image-width" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Set Image Max width, It will work if max Width is available in div" >Image Width</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="50" max="2400" step="1" id="image-width" name="image-width" value="<?php echo $styledata[5]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="image-height" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Set Height, Our Auto Set make it on percentize with width for responsive" >Image Height</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="50" max="2400" step="1" id="image-height" name="image-height" value="<?php echo $styledata[7]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="image-margin" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Set Image Margin make Distange from Image to Image" >Image Margin</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0" max="100" step="1" id="image-margin" name="image-margin" value="<?php echo $styledata[9]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="image-padding" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Set Content Padding to make distance of Image Content" >Content Padding</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0" max="100" step="1" id="image-padding" name="image-padding" value="<?php echo $styledata[11]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="background-color" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Set Your image hover background Color, Based on Color">Background </label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="text" class="form-control iheu-vendor-color" data-format="rgb" data-opacity="true" id="background-color" name="background-color" value="<?php echo $styledata[13]; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="iheu-admin-style-settings-div-right">
                                        <div class="form-group row row form-group-sm">
                                            <label class="col-sm-6 oxi-control-label"  data-toggle="tooltip" data-placement="top" title="Make sure that You want to Open your link in same Tab or new Tab">Open In New Tab?</label>
                                            <div class="col-sm-6">
                                                <div class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-info <?php
                                                    if ($styledata[17] == '_blank') {
                                                        echo 'active';
                                                    }
                                                    ?>">
                                                        <input type="radio" name="open-in-new-tab" id="open-in-new-tab-yes" autocomplete="off"  value="_blank" <?php
                                                        if ($styledata[17] == '_blank') {
                                                            echo 'checked';
                                                        }
                                                        ?>> Yes
                                                    </label>
                                                    <label class="btn btn-info <?php
                                                    if ($styledata[17] == '') {
                                                        echo 'active';
                                                    }
                                                    ?>">
                                                        <input type="radio" name="open-in-new-tab" id="open-in-new-tab-no" autocomplete="off" value="" <?php
                                                        if ($styledata[17] == '') {
                                                            echo 'checked';
                                                        }
                                                        ?>> No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="image-animation" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Image Vewing Animaion">Image Animation</label>
                                            <div class="col-sm-6 nopadding">
                                                <select class="form-control" id="image-animation" name="image-animation">                                           
                                                    <?php iheu_image_animation_admin_data($styledata[19]) ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="animation-durations" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Image Viewing Animation Duration" >Animation Duration</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0" max="10" step=0.1 id="animation-durations" name="animation-durations" value="<?php echo $styledata[21]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="inner-shadow" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Inner Shadow is showing on Image inner, Doesn't want make it 0" >Inner Shadow</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control"  min="0" max="100" step="1" id="inner-shadow" name="inner-shadow" value="<?php echo $styledata[25]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="inner-shadow-color" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Customize Your Inner Shadow Color">Inner Shadow Color </label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="text" class="form-control iheu-vendor-color" data-format="rgb" data-opacity="true"  id="inner-shadow-color" name="inner-shadow-color" value="<?php echo $styledata[27]; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ctu-ulitate-style-3-tabs" id="ctu-ulitate-style-3-id-5">
                                    <div class="iheu-admin-style-settings-div-left">
                                        <div class="form-group row form-group-sm">
                                            <label for="button-font-size" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Set Icon Font Size as you want" >Font Size</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0" max="100" step="1" id="button-font-size" name="button-font-size" value="<?php echo$styledata[85]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="button-font-color" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Set Your Icon Color, Based on Color">Font Color </label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="text" class="form-control iheu-vendor-color" id="button-font-color" name="button-font-color" value="<?php echo $styledata[87]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="button-font-background" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Set Your Icon Background Color, Based on Color">Background Color </label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="text" class="form-control iheu-vendor-color" data-format="rgb" data-opacity="true"  id="button-font-background" name="button-font-background" value="<?php echo $styledata[89]; ?>">
                                            </div>
                                        </div>          
                                        <div class="form-group row form-group-sm">
                                            <label for="button-hover-color" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Set Your Icon Hover Color, Based on Color">Hover Color </label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="text" class="form-control iheu-vendor-color" id="button-hover-color" name="button-hover-color" value="<?php echo $styledata[91]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="button-hover-background" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Set Your Icon Hover background Color, Based on Color">Hover Background </label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="text" class="form-control iheu-vendor-color" data-format="rgb" data-opacity="true"  id="button-hover-background" name="button-hover-background" value="<?php echo $styledata[93]; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="iheu-admin-style-settings-div-right">
                                        <div class="form-group row form-group-sm">
                                            <label for="button-border-radius" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Make Radius on Your Icon" >Icon Radius</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0" max="100" step="1" id="button-border-radius" name="button-border-radius" value="<?php echo$styledata[95]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="button-height-widht" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Change height Width to make bigger or smaller Icon" >Height width</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0" max="100" step="1" id="button-height-width" name="button-height-width" value="<?php echo$styledata[97]; ?>">
                                            </div>
                                        </div> 
                                        <div class="form-group row form-group-sm bottom-margin-right-js">
                                            <label for="button-margin-right" class="col-sm-6 oxi-control-label" data-toggle="tooltip" data-placement="top" title="Make Distance from Right Icon" >Margin Right</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="-20" max="100" step="1" id="button-margin-right" name="button-margin-right" value="<?php echo$styledata[99]; ?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="ctu-ulitate-style-3-tabs" id="ctu-ulitate-style-3-id-2">
                                    <div class="iheu-admin-style-settings-div-css">
                                        <div class="form-group">
                                            <label for="iheu-css" class="iheu-css">Add Your Custom CSS Code Here</label>
                                            <textarea class="form-control" rows="4" id="iheu-css" name="iheu-css"><?php echo$styledata[83]; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctu-ulitate-style-3-tabs" id="ctu-ulitate-style-3-id-1">
                                    <?php echo iheu_video_toturial(); ?>
                                </div>
                            </div> 

                        </div>    

                        <div class="iheu-style-setting-save">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <?php wp_nonce_field("iheueffectsstyle") ?>
                            <input type="submit" class="btn btn-primary" name="data-submit" value="Save">
                        </div>
                    </form>
                    <script type="text/javascript">
                        jQuery(document).ready(function () {
                            jQuery(".ctu-ulimate-style-3 li:first").addClass("active");
                            jQuery(".ctu-ulitate-style-3-tabs:first").addClass("active");
                            jQuery(".ctu-ulimate-style-3 li").click(function () {
                                jQuery(".ctu-ulimate-style-3 li").removeClass("active");
                                jQuery(this).toggleClass("active");
                                jQuery(".ctu-ulitate-style-3-tabs").removeClass("active");
                                var activeTab = jQuery(this).attr("ref");
                                jQuery(activeTab).addClass("active");
                            });
                        });
                    </script>   
                </div>
                <div class="iheb-style-settings-preview">
                    <div class="iheb-style-settings-preview-heading">
                        <div class="iheb-style-settings-preview-heading-left">
                            Preview
                        </div>
                        <div class="iheb-style-settings-preview-heading-right">
                            <input type="text" class="form-control iheu-vendor-color"  data-format="rgb" data-opacity="true"  id="iheb-preview-data-background" name="iheb-preview-data-background" value="rgba(255, 255, 255, 1)">
                        </div>
                    </div>
                    <div class="iheb-preview-data" id="iheb-preview-data">
                     <?php
                        iheu_ultimate_oxi_shortcode_function($styleid, 'admin')
                        ?>
                    </div>

                </div>
                <?php iheu_jquery_file_pass($styleid); ?>
            </div>

            <?php iheu_admin_style_panel_tab2($styleid, $listdata); ?>


        </div>
    </div>
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
                            <label for="ctu-title">Font-awesome Icon 1</label>
                            <input type="text "class="form-control" id="iheu-icon-1" name="iheu-icon-1" value="<?php echo iheu_html_special_charecter($icon1); ?>">
                            <small class="form-text text-muted">Add Your Font Awesome icon ex. fa-facebook</small>
                        </div>

                        <div class="form-group">
                            <label for="iheu-link">Icon 1 Link</label>
                            <input type="text "class="form-control" id="iheu-icon-1-link" name="iheu-icon-1-link" value="<?php echo $link1; ?>">
                            <small class="form-text text-muted">Add Your Desire Link or Url Unless make it blank for Icon 1</small>
                        </div>
                        <div class="form-group">
                            <label for="iheu-icon-2">Font-awesome Icon 2</label>
                            <input type="text "class="form-control" id="iheu-icon-2" name="iheu-icon-2" value="<?php echo iheu_html_special_charecter($icon2); ?>">
                            <small class="form-text text-muted">Add Your Font Awesome icon ex. fa-facebook</small>
                        </div>

                        <div class="form-group">
                            <label for="iheu-icon-2-link">Icon 2 Link</label>
                            <input type="text "class="form-control" id="iheu-icon-2-link" name="iheu-icon-2-link" value="<?php echo $link2; ?>">
                            <small class="form-text text-muted">Add Your Desire Link or Url Unless make it blank for Icon 2</small>
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

</div>

