<?php defined('ABSPATH') or die("KEEP CALM AND CARRY ON");?>
<h1><?php echo SWIFT_PERFORMANCE_PLUGIN_NAME;?></h1>
<ul class="swift-menu">
      <?php foreach(Swift_Performance_Lite::get_menu() as $element):?>
            <li<?php echo((isset($_GET['subpage']) && $_GET['subpage'] == $element['slug']) || (!isset($_GET['subpage']) && $element['slug'] == 'dashboard') ? ' class="active"' : '');?>><a href="<?php echo esc_url(add_query_arg('subpage', $element['slug'], menu_page_url('swift-performance', false)));?>"><?php echo esc_html($element['name']);?></a></li>
      <?php endforeach;?>
</ul>
