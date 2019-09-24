<?php
if (!defined('ABSPATH'))
    exit;
image_hover_ultimate_user_capabilities();
wp_enqueue_script('jQuery');
wp_enqueue_style('Open+Sans', 'https://fonts.googleapis.com/css?family=Open+Sans');
wp_enqueue_script('iheu-vendor-bootstrap-jss', plugins_url('css-js/bootstrap.min.js', __FILE__));
wp_enqueue_style('iheu-vendor-bootstrap', plugins_url('css-js/bootstrap.min.css', __FILE__));
wp_enqueue_style('iheu-square-style', plugins_url('css-js/square-style.css', __FILE__));
wp_enqueue_style('iheu-vendor-style', plugins_url('css-js/style.css', __FILE__));
$faversion = get_option('oxi_addons_font_awesome_version');
$faversion = explode('||', $faversion);
wp_enqueue_style('font-awesome-' . $faversion[0], $faversion[1]);
wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
$iheuimage1 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/1.jpg';
$iheuimage2 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/2.jpg';
$iheuimage3 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/3.jpg';
$iheuimage4 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/4.jpg';
$iheuimage5 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/5.jpg';
$iheuimage6 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/6.jpg';

if (isset($_POST['submit']) && isset($_POST['submit']) == 'Save') {
    if ($_POST['style'] == 'square-1') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(166, 0, 138, 1)|heading-padding |15|heading-margin-top |20|';
    }
    if ($_POST['style'] == 'square-2') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |yes|heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color ||heading-padding |15|heading-margin-top ||iheu-directions |top_to_bottom|';
    }
    if ($_POST['style'] == 'square-3') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |yes|heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color ||heading-padding |10|heading-margin-top |0|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'square-4') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |10|heading-margin-top |0|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'square-5') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |10|heading-margin-top |0|iheu-directions ||';
    }
    if ($_POST['style'] == 'square-6') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |10|heading-margin-top |0|iheu-directions |scale_up|';
    }
    if ($_POST['style'] == 'square-7') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |10|heading-margin-top |0|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'square-8') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |10|heading-margin-top |0|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'square-9') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |10|heading-margin-top |0|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'square-10') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |10|heading-margin-top |0|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'square-11') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |15|heading-margin-top |0|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'square-12') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |15|heading-margin-top |0|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'square-13') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |15|heading-margin-top |0|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'square-14') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-left|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color ||heading-padding |15|heading-margin-top ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'square-15') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |0|image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-left|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'square-16') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|content-height |80|image-width |300|image-height |300|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment ||open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-left|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |5|desc-font-size |15|desc-font-color |#7bfaae|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom ||bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||iheu-directions |top_to_bottom|';
    }
    if ($_POST['style'] == 'square-17') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|content-height |80|image-width |300|image-height |300|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment ||open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-left|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |5|desc-font-size |15|desc-font-color |#7bfaae|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom ||bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||iheu-directions |top_to_bottom|';
    }
    if ($_POST['style'] == 'square-18') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|content-height ||image-width |300|image-height |300|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment ||open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-left|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |5|desc-font-size |15|desc-font-color |#7bfaae|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom ||bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'square-19') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|content-height ||image-width |300|image-height |300|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment ||open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-left|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |5|desc-font-size |15|desc-font-color |#7bfaae|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom ||bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||iheu-directions ||';
    }
    if ($_POST['style'] == 'square-20') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|content-height ||image-width |300|image-height |300|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment ||open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-left|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |5|desc-font-size |15|desc-font-color |#7bfaae|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom ||bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||iheu-directions |top_to_bottom|';
    }
    if ($_POST['style'] == 'square-21') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|hover-height |120|image-width |300|image-height |300|image-margin |20|image-padding |5|background-color |rgba(0, 146, 194, 1)|content-alignment ||open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |5|desc-font-size |15|desc-font-color |#7bfaae|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom ||bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||iheu-directions |top_to_bottom|';
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
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-180 image-ultimate-hover-animation-180" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-180">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-180">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-180 image-ultimate-hover-animation-180" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-180">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-180">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up" style="margin-top: 0"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
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
                            <?php echo iheudatainputid('square', 1); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-184 image-ultimate-hover-animation-184" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-184">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-184 top_to_bottom">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-184 image-ultimate-hover-animation-184" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-184">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-184 bottom_to_top">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 2 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 2); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-188  image-ultimate-hover-animation-188" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-188">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-188 top_to_bottom">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="mask1"></div>
                                                    <div class="mask2"></div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <div class="data-2">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                                <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                            </div> </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-188 image-ultimate-hover-animation-188" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-188">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-188 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="mask1"></div>
                                                    <div class="mask2"></div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <div class="data-2">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                                <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                            </div> </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 3 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 3); ?>
                        </div>
                    </div>                    
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-192  image-ultimate-hover-animation-192" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-192">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-192 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-192  image-ultimate-hover-animation-192" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-192">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-192 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
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
                            <?php echo iheudatainputid('square', 4); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-195  image-ultimate-hover-animation-195" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-195">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-195 ">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-zoom-in"> Fully Customizable </h3>
                                                            <p class="iheu-zoom-in"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-195 image-ultimate-hover-animation-195" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-195">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-195 ">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-zoom-in"> Fully Customizable </h3>
                                                            <p class="iheu-zoom-in"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 5 <span>Single Effect</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 5); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-198  image-ultimate-hover-animation-198" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-198">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-198 scale_up">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-198  image-ultimate-hover-animation-198" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-198">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-198 scale_down">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 6 <span>2 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 6); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-201 image-ultimate-hover-animation-201" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-201">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-201 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info-2"><div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                                <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-201  image-ultimate-hover-animation-201" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-201">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-201 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info-2"><div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                                <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 7 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 7); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-207  image-ultimate-hover-animation-207" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-207">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-207 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-207 image-ultimate-hover-animation-207" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-207">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-207 top_to_bottom">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 8 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 8); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-214 image-ultimate-hover-animation-214" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-214">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-214 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-214 image-ultimate-hover-animation-214" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-214">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-214 top_to_bottom">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 9 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 9); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-219 image-ultimate-hover-animation-219" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-219">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-219 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-219 image-ultimate-hover-animation-219" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-219">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-219 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 10 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 10); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">
                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-225 image-ultimate-hover-animation-225" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-225">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-225 left_to_right">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage3; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-left"> Fully Customizable </h3>
                                                                <p class="iheu-fade-left"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-225 image-ultimate-hover-animation-225" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-225">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-225 right_to_left">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage4; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-left"> Fully Customizable </h3>
                                                                <p class="iheu-fade-left"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
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
                            Square Effects 11 <span>Single Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 11); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">
                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-232 image-ultimate-hover-animation-232" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-232">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-232 right_to_left">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage5; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                                <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-232 image-ultimate-hover-animation-232" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-232">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-232 left_to_right">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage6; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                                <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
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
                            Style 12 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 12); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">
                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-238 image-ultimate-hover-animation-238" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-238">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-238 left_to_right">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage1; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                                <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-238 image-ultimate-hover-animation-238" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-238">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-238 right_to_left">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage2; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                                <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
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
                            Style 13 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 13); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">
                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-244 image-ultimate-hover-animation-244" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-244">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-244 right_to_left">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage3; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-left"> Defult Title </h3>
                                                                <p class="iheu-fade-left"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-244 image-ultimate-hover-animation-244" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-244">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-244 left_to_right">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage4; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-left"> Defult Title </h3>
                                                                <p class="iheu-fade-left"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
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
                            Square Effects 14 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 14); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">                                   
                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-249 image-ultimate-hover-animation-249" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-249">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-249 left_to_right">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage5; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-left"> Defult Title </h3>
                                                                <p class="iheu-fade-left"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-249 image-ultimate-hover-animation-249" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-249">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-249 right_to_left">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage6; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-left"> Defult Title </h3>
                                                                <p class="iheu-fade-left"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
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
                            Style 15 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 15); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">
                                    <div class="image-ultimate-responsive-1  image-ultimate-animation-js image-ultimate-hover-padding-256 image-ultimate-hover-animation-256" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-256">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-256 bottom_to_top">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-left"> Music </h3>
                                                            <p class="iheu-fade-left"> By Jacob Cummings </p>
                                                            <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank" class="iheu-fade-left iheu-button"> Live Now </a>
                                                        </div>
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
                            Style 16 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 16); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">
                                    <div class="image-ultimate-responsive-1  image-ultimate-animation-js image-ultimate-hover-padding-259 image-ultimate-hover-animation-259" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-259">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-259 bottom_to_top">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Music  </h3>
                                                            <p class="iheu-fade-up"> By Jacob Cummings </p>
                                                            <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank" class="iheu-fade-up iheu-button"> Live Now </a>
                                                        </div>
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
                            Style 17 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 17); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">
                                    <div class="image-ultimate-responsive-1  image-ultimate-animation-js image-ultimate-hover-padding-261 image-ultimate-hover-animation-261" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-261">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-261 left_to_right">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-left"> Music </h3>
                                                            <p class="iheu-fade-left"> By Jacob Cummings </p>
                                                            <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank" class="iheu-fade-left iheu-button"> Live Now </a>
                                                        </div>
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
                            Style 18 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 18); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">   
                                    <div class="image-ultimate-responsive-1  image-ultimate-animation-js image-ultimate-hover-padding-265 image-ultimate-hover-animation-265" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-265">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-265 ">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-left"> Music  </h3>
                                                            <p class="iheu-fade-left"> By Jacob Cummings </p>
                                                            <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank" class="iheu-fade-left iheu-button"> Live Now </a>
                                                        </div>
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
                            Style 19 <span>Single Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 19); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">
                                    <div class="image-ultimate-responsive-1  image-ultimate-animation-js image-ultimate-hover-padding-268 image-ultimate-hover-animation-268" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-268">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-268 bottom_to_top">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-left"> Music  </h3>
                                                            <p class="iheu-fade-left"> By Jacob Cummings </p>
                                                            <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank" class="iheu-fade-left iheu-button"> Live Now </a>
                                                        </div>
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
                            Style 20 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 20); ?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">
                                    <div class="image-ultimate-responsive-1  image-ultimate-animation-js image-ultimate-hover-padding-270 image-ultimate-hover-animation-270" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-270">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-270 top_to_bottom">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Music  </h3>
                                                            <p class="iheu-fade-up"> By Jacob Cummings </p>
                                                            <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank" class="iheu-fade-up iheu-button"> Live Now </a>
                                                        </div>
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
                            Style 21 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('square', 21); ?>
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
</div>s
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