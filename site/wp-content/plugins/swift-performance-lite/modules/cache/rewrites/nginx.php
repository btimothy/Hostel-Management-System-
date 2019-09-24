<?php ob_start();?>
set $swift_cache 1;
if ($request_method = POST){
	set $swift_cache 0;
}

if ($args != ''){
	set $swift_cache 0;
}

if ($http_cookie ~* "wordpress_logged_in") {
	set $swift_cache 0;
}

if ($request_uri ~ ^/<?php echo str_replace(ABSPATH, '', trailingslashit(self::get_option('cache-path'))).SWIFT_PERFORMANCE_CACHE_BASE_DIR; ?>([^/]*)/assetproxy) {
      set $swift_cache 0;
}

if (!-f "<?php echo trailingslashit(self::get_option('cache-path')).SWIFT_PERFORMANCE_CACHE_BASE_DIR; ?>/$http_host/$request_uri/desktop/unauthenticated/index.html") {
	set $swift_cache 0;
}

<?php if (Swift_Performance_Lite::check_option('mobile-support',1)):?>
set $swift_mobile_cache 1;
if (!-f "<?php echo trailingslashit(self::get_option('cache-path')).SWIFT_PERFORMANCE_CACHE_BASE_DIR; ?>/$http_host/$request_uri/mobile/unauthenticated/index.html") {
	set $swift_mobile_cache 0;
}

if ($http_user_agent ~* (Mobile|Android|Silk|Kindle|BlackBerry|Opera+Mini|Opera+Mobi)) {
      set $swift_cache "{$swift_cache}{$swift_mobile_cache}";
}

if ($swift_cache = 11){
    rewrite .* /<?php echo str_replace(ABSPATH, '', trailingslashit(self::get_option('cache-path'))).SWIFT_PERFORMANCE_CACHE_BASE_DIR; ?>/$http_host/$request_uri/mobile/unauthenticated/index.html last;
}

if ($swift_cache = 1){
    rewrite .* /<?php echo str_replace(ABSPATH, '', trailingslashit(self::get_option('cache-path'))).SWIFT_PERFORMANCE_CACHE_BASE_DIR; ?>/$http_host/$request_uri/desktop/unauthenticated/index.html last;
}
<?php else:?>
if ($swift_cache = 1){
    rewrite .* /<?php echo str_replace(ABSPATH, '', trailingslashit(self::get_option('cache-path'))).SWIFT_PERFORMANCE_CACHE_BASE_DIR; ?>/$http_host/$request_uri/desktop/unauthenticated/index.html last;
}
<?php endif;?>
<?php return ob_get_clean();?>
