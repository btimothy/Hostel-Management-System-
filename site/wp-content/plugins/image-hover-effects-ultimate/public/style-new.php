<?php
if (!defined('ABSPATH'))
    exit;

image_hover_ultimate_user_capabilities();
if (isset($_POST['submit']) && isset($_POST['submit']) == 'Save' && isset($_POST['style'])) {
    if ($_POST['style'] == 'general-1') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||';
    }
    if ($_POST['style'] == 'general-30') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|iheu-background-color |rgba(6, 109, 143, 0.83)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-zoom-in|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |yes|heading-padding-bottom |4|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |0|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|heading-font-hover-color |#ffffff|iheu-css ||';
    }
    if ($_POST['style'] == 'general-2') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 0.71)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |bottom_to_top|';
    }
    if ($_POST['style'] == 'general-3') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-4') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-5') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-6') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |scale_up|';
    }
    if ($_POST['style'] == 'general-7') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-8') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-9') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-10') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |80|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |top_to_bottom|';
    }
    if ($_POST['style'] == 'general-11') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-12') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-13') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||';
    }
    if ($_POST['style'] == 'general-14') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-15') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||';
    }
    if ($_POST['style'] == 'general-16') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-17') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||';
    }
    if ($_POST['style'] == 'general-18') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-19') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |top_to_bottom|';
    }
    if ($_POST['style'] == 'general-20') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |right_to_left|';
    }
    if ($_POST['style'] == 'general-21') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-22') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-23') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-24') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-25') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions ||';
    }
    if ($_POST['style'] == 'general-26') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions ||';
    }
    if ($_POST['style'] == 'general-27') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-28') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-29') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-31') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||';
    }
    if ($_POST['style'] == 'general-32') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-2|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |10|background-color |rgba(255, 255, 255, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|iheu-border |10|iheu-border-color |rgba(255, 255, 255, 0.5)|content-margin |15|box-shadow-color ||heading-font-size |20|heading-font-color |#5c5c5c|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#5c5c5c|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#5c5c5c|bottom-font-background |rgba(255, 255, 255, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#ffffff|bottom-hover-background |rgba(92, 92, 92, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||';
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
$iheuimage1 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/1.jpg';
$iheuimage2 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/2.jpg';
$iheuimage3 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/3.jpg';
$iheuimage4 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/4.jpg';
$iheuimage5 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/5.jpg';
$iheuimage6 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/6.jpg';
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
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-4 image-ultimate-hover-animation-4"  data-av-animation="zoomIn">
                                    <div class="image-ultimate-map-4">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-4">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage1; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-4 image-ultimate-hover-animation-4"  data-av-animation="zoomIn">
                                    <div class="image-ultimate-map-4">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-4 squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage2; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 1 <span> Single Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">                            
                            <?php echo iheudatainputid('general', 1);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">  
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-10 image-ultimate-hover-animation-10"  data-av-animation="zoomIn">
                                    <div class="image-ultimate-map-10">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-10 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage3; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-left"> Fully Customizable </h3>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-10 image-ultimate-hover-animation-10"  data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-10">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-10 left_to_right squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage4; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-left"> Fully Customizable </h3>

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
                            <?php echo iheudatainputid('general', 2);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-17 image-ultimate-hover-animation-17" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-17">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-17 top_to_bottom">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-17  image-ultimate-hover-animation-17" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-17">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-17 bottom_to_top squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 3 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 3);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">   
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-23  image-ultimate-hover-animation-23" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-23">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-23 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-23  image-ultimate-hover-animation-23" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-23">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-23 left_to_right squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 4 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 4);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">   
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-29  image-ultimate-hover-animation-29" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-29">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-29 bottom_to_top">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info-2">
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                            </div>
                                                        </div>
                                                    </div>     
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-29  image-ultimate-hover-animation-23" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-29">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-29 left_to_right squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info-2">
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                            </div>
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
                            Style 5 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 5);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">


                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-34  image-ultimate-hover-animation-34" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-34">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-34 scale_down">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-34  image-ultimate-hover-animation-34" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-34">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-34 scale_up squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 6 <span>3 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 6);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">                              

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-40  image-ultimate-hover-animation-40" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-40">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-40 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-40  image-ultimate-hover-animation-40" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-40">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-40 right_to_left squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 7 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 7);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-46  image-ultimate-hover-animation-46" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-46">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-46 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img-2">
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage3; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="iheu-info-2">
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-46  image-ultimate-hover-animation-46" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-46">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-46 top_to_bottom squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img-2">
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage4; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="iheu-info-2">
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                            </div>
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
                            Style 8 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 8);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-53  image-ultimate-hover-animation-53" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-53">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-53 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-53  image-ultimate-hover-animation-53" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-53">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-53 bottom_to_top squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            <?php echo iheudatainputid('general', 9);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-59  image-ultimate-hover-animation-59" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-59">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-59 bottom_to_top">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-59  image-ultimate-hover-animation-59" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-59">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-59 bottom_to_top squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 10 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 10);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-65  image-ultimate-hover-animation-65" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-65">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-65 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-65  image-ultimate-hover-animation-65" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-65">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-65 left_to_right squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 11 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 11);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-71  image-ultimate-hover-animation-71" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-71">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-71 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-71  image-ultimate-hover-animation-71" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-71">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-71 left_to_right squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 12 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 12);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-77  image-ultimate-hover-animation-77" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-77">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-77">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-flip-x"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-77  image-ultimate-hover-animation-77" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-77">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-77 squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-flip-x"> Fully Customizable </h3>

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
                            Style 13 <span>Single Effect</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 13);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-83 image-ultimate-hover-animation-83" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-83">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-83 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-83  image-ultimate-hover-animation-83" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-83">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-83 right_to_left squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 14 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 14);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-89  image-ultimate-hover-animation-89" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-89">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-89">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-89  image-ultimate-hover-animation-89" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-89">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-89 squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 15 <span>Single Effect</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 15);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-95  image-ultimate-hover-animation-95" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-95">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-95 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-95  image-ultimate-hover-animation-95" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-95">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-95 right_to_left squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 16 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 16);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-101  image-ultimate-hover-animation-101" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-101">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-101">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-101  image-ultimate-hover-animation-101" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-101">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-101 squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 17 <span>Single Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 17);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-107  image-ultimate-hover-animation-107" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-107">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-107 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info-2"> <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                            </div>
                                                        </div> </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-107  image-ultimate-hover-animation-107" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-107">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-107 right_to_left squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info-2"> <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                            </div>
                                                        </div> </div>
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
                            Style 18 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 18);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">


                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-115  image-ultimate-hover-animation-115" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-115">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-115 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info-2">  <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                            </div>
                                                        </div>   </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-115  image-ultimate-hover-animation-115" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-115">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-115 bottom_to_top squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info-2">  <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                            </div>
                                                        </div>   </div>
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
                            Style 19 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                           <?php echo iheudatainputid('general', 19);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-121  image-ultimate-hover-animation-121" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-121">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-121 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-121  image-ultimate-hover-animation-121" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-121">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-121 right_to_left squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 20 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 20);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">



                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-126  image-ultimate-hover-animation-126" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-126">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-126 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 

                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-gen-style"></div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-126  image-ultimate-hover-animation-126" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-126">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-126 left_to_right squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 

                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-gen-style"></div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 21 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 21);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-133  image-ultimate-hover-animation-133" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-133">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-133 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>     
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-133  image-ultimate-hover-animation-133" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-133">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-133 right_to_left squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 22 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 22);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-138  image-ultimate-hover-animation-138" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-138">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-138 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>     
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-138  image-ultimate-hover-animation-138" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-138">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-138 right_to_left squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 23 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 23);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-145  image-ultimate-hover-animation-145" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-145">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-145 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>     
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-145  image-ultimate-hover-animation-145" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-145">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-145 left_to_right squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 24 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 24);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">                           
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-151 image-ultimate-hover-animation-151" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-151">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-151 ">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>     
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-151  image-ultimate-hover-animation-151" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-151">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-151 square">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 25 <span>Single Effect</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 25);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">  
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-158  image-ultimate-hover-animation-158" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-158">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-158 ">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>     
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-158  image-ultimate-hover-animation-158" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-158">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-158 squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 26 <span>Single Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 26);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-163  image-ultimate-hover-animation-163" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-163">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-163 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>     
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-163 image-ultimate-hover-animation-163" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-163">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-163 top_to_bottom squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 27 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 27);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-169  image-ultimate-hover-animation-169" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-169">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-169 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>     
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-169 image-ultimate-hover-animation-169" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-169">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-169 left_to_right squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 28 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 28);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-175  image-ultimate-hover-animation-175" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-175">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-175 ">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>     
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-175  image-ultimate-hover-animation-175" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-175">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-175 squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 29 <span>Single Effect</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 29);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-41 image-ultimate-hover-animation-41"  data-av-animation="zoomIn">
                                    <div class="image-ultimate-map-41">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-41">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage1; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3> Fully Customizable </h3>
                                                        <div class="iheu-data2">
                                                            <p class="iheu-fade-up"> Add Your Description Unless make it blank. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-41 image-ultimate-hover-animation-41"  data-av-animation="zoomIn">
                                    <div class="image-ultimate-map-41">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-41 squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage2; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3> Easy to Setup </h3>
                                                        <div class="iheu-data2">
                                                            <p class="iheu-fade-up"> Add Your Description Unless make it blank. </p>
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
                            Style 30 <span> Single Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                           <?php echo iheudatainputid('general', 30);?>
                        </div>
                    </div>
                    
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">                                
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-42 image-ultimate-hover-animation-42"  data-av-animation="zoomIn">
                                    <div class="image-ultimate-map-4">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-42">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage1; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3> Fully Customizable </h3>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-42 image-ultimate-hover-animation-42"  data-av-animation="zoomIn">
                                    <div class="image-ultimate-map-4">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-42 squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage2; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3> Fully Customizable </h3>

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
                            Style 31 <span> Single Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                           <?php echo iheudatainputid('general', 31);?>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">                               
                                <div class="image-ultimate-responsive-2 orphita-animation image-ultimate-hover-animation-2 image-ultimate-hover-padding-2  orphita-visible zoomIn" orphita-animation="zoomIn">
                                    <div class="image-ultimate-map-2">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-2">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage2; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Frist Title  </h3>
                                                        <p class="iheu-fade-up"> Add Your Description Unless make it blank. </p>
                                                        <a href="#" class="iheu-fade-up iheu-button"> Buy Now </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div><div class="image-ultimate-responsive-2 orphita-animation image-ultimate-hover-animation-2 image-ultimate-hover-padding-2  orphita-visible zoomIn" orphita-animation="zoomIn">
                                    <div class="image-ultimate-map-2">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-2 squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage3; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Second Title  </h3>
                                                        <p class="iheu-fade-up"> Add Your Description Unless make it blank. </p>
                                                        <a href="#" class="iheu-fade-up iheu-button"> Buy Now </a>
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
                            Style 32 <span> Single Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <?php echo iheudatainputid('general', 32);?>
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
                        <label for="style-name" class="col-sm-6 oxi-control-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
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