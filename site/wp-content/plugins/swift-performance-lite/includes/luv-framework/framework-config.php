<?php
// Intelligent caching backward compatibility
if (Swift_Performance_Lite::check_option('cache-expiry-mode', 'intelligent')){
      Swift_Performance_Lite::update_option('cache-expiry-mode', 'actionbased');
}

// Get post types
$post_types = Swift_Performance_Lite::get_post_types();
$post_types = array_combine($post_types, $post_types);

// Get page list
global $wpdb;
$pages = array();
foreach ($wpdb->get_results("SELECT ID, post_title FROM {$wpdb->posts} WHERE post_type = 'page' AND post_status = 'publish'", ARRAY_A) as $_page) {
    $pages[$_page['ID']] = $_page['post_title'];
}

// Check IP source automatically for GA
$ga_ip_source = '';
foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'HTTP_CF_CONNECTING_IP','REMOTE_ADDR') as $source) {
    if (isset($_SERVER[$source]) && !empty($_SERVER[$source])) {
	  $ga_ip_source = $source;
	  break;
    }
}

// Basic options
$cache_modes = array(
	'disk_cache_php' => esc_html__('Disk Cache with PHP', 'swift-performance'),
);

// Add disk cache + rewrite option if it is available
if (in_array(Swift_Performance_Lite::server_software(), array('apache', 'nginx'))){
      $cache_modes['disk_cache_rewrite'] = esc_html__('Disk Cache with Rewrites', 'swift-performance');
}

// Memcached support
if (class_exists('Memcached')) {
    $cache_modes['memcached_php'] = esc_html__('Memcached with PHP', 'swift-performance');
}

// Plugin based options
$active_plugins = get_option('active_plugins');
$is_woocommerce_active = apply_filters('swift_performance_is_woocommerce_active', in_array('woocommerce/woocommerce.php', $active_plugins));

$swift_countries = array();
if ($is_woocommerce_active) {
    @$swift_countries = apply_filters('woocommerce_countries', include WP_PLUGIN_DIR . '/woocommerce/i18n/countries.php');
}

// User roles
$roles = array();
foreach ((array)get_option($wpdb->prefix . 'user_roles') as $role_slug => $role) {
    $roles[$role_slug] = $role['name'];
}

/**
 * Validate log path
 * @param boolean|array $result
 * @param string $value
 */
function swift_performance_log_path_validate_callback($result, $value){
	// Stop here if logging isn't enabled at all
	if (!isset($_POST['_luv_enable-logging']) || $_POST['_luv_enable-logging'] != 1){
		return $result;
	}

	if (!file_exists($value)) {
	    @mkdir($value, 0777, true);
	    if (!file_exists($value)) {
		  return array('error' => __('Log directory doesn\'t exists', 'swift-performance'));
	    }
	} elseif (!is_dir($value)) {
	    return array('error' => __('Log directory should be a directory', 'swift-performance'));
	} elseif (!is_writable($value)) {
	    return array('error' => __('Log directory isn\'t writable for WordPress. Please change the permissions.', 'swift-performance'));
	}

	return $result;
}

/**
 * Validate caching mode
 * @param boolean|array $result
 * @param string $value
 */
function swift_performance_cache_mode_validate_callback($result, $value){
      // Check htaccess only for Apache
      if ($value != 'disk_cache_rewrite' || Swift_Performance_Lite::server_software() != 'apache') {
          return true;
      }

      $htaccess = ABSPATH . '.htaccess';

      if (!file_exists($htaccess)) {
          @touch($htaccess);
          if (!file_exists($htaccess)) {
              return array('warning' => esc_html__('htaccess doesn\'t exists', 'swift-performance'));
          }
      } elseif (!is_writable($htaccess)) {
          return array('warning' => esc_html__('htaccess isn\'t writable for WordPress. Please change the permissions.', 'swift-performance'));
      }

      return true;
}

/**
 * Validate caching mode
 * @param boolean|array $result
 * @param string $value
 */
function swift_performance_muplugins_validate_callback($result, $value){
      $muplugins_dir = WPMU_PLUGIN_DIR;

      if ($value == 1) {
          if (!file_exists($muplugins_dir)) {
             @mkdir($muplugins_dir, 0777);
             if (!file_exists($muplugins_dir)) {
                  return array('error' => esc_html__('MU Plugins directory doesn\'t exists', 'swift-performance'));
             }
          } elseif (!is_writable($muplugins_dir)) {
            return array('error' => esc_html__('MU Plugins directory isn\'t writable for WordPress. Please change the permissions.', 'swift-performance'));
          }
      }
}

/**
 * Validate caching mode
 * @param boolean|array $result
 * @param string $value
 */
function swift_performance_cache_path_validate_callback($result, $value){
      if (!file_exists($value)) {
            @mkdir($value, 0777, true);
            if (!file_exists($value)) {
                  return array('error' => esc_html__('Cache directory doesn\'t exists', 'swift-performance'));
            }
      } elseif (!is_dir($value)) {
            return array('error' => esc_html__('Cache directory should be a directory', 'swift-performance'));
      } elseif (!is_writable($value)) {
            return array('error' => esc_html__('Cache directory isn\'t writable for WordPress. Please change the permissions.', 'swift-performance'));
      }

      return true;
}


// Conditional hooks
add_action('luv_framework_before_fields_init', function($that){
      if (defined('SWIFT_PERFORMANCE_WHITELABEL') && SWIFT_PERFORMANCE_WHITELABEL){
            unset($that->args['sections']['general']['subsections']['whitelabel']);
      }

      // Plugin based options
      $active_plugins = get_option('active_plugins');
      $is_woocommerce_active = apply_filters('swift_performance_is_woocommerce_active', in_array('woocommerce/woocommerce.php', $active_plugins));

      if (!$is_woocommerce_active) {
          unset($that->args['sections']['woocommerce']);
      }
});

// Add header
add_action('luv_framework_before_framework_header', function(){
      echo '<h2>'.esc_html__('Settings', 'swift-performance').'</h2>';
});

// Preview button
add_action('luv_framework_before_header_buttons', function($fieldset){
      global $wpdb;
      $pages = $wpdb->get_col("SELECT url FROM " . SWIFT_PERFORMANCE_TABLE_PREFIX . 'warmup');
      echo '<li><a href="#" class="luv-framework-button swift-performance-ajax-preview" data-fieldset="#fieldset-' . $fieldset->unique_id . '">' . esc_html__('Preview', 'swift-performance') . '</a></li>';
});

// Advanced Switcher
add_action('luv_framework_before_framework_outer', function($fieldset){
      $pointers = (array)get_user_meta(get_current_user_id(), 'swift_pointers', true);
      ?>
      <div class="swift-settings-mode" <?php echo (!isset($pointers['settings-mode']) ? 'data-swift-pointer="settings-mode" data-swift-pointer-position="right" data-swift-pointer-content="' . esc_attr__('By default some options are hidden. You can switch to Advanced View to see all options', 'swift-performance') . '"' : '')?>">
            <a href="<?php echo Swift_Performance_Lite::affiliate_url('https://swiftperformance.io/why-should-upgrade-pro/');?>" class="swift-btn swift-btn-brand" target="_blank">Upgrade to Pro</a>
            <input type="radio" name="mode-switch" id="simple-switch" value="simple"<?php echo(Swift_Performance_Lite::check_option('settings-mode', 'simple') ? ' checked="checked"' : '');?>>
            <label class="swift-btn swift-btn-gray" for="simple-switch">Simple View</label>
            <input type="radio" name="mode-switch" id="advanced-switch" value="advanced"<?php echo(Swift_Performance_Lite::check_option('settings-mode', 'advanced') ? ' checked="checked"' : '');?>>
            <label class="swift-btn swift-btn-gray" for="advanced-switch">Advanced View</label>
      </div>
      <?php
});

// Remove localized fields from export
add_filter('luv_framework_export_array', function($options){
      unset($options['cache-path']);
      unset($options['log-path']);
      return $options;
});

// Image Optimizer preset
add_action('luv_framework_custom_field_premium-only', function(){
      ?>
      <div class="swift-performance-premium-only-container">
            <div class="swift-table-col">
                  <i class="fas fa-lock"></i>
            </div>
            <div class="swift-table-col">
                  <span>This feature is available only in Pro version.</span>
            </div>
      </div>
      <?php
});

// Modal
add_action('luv_framework_after_render_sections', function(){
      ?>
      <div class="swift-confirm-clear-cache luv-hidden">
            <h6 class="luv-modal__title"><?php esc_html_e('Hey!', 'swift-performance');?></h6>
            <p class="luv-modal__text"><?php esc_html_e('Some modifications affected cache. Would you like to clear cache?', 'swift-performance');?></p>
            <a href="#" class="swift-btn swift-btn-blue" data-swift-clear-cache><?php esc_html_e('Clear cache', 'swift-performance');?></a>
            <a href="#" class="swift-btn swift-btn-brand" data-luv-close-modal><?php esc_html_e('Dismiss', 'swift-performance');?></a>
      </div>

      <div class="swift-preview-pro-only luv-hidden">
            <h6 class="luv-modal__title"><?php esc_html_e('Oh snap!', 'swift-performance');?></h6>
            <p class="swift-smiley-container"><i class="far fa-sad-cry"></i></p>
            <p class="luv-modal__text"><?php esc_html_e('Preview changes is available in Pro only.', 'swift-performance');?></p>
            <a href="<?php echo Swift_Performance_Lite::affiliate_url('https://swiftperformance.io/why-should-upgrade-pro/');?>" target="_blank" class="swift-btn swift-btn-green"><?php esc_html_e('Upgrade to Pro!', 'swift-performance');?></a>
            <a href="#" class="swift-btn swift-btn-brand" data-luv-close-modal><?php esc_html_e('Dismiss', 'swift-performance');?></a>
      </div>
      <?php
});

$luvoptions = Luv_Framework::fields('option', array(
	'menu' => 'tools.php',
	'submenu' => SWIFT_PERFORMANCE_SLUG,
	'menu_title' => SWIFT_PERFORMANCE_PLUGIN_NAME,
	'page_title' => SWIFT_PERFORMANCE_PLUGIN_NAME,
	'option_name' => 'swift_performance_options',
	'ajax'	=> true,
	'class'	=> 'swift-performance-settings',
	'sections' => array(
		'general' => array(
			'title'	=> 'General',
			'icon'	=> 'fas fa-cog',
			'subsections' => array(
				'general' => array(
					'title'	=> 'General',
					'fields'	=> array(
                                    array(
							'id'   => 'settings-mode',
							'type' => 'hidden',
							'default' => 'simple'
						),
						array(
							'id'		=> 'cookies-disabled',
							'title'	=> __('Disable Cookies', 'swift-performance'),
							'type'	=> 'switch',
							'desc'	=> __('You can prevent Swift Performance to create cookies on frontend.', 'swift-performance'),
							'info'	=> __('Regarding GDPR you can\'t use some cookies until the visitor approve them. In that case you can prevent Swift to create these cookies by default, and use swift_performance_cookies-disabled filter to override this option. Please note that Swift uses cookies for Google Analytics Bypass, and Appcache.', 'swift-performance'),
                                          'default'   => 0,
                                          'required'   => array('settings-mode', '=', 'advanced')
						),
						array(
							'id'		=> 'whitelabel',
							'type'	=> 'custom',
                                          'action'     => 'premium-only',
							'title'	=> esc_html__('Hide Footprints', 'swift-performance'),
		                              'desc'	=> sprintf(esc_html__('Prevent to add %s response header and HTML comment', 'swift-performance'), SWIFT_PERFORMANCE_PLUGIN_NAME),
		                              'default'	=> 0,
                                          'required'   => array('settings-mode', '=', 'advanced')
						),
						array(
		                             'id'		=> 'use-compute-api',
                                         'type'       => 'custom',
                                         'action'     => 'premium-only',
		                             'title'	=> esc_html__('Use Compute API', 'swift-performance'),
		                             'desc'       => esc_html__('Speed up merging process and decrease CPU usage.', 'swift-performance'),
                                         'info'		=> __('Compute API can speed up CPU extensive processes like generating Critical CSS, or minification.', 'swift-performance'),
		                             'default'	=> 0,
		                        ),
		                        array(
		                             'id'         => 'remote-cron',
                                         'type'       => 'custom',
                                         'action'     => 'premium-only',
		                             'title'      => esc_html__('Enable Remote Cron', 'swift-performance'),
						     'desc'       => esc_html__('Set up a real cronjob with our API.', 'swift-performance'),
						     'info'		=> esc_html__('If all of your pages are cached - or if you disabled the default WP Cron - WordPress cronjobs won\'t run properly. With Remote Cron service you can run cronjobs daily, twicedaily or hourly.', 'swift-performance'),
		                             'default'    => 0,
		                             'required'   => array('settings-mode', '=', 'advanced')
		                        ),
						array(
		                             'id'		=> 'enable-logging',
		                             'type'		=> 'switch',
		                             'title'	=> esc_html__('Debug Log', 'swift-performance'),
		                             'desc'		=> esc_html__('Enable debug logging', 'swift-performance'),
                                         'info'		=> __('If you have any issues (eg caching/image optimizer is not working) you can start debugging here.', 'swift-performance'),
		                             'default' 	=> 0,
                                         'required'   => array('settings-mode', '=', 'advanced')
		                        ),
		                        array(
		                            	'id'		=> 'loglevel',
		                            	'type'	=> 'dropdown',
		                            	'title'	=> esc_html__('Loglevel', 'swift-performance'),
		                            	'required'	=> array('enable-logging', '=', 1),
		                            	'options'	=> array(
							   '9' => esc_html__('All', 'swift-performance'),
							   '6' => esc_html__('Warning', 'swift-performance'),
							   '1' => esc_html__('Error', 'swift-performance'),
		                            	),
							'default'    => '1',
						),
		                        array(
		                              'id'	      => 'log-path',
		                              'type'	=> 'text',
		                              'title'	=> esc_html__('Log Path', 'swift-performance'),
		                              'default'   => WP_CONTENT_DIR . '/swift-logs-'.hash('crc32', NONCE_SALT).'/',
		                              'required'  => array('enable-logging', '=', 1),
		                              'validate_callback' => 'swift_performance_log_path_validate_callback',
		                        ),
					)
				),
				'tweaks' => array(
					'title'	=> 'Tweaks',
					'fields'	=> array(
						array(
		                             'id'			=> 'normalize-static-resources',
		                             'type'			=> 'switch',
		                             'title'		=> esc_html__('Normalize Static Resources', 'swift-performance'),
		                             'desc'             => esc_html__('Remove unnecessary query string from CSS, JS and image files.', 'swift-performance'),
		                             'default'		=> 1,
                                         'class'		=> 'should-clear-cache'
		                        ),
						array(
		                             'id'         => 'dns-prefetch',
		                             'type'       => 'switch',
		                             'title'      => esc_html__('Prefetch DNS', 'swift-performance'),
		                             'desc'       => esc_html__('Prefetch DNS automatically.', 'swift-performance'),
                                         'info'       => __('DNS prefetching will resolve domain names before a user tries to follow a link, or before assets were loaded. It can decrease full load time, and also speed up outgoing links.', 'swift-performance'),
		                             'default'    => 1,
                                         'class'	=> 'should-clear-cache',
                                         'required'   => array('settings-mode', '=', 'advanced')
		                        ),
		                        array(
		                             'id'         => 'dns-prefetch-js',
		                             'type'       => 'switch',
		                             'title'      => esc_html__('Collect domains from scripts', 'swift-performance'),
                                         'desc'       => esc_html__('Collect domains from scripts for DNS Prefetch.', 'swift-performance'),
                                         'info'       => __('If this option is enabled, Swift will collect 3rd party domain names from javascript files as well. If it isn\'t enabled, it will collect domains only from HTML and CSS.', 'swift-performance'),
		                             'default'    => 0,
		                             'required'   => array('dns-prefetch', '=', 1),
                                         'class'      => 'should-clear-cache'
		                        ),
		                        array(
		                             'id'         => 'exclude-dns-prefetch',
		                             'type'       => 'multi-text',
		                             'title'	=> esc_html__('Exclude DNS Prefetch', 'swift-performance'),
                                         'desc'       => esc_html__('Exclude domains from DNS prefetch.', 'swift-performance'),
                                         'info'       => __('If you would like to prevent DNS prefetch for a domain you can add it here ', 'swift-performance'),
		                             'required'   => array('dns-prefetch', '=', 1),
                                         'class'	=> 'should-clear-cache'
		                        ),
		                        array(
		                             'id'         => 'gravatar-cache',
		                             'type'       => 'switch',
		                             'title'      => esc_html__('Gravatar Cache', 'swift-performance'),
		                             'desc'       => esc_html__('Cache avatars.', 'swift-performance'),
                                         'info'       => __('WordPress is using Gravatar for avatars by default. Unfortunately sometimes these requests are slower than your server. In that case you should cache these pictures to speed up load time.', 'swift-performance'),
		                             'default'    => 0,
                                         'class'	=> 'should-clear-cache'
		                        ),
		                        array(
		                             'id'         => 'gravatar-cache-expiry',
		                             'type'       => 'dropdown',
		                             'title'      => esc_html__('Gravatar Cache Expiry', 'swift-performance'),
                                         'desc'       => esc_html__('Avatar cache expiry.', 'swift-performance'),
                                         'info'       => __('If Gravatar cache is enabled, and a user change his/her avatar it should be changed in cache as well. You can set expiry time for Gavatar images here. If an image expires it will be loaded from Gravatar again, so changes can be applied.', 'swift-performance'),
		                             'default'    => 3600,
                                         'options'    => array(
                                               3600         => esc_html__('1 hour', 'swift-performance'),
                                               43200        => esc_html__('12 hours', 'swift-performance'),
                                               86400        => esc_html__('1 day', 'swift-performance'),
                                               604800       => esc_html__('1 week', 'swift-performance'),
                                               2592000      => esc_html__('1 month', 'swift-performance'),
                                         ),
		                             'required'   => array('gravatar-cache', '=', 1),
		                        ),
		                        array(
		                             'id'         => 'custom-htaccess',
		                             'type'       => 'editor',
		                             'title'	=> esc_html__('Custom Htaccess', 'swift-performance'),
		                             'desc'       => esc_html__('You can add custom rules before Swift Performance rules in the generated htaccess', 'swift-performance'),
                                         'info'	      => __('Swift Performance will add rules to the very beginning of htaccess. If you would like to put some rules before, you have to use this option.', 'swift-performance'),
		                             'mode'       => 'text',
		                             'theme'      => 'monokai',
		                        ),

		                        array(
		                             'id'         => 'background-requests',
                                         'type'       => 'custom',
                                         'action'     => 'premium-only',
		                             'title'	=> esc_html__('Background Requests', 'swift-performance'),
		                             'desc'       => esc_html__('Specify key=value pairs. If one of these rules are match on $_REQUEST the process will run in background', 'swift-performance'),
                                         'info'	      => __('For some AJAX requests we doesn\'t need the response (eg post view stats). You can add rules to make this requests run in background, so the browser won\'t wait the response.<br><br>For example if there is a request: /?action=post_view_count you can set <i><b>action=post_view_count</b></i>', 'swift-performance'),
                                         'required'   => array('settings-mode', '=', 'advanced')
		                        ),
					)
				),
				'heartbeat' => array(
					'title'	=> esc_html__('Heartbeat', 'swift-performance'),
		                  'fields'	=> array(
		                         array(
		                            'id'	=> 'disable-heartbeat',
		                            'type'	=> 'checkbox',
		                            'title' => esc_html__('Disable Heartbeat', 'swift-performance'),
		                            'options' => array(
							    'index.php'                                            => esc_html__('Dashboard', 'swift-performance'),
							    'edit.php,post.php,post-new.php'                       => esc_html__('Posts/Pages', 'swift-performance'),
							    'upload.php,media-new.php'                             => esc_html__('Media', 'swift-performance'),
							    'edit-comments.php,comment.php'                        => esc_html__('Comments', 'swift-performance'),
							    'nav-menus.php'                                        => esc_html__('Menus', 'swift-performance'),
							    'widgets.php'                                          => esc_html__('Widgets', 'swift-performance'),
							    'theme-editor.php,plugin-editor.php'                   => esc_html__('Theme/Plugin Editor', 'swift-performance'),
							    'users.php,user-new.php,user-edit.php,profile.php'     => esc_html__('Users', 'swift-performance'),
							    'tools.php'                                            => esc_html__('Tools', 'swift-performance'),
							    'options-general.php'                                  => esc_html__('Settings', 'swift-performance'),
		                            ),
		                            'default' => '',
                                        'required' => array('settings-mode', '=', 'advanced'),
                                        'info'  => __('WordPress is using HeartBeat API to show real time notifications, notify users that a post is being edited by another user, etc. You can limit these requests where you don\'t really need them.', 'swift-performance')
		                         ),
		                         array(
		                              'id'         	=> 'heartbeat-frequency',
		                              'type'      	=> 'dropdown',
		                              'title'		=> esc_html__('Heartbeat Frequency', 'swift-performance'),
		                              'desc'	=> esc_html__('Override heartbeat frequency in seconds', 'swift-performance'),
		                              'options'    	=> array(
							     10 => 10,
							     20 => 20,
							     30 => 30,
							     40 => 40,
							     50 => 50,
							     60 => 60,
							     70 => 70,
							     80 => 80,
							     90 => 90,
							     100 => 100,
							     110 => 110,
							     120 => 120,
							     130 => 130,
							     140 => 140,
							     150 => 150,
							     160 => 160,
							     170 => 170,
							     180 => 180,
							     190 => 190,
							     200 => 200,
							     210 => 210,
							     220 => 220,
							     230 => 230,
							     240 => 240,
							     250 => 250,
							     260 => 260,
							     270 => 270,
							     280 => 280,
							     290 => 290,
							     300 => 300
		                              ),
							'default' => 60,
                                          'required' => array('settings-mode', '=', 'advanced'),
		                         )
		                   )
				),
				'general-ga' => array(
		                  'title' => esc_html__('Google Analytics', 'swift-performance'),
		                  'fields' => array(
						array(
		                             'id'         => 'bypass-ga',
		                             'type'       => 'switch',
		                             'title'      => esc_html__('Bypass Google Analytics', 'swift-performance'),
		                             'default'    => 0,
                                         'class'	=> 'should-clear-cache',
                                         'info'	      => __('If you enable Bypass Analytics feature Swift will block the default Google Analytics script, and will use AJAX requests and the <a href="https://developers.google.com/analytics/devguides/collection/protocol/v1/parameters" target="_blank">Google Analytics Measurement protocol</a> instead.', 'swift-performance'),
					      ),
		                        array(
							'id'			=> 'ga-tracking-id',
							'type'		=> 'text',
							'title'		=> esc_html__('Tracking ID', 'swift-performance'),
		                            	'desc'	      => esc_html__('Eg: UA-123456789-12', 'swift-performance'),
		                            	'required'		=> array('bypass-ga', '=', 1),
						),
						array(
							'id'			=> 'ga-ip-source',
							'type'		=> 'dropdown',
							'title'		=> esc_html__('IP Source', 'swift-performance'),
							'desc'            => sprintf(esc_html__('Select IP source if your server is behind proxy (eg: Cloudflare). Recommended: %s', 'swift-performance'), $ga_ip_source),
                                          'info'	      => __('If you are using reverse proxy (like Cloudflare) you will need to set the IP source for Google Analytics. Most cases Swift will detect the proper IP source automatically.', 'swift-performance'),
							'options'		=> array(
							     'HTTP_CLIENT_IP' => 'HTTP_CLIENT_IP',
							     'HTTP_X_FORWARDED_FOR' => 'HTTP_X_FORWARDED_FOR',
							     'HTTP_X_FORWARDED' => 'HTTP_X_FORWARDED',
							     'HTTP_X_CLUSTER_CLIENT_IP' => 'HTTP_X_CLUSTER_CLIENT_IP',
							     'HTTP_FORWARDED_FOR' => 'HTTP_FORWARDED_FOR',
							     'HTTP_FORWARDED' => 'HTTP_FORWARDED',
							     'HTTP_CF_CONNECTING_IP' => 'HTTP_CF_CONNECTING_IP',
							     'REMOTE_ADDR' => 'REMOTE_ADDR'
							),
		                              'default'    => $ga_ip_source,
		                              'required'   => array(
                                                array('bypass-ga', '=', 1),
                                                array('settings-mode', '=', 'advanced')
                                          ),
		                        ),
		                        array(
							'id'         => 'ga-anonymize-ip',
							'type'       => 'switch',
							'title'      => esc_html__('Anonymize IP', 'swift-performance'),
                                          'info'	 => __('In some cases, you might need to anonymize the user\'s IP address before it has been sent to Google Analytics. If you enable this option Google Analytics will anonymize the IP as soon as technically feasible at the earliest possible stage.', 'swift-performance'),
							'required'   => array('bypass-ga', '=', 1),
							'default'    => 0
		                        ),
		                        array(
							'id'			=> 'delay-ga-collect',
							'type'		=> 'switch',
							'title'		=> esc_html__('Delay Collect', 'swift-performance'),
							'desc'            => esc_html__('Send AJAX request only after the first user interaction', 'swift-performance'),
                                          'info'            => __('If you enable this option Google Analytics requests will be send only after the user made a mouse move, keypress or scroll event. It will speed up initial loading time, but be careful, bounce rate statistics may will be distorted', 'swift-performance'),
							'default'		=> 1,
                                          'class'		=> 'should-clear-cache',
                                          'required'		=> array(
                                                array('bypass-ga', '=', 1),
                                                array('settings-mode', '=', 'advanced')
                                          ),
		                        ),
		                        array(
							'id'			=> 'ga-exclude-roles',
                                          'type'       => 'custom',
                                          'action'     => 'premium-only',
							'title'		=> esc_html__('Exclude Users from Statistics', 'swift-performance'),
							'desc'            => esc_html__('Exclude selected user roles from statistics', 'swift-performance'),
                                          'info'            => __('You can exclude logged in users from Analytics by user role. It can be extremly useful for smaller sites to see real stats, because editors won\'t affect the statistics when they check the site.', 'swift-performance'),
                                          'required'		=> array(
                                                array('bypass-ga', '=', 1),
                                                array('settings-mode', '=', 'advanced')
                                          ),
		                          ),
		                    )
		            ),
				'whitelabel' => array(
		                  'title' => esc_html__('Whitelabel', 'swift-performance'),
		                  'fields' => array(
						array(
							'id'         => 'whitelabel-dummy',
                                          'type'       => 'custom',
                                          'action'     => 'premium-only',
							'title'      => esc_html__('Whitelabel', 'swift-performance'),
                                          'desc'       => esc_html__('You can rename the plugin, change slug, db prefixes, hide all traces.', 'swift-performance'),
                                          'required'   => array('settings-mode', '=', 'advanced'),
		                        ),
		                  )
				)
			)
		),
		'media' => array(
			'title' => esc_html__('Media', 'swift-performance'),
			'icon' => 'fas fa-images',
			'subsections' => array(
				'media-images' => array(
					'title' => esc_html__('Images', 'swift-performance'),
					'fields' => array(
						array(
							'id'         => 'optimize-uploaded-images',
                                          'type'       => 'custom',
                                          'action'     => 'premium-only',
							'title'      => esc_html__('Optimize Images on Upload', 'swift-performance'),
							'desc'       => esc_html__('Enable if you would like to optimize the images during the upload using the our Image Optimization API service.', 'swift-performance'),
                                          'info'       => sprintf(esc_html__('Already uploaded images can be optimized %shere%s', 'swift-performance'), '<a href="'.esc_url(add_query_arg(array('page' => 'swift-performance', 'subpage' => 'image-optimizer'), admin_url('tools.php'))).'" target="_blank">', '</a>'),
							'required'   => array('purchase-key', '!=', '')
						),
						array(
							'id'         => 'resize-large-images',
                                          'type'       => 'custom',
                                          'action'     => 'premium-only',
							'title'      => esc_html__('Resize Large Images', 'swift-performance'),
							'desc'       => esc_html__('Resize images which are larger than maximum width', 'swift-performance'),
                                          'info'       => __('If you don\'t need really big images, only web images you can resize uploaded images which are too large.', 'swift-performance'),
							'required'   => array('settings-mode', '=', 'advanced')
						),
						array(
							'id'         => 'keep-original-images',
                                          'type'       => 'custom',
                                          'action'     => 'premium-only',
							'title'      => esc_html__('Keep Original Images', 'swift-performance'),
                                          'desc'       => esc_html__('If you enable this option the image optimizer will keep original images.', 'swift-performance'),
                                          'info'       => __('It is recommended to keep original images on first try. If you realized that optimized images quality is not good enough, you can restore original images with one click, and reoptimize them on higher quality.<br><br> I you would like to save some space, you can also delete easily original images if you are satisfied with the optimization quality.', 'swift-performance'),
							'required'   => array('purchase-key', '!=', '')
						),
						array(
							'id'         => 'base64-small-images',
							'type'       => 'switch',
							'title'      => esc_html__('Inline Small Images', 'swift-performance'),
							'desc'       => esc_html__('Use base64 encoded inline images for small images', 'swift-performance'),
                                          'info'       => esc_html__('If you enable this option small images will be inlined, so you can reduce the number of HTML requests.', 'swift-performance'),
							'default'    => 0,
                                          'class'	 => 'should-clear-cache'
						),
						array(
							'id'         => 'base64-small-images-size',
							'type'       => 'text',
							'title'      => esc_html__('File Size Limit (bytes)', 'swift-performance'),
                                          'desc'       => esc_html__('File size limit for inline images', 'swift-performance'),
							'default'    => '1000',
							'required'   => array('base64-small-images', '=', 1),
                                          'class'      => 'should-clear-cache'
						),

						array(
							'id'         => 'exclude-base64-small-images',
							'type'       => 'multi-text',
							'title'      => esc_html__('Exclude Images', 'swift-performance'),
							'desc'       => esc_html__('Exclude images from being embedded if one of these strings is found in the match.', 'swift-performance'),
							'required'   => array('base64-small-images', '=', 1),
                                          'class'	 => 'should-clear-cache'
						),
						array(
							'id'        => 'lazy-load-images',
							'type'      => 'switch',
							'title'     => esc_html__('Lazyload', 'swift-performance'),
                                          'desc'      => esc_html__('Enable if you would like lazy load for images.', 'swift-performance'),
                                          'info'      => __('If you enable this option, images will be replaced with a low quality (blurred) version, and only images in the viewport will be loaded fully.', 'swift-performance'),
							'default'   => 1,
                                          'class'	=> 'should-clear-cache'
						),
						array(
							'id'        => 'exclude-lazy-load',
							'type'      => 'multi-text',
							'title'	=> esc_html__('Exclude Images', 'swift-performance'),
                                          'desc'      => esc_html__('Exclude images from being lazy loaded if one of these strings is found in the match.', 'swift-performance'),
                                          'info'      => __('It is recommended to exclude logo, and other small images which are important for the design or the user experience.', 'swift-performance'),
							'required'  => array('lazy-load-images', '=', 1),
                                          'class'     => 'should-clear-cache'
						),
						array(
							'id'         => 'load-images-on-user-interaction',
							'type'       => 'switch',
							'title'      => esc_html__('Load Images on User Interaction', 'swift-performance'),
                                          'desc'       => esc_html__('Enable if you would like to load full images only on user interaction (mouse move, sroll, touchstart)', 'swift-performance'),
                                          'info'       => __('In most cases you won\'t need that feature, however if you already excluded manually images "above the fold" from lazy loading, you can enable this option.', 'swift-performance'),
							'default'    => 0,
							'required'   => array(
                                                array('settings-mode', '=', 'advanced'),
                                                array('lazy-load-images', '=', 1)
                                          ),
                                          'class'	 => 'should-clear-cache'
						),
						array(
							'id'         => 'base64-lazy-load-images',
							'type'       => 'switch',
							'title'      => esc_html__('Inline Lazy Load Images', 'swift-performance'),
                                          'desc'       => esc_html__('Use base64 encoded inline images for lazy load', 'swift-performance'),
                                          'info'       => __('Regarding that the low quality version of images are pretty small files you can inline them instead load them separately. With this option you can reduce number of requests.', 'swift-performance'),
							'default'    => 1,
							'required'   => array('lazy-load-images', '=', 1),
                                          'class'	 => 'should-clear-cache'
						),
						array(
							'id'         => 'force-responsive-images',
							'type'       => 'switch',
							'title'      => esc_html__('Force Responsive Images', 'swift-performance'),
							'desc'       => esc_html__('Force all images to use srcset attribute if it is possible', 'swift-performance'),
                                          'info'       => __('You will need this option only if your theme (or some of your plugins) is using images incorrectly, which is very rare. If you enable this option it will append srcset for all images which has multiple sizes in media library.', 'swift-performance'),
							'default'    => 0,
                                          'class'	 => 'should-clear-cache',
                                          'required'   => array('settings-mode', '=', 'advanced')
						),
					)
				),
				array(
					'title' => esc_html__('Embeds', 'swift-performance'),
					'id' => 'media-embeds',
					'class'     => 'advanced',
					'fields' => array(
						array(
							'id'         	=> 'lazyload-iframes',
							'type'       	=> 'switch',
							'title'      	=> esc_html__('Lazy Load Iframes', 'swift-performance'),
							'desc'            => esc_html__('Enable if you would like lazy load for iframes.', 'swift-performance'),
                                          'info'            => __('Some embedded content (like Youtube videos) loads additional assets which are not necessary on initial pageload. You can lazyload them, so iframes will be loaded only before they arrives in the viewport.', 'swift-performance'),
							'default'    	=> 0,
                                          'class'		=> 'should-clear-cache',
                                          'required'        => array('settings-mode', '=', 'advanced')
						),
						array(
							'id'			=> 'exclude-iframe-lazyload',
							'type'		=> 'multi-text',
							'title'		=> esc_html__('Exclude Iframes', 'swift-performance'),
                                          'desc'            => esc_html__('Exclude iframes from being lazy loaded if one of these strings is found in the match.', 'swift-performance'),
                                          'info'            => __('Unfortunately some iframes can be broken if they are lazyloaded. You can exclude them with this option.', 'swift-performance'),
							'required'		=> array('lazyload-iframes', '=', 1),
                                          'class'		=> 'should-clear-cache'
						),
						array(
							'id'         => 'load-iframes-on-user-interaction',
							'type'       => 'switch',
							'title'      => esc_html__('Load Iframes on User Interaction', 'swift-performance'),
                                          'desc'       => esc_html__('Enable if you would like to load iframes only on user interaction (mouse move, sroll, touchstart)', 'swift-performance'),
                                          'info'       => __('If you don\'t have any iframes in the "above the fold" section you can load them very last, when the page was fully loaded and the user made some interactions as well. It does\'t only speed up the page load, but also can save some bandwidth if it is important (eg for mobile users).', 'swift-performance'),
							'default'    => 0,
							'required'   => array('lazyload-iframes', '=', 1),
                                          'class'	 => 'should-clear-cache'
						),
					)
				),
			)
		),
		'optimization' => array(
			'title' => esc_html__('Optimization', 'swift-performance'),
			'icon' => 'fas fa-magic',
			'subsections' => array(
				'general' => array(
		                   'title' => esc_html__('General', 'swift-performance'),
		                   'id' => 'asset-manager-general',
		                   'fields' => array(
		                        array(
							'id'		=> 'merge-assets-logged-in-users',
							'type'	=> 'switch',
							'title'	=> esc_html__('Merge Assets for Logged in Users', 'swift-performance'),
							'desc'      => esc_html__('Enable if you would like to merge styles and scripts for logged in users as well.', 'swift-performance'),
                                          'info'      => __('It is recommended to enable this option only if the site is using action based cache or the cache is cleared very rarely. Otherwise it will optimize for logged in users in real time, which can damage the user experience.', 'swift-performance'),
							'default'	=> 0,
                                          'required'   => array('settings-mode', '=', 'advanced')
		                        ),
		                        array(
							'id'         => 'server-push',
                                          'type'       => 'custom',
                                          'action'     => 'premium-only',
							'title'      => esc_html__('Enable Server Push', 'swift-performance'),
                                          'desc'       => esc_html__('Server push allows you to send site assets to the browser before it has even asked for them', 'swift-performance'),
							'required'   => array('enable-caching', '=', 1),
		                        ),
		                        array(
							'id'         => 'optimize-prebuild-only',
		                              'type'       => 'switch',
		                              'title'      => esc_html__('Optimize Prebuild Only', 'swift-performance'),
		                              'desc'       => esc_html__('In some cases optimizing the page takes some time. If you enable this option the plugin will optimize the page, only when prebuild cache process is running.', 'swift-performance'),
                                          'info'       => __('It is recommended to use this option, to prevent very long pageloads for the first visit (when the page is not cached yet)', 'swift-performance'),
		                              'default'    => 0,
		                              'required'   => array('enable-caching', '=', 1)
		                        ),
		                        array(
							'id'         => 'merge-background-only',
							'type'       => 'switch',
							'title'      => esc_html__('Optimize in Background', 'swift-performance'),
                                          'desc'       => esc_html__('In some cases optimizing the page takes some time. If you enable this option the plugin will optimize page in the background.', 'swift-performance'),
                                          'info'       => __('It is recommended to use this option, to prevent very long pageloads for the first visit (when the page is not cached yet)', 'swift-performance'),
							'default'    => 0,
							'required'   => array('enable-caching', '=', 1)
						),
						array(
							'id'         => 'html-auto-fix',
							'type'       => 'switch',
							'title'	 => esc_html__('Fix Invalid HTML', 'swift-performance'),
							'desc'	 => esc_html__('Try to fix invalid HTML', 'swift-performance'),
                                          'info'       => __('Sometimes themes and plugins contain invalid HTML, which doesn\'t cause issues in browser, because the browser can fix it on the fly, but it can cause issues with the DOM parser in Swift. If you enable this option Swift will fix these issues automatically like the modern browsers does.', 'swift-performance'),
							'default'    => 1,
                                          'class'	 => 'should-clear-cache',
                                          'required'   => array('settings-mode', '=', 'advanced')
						),
						array(
							'id'         => 'minify-html',
							'type'       => 'switch',
							'title'	 => esc_html__('Minify HTML', 'swift-performance'),
                                          'desc'	 => esc_html__('Remove unnecessary whitespaces from HTML', 'swift-performance'),
							'default'    => 0,
                                          'class'	 => 'should-clear-cache'
						),
						array(
							'id'         => 'disable-emojis',
							'type'       => 'switch',
							'title'	 => esc_html__('Disable Emojis', 'swift-performance'),
                                          'desc'	 => esc_html__('Prevent WordPress to load emojis', 'swift-performance'),
                                          'info'       => __('Most sites are not using emojis at all, however WordPress is loading it by default. If you disable it you can decrease the number of requests and page size as well. ', 'swift-performance'),
							'default'    => 0,
                                          'class'	 => 'should-clear-cache'
						),
						array(
							'id'	=> 'limit-threads',
							'type'	=> 'switch',
							'title' => esc_html__('Limit Simultaneous Threads', 'swift-performance'),
							'desc' => esc_html__('Limit maximum simultaneous threads. It can be useful on shared hosting environment to avoid 508 errors.', 'swift-performance'),
							'default' => 0
						),
						array(
							'id'         => 'max-threads',
							'type'       => 'text',
							'title'	=> esc_html__('Maximum Threads', 'swift-performance'),
							'desc'   => esc_html__('Number of maximum simultaneous threads.', 'swift-performance'),
							'default'    => 3,
							'required'   => array('limit-threads', '=', 1),
						),
						array(
							'id'         => 'dom-parser-max-buffer',
							'type'       => 'text',
							'title' 	 => esc_html__('DOM Parser Max Buffer', 'swift-performance'),
							'desc'       => esc_html__('Maximum size for DOM parser buffer (bytes).', 'swift-performance'),
                                          'info'       => __('Swift\'s DOM parser will skip pages which are larger than this value. It is recommended to use the deafult value, change it only if support suggested it.', 'swift-performance'),
							'default'    => 1000000,
                                          'required'   => array('settings-mode', '=', 'advanced')
						),
					)
				),
				'scripts' => array(
					'title' => esc_html__('Scripts', 'swift-performance'),
					'fields' => array(
						array(
							'id'         => 'merge-scripts',
							'type'       => 'switch',
							'title'	 => esc_html__('Merge Scripts', 'swift-performance'),
                                          'desc'       => esc_html__('Merge javascript files to reduce number of HTML requests ', 'swift-performance'),
                                          'info'       => __('Merging scripts can reduce number of requests dramatically. Even if your server is using HTTP2 it can speed up the page loading, and also save some resources on server side (because the server needs to serve less requests).', 'swift-performance'),
							'default'    => 0,
                                          'class'	 => 'should-clear-cache'
						),
						array(
							'id'         => 'async-scripts',
							'type'       => 'switch',
							'title'	 => esc_html__('Async Execute', 'swift-performance'),
                                          'desc'       => esc_html__('Execute merged javascript files asynchronously', 'swift-performance'),
                                          'info'       => __('If you merged all scripts, even the first one can run, only when the full merged script was loaded. However if you enable this option, Swift will split the merged script on client side on the fly and run each scripts when that part was loaded. It can speed up rendering time which is an important factor for user experience. ', 'swift-performance'),
							'required'   => array(
                                                array('settings-mode', '=', 'advanced'),
							      array('merge-scripts', '=', 1),
							),
                                          'class'	 => 'should-clear-cache'
						),
						array(
							'id'         => 'merge-scripts-exlude-3rd-party',
							'type'       => 'switch',
							'title'	 => esc_html__('Exclude 3rd Party Scripts', 'swift-performance'),
                                          'desc'       => esc_html__('Exclude 3rd party scripts from merged scripts', 'swift-performance'),
							'required'   => array(
                                                array('settings-mode', '=', 'advanced'),
                                                array('merge-scripts', '=', 1)
                                          ),
							'default'    => 0,
                                          'class'	 => 'should-clear-cache'
						),
						array(
							'id'         => 'exclude-scripts',
							'type'       => 'multi-text',
							'title'	 => esc_html__('Exclude Scripts', 'swift-performance'),
                                          'desc'       => esc_html__('Exclude scripts from being merged if one of these strings is found in the match.', 'swift-performance'),
							'required'   => array('merge-scripts', '=', 1),
                                          'class'	 => 'should-clear-cache'
						),
						array(
							'id'         => 'exclude-inline-scripts',
							'type'       => 'multi-text',
							'title'	=> esc_html__('Exclude Inline Scripts', 'swift-performance'),
							'desc'   => esc_html__('Exclude scripts from being merged if one of these strings is found in the match.', 'swift-performance'),
							'required'   => array('merge-scripts', '=', 1),
                                          'class'	 => 'should-clear-cache'
						),
						array(
							'id'         => 'exclude-script-localizations',
							'type'       => 'switch',
							'title'	 => esc_html__('Exclude Script Localizations', 'swift-performance'),
                                          'desc'       => esc_html__('Exclude javascript localizations from merged scripts.', 'swift-performance'),
                                          'info'       => __('It is recommended to exclude script localizations, because they can increase the merged script\'s loading time, but there is no real benefit to including them. Please note that option will exclude all inline scripts which contains [[CDATA]]', 'swift-performance'),
							'default'    => 1,
							'required'   => array(
                                                array('settings-mode', '=', 'advanced'),
                                                array('merge-scripts', '=', 1)
                                          ),
                                          'class'	 => 'should-clear-cache'
						),
						array(
							'id'         => 'minify-scripts',
							'type'       => 'switch',
							'title'	=> esc_html__('Minify Javascripts', 'swift-performance'),
							'default'    => 1,
							'required'   => array('merge-scripts', '=', 1),
                                          'class'	 => 'should-clear-cache'
						),
						array(
							'id'         => 'use-script-compute-api',
                                          'type'       => 'custom',
                                          'action'     => 'premium-only',
							'title'	 => esc_html__('Minify with API', 'swift-performance'),
                                          'desc'       => esc_html__('Use Compute API for minify. Regarding that this minify method can be slower, use this option only if default JS minify cause javascript errors. ', 'swift-performance'),
                                          'info'       => __('Some scripts are not fully valid, but still operational (eg: missing semicolon). These scripts can cause issues when you minify them. If you use the API for script minify it can fix this parsing errors, but please note it will a bit slowdown the minifing process.', 'swift-performance'),
							'required'   => array(
                                                array('settings-mode', '=', 'advanced'),
							      array('exclude-script-localizations', '=', 1),
							      array('merge-scripts', '=', 1),
							      array('minify-scripts', '=', 1),
							),
						),
						array(
							'id'         => 'proxy-3rd-party-assets',
							'type'       => 'switch',
							'title'	=> esc_html__('Proxy 3rd Party Assets', 'swift-performance'),
							'desc'	=> esc_html__('Proxy 3rd party javascript and CSS files which created by javascript (eg: Google Analytics)', 'swift-performance'),
							'default'    => 0,
							'required'   => array(
                                                array('settings-mode', '=', 'advanced'),
                                                array('merge-scripts', '=', 1)
                                          ),
                                          'class'	 => 'should-clear-cache'
						),
						array(
							'id'         => 'include-3rd-party-assets',
							'type'       => 'multi-text',
							'title'	=> esc_html__('3rd Party Assets', 'swift-performance'),
							'desc'   => esc_html__('List scripts (full URL) which should being proxied.', 'swift-performance'),
							'required'   => array(
                                                array('settings-mode', '=', 'advanced'),
                                                array('proxy-3rd-party-assets', '=', 1)
                                          ),
                                          'class'	 => 'should-clear-cache'
						),
						array(
							'id'         => 'separate-js',
							'type'       => 'switch',
							'title'	 => esc_html__('Separate Scripts', 'swift-performance'),
                                          'desc'       => esc_html__('If you enable this option the plugin will save merged JS files for pages separately', 'swift-performance'),
							'default'    => 0,
							'required'   => array('merge-scripts', '=', 1),
                                          'class'	 => 'should-clear-cache'
						),
						array(
							'id'         => 'inline-merged-scripts',
							'type'       => 'switch',
							'title'	=> esc_html__('Print merged scripts inline', 'swift-performance'),
							'desc'   => esc_html__('Enable if you would like to print merged scripts into the footer, instead of a seperated file.', 'swift-performance'),
							'required'   => array(
                                                array('settings-mode', '=', 'advanced'),
                                                array('merge-scripts', '=', 1)
                                          ),
                                          'class'	 => 'should-clear-cache'
						),
						array(
							'id'         => 'lazy-load-scripts',
							'type'       => 'multi-text',
							'title'	 => esc_html__('Lazy Load Scripts', 'swift-performance'),
                                          'desc'       => esc_html__('Load scripts only after first user interaction, if one of these strings is found in the match.', 'swift-performance'),
                                          'info'       => __('With this feature you can be sure that included scripts will be loaded very last, and won\'t delay rendering process.', 'swift-performance'),
							'required'   => array(
                                                array('settings-mode', '=', 'advanced'),
                                                array('merge-scripts', '=', 1)
                                          ),
                                          'class'	 => 'should-clear-cache'
						),
						array(
							'id'         => 'include-scripts',
							'type'       => 'multi-text',
							'title'	 => esc_html__('Include Scripts', 'swift-performance'),
                                          'desc'       => esc_html__('Include scripts manually. With this option you can preload script files what are loaded with javascript', 'swift-performance'),
							'required'   => array(
                                                array('settings-mode', '=', 'advanced'),
                                                array('merge-scripts', '=', 1)
                                          ),
                                          'class'	 => 'should-clear-cache'
						),
					)
				),
				'styles' => array(
		                  'title' => esc_html__('Styles', 'swift-performance'),
		                  'fields' => array(
						array(
						     'id'         => 'merge-styles',
						     'type'       => 'switch',
						     'title'	=> esc_html__('Merge Styles', 'swift-performance'),
                                         'desc'       => esc_html__('Merge CSS files to reduce number of HTML requests', 'swift-performance'),
                                         'info'       => __('Merging styles can reduce number of requests dramatically. Even if your server is using HTTP2 it can speed up the page loading, and also save some resources on server side (because the server needs to serve less requests).', 'swift-performance'),
						     'default'    => 0,
                                         'class'	 => 'should-clear-cache'
						),
						array(
						     'id'         => 'critical-css',
						     'type'       => 'switch',
						     'title'	=> esc_html__('Generate Critical CSS', 'swift-performance'),
                                         'info'       => __('Critical CSS is an extract of the full CSS, which contains only that rules which are necessary to render the site on the initial load.', 'swift-performance'),
						     'default'    => 1,
						     'required'   => array('merge-styles', '=', 1),
                                         'class'	 => 'should-clear-cache'
						),
						array(
						     'id'         => 'extra-critical-css',
						     'type'       => 'editor',
						     'title'	=> esc_html__('Extra Critical CSS', 'swift-performance'),
                                         'desc'       => esc_html__('You can add extra CSS to Critical CSS here', 'swift-performance'),
                                         'info'       => __('If you would like to add some custom CSS rules to Critical CSS you can add them here.', 'swift-performance'),
						     'mode'       => 'css',
						     'theme'    => 'monokai',
						     'required'   => array(
						          array('merge-styles', '=', 1),
						          array('critical-css', '=', 1),
						      ),
                                          'class'	 => 'should-clear-cache'
						),
						array(
						     'id'         => 'disable-full-css',
						     'type'       => 'switch',
						     'title'	=> esc_html__('Disable Full CSS', 'swift-performance'),
                                         'desc'       => esc_html__('Load Critical CSS only. Be careful, it may can cause styling issues.', 'swift-performance'),
                                         'info'       => __('On simple sites, which are using only a few modifications on the loaded site you can totally disable the full CSS. If you would like to use this, please be careful, and test all pages. If something is missing you can add them with Extra Critical CSS.', 'swift-performance'),
						     'required'   => array(
                                               array('settings-mode', '=', 'advanced'),
						           array('merge-styles', '=', 1),
						           array('critical-css', '=', 1),
						     ),
						     'default'    => 0,
                                         'class'	 => 'should-clear-cache'
						),
						array(
						     'id'         => 'compress-css',
						     'type'       => 'switch',
						     'title'	=> esc_html__('Compress Critical CSS', 'swift-performance'),
                                         'desc'       => esc_html__('Extra compress for critical CSS', 'swift-performance'),
                                         'info'       => __('If you enable this feature Swift will change all class names and ids in the critical CSS to a shorter one, so you can save some extra bytes.', 'swift-performance'),
						     'default'    => 0,
						     'required'   => array(
                                                array('settings-mode', '=', 'advanced'),
                                                array('merge-styles', '=', 1),
                                                array('critical-css', '=', 1),
                                                array('disable-full-css', '=', 0),
						     ),
                                         'class'	 => 'should-clear-cache'
						),
						array(
						     'id'         => 'remove-keyframes',
						     'type'       => 'switch',
						     'title'	=> esc_html__('Remove Keyframes', 'swift-performance'),
                                         'desc'       => esc_html__('Remove CSS animations from critical CSS', 'swift-performance'),
						     'default'    => 0,
						     'required'   => array(
                                               array('settings-mode', '=', 'advanced'),
						           array('merge-styles', '=', 1),
						           array('critical-css', '=', 1),
						     ),
                                         'class'	 => 'should-clear-cache'
						),
						array(
						     'id'         => 'inline_critical_css',
						     'type'       => 'switch',
						     'title'	=> esc_html__('Print critical CSS inline', 'swift-performance'),
						     'desc'   => esc_html__('Enable if you would like to print the critical CSS into the header, instead of a seperated CSS file.', 'swift-performance'),
						     'required'   => array(
						           array('merge-styles', '=', 1),
						           array('critical-css', '=', 1),
						     ),
						     'default'    => 1,
                                         'class'	 => 'should-clear-cache'
						),
						array(
						     'id'         => 'inline_full_css',
						     'type'       => 'switch',
						     'title'	=> esc_html__('Print full CSS inline', 'swift-performance'),
						     'desc'   => esc_html__('Enable if you would like to print the merged CSS into the footer, instead of a seperated CSS file.', 'swift-performance'),
                                         'info'       => __('Please note that this is a special feature only for special cases. If WordPress can write files on the server you shouldn\'t use this option, even if page speed scores are better, because with this you will prevent the browser to cache the CSS. and it will be downloaded each time when the visitor is navigating on your site.', 'swift-performance'),
						     'required'   => array('merge-styles', '=', 1),
						     'default'    => 0,
                                         'class'	 => 'should-clear-cache'
						),
						array(
						     'id'         => 'separate-css',
						     'type'       => 'switch',
						     'title'	=> esc_html__('Separate Styles', 'swift-performance'),
						     'desc'   => esc_html__('If you enable this option the plugin will save merged CSS files for pages separately', 'swift-performance'),
						     'default'    => 0,
						     'required'   => array('merge-styles', '=', 1),
                                         'class'	 => 'should-clear-cache'
						),
						array(
						     'id'         => 'minify-css',
						     'type'       => 'dropdown',
						     'title'	=> esc_html__('Minify CSS', 'swift-performance'),
                                         'desc'       => esc_html__('Remove unnecessary whitespaces, shorten color codes and font weights', 'swift-performance'),
						     'default'    => 1,
						     'options'    => array(
						           0      => esc_html__('Don\'t minify', 'swift-performance'),
						           1      => esc_html__('Basic', 'swift-performance'),
						           2      => esc_html__('Full - Pro feature', 'swift-performance'),
						     ),
						     'required'   => array('merge-styles', '=', 1),
                                         'class'	 => 'should-clear-cache'
						),
						array(
						     'id'         => 'bypass-css-import',
						     'type'       => 'switch',
						     'title'	=> esc_html__('Bypass CSS Import', 'swift-performance'),
                                         'desc'       => esc_html__('Include imported CSS files in merged styles.', 'swift-performance'),
						     'default'    => 1,
						     'required'   => array('merge-styles', '=', 1),
                                         'class'	 => 'should-clear-cache'
						),
						array(
						     'id'         => 'merge-styles-exclude-3rd-party',
						     'type'       => 'switch',
						     'title'	=> esc_html__('Exclude 3rd Party CSS', 'swift-performance'),
						     'desc'   => esc_html__('Exclude 3rd party CSS files (eg: Google Fonts CSS) from merged styles', 'swift-performance'),
						     'required'   => array(
                                               array('settings-mode', '=', 'advanced'),
                                               array('merge-styles', '=', 1)
                                         ),
						     'default'    => 0,
                                         'class'	 => 'should-clear-cache'
						),
						array(
						     'id'         => 'exclude-styles',
						     'type'       => 'multi-text',
						     'title'	=> esc_html__('Exclude Styles', 'swift-performance'),
						     'desc'   => esc_html__('Exclude style from being merged if one of these strings is found in the file name. ', 'swift-performance'),
						     'required'   => array('merge-styles', '=', 1),
                                         'class'	 => 'should-clear-cache'
						),
						array(
						     'id'         => 'exclude-inline-styles',
						     'type'       => 'multi-text',
						     'title'	=> esc_html__('Exclude Inline Styles', 'swift-performance'),
						     'desc'   => esc_html__('Exclude style from being merged if one of these strings is found in CSS. ', 'swift-performance'),
						     'required'   => array('merge-styles', '=', 1),
                                         'class'	 => 'should-clear-cache'
						),
						array(
						     'id'         => 'include-styles',
						     'type'       => 'multi-text',
						     'title'	=> esc_html__('Include Styles', 'swift-performance'),
						     'desc'   => esc_html__('Include styles manually. With this option you can preload css files what are loaded with javascript', 'swift-performance'),
						     'required'   => array(
                                               array('settings-mode', '=', 'advanced'),
                                               array('merge-styles', '=', 1)
                                         ),
                                         'class'	 => 'should-clear-cache'
						),
					)
				)
			)
		),
		'caching' => array(
			'title'		=> esc_html__('Caching', 'swift-performance'),
			'icon'		=> 'fas fa-flash',
			'subsections'	=> array(
				'cache' => array(
		                   'title' => esc_html__('General', 'swift-performance'),
		                   'fields' => array(
		                         array(
		                               'id'         => 'enable-caching',
		                               'type'	  => 'switch',
		                               'title'      => esc_html__('Enable Caching', 'swift-performance'),
		                               'default'    => 1,
                                           'class'	 => 'should-clear-cache'
		                         ),
		                         array(
		                               'id'                => 'caching-mode',
		                               'type'              => 'dropdown',
		                               'title'	         => esc_html__('Caching Mode', 'swift-performance'),
		                               'options'           => $cache_modes,
		                               'default'           => 'disk_cache_php',
		                               'required'          => array('enable-caching', '=', 1),
		                               'validate_callback' => 'swift_performance_cache_mode_validate_callback',
                                           'info'              => __('If rewrites are working on your server you always should use Disk cache with Rewrites, this is the fastest method for serving cache.', 'swift-performance'),
		                         ),
		                         array(
		                                'id'	      => 'memcached-host',
		                                'type'	=> 'text',
		                                'title'	=> esc_html__('Memcached Host', 'swift-performance'),
		                                'default'   => 'localhost',
		                                'required'  => array(
		                                      array('caching-mode', '=', 'memcached_php'),
		                                      array('enable-caching', '=', 1)
		                                ),
		                         ),
		                         array(
		                                'id'	      => 'memcached-port',
		                                'type'	=> 'text',
		                                'title'	=> esc_html__('Memcached Port', 'swift-performance'),
		                                'default'   => '11211',
		                                'required'  => array(
		                                      array('caching-mode', '=', 'memcached_php'),
		                                      array('enable-caching', '=', 1)
		                                ),
		                         ),
		                         array(
		                                'id'	=> 'early-load',
		                                'type'	=> 'switch',
		                                'title'	=> esc_html__('Early Loader', 'swift-performance'),
		                                'desc'	=> sprintf(esc_html__('Use %s Loader mu-plugin ', 'swift-performance'), SWIFT_PERFORMANCE_PLUGIN_NAME),
                                            'info'    => __('If Swift have to serve the cache with PHP it will speed up the process. Please note that some requests will be served with PHP even if you choose the Disk with Rewrites caching mode.', 'swift-performance'),
		                                'default'   => 1,
		                                'required'  => array(
		                                      array('enable-caching', '=', 1)
		                                ),
		                                'validate_callback' => 'swift_performance_muplugins_validate_callback',
		                         ),
		                         array(
		                                'id'	=> 'cache-path',
		                                'type'	=> 'text',
		                                'title'	=> esc_html__('Cache Path', 'swift-performance'),
		                                'default'   => WP_CONTENT_DIR . '/cache/',
		                                'required'  => array(
		                                      array('caching-mode', 'contains', 'disk_cache'),
		                                      array('enable-caching', '=', 1)
		                                ),
		                                'validate_callback' => 'swift_performance_cache_path_validate_callback',
		                         ),
		                         array(
		                              'id'         => 'cache-expiry-mode',
		                              'type'       => 'dropdown',
		                              'title'	     => esc_html__('Cache Expiry Mode', 'swift-performance'),
		                              'required'   => array('enable-caching', '=', 1),
		                              'options'    => array(
		                                    'timebased'   => esc_html__('Time based mode', 'swift-performance'),
		                                    'actionbased' => esc_html__('Action based mode', 'swift-performance'),
		                              ),
		                              'default'    => 'timebased',
                                          'info'      => __('It is recommended to use Action based mode. Swift will clear the cache if the content was modified (post update, new post, new comment, comment approved, stock changed, etc). However if the site is using nonce or any other thing what can expire, you should choose the Time based expiry mode.', 'swift-performance'),
		                         ),
		                         array(
		                              'id'       => 'cache-expiry-time',
                                          'type'     => 'dropdown',
		                              'title'    => esc_html__('Cache Expiry Time', 'swift-performance'),
		                              'desc'     => esc_html__('Clear cached pages after specified time', 'swift-performance'),
		                              'options'  => array(
		                                      '1800'      => '30 mins',
		                                      '3600'      => '1 hour',
		                                      '7200'      => '2 hours',
		                                      '21600'     => '6 hours',
		                                      '28800'     => '8 hours',
		                                      '36000'     => '10 hours',
		                                      '43200'     => '12 hours',
		                                      '86400'     => '1 day',
		                                      '172800'    => '2 days'
		                              ),
		                              'default' => '43200',
		                              'required'  => array('cache-expiry-mode', '=', 'timebased')
		                        ),
		                        array(
		                                'id'	=> 'cache-garbage-collection-time',
		                                'type'	=> 'dropdown',
		                                'title'	=> esc_html__('Garbage Collection Interval', 'swift-performance'),
		                                'desc'  => esc_html__('How often should check the expired cached pages', 'swift-performance'),
		                                'options'   => array(
		                                      '600'       => '10 mins',
		                                      '1800'      => '30 mins',
		                                      '3600'      => '1 hour',
		                                      '7200'      => '2 hours',
		                                      '21600'     => '6 hours',
		                                      '43200'     => '12 hours',
		                                      '86400'     => '1 day',
		                                ),
		                                'default'   => '1800',
		                                'required'  => array('cache-expiry-mode', '=', 'timebased')
		                         ),
		                         array(
		                             'id'         => 'clear-page-cache-after-post',
		                             'type'       => 'dropdown',
		                             'multiple'      => true,
		                             'title'      => esc_html__('Clear Cache on Update Post by Page', 'swift-performance'),
                                         'desc'       => esc_html__('Select pages where cache should be cleared after publish/update post.', 'swift-performance'),
                                         'info'       => __('It is useful if your site is using for example a WooCommerce shortcode to show products on homepage. Because it is a shortcode homepage cache won\'t be cleared automatically if a post/stock/comment was updated, however you can specify pages manually here.', 'swift-performance'),
		                             'options'    => $pages,
		                             'required'   => array(
                                               array('settings-mode', '=', 'advanced'),
                                               array('enable-caching', '=', 1)
                                         ),
		                         ),
		                         array(
		                             'id'         => 'clear-permalink-cache-after-post',
		                             'type'       => 'multi-text',
		                             'title'      => esc_html__('Clear Cache on Update Post by URL', 'swift-performance'),
		                             'desc'   => esc_html__('Set URLs where cache should be cleared after publish/update post.', 'swift-performance'),
                                         'info'       => __('It is useful if your site is using for example a WooCommerce shortcode to show products on homepage. Because it is a shortcode homepage cache won\'t be cleared automatically if a post/stock/comment was updated, however you can specify URLs manually here.', 'swift-performance'),
                                         'required'   => array(
                                               array('settings-mode', '=', 'advanced'),
                                               array('enable-caching', '=', 1)
                                         ),
		                         ),
		                         array(
		                             'id'          => 'enable-caching-logged-in-users',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Enable Caching for logged in users', 'swift-performance'),
		                             'desc'    => esc_html__('This option can increase the total cache size, depending on the count of your users.', 'swift-performance'),
		                             'default'     => 0,
		                             'required'    => array('enable-caching', '=', 1),
		                         ),
		                         array(
		                             'id'          => 'shared-logged-in-cache',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Shared Logged in Cache', 'swift-performance'),
		                             'desc'    => esc_html__('If you enable this option logged in users won\'t have separate private cache, but they will get content from public cache', 'swift-performance'),
		                             'default'     => 0,
		                             'required'    => array(
		                                   array('enable-caching', '=', 1),
		                                   array('enable-caching-logged-in-users', '=', 1),
		                             ),
                                         'class'	 => 'should-clear-cache'
		                         ),
		                         array(
		                             'id'          => 'mobile-support',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Separate Mobile Device Cache', 'swift-performance'),
		                             'desc'    => esc_html__('You can create separate cache for mobile devices, it can be useful if your site not just responsive, but it has a separate mobile theme/layout (eg: AMP). ', 'swift-performance'),
		                             'default'     => 0,
		                             'required'    => array('enable-caching', '=', 1),
                                         'class'	 => 'should-clear-cache'
		                         ),
		                         array(
		                             'id'          => 'browser-cache',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Enable Browser Cache', 'swift-performance'),
		                             'desc'    => esc_html__('If you enable this option it will generate htacess/nginx rules for browser cache. (Expire headers should be configured on your server as well)', 'swift-performance'),
		                             'default'     => 1,
		                             'required'   => array('enable-caching', '=', 1),
		                         ),
		                         array(
		                             'id'          => 'enable-gzip',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Enable Gzip', 'swift-performance'),
		                             'desc'    => esc_html__('If you enable this option it will generate htacess/nginx rules for gzip compression. (Compression should be configured on your server as well)', 'swift-performance'),
		                             'default'     => 1,
		                             'required'   => array('enable-caching', '=', 1),
		                         ),
		                         array(
		                             'id'          => '304-header',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Send 304 Header', 'swift-performance'),
		                             'default'     => 0,
                                         'required'   => array(
                                               array('settings-mode', '=', 'advanced'),
                                               array('enable-caching', '=', 1)
                                         ),
		                         ),
		                         array(
		                             'id'          => 'cache-404',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Cache 404 pages', 'swift-performance'),
		                             'default'     => 0,
		                             'required'   => array('enable-caching', '=', 1),
		                         ),
		                         array(
		                             'id'          => 'dynamic-caching',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Enable Dynamic Caching', 'swift-performance'),
		                             'desc'    => esc_html__('If you enable this option you can specify cacheable $_GET and $_POST requests', 'swift-performance'),
		                             'default'     => 0,
		                             'required'   => array('enable-caching', '=', 1),
                                         'class'	 => 'should-clear-cache'
		                         ),
		                         array(
		                             'id'         => 'cacheable-dynamic-requests',
		                             'type'       => 'multi-text',
		                             'title'      => esc_html__('Cacheable Dynamic Requests', 'swift-performance'),
		                             'desc'   => esc_html__('Specify $_GET and/or $_POST keys what should be cached. Eg: "s" to cache search requests', 'swift-performance'),
		                             'required'   => array('dynamic-caching', '=', 1),
                                         'class'	 => 'should-clear-cache'
		                         ),
		                         array(
		                             'id'         => 'cacheable-ajax-actions',
		                             'type'       => 'multi-text',
		                             'title'      => esc_html__('Cacheable AJAX Actions', 'swift-performance'),
		                             'desc'   => esc_html__('With this option you can cache resource-intensive AJAX requests', 'swift-performance'),
		                             'required'   => array('enable-caching', '=', 1),
		                         ),
		                         array(
		                             'id'         => 'ajax-cache-expiry-time',
		                             'type'	    => 'text',
		                             'title'	    => esc_html__('AJAX Cache Expiry Time', 'swift-performance'),
		                             'desc'   => esc_html__('Cache expiry time for AJAX requests in seconds', 'swift-performance'),
		                             'default'    => '1440',
		                             'required'   => array('enable-caching', '=', 1),
		                        ),
		            	)
		            ),
                        'tweaks' => array(
		                  'title' => esc_html__('Tweaks', 'swift-performance'),
		                  'fields' => array(
                                    array(
                                        'id'          => 'ignore-query-string',
                                        'type'       => 'custom',
                                        'action'     => 'premium-only',
                                        'title'       => esc_html__('Ignore Query String', 'swift-performance'),
                                        'desc'    => esc_html__('Ignore GET parameters for caching', 'swift-performance'),
                                        'info'       => __('If you enable this option Swift will ignore query string. It will cache the page even if there is something in query string, and also will serve the cached page if it is already cached.', 'swift-performance'),
                                        'required'   => array(
                                              array('settings-mode', '=', 'advanced'),
                                              array('enable-caching', '=', 1)
                                        ),
                                    ),
                                    array(
                                        'id'          => 'avoid-mixed-content',
                                        'type'       => 'custom',
                                        'action'     => 'premium-only',
                                        'title'       => esc_html__('Avoid Mixed Content', 'swift-performance'),
                                        'desc'        => esc_html__('Remove protocol from resource URLs to avoid mixed content errors', 'swift-performance'),
                                        'info'       => __('If your site can be loaded via HTTP and HTTPS as well it can cause mixed content errors. If you enable this option it will remove the protocol from all resources to avoid it. Use it only on HTTPS sites.', 'swift-performance'),
                                        'required'   => array('enable-caching', '=', 1),
                                    ),
                                    array(
                                        'id'          => 'keep-original-headers',
                                        'type'       => 'custom',
                                        'action'     => 'premium-only',
                                        'title'       => esc_html__('Keep Original Headers', 'swift-performance'),
                                        'desc'        => esc_html__('Serve original headers for cached pages', 'swift-performance'),
                                        'info'       => __('If you are using a plugin which send custom headers you can keep them for the cached version as well.', 'swift-performance'),
                                        'required'    => array(
                                              array('enable-caching', '=', 1),
                                              array('caching-mode', '=', 'disk_cache_php'),
                                        ),
                                    ),
                                    array(
                                        'id'          => 'cache-case-insensitive',
                                        'type'       => 'custom',
                                        'action'     => 'premium-only',
                                        'title'       => esc_html__('Case Insensitive URLs', 'swift-performance'),
                                        'desc'    => esc_html__('Convert URLs to lower case for caching', 'swift-performance'),
                                        'required'   => array(
                                              array('settings-mode', '=', 'advanced'),
                                              array('enable-caching', '=', 1)
                                        ),
                                    ),
                                    array(
                                        'id'          => 'ajaxify',
                                        'type'       => 'custom',
                                        'action'     => 'premium-only',
                                        'title'       => esc_html__('Lazyload elements', 'swift-performance'),
                                        'desc'        => esc_html__('Specify CSS selectors', 'swift-performance'),
                                        'info'        => __('You can specify CSS selectors (eg: #related-products or .last-comments) to lazyload elements on the page. These elements will be loaded via AJAX after the page loaded. It can be useful for elements which can\'t be cached and should be loaded dynamically, like related products, recently view products, most popular posts, recent comments etc.', 'swift-performance'),
                                        'required'   => array(
                                              array('settings-mode', '=', 'advanced'),
                                              array('enable-caching', '=', 1)
                                        ),
                                    ),
		                  )
		            ),
				'exceptions' => array(
		                   'title' => esc_html__('Exceptions', 'swift-performance'),
		                   'fields' => array(
		                         array(
		                             'id'         => 'exclude-post-types',
		                             'type'       => 'dropdown',
		                             'multiple'   => true,
		                             'title'      => esc_html__('Exclude Post Types', 'swift-performance'),
		                             'desc'   => esc_html__('Select post types which shouldn\'t be cached.', 'swift-performance'),
		                             'required'   => array('enable-caching', '=', 1),
		                             'options'    => $post_types,
                                         'class'	 => 'should-clear-cache'
		                         ),
		                         array(
		                             'id'         => 'exclude-pages',
		                             'type'       => 'dropdown',
		                             'multiple'   => true,
		                             'title'      => esc_html__('Exclude Pages', 'swift-performance'),
		                             'desc'   => esc_html__('Select pages which shouldn\'t be cached.', 'swift-performance'),
		                             'required'   => array('enable-caching', '=', 1),
		                             'options'    => $pages,
                                         'class'	 => 'should-clear-cache'
		                         ),
		                         array(
		                             'id'         => 'exclude-strings',
		                             'type'       => 'multi-text',
		                             'title'      => esc_html__('Exclude URLs', 'swift-performance'),
		                             'desc'   => esc_html__('URLs which contains that string won\'t be cached. Use leading/trailing # for regex', 'swift-performance'),
		                             'required'   => array('enable-caching', '=', 1),
                                         'class'	 => 'should-clear-cache'
		                         ),
		                         array(
		                             'id'         => 'exclude-content-parts',
		                             'type'       => 'multi-text',
		                             'title'      => esc_html__('Exclude Content Parts', 'swift-performance'),
		                             'desc'   => esc_html__('Pages which contains that string won\'t be cached. Use leading/trailing # for regex', 'swift-performance'),
		                             'required'   => array('enable-caching', '=', 1),
                                         'class'	 => 'should-clear-cache'
		                         ),
		                         array(
		                             'id'         => 'exclude-useragents',
		                             'type'       => 'multi-text',
		                             'title'      => esc_html__('Exclude User Agents', 'swift-performance'),
		                             'desc'   => esc_html__('User agents which contains that string won\'t be cached. Use leading/trailing # for regex', 'swift-performance'),
		                             'required'   => array('enable-caching', '=', 1),
		                         ),
		                         array(
		                             'id'          => 'exclude-crawlers',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Exclude Crawlers', 'swift-performance'),
		                             'desc'    => esc_html__('Exclude known crawlers from cache', 'swift-performance'),
		                             'default'     => 0,
		                             'required'   => array('enable-caching', '=', 1),
		                         ),
		                         array(
		                             'id'          => 'exclude-author',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Exclude Author Pages', 'swift-performance'),
		                             'default'     => 1,
		                             'required'   => array('enable-caching', '=', 1),
                                         'class'	 => 'should-clear-cache'
		                         ),
		                         array(
		                             'id'          => 'exclude-archive',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Exclude Archive', 'swift-performance'),
		                             'default'     => 0,
		                             'required'   => array('enable-caching', '=', 1),
                                         'class'	 => 'should-clear-cache'
		                         ),
		                         array(
		                             'id'          => 'exclude-rest',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Exclude REST URLs', 'swift-performance'),
		                             'default'     => 1,
		                             'required'   => array('enable-caching', '=', 1),
                                         'class'	 => 'should-clear-cache'
		                         ),
		                         array(
		                             'id'          => 'exclude-feed',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Exclude Feed', 'swift-performance'),
		                             'default'     => 1,
		                             'required'   => array('enable-caching', '=', 1),
                                         'class'	 => 'should-clear-cache'
		                        ),
		                  )
		            ),
				'warmup' => array(
		                   'title' => esc_html__('Warmup', 'swift-performance'),
		                   'fields' => array(
		                         array(
		                             'id'          => 'enable-remote-prebuild-cache',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Enable Remote Prebuild Cache', 'swift-performance'),
		                             'desc'   => esc_html__('Use API to prebuild cache.', 'swift-performance'),
                                         'info'       => __('It is a fallback option if loopbacks are disabled on the server. If you can use local prebuild it is recommended to leave this option unchecked.', 'swift-performance'),
		                             'default'     => 0,
		                             'required'   => array('purchase-key', '!=', ''),
		                         ),
		                         array(
		                             'id'          => 'automated_prebuild_cache',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Prebuild Cache Automatically', 'swift-performance'),
		                             'desc'    => esc_html__('This option will prebuild the cache after it was cleared', 'swift-performance'),
		                             'default'     => 0,
		                         ),
		                         array(
		                             'id'          => 'prebuild-speed',
		                             'type'        => 'dropdown',
		                             'title'       => esc_html__('Prebuild Speed', 'swift-performance'),
		                             'desc'    => esc_html__('You can limit prebuild speed. It is recommended to use on limited shared hosting.', 'swift-performance'),
		                             'default'     => 5,
		                             'options'     => array(
		                                   5  => __('Moderate', 'swift-performance'),
		                                   20 => __('Reduced', 'swift-performance'),
		                                   40 => __('Slow', 'swift-performance'),
		                             ),
		                             'required'   => array('automated_prebuild_cache', '=', 1),
		                         ),
		                         array(
		                             'id'          => 'discover-warmup',
                                         'type'       => 'custom',
                                         'action'     => 'premium-only',
		                             'title'       => esc_html__('Discover New Pages', 'swift-performance'),
		                             'desc'    => esc_html__('Let the plugin to discover new pages for warmup (eg: pagination, plugin-created pages, etc)', 'swift-performance'),
		                             'default'     => 0,
                                         'required'   => array('settings-mode', '=', 'advanced')
		                         ),
		                         array(
		                             'id'          => 'cache-author',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Prebuild Author Pages', 'swift-performance'),
		                             'default'     => 0,
		                             'required'   => array('enable-caching', '=', 1),
                                         'class'	 => 'should-clear-cache'
		                         ),
		                         array(
		                             'id'          => 'cache-archive',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Prebuild Archive', 'swift-performance'),
		                             'default'     => 1,
		                             'required'   => array('enable-caching', '=', 1),
                                         'class'	 => 'should-clear-cache'
		                         ),
		                         array(
		                             'id'          => 'cache-rest',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Prebuild REST URLs', 'swift-performance'),
		                             'default'     => 0,
		                             'required'   => array('enable-caching', '=', 1),
                                         'class'	 => 'should-clear-cache'
		                         ),
		                         array(
		                             'id'          => 'cache-feed',
		                             'type'        => 'switch',
		                             'title'       => esc_html__('Prebuild Feed', 'swift-performance'),
		                             'default'     => 0,
		                             'required'   => array('enable-caching', '=', 1),
                                         'class'	 => 'should-clear-cache'
		                        ),
		                  )
		            ),
				'varnish' => array(
		                   'title' => esc_html__('Varnish', 'swift-performance'),
		                   'fields' => array(
		                         array(
		                               'id'         => 'varnish-auto-purge',
		                               'type'	  => 'switch',
		                               'title'      => esc_html__('Enable Auto Purge', 'swift-performance'),
		                               'default'    => 0,
		                         ),
		                         array(
		                            'id'		=> 'custom-varnish-host',
		                            'type'		=> 'text',
		                            'title'		=> esc_html__('Custom Host', 'swift-performance'),
		                            'desc'	=> esc_html__('If you are using proxy (eg: Cloudflare) you may need this option', 'swift-performance'),
		                            'default'	=> '',
		                            'required'	=> array(
		                                   array('varnish-auto-purge', '=', '1')
		                            )
		                         ),
		                  )
		            ),
                        'appcache' => array(
		                   'title' => esc_html__('Appcache', 'swift-performance'),
		                   'fields' => array(
		                         array(
		                               'id'         => 'appcache-desktop',
		                               'type'	  => 'switch',
		                               'title'      => esc_html__('Enable Appcache for Desktop', 'swift-performance'),
		                               'default'    => 0,
		                               'required'   => array(
                                                array('settings-mode', '=', 'advanced'),
                                                array('caching-mode', 'CONTAINS', 'disk_cache'),
                                           ),
		                         ),
		                         array(
		                            'id'            => 'appcache-desktop-mode',
		                            'type'          => 'dropdown',
		                            'title'         => esc_html__('Appcache Mode', 'swift-performance'),
		                            'options'       => array(
		                                  'full-site'      => esc_html__('Full site', 'swift-performance'),
		                                  'specific-pages' => esc_html__('Specific pages only', 'swift-performance'),
		                            ),
		                            'default'       => 'full-site',
		                            'required'      => array(
		                                   array('appcache-desktop', '=', '1')
		                            ),
		                         ),
		                         array(
		                           'id'            => 'appcache-desktop-max',
		                           'type'          => 'text',
		                           'title'         => esc_html__('Desktop Max Size', 'swift-performance'),
		                           'desc'      => esc_html__('Appcache maximum full size on desktop devices', 'swift-performance'),
		                           'default'       => '104857600',
		                           'required'      => array(
		                                   array('appcache-desktop', '=', '1')
		                           ),
		                         ),
		                         array(
		                             'id'         => 'appcache-desktop-included-pages',
		                             'type'       => 'dropdown',
		                             'multiple'      => true,
		                             'title'      => esc_html__('Include Pages', 'swift-performance'),
		                             'desc'   => esc_html__('Select pages which should be cached with Appcache.', 'swift-performance'),
		                             'required'   => array(
		                                array('appcache-desktop', '=', 1),
		                                array('appcache-desktop-mode', '=', 'specific-pages'),
		                             ),
		                             'options'    => $pages,
		                         ),
		                         array(
		                             'id'         => 'appcache-desktop-included-strings',
		                             'type'       => 'multi-text',
		                             'title'      => esc_html__('Include Strings', 'swift-performance'),
		                             'desc'   => esc_html__('Cache pages with Appcache only if one of these strings is found in the URL.', 'swift-performance'),
		                             'required'   => array(
		                                array('appcache-desktop', '=', 1),
		                                array('appcache-desktop-mode', '=', 'specific-pages'),
		                             ),
		                         ),
		                         array(
		                             'id'         => 'appcache-desktop-excluded-pages',
		                             'type'       => 'dropdown',
		                             'multiple'      => true,
		                             'title'      => esc_html__('Exclude Pages', 'swift-performance'),
		                             'desc'   => esc_html__('Select pages which shouldn\'t be cached with Appcache.', 'swift-performance'),
		                             'required'   => array(
		                                array('appcache-desktop', '=', 1),
		                                array('appcache-desktop-mode', '=', 'full-site'),
		                             ),
		                             'options'    => $pages,
		                         ),
		                         array(
		                             'id'         => 'appcache-desktop-excluded-strings',
		                             'type'       => 'multi-text',
		                             'title'      => esc_html__('Exclude Strings', 'swift-performance'),
		                             'desc'   => esc_html__('Exclude pages from Appcache if one of these strings is found in the URL.', 'swift-performance'),
		                             'required'   => array(
		                                array('appcache-desktop', '=', 1),
		                                array('appcache-desktop-mode', '=', 'full-site'),
		                             ),
		                         ),
		                         array(
		                              'id'         => 'appcache-mobile',
		                              'type'	      => 'switch',
		                              'title'      => esc_html__('Enable Appcache for Mobile', 'swift-performance'),
		                              'default'    => 0,
		                              'required'   => array(
                                                array('settings-mode', '=', 'advanced'),
                                                array('caching-mode', 'contains', 'disk_cache')
                                          )
		                         ),
		                         array(
		                            'id'            => 'appcache-mobile-mode',
		                            'type'          => 'dropdown',
		                            'title'         => esc_html__('Appcache Mode', 'swift-performance'),
		                            'options'       => array(
		                                  'full-site'      => esc_html__('Full site', 'swift-performance'),
		                                  'specific-pages' => esc_html__('Specific pages only', 'swift-performance'),
		                            ),
		                            'default'       => 'full-site',
		                            'required'      => array(
		                                   array('appcache-mobile', '=', '1')
		                            ),
		                         ),
		                         array(
		                           'id'            => 'appcache-mobile-max',
		                           'type'          => 'text',
		                           'title'         => esc_html__('Mobile Max Size', 'swift-performance'),
		                           'desc'      => esc_html__('Appcache maximum full size on desktop devices', 'swift-performance'),
		                           'default'       => '5242880',
		                           'required'      => array(
		                                   array('appcache-mobile', '=', '1')
		                           ),
		                         ),
		                         array(
		                             'id'         => 'appcache-mobile-included-pages',
		                             'type'       => 'dropdown',
		                             'multiple'      => true,
		                             'title'      => esc_html__('Include Pages', 'swift-performance'),
		                             'desc'   => esc_html__('Select pages which should be cached with Appcache.', 'swift-performance'),
		                             'required'   => array(
		                                array('appcache-mobile', '=', 1),
		                                array('appcache-mobile-mode', '=', 'specific-pages'),
		                             ),
		                             'options'    => $pages,
		                         ),
		                         array(
		                             'id'         => 'appcache-mobile-included-strings',
		                             'type'       => 'multi-text',
		                             'title'      => esc_html__('Include Strings', 'swift-performance'),
		                             'desc'   => esc_html__('Cache pages with Appcache only if one of these strings is found in the URL.', 'swift-performance'),
		                             'required'   => array(
		                                array('appcache-mobile', '=', 1),
		                                array('appcache-mobile-mode', '=', 'specific-pages'),
		                             ),
		                         ),
		                         array(
		                             'id'         => 'appcache-mobile-excluded-pages',
		                             'type'       => 'dropdown',
		                             'multiple'      => true,
		                             'title'      => esc_html__('Exclude Pages', 'swift-performance'),
		                             'desc'   => esc_html__('Select pages which shouldn\'t be cached with Appcache.', 'swift-performance'),
		                             'required'   => array(
		                                array('appcache-mobile', '=', 1),
		                                array('appcache-mobile-mode', '=', 'full-site'),
		                             ),
		                             'options'    => $pages,
		                         ),
		                         array(
		                             'id'         => 'appcache-mobile-excluded-strings',
		                             'type'       => 'multi-text',
		                             'title'      => esc_html__('Exclude Strings', 'swift-performance'),
		                             'desc'   => esc_html__('Exclude pages from Appcache if one of these strings is found in the URL.', 'swift-performance'),
		                             'required'   => array(
		                                array('appcache-mobile', '=', 1),
		                                array('appcache-mobile-mode', '=', 'full-site'),
		                             ),
		                         ),
		                  )
		            ),
			)
		),
            'woocommerce' => array(
                   'title' => esc_html__('WooCommerce', 'swift-performance'),
                   'icon' => 'fas fa-shopping-cart',
                   'fields' => array(
                        array(
                              'id'         => 'cache-empty-minicart',
                              'type'	 => 'switch',
                              'title'      => esc_html__('Cache Empty Minicart', 'swift-performance'),
                              'desc'       => esc_html__('Let Swift to cache Cart Fragments (wc-ajax=get_refreshed_fragments) requests if the cart is empty', 'swift-performance'),
                              'default'    => 0,
                              'required'   => array(
                                    array('settings-mode', '=', 'advanced'),
                                    array('enable-caching', '=', 1)
                              )
                        ),

                  )
            ),
            'cdn' => array(
                  'title' => esc_html__('CDN', 'swift-performance'),
                  'icon' => 'fas fa-tasks',
                  'subsections' => array(
                        'general' => array(
                             'title' => esc_html__('General', 'swift-performance'),
                             'fields' => array(
                                   array(
                                               'id'	=> 'enable-cdn',
                                               'type'	=> 'switch',
                                               'title' => esc_html__('Enable CDN', 'swift-performance'),
                                               'default' => 0,
                                               'class' => 'should-clear-cache'
                                   ),
                                   array(
                                               'id'	=> 'cdn-hostname-master',
                                               'type'	=> 'text',
                                               'title'	=> esc_html__('CDN Hostname', 'swift-performance'),
                                               'required' => array('enable-cdn', '=', 1),
                                               'class' => 'should-clear-cache'
                                   ),
                                   array(
                                               'id'	=> 'cdn-hostname-slot-1',
                                               'type'	=> 'text',
                                               'title' => esc_html__('CDN Hostname for Javascript ', 'swift-performance'),
                                               'required' => array('cdn-hostname-master', '!=', ''),
                                               'desc' => esc_html__('Use different hostname for javascript files', 'swift-performance'),
                                               'class' => 'should-clear-cache'
                                   ),
                                   array(
                                               'id'	=> 'cdn-hostname-slot-2',
                                               'type'	=> 'text',
                                               'title'	=> esc_html__('CDN Hostname for Media files', 'swift-performance'),
                                               'required' => array('cdn-hostname-slot-1', '!=', ''),
                                               'desc' => esc_html__('Use different hostname for media files', 'swift-performance'),
                                               'class' => 'should-clear-cache'
                                   ),
                                   array(
                                               'id'	=> 'enable-cdn-ssl',
                                               'type'	=> 'switch',
                                               'title'	=> esc_html__('Enable CDN on SSL', 'swift-performance'),
                                               'default' => 0,
                                               'desc' => esc_html__('You can specify different hostname(s) for SSL, or leave them blank for use the same host on HTTP and SSL', 'swift-performance'),
                                               'required' => array('enable-cdn', '=', 1),
                                               'class' => 'should-clear-cache'
                                   ),
                                   array(
                                               'id'	=> 'cdn-hostname-master-ssl',
                                               'type'	=> 'text',
                                               'title'	=> esc_html__('SSL CDN Hostname', 'swift-performance'),
                                               'required' => array('enable-cdn-ssl', '=', 1),
                                               'class' => 'should-clear-cache'
                                   ),
                                   array(
                                               'id'	=> 'cdn-hostname-slot-1-ssl',
                                               'type'	=> 'text',
                                               'title'	=> esc_html__('CDN Hostname for Javascript ', 'swift-performance'),
                                               'required' => array('cdn-hostname-master-ssl', '!=', ''),
                                               'desc' => esc_html__('Use different hostname for javascript files', 'swift-performance'),
                                               'class' => 'should-clear-cache'
                                   ),
                                   array(
                                               'id'	=> 'cdn-hostname-slot-2-ssl',
                                               'type'	=> 'text',
                                               'title'	=> esc_html__('CDN Hostname for Media files', 'swift-performance'),
                                               'required' => array('cdn-hostname-slot-1-ssl', '!=', ''),
                                               'desc' => esc_html__('Use different hostname for media files', 'swift-performance'),
                                               'class' => 'should-clear-cache'
                                   ),
                                   array(
                                               'id'         => 'cdn-file-types',
                                               'type'       => 'custom',
                                               'action'     => 'premium-only',
                                               'title'	=> esc_html__('CDN Custom File Types', 'swift-performance'),
                                               'desc'       => esc_html__('Use CDN for custom file types. Specify file extensions, eg: pdf', 'swift-performance'),
                                               'required'   => array('enable-cdn', '=', 1),
                                   ),
                             )

                       ),
                       'cloudflare' => array(
                              'title' => esc_html__('Cloudflare', 'swift-performance'),
                              'fields' => array(
                                    array(
                                          'id'         => 'cloudflare-auto-purge',
                                          'type'	 => 'switch',
                                          'title'      => esc_html__('Enable Auto Purge', 'swift-performance'),
                                          'default'    => 0,
                                    ),
                                    array(
                                       'id'           => 'cloudflare-email',
                                       'type'         => 'text',
                                       'title'        => esc_html__('Cloudflare Account E-mail', 'swift-performance'),
                                       'default'      => '',
                                       'required'     => array(
                                              array('cloudflare-auto-purge', '=', '1')
                                       )
                                    ),
                                    array(
                                      'id'            => 'cloudflare-api-key',
                                      'type'          => 'license',
                                      'title'         => esc_html__('Cloudflare API Key', 'swift-performance'),
                                      'default'       => '',
                                      'required'      => array(
                                              array('cloudflare-auto-purge', '=', '1')
                                      )
                                    ),
                                    array(
                                      'id'            => 'cloudflare-host',
                                      'type'          => 'text',
                                      'title'         => esc_html__('Cloudflare Host', 'swift-performance'),
                                      'default'       => parse_url(Swift_Performance_Lite::home_url(), PHP_URL_HOST),
                                      'required'      => array(
                                              array('cloudflare-auto-purge', '=', '1')
                                      )
                                    ),
                               )
                        ),
                        'cdn-maxcdn' => array(
                              'title' => esc_html__('MaxCDN (StackPath)', 'swift-performance'),
                              'fields' => array(
                                    array(
                                                 'id'   	=> 'maxcdn-alias',
                                                 'type' 	=> 'text',
                                                 'title'	=> esc_html__('MAXCDN Alias', 'swift-performance'),
                                                 'required'   => array(
                                                      array('settings-mode', '=', 'advanced'),
                                                      array('enable-cdn', '=', '1')
                                                 ),
                                    ),
                                    array(
                                                 'id'   	=> 'maxcdn-key',
                                                 'type' 	=> 'text',
                                                 'title'	=> esc_html__('MAXCDN Consumer Key', 'swift-performance'),
                                                 'required'   => array(
                                                      array('settings-mode', '=', 'advanced'),
                                                      array('enable-cdn', '=', '1')
                                                 ),
                                    ),
                                    array(
                                                 'id'   	=> 'maxcdn-secret',
                                                 'type' 	=> 'license',
                                                 'title'      => esc_html__('MAXCDN Consumer Secret', 'swift-performance'),
                                                 'required'   => array(
                                                      array('settings-mode', '=', 'advanced'),
                                                      array('enable-cdn', '=', '1')
                                                 ),
                                    ),
                              )
                        )
                  )
            ),
	)
));

?>