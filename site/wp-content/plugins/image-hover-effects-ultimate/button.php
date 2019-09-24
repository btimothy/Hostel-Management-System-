<?php
if (!defined('ABSPATH'))
    exit;
$iheuimage1 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/1.jpg';
$iheuimage2 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/2.jpg';
$iheuimage3 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/3.jpg';
$iheuimage4 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/4.jpg';
$iheuimage5 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/5.jpg';
$iheuimage6 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/6.jpg';
wp_enqueue_script('jQuery');
wp_enqueue_style('Open+Sans', 'https://fonts.googleapis.com/css?family=Open+Sans');
wp_enqueue_script('iheu-vendor-bootstrap-jss', plugins_url('css-js/bootstrap.min.js', __FILE__));
wp_enqueue_style('iheu-vendor-bootstrap', plugins_url('css-js/bootstrap.min.css', __FILE__));
wp_enqueue_style('iheu-vendor-style', plugins_url('css-js/style.css', __FILE__));
wp_enqueue_style('iheu-button-style', plugins_url('css-js/button-style.css', __FILE__));
$faversion = get_option('oxi_addons_font_awesome_version');
$faversion = explode('||', $faversion);
wp_enqueue_style('font-awesome-' . $faversion[0], $faversion[1]);
wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));


image_hover_ultimate_user_capabilities();
if (!empty($_POST['submit']) && $_POST['submit'] == 'Save') {
    if ($_POST['style'] == 'button-1') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |30|background-color |rgba(0, 146, 194, 0.5)|content-alignment ||open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation ||inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size ||heading-font-color ||heading-font-familly ||heading-font-weight ||heading-underline ||heading-padding-bottom ||heading-margin-bottom ||desc-font-size ||desc-font-color ||desc-font-familly ||desc-font-weight ||desc-padding-bottom ||bottom-font-size ||bottom-font-color ||bottom-font-background ||bottom-font-familly ||bottom-font-weight ||bottom-hover-color ||bottom-hover-background ||bottom-border-radius ||bottom-padding-top-bottom ||bottom-padding-left-right ||bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||button-font-size |18|button-font-color |#7e009e|button-font-background |rgba(255, 255, 255, 1)|button-hover-color |#ffffff|button-hover-background |rgba(126, 0, 158, 1)|button-border-radius |44|button-height-width |40|button-margin-right |7|';
    }
    if ($_POST['style'] == 'button-2') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |30|background-color |rgba(0, 146, 194, 0.5)|content-alignment ||open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation ||inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size ||heading-font-color ||heading-font-familly ||heading-font-weight ||heading-underline ||heading-padding-bottom ||heading-margin-bottom ||desc-font-size ||desc-font-color ||desc-font-familly ||desc-font-weight ||desc-padding-bottom ||bottom-font-size ||bottom-font-color ||bottom-font-background ||bottom-font-familly ||bottom-font-weight ||bottom-hover-color ||bottom-hover-background ||bottom-border-radius ||bottom-padding-top-bottom ||bottom-padding-left-right ||bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||button-font-size |18|button-font-color |#7e009e|button-font-background |rgba(255, 255, 255, 1)|button-hover-color |#ffffff|button-hover-background |rgba(126, 0, 158, 1)|button-border-radius |40|button-height-width |40|button-margin-right |7|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'button-3') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |30|background-color |rgba(0, 146, 194, 0.5)|content-alignment ||open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation ||inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size ||heading-font-color ||heading-font-familly ||heading-font-weight ||heading-underline ||heading-padding-bottom ||heading-margin-bottom ||desc-font-size ||desc-font-color ||desc-font-familly ||desc-font-weight ||desc-padding-bottom ||bottom-font-size ||bottom-font-color ||bottom-font-background ||bottom-font-familly ||bottom-font-weight ||bottom-hover-color ||bottom-hover-background ||bottom-border-radius ||bottom-padding-top-bottom ||bottom-padding-left-right ||bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||button-font-size |18|button-font-color |#7e009e|button-font-background |rgba(255, 255, 255, 1)|button-hover-color |#ffffff|button-hover-background |rgba(126, 0, 158, 1)|button-border-radius |46|button-height-width |40|button-margin-right |7|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'button-4') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |30|background-color |rgba(0, 146, 194, 0.5)|content-alignment ||open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation ||inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size ||heading-font-color ||heading-font-familly ||heading-font-weight ||heading-underline ||heading-padding-bottom ||heading-margin-bottom ||desc-font-size ||desc-font-color ||desc-font-familly ||desc-font-weight ||desc-padding-bottom ||bottom-font-size ||bottom-font-color ||bottom-font-background ||bottom-font-familly ||bottom-font-weight ||bottom-hover-color ||bottom-hover-background ||bottom-border-radius ||bottom-padding-top-bottom ||bottom-padding-left-right ||bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||button-font-size |18|button-font-color |#7e009e|button-font-background |rgba(255, 255, 255, 1)|button-hover-color |#ffffff|button-hover-background |rgba(126, 0, 158, 1)|button-border-radius |46|button-height-width |40|button-margin-right |7|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'button-5') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |30|background-color |rgba(0, 146, 194, 0.5)|content-alignment ||open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation ||inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size ||heading-font-color ||heading-font-familly ||heading-font-weight ||heading-underline ||heading-padding-bottom ||heading-margin-bottom ||desc-font-size ||desc-font-color ||desc-font-familly ||desc-font-weight ||desc-padding-bottom ||bottom-font-size ||bottom-font-color ||bottom-font-background ||bottom-font-familly ||bottom-font-weight ||bottom-hover-color ||bottom-hover-background ||bottom-border-radius ||bottom-padding-top-bottom ||bottom-padding-left-right ||bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||button-font-size |18|button-font-color |#7e009e|button-font-background |rgba(255, 255, 255, 1)|button-hover-color |#ffffff|button-hover-background |rgba(126, 0, 158, 1)|button-border-radius |46|button-height-width |40|button-margin-right |7|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'button-6') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |30|background-color |rgba(0, 146, 194, 0.5)|content-alignment ||open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation ||inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size ||heading-font-color ||heading-font-familly ||heading-font-weight ||heading-underline ||heading-padding-bottom ||heading-margin-bottom ||desc-font-size ||desc-font-color ||desc-font-familly ||desc-font-weight ||desc-padding-bottom ||bottom-font-size ||bottom-font-color ||bottom-font-background ||bottom-font-familly ||bottom-font-weight ||bottom-hover-color ||bottom-hover-background ||bottom-border-radius ||bottom-padding-top-bottom ||bottom-padding-left-right ||bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||button-font-size |18|button-font-color |#7e009e|button-font-background |rgba(255, 255, 255, 1)|button-hover-color |#ffffff|button-hover-background |rgba(126, 0, 158, 1)|button-border-radius |46|button-height-width |40|button-margin-right |7|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'button-7') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |30|background-color |rgba(0, 146, 194, 0.5)|content-alignment ||open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation ||inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size ||heading-font-color ||heading-font-familly ||heading-font-weight ||heading-underline ||heading-padding-bottom ||heading-margin-bottom ||desc-font-size ||desc-font-color ||desc-font-familly ||desc-font-weight ||desc-padding-bottom ||bottom-font-size ||bottom-font-color ||bottom-font-background ||bottom-font-familly ||bottom-font-weight ||bottom-hover-color ||bottom-hover-background ||bottom-border-radius ||bottom-padding-top-bottom ||bottom-padding-left-right ||bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||button-font-size |18|button-font-color |#7e009e|button-font-background |rgba(255, 255, 255, 1)|button-hover-color |#ffffff|button-hover-background |rgba(126, 0, 158, 1)|button-border-radius |46|button-height-width |40|button-margin-right |7|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'button-8') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |30|background-color |rgba(0, 146, 194, 0.5)|content-alignment ||open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation ||inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size ||heading-font-color ||heading-font-familly ||heading-font-weight ||heading-underline ||heading-padding-bottom ||heading-margin-bottom ||desc-font-size ||desc-font-color ||desc-font-familly ||desc-font-weight ||desc-padding-bottom ||bottom-font-size ||bottom-font-color ||bottom-font-background ||bottom-font-familly ||bottom-font-weight ||bottom-hover-color ||bottom-hover-background ||bottom-border-radius ||bottom-padding-top-bottom ||bottom-padding-left-right ||bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||button-font-size |18|button-font-color |#7e009e|button-font-background |rgba(255, 255, 255, 1)|button-hover-color |#ffffff|button-hover-background |rgba(126, 0, 158, 1)|button-border-radius |46|button-height-width |40|button-margin-right |7|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'button-9') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |30|background-color |rgba(0, 146, 194, 0.5)|content-alignment ||open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation ||inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size ||heading-font-color ||heading-font-familly ||heading-font-weight ||heading-underline ||heading-padding-bottom ||heading-margin-bottom ||desc-font-size ||desc-font-color ||desc-font-familly ||desc-font-weight ||desc-padding-bottom ||bottom-font-size ||bottom-font-color ||bottom-font-background ||bottom-font-familly ||bottom-font-weight ||bottom-hover-color ||bottom-hover-background ||bottom-border-radius ||bottom-padding-top-bottom ||bottom-padding-left-right ||bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||button-font-size |18|button-font-color |#7e009e|button-font-background |rgba(255, 255, 255, 1)|button-hover-color |#ffffff|button-hover-background |rgba(126, 0, 158, 1)|button-border-radius |46|button-height-width |40|button-margin-right |7|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'button-10') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |30|background-color |rgba(0, 146, 194, 0.5)|content-alignment ||open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation ||inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size ||heading-font-color ||heading-font-familly ||heading-font-weight ||heading-underline ||heading-padding-bottom ||heading-margin-bottom ||desc-font-size ||desc-font-color ||desc-font-familly ||desc-font-weight ||desc-padding-bottom ||bottom-font-size ||bottom-font-color ||bottom-font-background ||bottom-font-familly ||bottom-font-weight ||bottom-hover-color ||bottom-hover-background ||bottom-border-radius ||bottom-padding-top-bottom ||bottom-padding-left-right ||bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||button-font-size |18|button-font-color |#7e009e|button-font-background |rgba(255, 255, 255, 1)|button-hover-color |#ffffff|button-hover-background |rgba(126, 0, 158, 1)|button-border-radius |46|button-height-width |40|button-margin-right |7|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'button-11') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |30|background-color |rgba(0, 146, 194, 0.5)|content-alignment ||open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation ||inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size ||heading-font-color ||heading-font-familly ||heading-font-weight ||heading-underline ||heading-padding-bottom ||heading-margin-bottom ||desc-font-size ||desc-font-color ||desc-font-familly ||desc-font-weight ||desc-padding-bottom ||bottom-font-size ||bottom-font-color ||bottom-font-background ||bottom-font-familly ||bottom-font-weight ||bottom-hover-color ||bottom-hover-background ||bottom-border-radius ||bottom-padding-top-bottom ||bottom-padding-left-right ||bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||button-font-size |18|button-font-color |#7e009e|button-font-background |rgba(255, 255, 255, 1)|button-hover-color |#ffffff|button-hover-background |rgba(126, 0, 158, 1)|button-border-radius |46|button-height-width |40|button-margin-right |7|iheu-directions |left_to_right|';
    }
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'iheustyledata')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        global $wpdb;
        $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
        $wpdb->query($wpdb->prepare("INSERT INTO {$table_name} (name, style_name, css) VALUES ( %s, %s, %s )", array($name, $style_name, $css)));
        $redirect_id = $wpdb->insert_id;
        if ($redirect_id == 0) {
            $url = admin_url("admin.php?page=image-hover-ultimate-new");
        }
        if ($redirect_id != 0) {
            $url = admin_url("admin.php?page=image-hover-ultimate-new&styleid=$redirect_id");
        }
        echo '<script type="text/javascript"> document.location.href = "' . $url . '"; </script>';
        exit;
    }
}
?>
<div class="wrap">
    <?php echo iheu_promote_free(); ?>
    <div class="iheu-admin-wrapper">
        <div class="iheu-admin-row">
            <h1>Select Style</h1>
            <p>Select Style from our Template list</p>
            <div class="iheu-admin-new-row">            
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-273 image-ultimate-hover-animation-273" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-273">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-273">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage1; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fas fa-search-plus"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fab  fa-facebook"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-273 image-ultimate-hover-animation-273" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-273">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-273 squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage2; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fas fa-search-plus"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fab  fa-facebook"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 1 <span>Single Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('button', 1); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-276 image-ultimate-hover-animation-276" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-276">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-276 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage3; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fab  fa-facebook"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-276 image-ultimate-hover-animation-276" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-276">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-276 right_to_left squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage4; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fab  fa-facebook"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 2 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('button', 2); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">

                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-282 image-ultimate-hover-animation-282" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-282">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-282 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage5; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fab  fa-facebook"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-282 image-ultimate-hover-animation-282" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-282">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-282 right_to_left squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage6; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fab  fa-facebook"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> 

                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 3 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('button', 3); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-285 image-ultimate-hover-animation-285" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-285">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-285 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage1; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fab  fa-facebook"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-285 image-ultimate-hover-animation-285" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-285">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-285 right_to_left squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage1; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fab  fa-facebook"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 4 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('button', 4); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-288 image-ultimate-hover-animation-288" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-288">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-288 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage3; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fab  fa-facebook"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-288 image-ultimate-hover-animation-288" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-288">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-288 top-to-bottom squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage3; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fab  fa-facebook"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 5 <span>3 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('button', 5); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">   
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-291 image-ultimate-hover-animation-291" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-291">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-291 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage5; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fab  fa-facebook"></i></a>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-291 image-ultimate-hover-animation-291" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-291">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-291 bottom_to_top squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage6; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fab  fa-facebook"></i></a>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Button Effects 6 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('button', 6); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">

                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-297 image-ultimate-hover-animation-297" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-297">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-297 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage1; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fab  fa-facebook"></i></a>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-297 image-ultimate-hover-animation-297" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-297">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-297 right_to_left squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage2; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fab  fa-facebook"></i></a>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Button Effects 7 <span>2 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('button', 7); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-300 image-ultimate-hover-animation-300" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-300">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-300 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage3; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fab  fa-facebook"></i></a>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-300 image-ultimate-hover-animation-300" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-300">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-300 top_to_bottom squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage4; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fab  fa-facebook"></i></a>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 8 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('button', 8); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-303 image-ultimate-hover-animation-303" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-303">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-303 top-to-bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage5; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fab  fa-facebook"></i></a>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-303 image-ultimate-hover-animation-303" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-303">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-303 left_to_right squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage6; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fab  fa-facebook"></i></a>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>

                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 9 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('button', 9); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">

                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-306 image-ultimate-hover-animation-306" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-306">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-306 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage1; ?>">
                                                </div>
                                                <div class="overlayT"></div>
                                                <div class="overlayB"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fab  fa-facebook"></i></a>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-306 image-ultimate-hover-animation-306" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-306">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-306 right_to_left squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage2; ?>">
                                                </div>
                                                <div class="overlayT"></div>
                                                <div class="overlayB"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fab  fa-facebook"></i></a>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Button Effects 10 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('button', 10); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">

                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-312 image-ultimate-hover-animation-312" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-312">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-312 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage3; ?>">
                                                </div>
                                                <div class="overlayT"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fab  fa-facebook"></i></a>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-312 image-ultimate-hover-animation-312" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-312">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-312 top_to_bottom squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage4; ?>">
                                                </div>
                                                <div class="overlayT"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fab  fa-facebook"></i></a>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Button Effects 11 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('button', 11); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

<div class="modal fade" id="iheu-select-data" >
    <form method="post">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Style Settings</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group row form-group-sm">
                        <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                        <div class="col-sm-6 nopadding">
                            <input class="form-control" type="text" value=""  name="style-name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <?php wp_nonce_field("iheustyledata") ?>
                    <input type="hidden" name="style" id="style" value="">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('[data-toggle="tooltip"]').tooltip();
        jQuery(".orphita-style-select").on("click", function () {
            var dataid = jQuery(this).attr("dataid");
            jQuery("#style").val(dataid);
            jQuery("#iheu-select-data").modal("show");
        });
    });
</script>