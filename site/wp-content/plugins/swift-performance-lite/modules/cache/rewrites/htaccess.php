<?php ob_start();?>
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase <?php echo parse_url(home_url('/'), PHP_URL_PATH)."\n";?>
RewriteCond %{REQUEST_METHOD} !POST
RewriteCond %{QUERY_STRING} ^$
RewriteCond %{HTTP:Cookie} !^.*(wordpress_logged_in).*$
RewriteCond %{REQUEST_URI} !^/<?php echo str_replace(ABSPATH, '', trailingslashit(self::get_option('cache-path'))).SWIFT_PERFORMANCE_CACHE_BASE_DIR; ?>([^/]*)/assetproxy
<?php if (Swift_Performance_Lite::check_option('mobile-support',1)):?>
RewriteCond %{HTTP_USER_AGENT} (Mobile|Android|Silk|Kindle|BlackBerry|Opera+Mini|Opera+Mobi) [NC]
RewriteCond <?php echo trailingslashit(self::get_option('cache-path')).SWIFT_PERFORMANCE_CACHE_BASE_DIR; ?>%{HTTP_HOST}%{REQUEST_URI}/mobile/unauthenticated/index.html -f
RewriteRule (.*) <?php echo str_replace(ABSPATH, '', trailingslashit(self::get_option('cache-path'))).SWIFT_PERFORMANCE_CACHE_BASE_DIR; ?>%{HTTP_HOST}%{REQUEST_URI}/mobile/unauthenticated/index.html [L]

RewriteCond %{REQUEST_METHOD} !POST
RewriteCond %{QUERY_STRING} ^$
RewriteCond %{HTTP:Cookie} !^.*(wordpress_logged_in).*$
RewriteCond %{REQUEST_URI} !^/<?php echo str_replace(ABSPATH, '', trailingslashit(self::get_option('cache-path'))).SWIFT_PERFORMANCE_CACHE_BASE_DIR; ?>([^/]*)/assetproxy
RewriteCond %{HTTP_USER_AGENT} !(Mobile|Android|Silk|Kindle|BlackBerry|Opera+Mini|Opera+Mobi) [NC]
RewriteCond <?php echo trailingslashit(self::get_option('cache-path')).SWIFT_PERFORMANCE_CACHE_BASE_DIR; ?>%{HTTP_HOST}%{REQUEST_URI}/desktop/unauthenticated/index.html -f
RewriteRule (.*) <?php echo str_replace(ABSPATH, '', trailingslashit(self::get_option('cache-path'))).SWIFT_PERFORMANCE_CACHE_BASE_DIR; ?>%{HTTP_HOST}%{REQUEST_URI}/desktop/unauthenticated/index.html [L]
<?php else:?>
RewriteCond <?php echo trailingslashit(self::get_option('cache-path')).SWIFT_PERFORMANCE_CACHE_BASE_DIR; ?>%{HTTP_HOST}%{REQUEST_URI}/desktop/unauthenticated/index.html -f
RewriteRule (.*) <?php echo str_replace(ABSPATH, '', trailingslashit(self::get_option('cache-path'))).SWIFT_PERFORMANCE_CACHE_BASE_DIR; ?>%{HTTP_HOST}%{REQUEST_URI}/desktop/unauthenticated/index.html [L]
<?php endif;?>
</IfModule>
<?php return ob_get_clean();?>
