<?php defined('ABSPATH') or die("KEEP CALM AND CARRY ON");?>
<?php
	$caching_on			= Swift_Performance_Lite::check_option('enable-caching', 1);
	$assets_caching_on	= (Swift_Performance_Lite::check_option('merge-scripts', 1) || Swift_Performance_Lite::check_option('merge-styles', 1));

	$ajax_caching_on		= $caching_on && (count(array_filter((array)Swift_Performance_Lite::get_option('cacheable-ajax-actions'))) > 0);
	$dynamic_caching_on	= $caching_on && Swift_Performance_Lite::check_option('dynamic-caching', 1);

	$prebuild_pid		= get_transient('swift_performance_prebuild_cache_pid');
	$prebuild_running		= !(empty($prebuild_pid) || $prebuild_pid == 'stop');

	if ($caching_on){
		include_once SWIFT_PERFORMANCE_DIR . 'includes/cache-status/cache-status.php';

	      $cache_status_table = new Swift_Performance_Cache_Status_Table();
	      $cache_status_table->prepare_items();
	}
?>

<div class="swift-message swift-hidden"></div>
<div class="swift-dashboard two-columns">
	<div class="swift-dashboard-item">
		<h3><?php esc_html_e('Actions', 'swift-performance');?></h3>
		<ul>
      	<?php if(get_option('swift_performance_rewrites') != ''):?>
            <li><a href="#" id="swift-performance-show-rewrite" class="swift-performance-control clear-response-container"><?php esc_html_e('Show Rewrite Rules', 'swift-performance');?></a></li>
      	<?php endif;?>
		<li><a href="<?php echo esc_url(add_query_arg(array('page' => 'swift-performance', 'subpage' => 'setup'), admin_url('tools.php')));?>"><?php esc_html_e('Setup Wizard', 'swift-performance');?></a></li>
		<li><a href="#" id="swift-performance-log" class="swift-performance-control clear-response-container"><?php esc_html_e('Show Log', 'swift-performance');?></a> | <a href="#" id="swift-performance-clear-logs" class="swift-performance-control"><?php esc_html_e('Clear Log', 'swift-performance');?></a></li>
		<li>
			<div class="swift-button-container">
				<?php if ($caching_on || $assets_caching_on):?>
				<a href="#" class="swift-performance-clear-cache swift-performance-control swift-btn swift-btn-gray" data-type="all"><?php esc_html_e('Clear All Cache', 'swift-performance');?></a>
				<?php endif;?>
				<?php if ($ajax_caching_on):?>
				<a href="#" class="swift-performance-clear-cache swift-performance-control swift-btn swift-btn-gray" data-type="ajax"><?php esc_html_e('Clear Ajax Cache', 'swift-performance');?></a>
				<?php endif;?>
				<?php if ($dynamic_caching_on):?>
				<a href="#" class="swift-performance-clear-cache swift-performance-control swift-btn swift-btn-gray" data-type="dynamic"><?php esc_html_e('Clear Dynamic Cache', 'swift-performance');?></a>
				<?php endif;?>
				<?php if (defined('SWIFT_PERFORMANCE_DISABLE_CACHE') && SWIFT_PERFORMANCE_DISABLE_CACHE):?>
					<br>
				<i><?php esc_html_e('3rd party caching was detected, these options may won\'t work properly.', 'swift-performance');?></i>
				<?php endif;?>
			</div>
		</li>
		</ul>
	</div>
	<div class="swift-dashboard-item offers">
		<h3><?php esc_html_e('Offers', 'swift-performance');?></h3>
		<?php Swift_Performance_Lite::dashboard_widget();?>
	</div>
</div>
<div class="swift-preformatted-box swift-box swift-hidden">
	<h3><span class="title"></span><span class="swift-box-close"><span class="dashicons dashicons-no-alt"></span></h3>
	<div class="swift-box-inner">
		<pre class="response-container"></pre>
	</div>
</div>

<?php if ($caching_on && (!defined('SWIFT_PERFORMANCE_DISABLE_CACHE') || !SWIFT_PERFORMANCE_DISABLE_CACHE)):?>
<input type="hidden" id="swift-performance-warmup-table-url" value="<?php echo set_url_scheme( 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );?>">
<div id="swift-cache-status-box" class="swift-box">
	<h3><?php esc_html_e('Cache Status', 'swift-performance');?></h3>
	<div class="swift-box-inner">
            <ul>
                  <li>
            		<label><?php esc_html_e('Known Pages', 'swift-performance')?></label>
                        <span class="cache-status-count warmup-pages-count">-</span>
                  </li>
                  <li>
                        <label><?php esc_html_e('Cached Pages', 'swift-performance')?></label>
                        <span class="cache-status-count cached-pages-count">-</span>
                  </li>
                  <li>
                        <label><?php esc_html_e('Cache size', 'swift-performance')?></label>
                        <span class="cache-status-count cache-size-count">-</span>
                  </li>
                  <li>
                        <label><?php esc_html_e('Threads', 'swift-performance')?></label>
                        <span class="cache-status-count">
					<span class="thread-count">-</span>
					<?php if (Swift_Performance_Lite::check_option('limit-threads', 1)):?>
					<span class="thread-numbers">
						<span class="thread-plus change-thread-limit"><span class="fa fa-plus"></span></span>
						<span class="thread-minus change-thread-limit"><span class="fa fa-minus"></span></span>
					</span>
					<?php endif;?>
				</span>
                  </li>
            </ul>
		<?php if ($ajax_caching_on || $dynamic_caching_on):?>
		<ul>
			<?php if ($ajax_caching_on):?>
                  <li>
            		<label><?php esc_html_e('AJAX Objects', 'swift-performance')?></label>
                        <span class="cache-status-count ajax-object-count">-</span>
                  </li>
			<li>
            		<label><?php esc_html_e('AJAX Cache Size', 'swift-performance')?></label>
                        <span class="cache-status-count ajax-size-count">-</span>
                  </li>
			<?php endif;?>
			<?php if ($dynamic_caching_on):?>
                  <li>
                        <label><?php esc_html_e('Dynamic Pages', 'swift-performance')?></label>
                        <span class="cache-status-count cached-dynamic-pages-count">-</span>
                  </li>
			<li>
                        <label><?php esc_html_e('Dynamic Cache Size', 'swift-performance')?></label>
                        <span class="cache-status-count cached-dynamic-size-count">-</span>
                  </li>
			<?php endif;?>
            </ul>
		<?php endif;?>
            <div class="prebuild-status"></div>
	</div>
</div>

<div id="swift-performance-list-table-container">
	<div id="swift-warmup-box" class="swift-box">
		<h3><?php esc_html_e('Warmup Table', 'swift-performance');?></h3>
	      <div class="swift-actions-container">
	            <div class="swift-button-container">
	                  <a href="#" id="swift-performance-refresh-list-table" class="swift-btn swift-btn-gray swift-btn-thin"><i class="fa fa-refresh"></i></a>
				<a href="#" id="swift-performance-add-warmup-link" class="swift-btn swift-btn-gray swift-btn-thin"><i class="fa fa-plus"></i></a>
				<a href="#" id="swift-performance-prebuild-cache" class="swift-btn swift-btn-blue<?php echo ($prebuild_running ? ' swift-hidden' : '')?>"><?php esc_html_e('Start Prebuild Cache', 'swift-performance');?></a>
				<a href="#" id="swift-performance-stop-prebuild-cache" class="swift-btn swift-btn-brand<?php echo (!$prebuild_running ? ' swift-hidden' : '')?>"><?php esc_html_e('Stop Prebuild Cache', 'swift-performance');?></a>
				<a href="#" id="swift-performance-reset-warmup" class="swift-btn swift-btn-brand"><?php esc_html_e('Reset Warmup Table', 'swift-performance');?></a>
	            </div>
			<div class="swift-add-warmup-link-container swift-hidden">
				<table class="wp-list-table widefat fixed striped">
					<thead>
						<tr>
							<th><?php esc_html_e('URL', 'swift-performance');?></th>
							<th><?php esc_html_e('Prebuild priority', 'swift-performance');?></th>
							<th><?php esc_html_e('Actions', 'swift-performance');?></th>
						</tr>
					</thead>

					<tbody class="field-container">
						<tr>
							<td>
								<input type="url" class="swift-input" name="url" placeholder="<?php echo esc_attr(home_url());?>" >
							</td>
							<td>
								<input type="number" class="swift-input" name="priority" value="<?php echo Swift_Performance_Lite::get_default_warmup_priority();?>" >
							</td>
							<td>
								<button id="swift-save-warmup-link" class="swift-btn swift-btn-brand">Save</button>
								<button id="swift-performance-cancel-add-warmup-link" class="swift-btn swift-btn-gray">Cancel</button>
							</td>
						</tr>
				  </tbody>
				</table>
			</div>
	      </div>
	      <?php
	            $cache_status_table->display();
	      ?>
	</div>
</div>
<?php endif;?>
