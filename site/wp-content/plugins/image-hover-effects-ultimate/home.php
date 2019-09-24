<?php
if (!defined('ABSPATH'))
    exit;
image_hover_ultimate_user_capabilities();
wp_enqueue_script('iheu-vendor-bootstrap-jss', plugins_url('css-js/bootstrap.min.js', __FILE__));
wp_enqueue_style('iheu-vendor-bootstrap', plugins_url('css-js/bootstrap.min.css', __FILE__));
wp_enqueue_style('iheu-vendor-style', plugins_url('css-js/style.css', __FILE__));
$faversion = get_option('oxi_addons_font_awesome_version');
$faversion = explode('||', $faversion);
wp_enqueue_style('font-awesome-' . $faversion[0], $faversion[1]);
global $wpdb;
if (!empty($_REQUEST['_wpnonce'])) {
    $nonce = $_REQUEST['_wpnonce'];
}


if (!empty($_POST['delete']) && is_numeric($_POST['id'])) {
    if (!wp_verify_nonce($nonce, 'image_hover_ultimate_home_delete')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        global $wpdb;
        $id = (int) $_POST['id'];
        $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
        $wpdb->query($wpdb->prepare("DELETE FROM $table_name WHERE id = %d", $id));
    }
}
if (!empty($_POST['submit']) && is_numeric($_POST['style'])) {
    if (!wp_verify_nonce($nonce, 'iheustyledata')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        global $wpdb;
        $id = (int) $_POST['style'];
        $dname = sanitize_text_field($_POST['style-rename']);
        $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
        $wpdb->update("$table_name", array("name" => $dname), array('id' => $id), array('%s'), array('%d'));
    }
}
if (!empty($_POST['export']) && is_numeric($_POST['id'])) {
    if (!wp_verify_nonce($nonce, 'image_hover_ultimate_home_export')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        global $wpdb;
        $id = (int) $_POST['id'];
        $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
        $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
        $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $id), ARRAY_A);
        $files = $wpdb->get_results("SELECT * FROM $table_list WHERE styleid = '$id' ORDER BY id DESC", ARRAY_A);
        $importdata = 'image-hover-ultimate-newOxiAddonsImportAddons';
        $importdata .= $style['name'] . '|||OxiAddonsImport|||';
        $importdata .= $style['style_name'] . '|||OxiAddonsImport|||';
        $importdata .= $style['css'];
        $importdata .= 'OxiAddonsImportAddons';
        foreach ($files as $value) {
            $importdata .= $value['title'] . '|||OxiAddonsImport|||';
            $importdata .= $value['files'] . '|||OxiAddonsImport|||';
            $importdata .= $value['buttom_text'] . '|||OxiAddonsImport|||';
            $importdata .= $value['link'] . '|||OxiAddonsImport|||';
            $importdata .= $value['image'] . '|||OxiAddonsImport|||';
            $importdata .= $value['hoverimage'] . '|||OxiAddonsImport|||';
            $importdata .= $value['data1'] . '|||OxiAddonsImport|||';
            $importdata .= $value['data1link'] . '|||OxiAddonsImport|||';
            $importdata .= $value['data2'] . '|||OxiAddonsImport|||';
            $importdata .= $value['data2link'];
            $importdata .= '|||OxiAddonsImportFiles|||';
        }

        $jQuery = 'setTimeout(function () {
                        jQuery("#oxi-addons-style-export-data").modal("show"); 
                    }, 500);
                    jQuery(".OxiAddImportDatacontent").on("click", function () {
                        jQuery("#OxiAddImportDatacontent").select();
                        document.execCommand("copy"); 
                        alert("Your Style Data Copied")
                        jQuery("#oxi-addons-style-export-data").modal("hide"); 
                    })';
        wp_add_inline_script('iheu-vendor-bootstrap-jss', $jQuery);
        if (is_plugin_active('shortcode-addons/index.php')) {
                $addonsimport ='<div class="alert alert-success">
                                    Thank you, Import your data at <strong>Import Style</strong> menu.Paste your data and Saved it.
                              </div>';
        } else {
            $addonsimport = '<div class="alert alert-danger">
                                Kindly inatall <a href="https://wordpress.org/plugins/shortcode-addons/" target="_blank"><strong>Shortcode addons</strong></a> for import Image hover data. At free version also works to import Style Data. You can also import style from demo layouts at Shortcode Addons Import Style..
                            </div>';
        }
        echo '<div class="modal fade" id="oxi-addons-style-export-data" >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">       
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Export Data</h4>
                            </div>
                            <div class="modal-body">
                            ' . $addonsimport . '
                             <textarea style="width:100%; min-height:250px" id="OxiAddImportDatacontent" class="oxi-addons-export-data-code">' . $importdata . '</textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-info OxiAddImportDatacontent")">Copy</button>
                            </div>
                        </div>
                    </div>
                </div>';
    }
}
$data = $wpdb->get_results('SELECT * FROM ' . $wpdb->prefix . 'image_hover_ultimate_style ORDER BY id DESC', ARRAY_A);
?>
<div class="wrap">

    <?php echo iheu_promote_free(); ?>
    <div class="iheu-admin-row">            
        <h1> Image Hover Effects <a href="<?php echo admin_url("admin.php?page=image-hover-ultimate-new"); ?>" class="btn btn-primary"> Add New</a></h1>
        <div class="iheu-admin-wrapper table-responsive" style="margin-top: 20px; margin-bottom: 20px;">
            <?php
            if (count($data) == 0) {
                ?>
                <div class="iheb-style-settings-preview">
                    <div class="iheb-add-new-item-heading">
                        <a href="<?php echo admin_url("admin.php?page=image-hover-ultimate-new"); ?>">
                            <div class="iheb-add-new-item">
                                <span>
                                    <i class="fa fa-plus-circle"></i>
                                    Create Your First Hover Effects
                                </span>
                            </div>
                        </a>
                    </div>
                </div>

                <?php
            } else {
                ?>
                <table class="table table-hover widefat " style="background-color: #fff; border: 1px solid #ccc">
                    <thead>
                        <tr>
                            <th style="width: 11%">ID</th>
                            <th style="width: 10%">Name</th>
                            <th style="width: 13%">Template</th>
                            <th style="width: 35%">Shortcode</th>
                            <th style="width: 32%">Edit Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data as $value) {
                            $id = $value['id'];
                            echo ' <tr>';
                            echo ' <td>' . $id . '</td>';
                            echo '  <td >' . $value['name'] . '</td>';
                            echo ' <td >' . str_replace("-", " ", $value['style_name']) . '</td>';
                            echo '<td ><span style=" display: block; padding: 0 0 5px 0px;">Shortcode <input type="text" onclick="this.setSelectionRange(0, this.value.length)" value="[iheu_ultimate_oxi id=&quot;' . $id . '&quot;]"></span>'
                            . '<span>Php Code <input type="text" onclick="this.setSelectionRange(0, this.value.length)" value="&lt;?php echo do_shortcode(&#039;[iheu_ultimate_oxi  id=&quot;' . $id . '&quot;]&#039;); ?&gt;"></span></td>';
                            echo '<td >
                                    <input type="hidden" name="' . $id . '-name" id="' . $id . '-name" value="' . $value['name'] . '">
                                    <button class="btn btn-secondary OxiAddRename" title="Remane Style"  style="float:left"  type="button" value="' . $id . '">Rename</button>
                                    <form method="post">
                                        ' . wp_nonce_field("image_hover_ultimate_home_export") . '
                                        <input type="hidden" name="id" value="' . $id . '">
                                        <button class="btn btn-success" title="Export Style" style="float:left; margin-right: 5px; margin-left: 5px;"  type="submit" value="export" name="export">Export</button>
                                    </form>
                                    <a href="' . admin_url("admin.php?page=image-hover-ultimate-new&styleid=$id") . '"  title="Edit"  class="btn btn-info" style="float:left; margin-right: 5px; margin-left: 5px;">Edit</a>
                                    <form method="post" class="orphita-style-delete">
                                            ' . wp_nonce_field("image_hover_ultimate_home_delete") . '
                                            <input type="hidden" name="id" value="' . $id . '">
                                            <button class="btn btn-danger" style="float:left"  title="Delete"  type="submit" value="delete" name="delete">Delete</button>  
                                    </form>
                                   
                             </td>';
                            echo ' </tr>';
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery(".OxiAddRename").on("click", function () {
            var id = jQuery(this).attr("value");
            var data = jQuery("#" + id + "-name").attr("value");
            jQuery("#style").val(id);
            jQuery("#style-rename").val(data);
            jQuery("#iheu-rename-data").modal("show");
        });
        jQuery('.orphita-style-delete').submit(function () {
            var status = confirm("Do you Want to Delete?");
            if (status == false) {
                return false;
            } else {
                return true;
            }
        });
    });
</script> 
<div class="modal fade" id="iheu-rename-data" >
    <form method="post">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Style Rename</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group row form-group-sm">
                        <label for="style-rename" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                        <div class="col-sm-6 nopadding">
                            <input class="form-control" type="text" value=""  name="style-rename" id="style-rename">
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