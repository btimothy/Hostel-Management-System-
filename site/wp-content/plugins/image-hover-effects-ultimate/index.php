<?php
/*
  Plugin Name: Image Hover Effects Ultimate - Captions Hover with Visual Composer Extension
  Plugin URI: https://www.oxilab.org/downloads/image-hover-ultimate-pro/
  Description: Image Hover Effects Ultimate is an impressive, lightweight, responsive Image hover effects. Use modern and elegant CSS hover effects and animations.
  Author: Biplob Adhikari
  Author URI: http://www.oxilab.org/
  Version: 8.9
 */
if (!defined('ABSPATH'))
    exit;

$image_hover_ultimate_version = '8.9';
define('image_hover_ultimate_plugin_url', plugin_dir_path(__FILE__));
define('IMAGE_HOVER_EFFECTS_ULTIMATE_HOME', 'https://www.oxilab.org'); // you should use your own CONSTANT name, and be sure to replace it throughout this file
// the name of your product. This should match the download name in EDD exactly
define('IMAGE_HOVER_EFFECTS_ULTIMATE', 'Image Hover Effects Ultimate'); // you should use your own CONSTANT name, and be sure to replace it throughout this file
// the name of the settings page for the license input to be displayed
define('IMAGE_HOVER_EFFECTS_ULTIMATE_LICENSE_PAGE', 'image-hover-ultimate-license');

add_shortcode('iheu_ultimate_oxi', 'iheu_ultimate_oxi_shortcode');
include image_hover_ultimate_plugin_url . 'public-data.php';

function iheu_ultimate_oxi_shortcode($atts) {
    extract(shortcode_atts(array('id' => ' ',), $atts));
    $styleid = $atts['id'];
    ob_start();
    iheu_ultimate_oxi_shortcode_function($styleid, 'user');
    return ob_get_clean();
}

if (!function_exists('is_plugin_active')) {
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}
add_action('admin_menu', 'image_hover_ultimate_menu');

function image_hover_ultimate_menu() {
    $user_role = get_option('image_hover_ultimate_user_role_key');
    $role_object = get_role($user_role);
    $first_key = '';
    if (isset($role_object->capabilities) && is_array($role_object->capabilities)) {
        reset($role_object->capabilities);
        $first_key = key($role_object->capabilities);
    } else {
        $first_key = 'manage_options';
    }
    add_menu_page('Image Hover', 'Image Hover', $first_key, 'image-hover-ultimate', 'image_hover_ultimate_home');
    add_submenu_page('image-hover-ultimate', 'Image Hover Ultimate', 'Image Hover', $first_key, 'image-hover-ultimate', 'image_hover_ultimate_home');
    add_submenu_page('image-hover-ultimate', 'General Effects', 'General Effects', $first_key, 'image-hover-ultimate-new', 'image_hover_ultimate_new');
    add_submenu_page('image-hover-ultimate', 'Square Effects', 'Square Effects', $first_key, 'image-hover-ultimate-square', 'image_hover_ultimate_square');
    add_submenu_page('image-hover-ultimate', 'Button Effects', 'Button Effects', $first_key, 'image-hover-ultimate-button', 'image_hover_ultimate_button');
    add_submenu_page('image-hover-ultimate', 'Settings', 'Settings', 'manage_options', IMAGE_HOVER_EFFECTS_ULTIMATE_LICENSE_PAGE, 'image_hover_ultimate_license_page');
    add_submenu_page('image-hover-ultimate', 'Shortcode Addons', 'Shortcode Addons', $first_key, 'image-hover-ultimate-addons', 'image_hover_ultimate_license_addons');
}

function image_hover_ultimate_user_capabilities() {
    if (is_plugin_active('shortcode-addons/index.php')) {
        $user_role = get_option('oxi_addons_user');
    } else {
        $user_role = get_option('image_hover_ultimate_user_role_key');
    }
    $role_object = get_role($user_role);
    $first_key = '';
    if (isset($role_object->capabilities) && is_array($role_object->capabilities)) {
        reset($role_object->capabilities);
        $first_key = key($role_object->capabilities);
    } else {
        $first_key = 'manage_options';
    }
    if (!current_user_can($first_key)) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
}

function image_hover_ultimate_home() {
    include image_hover_ultimate_plugin_url . 'home.php';
    $jquery = 'jQuery(".iheu-admin-side-menu li:eq(0) a").addClass("active");';
    wp_add_inline_script('iheu-vendor-bootstrap-jss', $jquery);
}

function image_hover_ultimate_new() {
    include image_hover_ultimate_plugin_url . 'admin.php';
    iheu_hover_drag_drop_ajax();
    add_action('wp_print_scripts', 'iheu_hover_drag_drop_ajax');
    $jquery = 'jQuery(".iheu-admin-side-menu li:eq(1) a").addClass("active");';
    wp_add_inline_script('iheu-vendor-bootstrap-jss', $jquery);
}

function image_hover_ultimate_square() {
    include image_hover_ultimate_plugin_url . 'square.php';
    iheu_hover_drag_drop_ajax();
    add_action('wp_print_scripts', 'iheu_hover_drag_drop_ajax');
    $jquery = 'jQuery(".iheu-admin-side-menu li:eq(2) a").addClass("active");';
    wp_add_inline_script('iheu-vendor-bootstrap-jss', $jquery);
}

function image_hover_ultimate_button() {
    include image_hover_ultimate_plugin_url . 'button.php';
    iheu_hover_drag_drop_ajax();
    add_action('wp_print_scripts', 'iheu_hover_drag_drop_ajax');
    $jquery = 'jQuery(".iheu-admin-side-menu li:eq(3) a").addClass("active");';
    wp_add_inline_script('iheu-vendor-bootstrap-jss', $jquery);
}

function image_hover_ultimate_license_addons() {
    wp_enqueue_style('Open+Sans', 'https://fonts.googleapis.com/css?family=Open+Sans');
    wp_enqueue_style('iheu-vendor-style', plugins_url('css-js/style.css', __FILE__));
    wp_enqueue_script('iheu-vendor-bootstrap-jss', plugins_url('css-js/bootstrap.min.js', __FILE__));
    wp_enqueue_style('iheu-vendor-bootstrap', plugins_url('css-js/bootstrap.min.css', __FILE__));
    $faversion = get_option('oxi_addons_font_awesome_version');
    $faversion = explode('||', $faversion);
    wp_enqueue_style('font-awesome-' . $faversion[0], $faversion[1]);
    include image_hover_ultimate_plugin_url . 'css-js/shortcode-addons.php';
}

function iheu_hover_drag_drop_ajax() {
    wp_enqueue_script('image_hover_ultimate-drap-drop', plugins_url('css-js/image-hover-drag.js', __FILE__));
    wp_localize_script('image_hover_ultimate-drap-drop', 'iheu_hover_drag_drop_ajax', array('ajaxurl' => admin_url('admin-ajax.php')));
}

function iheu_hover_admin_ajax_data() {
    check_ajax_referer('iheu_ajax_data', 'security');
    $list_order = sanitize_text_field($_POST['list_order']);
    $list = explode(',', $list_order);
    global $wpdb;
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
    foreach ($list as $value) {
        $data = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_list WHERE id = %d ", $value), ARRAY_A);
        $wpdb->query($wpdb->prepare("INSERT INTO {$table_list} (styleid, title, files, buttom_text, link, image, hoverimage, data1, data1link, data2, data2link) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", array($data['styleid'], $data['title'], $data['files'], $data['buttom_text'], $data['link'], $data['image'], $data['hoverimage'], $data['data1'], $data['data1link'], $data['data2'], $data['data2link'])));
        $redirect_id = $wpdb->insert_id;
        if ($redirect_id == 0) {
            die();
        }
        if ($redirect_id != 0) {
            $wpdb->query($wpdb->prepare("DELETE FROM $table_list WHERE id = %d", $value));
        }
    }
    die();
}

add_action('wp_ajax_iheu_hover_admin_ajax_data', 'iheu_hover_admin_ajax_data');

add_action('admin_head', 'add_image_hover_ultimate_icons_styles');

function add_image_hover_ultimate_icons_styles() {
    ?>
    <style>
        #adminmenu #toplevel_page_image-hover-ultimate div.wp-menu-image:before {
            content: "\f168";
        }
    </style>

    <?php
}

register_activation_hook(__FILE__, 'image_hover_ultimate_install');

function image_hover_ultimate_install() {
    global $wpdb;
    global $image_hover_ultimate_version;
    $fawesome = '5.3.1||https://use.fontawesome.com/releases/v5.3.1/css/all.css';
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';

    $charset_collate = $wpdb->get_charset_collate();

    $sql1 = "CREATE TABLE $table_name (
		id mediumint(5) NOT NULL AUTO_INCREMENT,
                name varchar(50) NOT NULL,
		style_name varchar(10) NOT NULL,
                css text NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

    $sql2 = "CREATE TABLE $table_list (
		id mediumint(5) NOT NULL AUTO_INCREMENT,
                styleid mediumint(6) NOT NULL,
		title text,
                files text,
                buttom_text varchar(800),
                link varchar(800),
                image varchar(800),
                hoverimage varchar(800),
                data1 varchar(50),
                data1link varchar(800),
                data2 varchar(50),
                data2link varchar(800),
		PRIMARY KEY  (id)
	) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta($sql1);
    dbDelta($sql2);

    add_option('image_hover_ultimate_version', $image_hover_ultimate_version);
    $now = strtotime("now");
    add_option('image_hover_ultimate_activation_date', $now);
    add_option('oxi_addons_font_awesome_version', $fawesome);
    set_transient('_Iheu_image_hover_welcome_activation_redirect', true, 30);
}

add_action('admin_init', 'Iheu_image_hover_welcome_do_activation_redirect');

function Iheu_image_hover_welcome_do_activation_redirect() {
    if (!get_transient('_Iheu_image_hover_welcome_activation_redirect')) {
        return;
    }
    delete_option('oxi_image_hover_ultimate_notifications');
    delete_transient('_Iheu_image_hover_welcome_activation_redirect');
    if (is_network_admin() || isset($_GET['activate-multi'])) {
        return;
    }
    wp_safe_redirect(add_query_arg(array('page' => 'Iheu-image-hover-effects-welcome'), admin_url('index.php')));
}

add_action('admin_menu', 'iheu_image_hover_welcome_pages');

function iheu_image_hover_welcome_pages() {
    add_dashboard_page(
            'Welcome To Image Hover Effects Ultimate', 'Welcome To Image Hover Effects Ultimate', 'read', 'Iheu-image-hover-effects-welcome', 'iheu_image_hover_effects_welcome'
    );
}

function iheu_image_hover_effects_welcome() {
    wp_enqueue_style('iheu-image-welcome-style', plugins_url('css-js/admin-welcome.css', __FILE__));
    ?>
    <div class="wrap about-wrap">

        <h1>Welcome to Image Hover Effects Ultimate</h1>
        <div class="about-text">
            Thank you for choosing image Hover Effects Ultimate - the most friendly WordPress Image Hover plugin. Here's how to get started.
        </div>
        <h2 class="nav-tab-wrapper">
            <a class="nav-tab nav-tab-active">
                Getting Started		
            </a>
        </h2>
        <p class="about-description">
            Use the tips below to get started using Image Hover Effects Ultimate. You will be up and running in no time.	
        </p>
        <div class="feature-section">
            <h3>Creating Your First Hover Effects</h3>
            <p>Image Hover Effects makes it easy to create Hover Effects in WordPress. You can follow the video tutorial on the right or read our how to 
                <a href="http://www.oxilab.org/docs/image-hover-effects-ultimate/getting-started/installing-for-first-time/" target="_blank" rel="noopener">create your first Hover effects guide</a>.					</p>
            <p>But in reality, the process is so intuitive that you can just start by going to <a href="<?php echo admin_url(); ?>admin.php?page=image-hover-ultimate-new">Image Hover - &gt; General Effects</a>.				</p>
            </br>
            </br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/fUZ1SC0UAtY" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="feature-section">
            <h3>See all Image Hover Effects Ultimate Features</h3>
            <p>Image Hover Effects Ultimate is both easy to use and extremely powerful. We have tons of helpful features that allows us to give you everything you need on Image Hover Effects.</p>
            <p>1. Awesome Live Preview Panel</p>
            <p>1. Can Customize with Our Settings</p>
            <p>1. Easy to USE & Builtin Integration for popular Page Builder</p>
            <p><a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/" target="_blank" rel="noopener" class="iheu-image-features-button button button-primary">See all Features</a></p>

        </div>
        <div class="feature-section">
            <h3>Have any Bugs or Suggestion</h3>
            <p>Your suggestions will make this plugin even better, Even if you get any bugs on SB Image Hover Effects so let us to know, We will try to solved within few hours</p>
            <p><a href="https://www.oxilab.org/contact-us" target="_blank" rel="noopener" class="iheu-image-features-button button button-primary">Contact Us</a>
                <a href="https://wordpress.org/support/plugin/image-hover-effects-ultimate" target="_blank" rel="noopener" class="iheu-image-features-button button button-primary">Support Forum</a></p>

        </div>

    </div>
    <?php
}

add_action('admin_head', 'iheu_image_hover_welcome_screen_remove_menus');

function iheu_image_hover_welcome_screen_remove_menus() {
    remove_submenu_page('index.php', 'Iheu-image-hover-effects-welcome');
}

function iheu_html_special_charecter($data) {
    $data = html_entity_decode($data);
    $data = str_replace("\'", "'", $data);
    $data = str_replace('\"', '"', $data);
    return $data;
}

function iheu_font_familly_special_charecter($data) {
    wp_enqueue_style('' . $data . '', 'https://fonts.googleapis.com/css?family=' . $data . '');
    $data = str_replace('+', ' ', $data);
    $data = explode(':', $data);
    $data = $data[0];
    $data = '"' . $data . '"';
    return $data;
}

if (is_plugin_active('js_composer/js_composer.php')) {
    add_action('vc_before_init', 'iheu_oxi_VC_extension');
    add_shortcode('iheu_oxi_VC', 'iheu_oxi_VC_shortcode');

    function iheu_oxi_VC_shortcode($atts) {
        extract(shortcode_atts(array(
            'id' => ''
                        ), $atts));
        $styleid = $atts['id'];
        ob_start();
        iheu_ultimate_oxi_shortcode_function($styleid, 'user');
        return ob_get_clean();
    }

    function iheu_oxi_VC_extension() {
        global $wpdb;
        $data = $wpdb->get_results('SELECT * FROM ' . $wpdb->prefix . 'image_hover_ultimate_style ORDER BY id DESC', ARRAY_A);
        $vcdata = array();
        foreach ($data as $value) {
            $vcdata[] = $value['id'];
        }
        vc_map(array(
            "name" => __("Image Hover Ultimate"),
            "base" => "iheu_oxi_VC",
            "category" => __("Content"),
            "params" => array(
                array(
                    "type" => "dropdown",
                    "heading" => "Image Hover Select",
                    "param_name" => "id",
                    "value" => $vcdata,
                    'save_always' => true,
                    "description" => "Select your Image Hover ID",
                    "group" => 'Settings',
                ),
            )
        ));
    }

}



add_filter('widget_text', 'do_shortcode');
include image_hover_ultimate_plugin_url . 'widget.php';

// load our custom updater
include( dirname(__FILE__) . '/Plugin_Updater.php' );

function image_hover_ultimate_plugin_updater() {
    $license_key = trim(get_option('image_hover_ultimate_license_key'));
    // retrieve our license key from the DB
    // setup the updater
    $image_hover_ultimate_updater = new IMAGE_HOVER_EFFECTS_ULTIMATE_Plugin_Updater(IMAGE_HOVER_EFFECTS_ULTIMATE_HOME, __FILE__, array(
        'version' => '8.9', // current version number
        'license' => $license_key, // license key (used get_option above to retrieve from DB)
        'item_name' => IMAGE_HOVER_EFFECTS_ULTIMATE, // name of this plugin
        'author' => 'Biplob Adhikari', // author of this plugin
        'beta' => false
            )
    );
}

$status = get_option('image_hover_ultimate_license_status');
if ($status == 'valid') {
    add_action('admin_init', 'image_hover_ultimate_plugin_updater', 0);
}

/* * **********************************
 * the code below is just a standard
 * options page. Substitute with
 * your own.
 * *********************************** */

function image_hover_ultimate_license_page() {
    $license = get_option('image_hover_ultimate_license_key');
    $status = get_option('image_hover_ultimate_license_status');
    global $wp_roles;
    $roles = $wp_roles->get_names();
    $saved_role = get_option('image_hover_ultimate_user_role_key');
    $saved_roe = get_option('image_hover_ultimate_mobile_device_key');
    $fontawvr = get_option('oxi_addons_font_awesome_version');
    $fontawesomevr = array(
        array('name' => '5.7.2', 'url' => '5.7.2||https://use.fontawesome.com/releases/v5.7.2/css/all.css'),
        array('name' => '5.7.1', 'url' => '5.7.1||https://use.fontawesome.com/releases/v5.7.1/css/all.css'),
        array('name' => '5.7.0', 'url' => '5.7.0||https://use.fontawesome.com/releases/v5.7.0/css/all.css'),
        array('name' => '5.6.3', 'url' => '5.6.3||https://use.fontawesome.com/releases/v5.6.3/css/all.css'),
        array('name' => '5.6.0', 'url' => '5.6.0||https://use.fontawesome.com/releases/v5.6.0/css/all.css'),
        array('name' => '5.5.0', 'url' => '5.5.0||https://use.fontawesome.com/releases/v5.5.0/css/all.css'),
        array('name' => '5.4.2', 'url' => '5.4.2||https://use.fontawesome.com/releases/v5.4.2/css/all.css'),
        array('name' => '5.4.1', 'url' => '5.4.1||https://use.fontawesome.com/releases/v5.4.1/css/all.css'),
        array('name' => '5.3.1', 'url' => '5.3.1||https://use.fontawesome.com/releases/v5.3.1/css/all.css'),
        array('name' => '5.2.0', 'url' => '5.2.0||https://use.fontawesome.com/releases/v5.2.0/css/all.css'),
        array('name' => '5.1.1', 'url' => '5.1.1||https://use.fontawesome.com/releases/v5.1.1/css/all.css'),
        array('name' => '5.1.0', 'url' => '5.1.0||https://use.fontawesome.com/releases/v5.1.0/css/all.css'),
        array('name' => '5.0.13', 'url' => '5.0.13||https://use.fontawesome.com/releases/v5.0.13/css/all.css'),
        array('name' => '5.0.12', 'url' => '5.0.12||https://use.fontawesome.com/releases/v5.0.12/css/all.css'),
        array('name' => '5.0.10', 'url' => '5.0.10||https://use.fontawesome.com/releases/v5.0.10/css/all.css'),
        array('name' => '5.0.9', 'url' => '5.0.9||https://use.fontawesome.com/releases/v5.0.9/css/all.css'),
        array('name' => '5.0.8', 'url' => '5.0.8||https://use.fontawesome.com/releases/v5.0.8/css/all.css'),
        array('name' => '5.0.6', 'url' => '5.0.6||https://use.fontawesome.com/releases/v5.0.6/css/all.css'),
        array('name' => '5.0.4', 'url' => '5.0.4||https://use.fontawesome.com/releases/v5.0.4/css/all.css'),
        array('name' => '4.7.0', 'url' => '4.7.0||https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'),
    );
    ?>
    <div class="wrap">  
        <form method="post" action="options.php">
            <?php settings_fields('oxi-addons-iheu-settings-group'); ?>
            <?php do_settings_sections('oxi-addons-iheu-settings-group'); ?>
            <h2><?php _e('User Role'); ?></h2>
            <p>Select User Role Who Can Save Edit and Delete Image Hover Effects Ultimate Data.</p>

            <table class="form-table">
                <tbody>
                    <tr valign="top">
                        <th scope="row" valign="top">
                            <?php _e('Who Can Edit?'); ?>
                        </th>
                        <td>
                            <select class="widefat" name="image_hover_ultimate_user_role_key">
                                <?php foreach ($roles as $key => $role) { ?>
                                    <option value="<?php echo $key; ?>" <?php selected($saved_role, $key); ?>><?php echo $role; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td>                           
                            <label class="description" for="image_hover_ultimate_user_role"><?php _e('Select the Role who can manage Image Hover Effects Ultimate.'); ?>
                                <a target="_blank" href="https://codex.wordpress.org/Roles_and_Capabilities#Capability_vs._Role_Table">Help</a></label>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php submit_button(); ?>

            <br>
            <br>
            <br>
            <h2><?php _e('Mobile or Touch Device Behaviour'); ?></h2>
            <p>Select Mobile or Touch Device behaviour at Image Hover Effects Ultimate Data.</p>

            <table class="form-table">
                <tbody>
                    <tr valign="top">
                        <th scope="row" valign="top">
                            <?php _e('Select One'); ?>
                        </th>
                        <td>
                            <select class="widefat" name="image_hover_ultimate_mobile_device_key">                               
                                <option value="touch" <?php
                            if ($saved_roe == 'touch') {
                                echo 'selected';
                            }
                            ?>>Effects First and 2nd Tap to link Open</option>
                                <option value="normal" <?php
                            if ($saved_roe == 'normal') {
                                echo 'selected';
                            }
                            ?>>Click and Open Link</option>
                            </select>
                        </td>
                        <td>                           
                            <label class="description" for="image_hover_ultimate_mobile_device"><?php _e('Select option as Effects first with second tap to open link or works normally as click to open link.'); ?></label>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php submit_button(); ?>

            <br>
            <br>
            <br>
            <h2><?php _e('Font Awesome Icons'); ?></h2>
            <p>Set Your Font Awesome Icon Ad your Theme Settings.</p>

            <table class="form-table">
                <tbody>

                    <tr valign="top">
                        <td scope="row">Font Awesome Support</td>
                        <td>
                            <input type="radio" name="oxi_addons_font_awesome" value="yes" <?php checked('yes', get_option('oxi_addons_font_awesome'), true); ?>>YES
                            <input type="radio" name="oxi_addons_font_awesome" value="" <?php checked('', get_option('oxi_addons_font_awesome'), true); ?>>No
                        </td>
                        <td>
                            <label class="description" for="oxi_addons_font_awesome"><?php _e('Load Font Awesome CSS at shortcode loading, If your theme already loaded select No for faster loading'); ?></label>
                        </td>
                    </tr> 
                    <tr valign="top">
                        <td scope="row">Font Awesome Version?</td>
                        <td>
                            <select name="oxi_addons_font_awesome_version">
                                <?php foreach ($fontawesomevr as $value) { ?>
                                    <option value="<?php echo $value['url']; ?>" <?php selected($fontawvr, $value['url']); ?>><?php echo $value['name']; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td>
                            <label class="description" for="oxi_addons_font_awesome_version"><?php _e('Select Your Font Awesome version, Which are using into your sites so Its will not conflict your Icons'); ?></label>
                        </td>
                    </tr>  

                </tbody>
            </table>
            <?php submit_button(); ?>
        </form>


        <br>
        <br>
        <br>
        <h2><?php _e('Product License Activation'); ?></h2>
        <p>Activate your copy to get direct plugin updates and official support.</p>
        <form method="post" action="options.php">

            <?php settings_fields('image_hover_ultimate_license'); ?>

            <table class="form-table">
                <tbody>
                    <tr valign="top">
                        <th scope="row" valign="top">
                            <?php _e('License Key'); ?>
                        </th>
                        <td>
                            <input id="image_hover_ultimate_license_key" name="image_hover_ultimate_license_key" type="text" class="regular-text" value="<?php esc_attr_e($license); ?>" />
                            <label class="description" for="image_hover_ultimate_license_key"><?php _e('Enter your license key'); ?></label>
                        </td>
                    </tr>
                    <?php if (!empty($license)) { ?>
                        <tr valign="top">
                            <th scope="row" valign="top">
                                <?php _e('Activate License'); ?>
                            </th>
                            <td>
                                <?php if ($status !== false && $status == 'valid') { ?>
                                    <span style="color:green;"><?php _e('active'); ?></span>
                                    <?php wp_nonce_field('image_hover_ultimate_nonce', 'image_hover_ultimate_nonce'); ?>
                                    <input type="submit" class="button-secondary" name="image_hover_ultimate_license_deactivate" value="<?php _e('Deactivate License'); ?>"/>
                                    <?php
                                } else {
                                    wp_nonce_field('image_hover_ultimate_nonce', 'image_hover_ultimate_nonce');
                                    ?>
                                    <input type="submit" class="button-secondary" name="image_hover_ultimate_license_activate" value="<?php _e('Activate License'); ?>"/>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php submit_button(); ?>

        </form>
        <?php
    }

    function oxi_addons_plugin_iheu_settings() {
        //register our settings
        register_setting('oxi-addons-iheu-settings-group', 'image_hover_ultimate_mobile_device_key');
        register_setting('oxi-addons-iheu-settings-group', 'image_hover_ultimate_user_role_key');
        register_setting('oxi-addons-iheu-settings-group', 'oxi_addons_font_awesome_version');
        register_setting('oxi-addons-iheu-settings-group', 'oxi_addons_fixed_header_size');
    }

    add_action('admin_init', 'oxi_addons_plugin_iheu_settings');

    function image_hover_ultimate_register_option() {
        // creates our settings in the options table
        register_setting('image_hover_ultimate_license', 'image_hover_ultimate_license_key', 'image_hover_ultimate_sanitize_license');
    }

    add_action('admin_init', 'image_hover_ultimate_register_option');

    function image_hover_ultimate_sanitize_license($new) {
        $old = get_option('image_hover_ultimate_license_key');
        if ($old && $old != $new) {
            delete_option('image_hover_ultimate_license_status'); // new license has been entered, so must reactivate
        }
        return $new;
    }

    /*     * **********************************
     * this illustrates how to activate
     * a license key
     * *********************************** */

    function image_hover_ultimate_activate_license() {

        // listen for our activate button to be clicked
        if (isset($_POST['image_hover_ultimate_license_activate'])) {

            // run a quick security check
            if (!check_admin_referer('image_hover_ultimate_nonce', 'image_hover_ultimate_nonce'))
                return; // get out if we didn't click the Activate button
// retrieve the license from the database
            $license = trim(get_option('image_hover_ultimate_license_key'));


            // data to send in our API request
            $api_params = array(
                'edd_action' => 'activate_license',
                'license' => $license,
                'item_name' => urlencode(IMAGE_HOVER_EFFECTS_ULTIMATE), // the name of our product in EDD
                'url' => home_url()
            );

            // Call the custom API.
            $response = wp_remote_post(IMAGE_HOVER_EFFECTS_ULTIMATE_HOME, array('timeout' => 15, 'sslverify' => false, 'body' => $api_params));

            // make sure the response came back okay
            if (is_wp_error($response) || 200 !== wp_remote_retrieve_response_code($response)) {

                if (is_wp_error($response)) {
                    $message = $response->get_error_message();
                } else {
                    $message = __('An error occurred, please try again.');
                }
            } else {

                $license_data = json_decode(wp_remote_retrieve_body($response));

                if (false === $license_data->success) {

                    switch ($license_data->error) {

                        case 'expired' :

                            $message = sprintf(
                                    __('Your license key expired on %s.'), date_i18n(get_option('date_format'), strtotime($license_data->expires, current_time('timestamp')))
                            );
                            break;

                        case 'revoked' :

                            $message = __('Your license key has been disabled.');
                            break;

                        case 'missing' :

                            $message = __('Invalid license.');
                            break;

                        case 'invalid' :
                        case 'site_inactive' :

                            $message = __('Your license is not active for this URL.');
                            break;

                        case 'item_name_mismatch' :

                            $message = sprintf(__('This appears to be an invalid license key for %s.'), IMAGE_HOVER_EFFECTS_ULTIMATE);
                            break;

                        case 'no_activations_left':

                            $message = __('Your license key has reached its activation limit.');
                            break;

                        default :

                            $message = __('An error occurred, please try again.');
                            break;
                    }
                }
            }

            // Check if anything passed on a message constituting a failure
            if (!empty($message)) {
                $base_url = admin_url('admin.php?page=' . IMAGE_HOVER_EFFECTS_ULTIMATE_LICENSE_PAGE);
                $redirect = add_query_arg(array('sl_activation' => 'false', 'message' => urlencode($message)), $base_url);

                wp_redirect($redirect);
                exit();
            }

            // $license_data->license will be either "valid" or "invalid"

            update_option('image_hover_ultimate_license_status', $license_data->license);
            wp_redirect(admin_url('admin.php?page=' . IMAGE_HOVER_EFFECTS_ULTIMATE_LICENSE_PAGE));
            exit();
        }
    }

    add_action('admin_init', 'image_hover_ultimate_activate_license');


    /*     * *********************************************
     * Illustrates how to deactivate a license key.
     * This will decrease the site count
     * ********************************************* */

    function image_hover_ultimate_deactivate_license() {

        // listen for our activate button to be clicked
        if (isset($_POST['image_hover_ultimate_license_deactivate'])) {

            // run a quick security check
            if (!check_admin_referer('image_hover_ultimate_nonce', 'image_hover_ultimate_nonce'))
                return; // get out if we didn't click the Activate button
// retrieve the license from the database
            $license = trim(get_option('image_hover_ultimate_license_key'));


            // data to send in our API request
            $api_params = array(
                'edd_action' => 'deactivate_license',
                'license' => $license,
                'item_name' => urlencode(IMAGE_HOVER_EFFECTS_ULTIMATE), // the name of our product in EDD
                'url' => home_url()
            );

            // Call the custom API.
            $response = wp_remote_post(IMAGE_HOVER_EFFECTS_ULTIMATE_HOME, array('timeout' => 15, 'sslverify' => false, 'body' => $api_params));

            // make sure the response came back okay
            if (is_wp_error($response) || 200 !== wp_remote_retrieve_response_code($response)) {

                if (is_wp_error($response)) {
                    $message = $response->get_error_message();
                } else {
                    $message = __('An error occurred, please try again.');
                }

                $base_url = admin_url('admin.php?page=' . IMAGE_HOVER_EFFECTS_ULTIMATE_LICENSE_PAGE);
                $redirect = add_query_arg(array('sl_activation' => 'false', 'message' => urlencode($message)), $base_url);

                wp_redirect($redirect);
                exit();
            }

            // decode the license data
            $license_data = json_decode(wp_remote_retrieve_body($response));

            // $license_data->license will be either "deactivated" or "failed"
            if ($license_data->license == 'deactivated') {
                delete_option('image_hover_ultimate_license_status');
            }

            wp_redirect(admin_url('admin.php?page=' . IMAGE_HOVER_EFFECTS_ULTIMATE_LICENSE_PAGE));
            exit();
        }
    }

    add_action('admin_init', 'image_hover_ultimate_deactivate_license');


    /*     * **********************************
     * this illustrates how to check if
     * a license key is still valid
     * the updater does this for you,
     * so this is only needed if you
     * want to do something custom
     * *********************************** */

    function image_hover_ultimate_check_license() {

        global $wp_version;

        $license = trim(get_option('image_hover_ultimate_license_key'));

        $api_params = array(
            'edd_action' => 'check_license',
            'license' => $license,
            'item_name' => urlencode(IMAGE_HOVER_EFFECTS_ULTIMATE),
            'url' => home_url()
        );

        // Call the custom API.
        $response = wp_remote_post(IMAGE_HOVER_EFFECTS_ULTIMATE_HOME, array('timeout' => 15, 'sslverify' => false, 'body' => $api_params));

        if (is_wp_error($response))
            return false;

        $license_data = json_decode(wp_remote_retrieve_body($response));

        if ($license_data->license == 'valid') {
            echo 'valid';
            exit;
            // this license is still valid
        } else {
            echo 'invalid';
            exit;
            // this license is no longer valid
        }
    }

    /**
     * This is a means of catching errors from the activation method above and displaying it to the customer
     */
    function image_hover_ultimate_admin_notices() {
        if (isset($_GET['sl_activation']) && !empty($_GET['message'])) {

            switch ($_GET['sl_activation']) {

                case 'false':
                    $message = urldecode($_GET['message']);
                    ?>
                    <div class="error">
                        <p><?php echo $message; ?></p>
                    </div>
                    <?php
                    break;

                case 'true':
                default:
                    // Developers can put a custom success message here for when activation is successful if they way.
                    break;
            }
        }
    }

    add_action('admin_notices', 'image_hover_ultimate_admin_notices');

    function iheu_video_toturial() {
        ?>
        <div class="ihewc-admin-style-settings-div-css">
            <div class="col-xs-12">                                           
                <a href="https://www.oxilab.org/docs/image-hover-effects-ultimate/getting-started/installing-for-first-time/" target="_blank">
                    <div class="col-xs-support-ihewc">
                        <div class="ihewc-admin-support-icon">
                            <i class="fas fa-file" aria-hidden="true"></i>
                        </div>  
                        <div class="ihewc-admin-support-heading">
                            Read Our Docs
                        </div> 
                        <div class="ihewc-admin-support-info">
                            Learn how to set up and using Image Hover Ultimate
                        </div> 
                    </div>
                </a>
                <a href="https://wordpress.org/support/plugin/image-hover-effects-ultimate" target="_blank">
                    <div class="col-xs-support-ihewc">
                        <div class="ihewc-admin-support-icon">
                            <i class="fas fa-users" aria-hidden="true"></i>
                        </div>  
                        <div class="ihewc-admin-support-heading">
                            Support
                        </div> 
                        <div class="ihewc-admin-support-info">
                            Powered by WordPress.org, Issues resolved by Plugins Author.
                        </div> 
                    </div>
                </a>
                <a href="https://www.youtube.com/watch?v=fUZ1SC0UAtY" target="_blank">
                    <div class="col-xs-support-ihewc">
                        <div class="ihewc-admin-support-icon">
                            <i class="fas fa-ticket-alt" aria-hidden="true"></i>
                        </div>  
                        <div class="ihewc-admin-support-heading">
                            Video Tutorial 
                        </div> 
                        <div class="ihewc-admin-support-info">
                            Watch our Using Video Toturial in Youtube.
                        </div> 
                    </div>
                </a>
            </div>
        </div> 
        <?php
    }

    function iheu_promote_free() {
        $second = '<div class="iheu-admin-wrapper ">
                        <ul class="oxilab-admin-menu iheu-admin-side-menu">  
                            <li><a href="' . admin_url('admin.php?page=image-hover-ultimate') . '">Image Hover</a></li>
                            <li><a href="' . admin_url('admin.php?page=image-hover-ultimate-new') . '">General Effects</a></li>
                            <li><a href="' . admin_url('admin.php?page=image-hover-ultimate-square') . '">Square Effects</a></li>
                            <li><a href="' . admin_url('admin.php?page=image-hover-ultimate-button') . '">Button Effects</a></li>
                             <li><a href="' . admin_url('admin.php?page=image-hover-ultimate-license') . '">Settings</a></li>
                        </ul>
                    </div> ';
        if (is_plugin_active('shortcode-addons/index.php')) {
            echo '<div class="iheu-admin-wrapper">
                        <ul class="oxilab-admin-menu">  
                            <li><a class="active" href="' . admin_url('admin.php?page=oxi-addons') . '">Shortcode Addons</a></li>
                            <li><a href="' . admin_url('admin.php?page=oxi-addons-import') . '">Import Addons</a></li>
                            <li><a href="' . admin_url('admin.php?page=oxi-addons-import-data') . '">Import Style</a></li>
                            <li><a href="' . admin_url('admin.php?page=oxi-addons-settings') . '">Addons Settings</a></li>
                        </ul>
                    </div> ';
            echo $second;
        } else {
            echo $second;
        }
        $status = get_option('image_hover_ultimate_license_status');
        if ($status != 'valid') {
            $jquery = 'jQuery(".iheu-vendor-color").each(function (index, value) {                             
                            jQuery(this).parent().siblings(".col-sm-6.oxi-control-label").append(" <span class=\"oxi-pro-only\">Pro</span>");
                            var datavalue = jQuery(this).val();
                            jQuery(this).attr("oxivalue", datavalue);
                        });
                        jQuery(".cau-admin-font").each(function (index, value) {
                            jQuery(this).parent().siblings(".col-sm-6.oxi-control-label").append(" <span class=\"oxi-pro-only\">Pro</span>");
                            var datavalue = jQuery(this).val();
                            jQuery(this).attr("oxivalue", datavalue);
                        });
                         jQuery("#iheu-hover-image-upload-url").each(function (index, value) {
                            var dataid = jQuery(this).attr("id");
                            jQuery("." + dataid).append(" <span class=\"oxi-pro-only\">Pro Only</span>");
                        });
                        jQuery("#iheu-css").each(function (index, value) {
                            var dataid = jQuery(this).attr("id");
                            jQuery("." + dataid).append(" <span class=\"oxi-pro-only\">Pro Only</span>");
                            var datavalue = jQuery(this).val();
                            jQuery(this).attr("oxivalue", datavalue);
                        });
                        jQuery("#oxi-style-submit").submit(function () {
                            jQuery(".iheu-vendor-color").each(function (index, value) {
                                var datavalue = jQuery(this).attr("oxivalue");
                                jQuery(this).val(datavalue);
                            });
                            jQuery(".cau-admin-font").each(function (index, value) {
                                var datavalue = jQuery(this).attr("oxivalue");
                                jQuery(this).val(datavalue);
                            });
                            jQuery("#iheu-css").each(function (index, value) {
                                jQuery(this).val("");
                            });
                        });';
            wp_add_inline_script('YouTubePopUps', $jquery);
        }
        echo '<div class="oxilab-admin-notifications">
                <h3>
                    <span class="dashicons dashicons-flag"></span> 
                    Notifications
                </h3>
                <p></p>
                <div class="oxilab-admin-notifications-holder">
                    <div class="oxilab-admin-notifications-alert">
                        <p>Thank you for using Image Hover Effects Ultimate – Captions Hover with Visual Composer. I Just wanted to see if you have any questions or concerns about my plugins. If you do, Please do not hesitate to <a href="https://wordpress.org/support/plugin/image-hover-effects-ultimate#new-post">file a bug report</a>.
                     ';
        if (is_plugin_active('shortcode-addons/index.php')) {
            echo '</p>';
        } else {
            echo 'You can also try <a target="_blank" href="https://wordpress.org/plugins/shortcode-addons/">Shortcode Addons</a>, All in one package for Wordpress sites.</p>';
        }

        if ($status != 'valid') {
            echo '<p>By the way, did you know we also have a <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/">Premium Version</a>? It offers lots of options with automatic update. It also comes with 16/5 personal support.</p>';
        }
        echo ' <p>Thanks Again!</p>
                    <p></p>
                </div>                        
            </div>
            <p></p>
        </div> 
        <p></p>';
        ?>


        <?php
    }

    $oxi_addons_install = get_option('oxi_addons_install');
    if (empty($oxi_addons_install)) {

        function image_hover_ultimate_set_no_bug() {
            $nobug = "";
            if (isset($_GET['image_hover_ultimate_nobug'])) {
                $nobug = esc_attr($_GET['image_hover_ultimate_nobug']);
            }
            if ('already' == $nobug) {
                add_option('image_hover_ultimate_no_bug', $nobug);
            } elseif ('later' == $nobug) {
                $now = strtotime("now");
                update_option('image_hover_ultimate_activation_date', $now);
            }
        }

        add_action('admin_init', 'image_hover_ultimate_set_no_bug');

        function image_hover_ultimate_check_installation_date() {
            $nobug = "";
            $nobug = get_option('image_hover_ultimate_no_bug');
            $past_date = strtotime('-7 days');
            if ($nobug != 'already') {
                $install_date = get_option('image_hover_ultimate_activation_date');
                if (empty($install_date)) {
                    $now = strtotime("now");
                    add_option('image_hover_ultimate_activation_date', $now);
                } elseif ($past_date >= $install_date) {
                    add_action('admin_notices', 'image_hover_ultimate_display_admin_notice');
                }
            }
        }

        add_action('admin_init', 'image_hover_ultimate_check_installation_date');

        function image_hover_ultimate_display_admin_notice() {

            // Review URL - Change to the URL of your plugin on WordPress.org
            $reviewurl = 'https://wordpress.org/plugins/image-hover-effects-ultimate/';

            $nobugurl = get_admin_url() . '?image_hover_ultimate_nobug=later';
            $nobugurl2 = get_admin_url() . '?image_hover_ultimate_nobug=already';

            echo '<div class="updated">';
            echo '<p></p>';

            printf(__('<p>Hey, You’ve using <strong>Image Hover Effects Ultimate – Captions Hover with Visual Composer </strong> more than 1 week – that’s awesome! Could you please do me a BIG favor and give it a 5-star rating on WordPress? Just to help us spread the word and boost our motivation.!
                     </p>
                    <p><a href=%s target="_blank"><strong>Ok, you deserve it</strong></a></p>
                    <p><a href=%s><strong>Nope, maybe later</strong></a> </p>
                    <p><a href=%s><strong>I already did</strong></a> </p>'), $reviewurl, $nobugurl, $nobugurl2);
            echo '<p></p>';
            echo "</div>";
        }

    }

    function iheudatainputid($style, $id) {
        $status = get_option('image_hover_ultimate_license_status');
        if ($status == 'valid') {
            echo '<button type="button" class="btn btn-success orphita-style-select" dataid="' . $style . '-' . $id . '">Select</button>';
        } else {
            if (($style == 'general' && $id < 16) OR ( $style == 'square' && $id < 16) OR ( $style == 'button' && $id < 6)) {
                echo '<button type="button" class="btn btn-success orphita-style-select" dataid="' . $style . '-' . $id . '">Select</button>';
            } else {
                echo '<button type="button" class="btn btn-danger">Pro Only</button>';
            }
        }
    }
    