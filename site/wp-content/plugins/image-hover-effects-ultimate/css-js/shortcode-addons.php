<?php
if (!defined('ABSPATH'))
    exit;
image_hover_ultimate_user_capabilities();
$status = get_option('image_hover_ultimate_license_status');
wp_add_inline_script('iheu-vendor-bootstrap-jss', 'jQuery(".oxi-btn").click(function(){
                                                var url = jQuery(this).attr("oxilink"); 
                                                window.open(url, "_blank");
                                        });
                                        function oxiequalHeight(group) {
                                            tallest = 0;
                                            group.each(function() {
                                               thisHeight = jQuery(this).height();
                                               if(thisHeight > tallest) {
                                                  tallest = thisHeight;
                                               }
                                            });
                                            group.height(tallest);
                                         }
                                         jQuery(document).ready(function() {
                                            oxiequalHeight(jQuery(".oxi-addons-promote-features-content"));
                                         });
                                         jQuery(".oxi-addons-promote-accordionstab-heading").click(function () { 
                                           if (jQuery(this).hasClass("active") !== false) {
                                               jQuery(this).removeClass("active"); 
                                               var activeTab = jQuery(this).attr("oxi-ref");
                                               jQuery(activeTab).slideUp();
                                          } else if (jQuery(this).hasClass("active") === false) {
                                                jQuery(this).addClass("active");
                                                var activeTab = jQuery(this).attr("oxi-ref");
                                                jQuery(activeTab).slideDown(); 
                                          } });');
?>
<div class="wrap">    
    <div class="oxilab-admin-wrapper">
        <div class="oxi-addons-promote-header">
            <div class="oxi-addons-promote-header-image">
                <img src="<?php echo plugins_url(); ?>/vc-tabs/admin/shortcode-addons.png">
            </div>
            <div class="oxi-addons-promote-header-heading">
                Shortcode Addons
            </div>
            <div class="oxi-addons-promote-header-info">
                Ultimate elements library for WordPress Page Builder, Page or Post. 50+ Premium elements with endless customization options.
            </div>
            <div class="oxilab-admin-wrapper">
                <div class="oxilab-admin-coupon">
                    <?php
                    $now = (strtotime("now"));
                    $until = (strtotime("16 March 2019"));
                    if ($status == 'valid') {
                        if ($now < $until) {
                            echo 'Exclusive offer: Get 100% discount as you are our Premium customers. Kindly use <strong>SAUPGRADE</strong> at discount code and garb 100% discount at Single Version.<br><br>*Kindly use your purchase email to active discount code.';
                        }else{
                             echo 'Exclusive offer: Get 50% discount as you are our Premium customers. Kindly use <strong>SA50DIC</strong> at discount code and garb 50% discount at Single Version.<br><br>*Kindly use your purchase email to active discount code.';
                        }
                    }else{
                        echo 'Exclusive offer: Image hover Effcts Ultimate are completely free with Shortcode Addons';
                    }
                    ?>
                </div>
            </div>
            <div class="oxi-addons-promote-header-button">
                <button type="button" class="oxi-btn" oxilink="https://www.oxilab.org/downloads/short-code-addons/">Download</button>
                <button type="button" class="oxi-btn oxi-btn-2" oxilink="https://www.oxilab.org/shortcode-addons-features/">Elements</button>
            </div>
        </div>


        <div class="oxi-addons-promote-features">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="oxi-addons-promote-features-icon">
                    <i class="far fa-window-restore"></i>
                </div>
                <div class="oxi-addons-promote-features-heading">
                    Fully Responsive
                </div>
                <div class="oxi-addons-promote-features-content">
                    You can use Shortcode Addons with any WordPress theme as long as you installed and activated on it. We’ve tested it on popular theme like GeneratePress, Astra, Ocean also regular Updated.
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="oxi-addons-promote-features-icon">
                    <i class="fas fa-life-ring"></i>
                </div>
                <div class="oxi-addons-promote-features-heading">
                    Friendly Support
                </div>
                <div class="oxi-addons-promote-features-content">
                    Our 5 Stars ratings on WordPress.org platforms mainly because of our customer support quality. We even offer our support for free version users and it has been praised by our amazing plugin users.
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="oxi-addons-promote-features-icon">
                    <i class="fas fa-assistive-listening-systems"></i>
                </div>
                <div class="oxi-addons-promote-features-heading">
                    Use With Any Theme
                </div>
                <div class="oxi-addons-promote-features-content">
                    We’ve tested it on popular theme like GeneratePress, Astra, Ocean and also with our own themes like Wiz & it worked perfectly on all of them. We also update regularly to fixed bugs.  
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="oxi-addons-promote-features-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <div class="oxi-addons-promote-features-heading">
                    Light Weight
                </div>
                <div class="oxi-addons-promote-features-content">
                    Shortcode Addons is 100% modular, Plugins file will load when you only use thats shortcode. Without any shortcode its not load any CSS or JQUERY file also perform faster performance.
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="oxi-addons-promote-features-icon">
                    <i class="fas fa-wrench"></i>
                </div>
                <div class="oxi-addons-promote-features-heading">
                    Updated Regularly
                </div>
                <div class="oxi-addons-promote-features-content">
                    Shortcode Addons is regularly updated to be always compatible with the latest WordPress versions. We also add new elements and enhance current elements based on our customers feedback.
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="oxi-addons-promote-features-icon">
                    <i class="fas fa-baseball-ball"></i>
                </div>
                <div class="oxi-addons-promote-features-heading">
                    Cross Browsers Compatible
                </div>
                <div class="oxi-addons-promote-features-content">
                    Shortcode Addons’ elements are tested on all major web browsers like Google Chrome, Mozilla Firefox, Safari, Opera and Internet Explorer to assure full browser compatibility for all elements.
                </div>
            </div>
        </div>
        <div class="oxi-addons-promote-accordions">
            <div class="oxi-addons-promote-accordions-heading">
                Frequently Asked questions
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="oxi-addons-promote-accordionstab">
                    <div class="oxi-addons-promote-accordionstab-heading" oxi-ref="#oxi-addons-promote-accordionstab-content-1">
                        <i class="fas fa-caret-right"></i>
                        <i class="fas fa-caret-down"></i>
                        Is this a standalone plugin?
                    </div>
                    <div class="oxi-addons-promote-accordionstab-content" id="oxi-addons-promote-accordionstab-content-1">
                        Yes, You can use shortcode into page or post. As you are using any page builder so its also works with page builders. <br><br>Normally we build widgets for popular page builder. If you don't get kindly use shortcode into your page builders.
                    </div>
                </div>     
                <div class="oxi-addons-promote-accordionstab">
                    <div class="oxi-addons-promote-accordionstab-heading" oxi-ref="#oxi-addons-promote-accordionstab-content-2">
                        <i class="fas fa-caret-right"></i>
                        <i class="fas fa-caret-down"></i>
                        Does it work with any WordPress theme?
                    </div>
                    <div class="oxi-addons-promote-accordionstab-content" id="oxi-addons-promote-accordionstab-content-2">
                        Yes, it will work with any WordPress theme as long as you are using active Shortcode Addons into your website.
                    </div>
                </div> 
                <div class="oxi-addons-promote-accordionstab">
                    <div class="oxi-addons-promote-accordionstab-heading" oxi-ref="#oxi-addons-promote-accordionstab-content-3">
                        <i class="fas fa-caret-right"></i>
                        <i class="fas fa-caret-down"></i>
                        How often do you update Shortcode Addons?
                    </div>
                    <div class="oxi-addons-promote-accordionstab-content" id="oxi-addons-promote-accordionstab-content-3">
                        We update our plugins monthly at least. We always add enhancements to existing elements according to users feedback, add new elements and for sure fix bugs and compatibility issues whenever discovered. <br><br>You can Check our change log Here.
                    </div>
                </div> 
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="oxi-addons-promote-accordionstab">
                    <div class="oxi-addons-promote-accordionstab-heading" oxi-ref="#oxi-addons-promote-accordionstab-content-6">
                        <i class="fas fa-caret-right"></i>
                        <i class="fas fa-caret-down"></i>
                        Will this plugin slow down my website speed?
                    </div>
                    <div class="oxi-addons-promote-accordionstab-content" id="oxi-addons-promote-accordionstab-content-6">
                        No, As our awesome plugins admin panel, If you can't add any shortcode into your sites. Shortcode Addons will not load any CSS or jQuery into your page. <br> <br>Also its will load CSS as your desire shortcode only not all. So your page will speed up with Shortcode Addons.
                    </div>
                </div>  
                <div class="oxi-addons-promote-accordionstab">
                    <div class="oxi-addons-promote-accordionstab-heading" oxi-ref="#oxi-addons-promote-accordionstab-content-4">
                        <i class="fas fa-caret-right"></i>
                        <i class="fas fa-caret-down"></i>
                        Do I have to buy Shortcode Addons?
                    </div>
                    <div class="oxi-addons-promote-accordionstab-content" id="oxi-addons-promote-accordionstab-content-4">
                        No, Its totally depend on You. We don't force any user to buy pro version. There have some Customization limitation only at free version and pro version..<br><br> So if you are happy with free version, Thats awesome. we also offer support for free version.                  
                    </div>
                </div>  
                <div class="oxi-addons-promote-accordionstab">
                    <div class="oxi-addons-promote-accordionstab-heading" oxi-ref="#oxi-addons-promote-accordionstab-content-5">
                        <i class="fas fa-caret-right"></i>
                        <i class="fas fa-caret-down"></i>
                        Do I need to have coding skills to use Premium Addons?
                    </div>
                    <div class="oxi-addons-promote-accordionstab-content" id="oxi-addons-promote-accordionstab-content-5">
                        No, using Shortcode Addons for any website doesn’t require any coding skills. Just follow Tutorial and Documentation so you can use Shortcode Addons.
                    </div>
                </div>  
            </div>            
        </div>
    </div>
</div>