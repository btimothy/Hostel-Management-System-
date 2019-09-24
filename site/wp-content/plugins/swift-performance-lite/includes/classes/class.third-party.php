<?php

class Swift_Performance_Third_Party {
      /**
       * Detect third party cache
       * should run after plugins_loaded
       */
      public static function detect_cache(){
            $detected = false;

            // WP Engine detected
            if (class_exists("WpeCommon")) {
                  $detected = true;
            }

            // SG Optimizer detected
            if (function_exists('sg_cachepress_purge_cache')) {
                  $sg_cachepress = get_option('sg_cachepress');

                  if (isset($sg_cachepress['enable_cache']) && $sg_cachepress['enable_cache'] === 1){
                        $detected = true;
                  }
            }

            // Third party cache was detected
            if ($detected && !defined('SWIFT_PERFORMANCE_DISABLE_CACHE')){
                  // Hide caching options in settings
                  add_action('luv_framework_before_render_sections', function($that){
                        unset($that->args['sections']['caching']);

                        // optimize-prebuild-only
                        unset($that->args['sections']['optimization']['general']['fields'][2]);

                        // merge-background-only
                        unset($that->args['sections']['optimization']['general']['fields'][3]);
                  });

                  // Force disable prebuild/background only modes
                  Swift_Performance_Lite::update_option('optimize-prebuild-only', 0);
                  Swift_Performance_Lite::update_option('merge-background-only', 0);

                  // Disable caching
                  define('SWIFT_PERFORMANCE_DISABLE_CACHE', true);
            }

            // Sitepress domain mapping
            add_filter('swift_performance_enabled_hosts', array(__CLASS__, 'sitepress_domain_mapping'));

      }

      /**
       * Clear known third party caches
       */
      public static function clear_cache(){
            // Godaddy
            if (class_exists("\\WPaaS\\Cache")){
                  \WPaaS\Cache::ban();
            }

            // WP Engine
            if (class_exists("WpeCommon")) {
                  if (method_exists('WpeCommon', 'purge_varnish_cache')){
                        WpeCommon::purge_varnish_cache();
                  }
                  if (method_exists('WpeCommon', 'purge_memcached')){
                      WpeCommon::purge_memcached();
                  }
                  if (method_exists('WpeCommon', 'clear_maxcdn_cache')){
                      WpeCommon::clear_maxcdn_cache();
                  }
            }

            // Siteground
            if (function_exists('sg_cachepress_purge_cache')) {
                  sg_cachepress_purge_cache();
            }
      }

      /**
       * Add filter for enabled hosts
       * @param array $hosts
       * @return array
       */
      public static function sitepress_domain_mapping($hosts){
            global $sitepress;
            if (!empty($sitepress) && is_callable(array($sitepress, 'get_setting'))){
                  $domains = $sitepress->get_setting( 'language_domains', array() );
                  if (!empty($domains)){
                        $hosts = array_merge($hosts, $domains);
                  }
            }
            return $hosts;
      }

}

?>
