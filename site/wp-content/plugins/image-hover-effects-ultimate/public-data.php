<?php

function iheu_ultimate_oxi_shortcode_function($data, $userdata) {
    $id = (int) $data;
    global $wpdb;
    $saved_roe = get_option('image_hover_ultimate_mobile_device_key');
    if ($saved_roe != 'normal') {
        wp_enqueue_script('iheu_touch', plugins_url('public/iheu_touch.js', __FILE__));
    }
    wp_enqueue_script('oxilab-animation-js', plugins_url('public/viewportchecker.js', __FILE__));
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
    $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $id), ARRAY_A);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $id), ARRAY_A);
    $stylecss = explode('|', $styledata['css']);
    if ($styledata['style_name'] == 'button-1') {
        include_once image_hover_ultimate_plugin_url . 'button-data.php';
        iheu_ultimate_oxi_shortcode_button1($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'button-2') {
        include_once image_hover_ultimate_plugin_url . 'button-data.php';
        iheu_ultimate_oxi_shortcode_button2($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'button-3') {
        include_once image_hover_ultimate_plugin_url . 'button-data.php';
        iheu_ultimate_oxi_shortcode_button3($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'button-4') {
        include_once image_hover_ultimate_plugin_url . 'button-data.php';
        iheu_ultimate_oxi_shortcode_button4($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'button-5') {
        include_once image_hover_ultimate_plugin_url . 'button-data.php';
        iheu_ultimate_oxi_shortcode_button5($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'button-6') {
        include_once image_hover_ultimate_plugin_url . 'button-data.php';
        iheu_ultimate_oxi_shortcode_button6($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'button-7') {
        include_once image_hover_ultimate_plugin_url . 'button-data.php';
        iheu_ultimate_oxi_shortcode_button7($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'button-8') {
        include_once image_hover_ultimate_plugin_url . 'button-data.php';
        iheu_ultimate_oxi_shortcode_button8($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'button-9') {
        include_once image_hover_ultimate_plugin_url . 'button-data.php';
        iheu_ultimate_oxi_shortcode_button9($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'button-10') {
        include_once image_hover_ultimate_plugin_url . 'button-data.php';
        iheu_ultimate_oxi_shortcode_button10($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'button-11') {
        include_once image_hover_ultimate_plugin_url . 'button-data.php';
        iheu_ultimate_oxi_shortcode_button11($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-1') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general1($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-2') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general2($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-3') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general3($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-4') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general4($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-5') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general5($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-6') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general6($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-7') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general7($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-8') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general8($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-9') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general9($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-10') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general10($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-11') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general11($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-12') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general12($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-13') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general13($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-14') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general14($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-15') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general15($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-16') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general16($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-17') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general17($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-18') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general18($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-19') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general19($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-20') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general20($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-21') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general21($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-22') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general22($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-23') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general23($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-24') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general24($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-25') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general25($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-26') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general26($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-27') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general27($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-28') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general28($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-29') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general29($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-30') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general30($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-31') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general31($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'general-32') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general32($id, $stylecss, $listdata, $userdata);
    }elseif ($styledata['style_name'] == 'square-1') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square1($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-2') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square2($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-3') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square3($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-4') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square4($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-5') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square5($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-6') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square6($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-7') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square7($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-8') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square8($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-9') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square9($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-10') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square10($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-11') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square11($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-12') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square12($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-13') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square13($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-14') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square14($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-15') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square15($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-16') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square16($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-17') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square17($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-18') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square18($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-19') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square19($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-20') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square20($id, $stylecss, $listdata, $userdata);
    } elseif ($styledata['style_name'] == 'square-21') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square21($id, $stylecss, $listdata, $userdata);
    }
}
