<?php

function iheu_ultimate_oxi_icon_font_selector($data) {
    $fadata = get_option('oxi_addons_font_awesome');
    $faversion = get_option('oxi_addons_font_awesome_version');
    $faversion = explode('||', $faversion);
    if ($fadata == 'yes') {
        wp_enqueue_style('font-awesome-' . $faversion[0], $faversion[1]);
    }
    $files = '<i class="' . $data . ' oxi-icons"></i>';
    return $files;
}

function iheu_ultimate_oxi_shortcode_button3($styleid, $styledata, $listdata, $userdata) {
    wp_enqueue_style('font-awesome', plugins_url('css-js/font-awesome.min.css', __FILE__));
    ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    overflow: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                    z-index:1;
                }
                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    -webkit-transition: all 0.8s ease-in-out;
                    -moz-transition: all 0.8s ease-in-out;
                    transition: all 0.8s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    vertical-align: middle;
                    text-align: center;
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a{
                    display: inline-block;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:first-child{
                    margin-right: <?php echo $styledata[99]; ?>px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:hover,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:active,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:focus{
                    border:none;
                    box-shadow: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i{
                    background: <?php echo $styledata[89]; ?>;
                    -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -webkit-border-radius: <?php echo $styledata[95]; ?>px;
                    -moz-border-radius:<?php echo $styledata[95]; ?>px;
                    border-radius: <?php echo $styledata[95]; ?>px;
                    color: <?php echo $styledata[87]; ?>;
                    display: inline-block;
                    line-height: <?php echo $styledata[97]; ?>px;
                    font-size: <?php echo $styledata[85]; ?>px;
                    text-align: center;
                    text-decoration: none;
                    width: <?php echo $styledata[97]; ?>px;
                    height: <?php echo $styledata[97]; ?>px;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i:hover{
                    color: <?php echo $styledata[91]; ?>;
                    background-color: <?php echo $styledata[93]; ?>;
                }
                <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info .iheu-data a:first-child{
                    transform: translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info .iheu-data a:first-child,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info .iheu-data a:first-child{
                    transform: translateX(0%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info .iheu-data a:last-child{
                    transform: translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info .iheu-data a:last-child,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info .iheu-data a:last-child{
                    transform: translateX(0%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info .iheu-data a:first-child{
                    transform: translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info .iheu-data a:first-child,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info .iheu-data a:first-child{
                    transform: translateX(0%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info .iheu-data a:last-child{
                    transform: translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info .iheu-data a:last-child,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info .iheu-data a:last-child{
                    transform: translateX(0%);
                }
            </style>
            <?php
            foreach ($listdata as $value) {
                $backgoundimage = '';
                $opennewtab = '';
                $valuedata1 = '';
                $valuedata2 = '';
                $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
                }
                if ($value['hoverimage'] != '') {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['data1'] != '') {
                    $valuedata1 = ' <a ' . $opennewtab . ' href="' . $value['data1link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data1']) . '</a>';
                }
                if ($value['data2'] != '') {
                    $valuedata2 = ' <a ' . $opennewtab . ' href="' . $value['data2link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data2']) . '</a>';
                }
                $adminheading = '';
                $admindata = '';
                if ($userdata == 'admin') {
                    $adminheading = 'iheu-editing';
                    $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
                }
                echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '"  ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[101] . '">
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                             ' . $valuedata1 . '
                                                             ' . $valuedata2 . '
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                         </div>';
            }
            ?>
        </div>
    </div>
    <?php
}

function iheu_ultimate_oxi_shortcode_button1($styleid, $styledata, $listdata, $userdata) {
    ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    overflow: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;

                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    -webkit-transition: all 0.8s ease-in-out;
                    -moz-transition: all 0.8s ease-in-out;
                    transition: all 0.8s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    vertical-align: middle;
                    text-align: center;
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a{
                    display: inline-block;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:first-child{
                    margin-right: <?php echo $styledata[99]; ?>px
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:hover,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:active,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:focus{
                    border:none;
                    box-shadow: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i{
                    background: <?php echo $styledata[89]; ?>;
                    -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -webkit-border-radius: <?php echo $styledata[95]; ?>px;
                    -moz-border-radius:<?php echo $styledata[95]; ?>px;
                    border-radius: <?php echo $styledata[95]; ?>px;
                    color: <?php echo $styledata[87]; ?>;
                    display: inline-block;
                    line-height: <?php echo $styledata[97]; ?>px;
                    font-size: <?php echo $styledata[85]; ?>px;
                    text-align: center;
                    text-decoration: none;
                    width: <?php echo $styledata[97]; ?>px;
                    height: <?php echo $styledata[97]; ?>px;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i:hover{
                    color: <?php echo $styledata[91]; ?>;
                    background-color: <?php echo $styledata[93]; ?>;
                }


                <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                    z-index:1;
                }
            </style>

            <?php
            foreach ($listdata as $value) {
                $backgoundimage = '';
                $opennewtab = '';
                $valuedata1 = '';
                $valuedata2 = '';
                $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
                }
                if ($value['hoverimage'] != '') {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['data1'] != '') {
                    $valuedata1 = ' <a ' . $opennewtab . ' href="' . $value['data1link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data1']) . '</a>';
                }
                if ($value['data2'] != '') {
                    $valuedata2 = ' <a ' . $opennewtab . ' href="' . $value['data2link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data2']) . '</a>';
                }
                $adminheading = '';
                $admindata = '';
                if ($userdata == 'admin') {
                    $adminheading = 'iheu-editing';
                    $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
                }
                echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '"  ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . '">
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                           
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                             ' . $valuedata1 . '
                                                             ' . $valuedata2 . '
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                         </div>';
            }
            ?>
        </div>
    </div>

    <?php
}

function iheu_ultimate_oxi_shortcode_button2($styleid, $styledata, $listdata, $userdata) {
    wp_enqueue_style('font-awesome', plugins_url('css-js/font-awesome.min.css', __FILE__));
    ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    overflow: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                    z-index:1;
                }
                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    overflow: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    -webkit-transition: all 0.8s ease-in-out;
                    -moz-transition: all 0.8s ease-in-out;
                    transition: all 0.8s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    vertical-align: middle;
                    text-align: center;
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a{
                    display: inline-block;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:first-child{
                    margin-right: <?php echo $styledata[99]; ?>px
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:hover,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:active,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:focus{
                    border:none;
                    box-shadow: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i{
                    background: <?php echo $styledata[89]; ?>;
                    -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -webkit-border-radius: <?php echo $styledata[95]; ?>px;
                    -moz-border-radius:<?php echo $styledata[95]; ?>px;
                    border-radius: <?php echo $styledata[95]; ?>px;
                    color: <?php echo $styledata[87]; ?>;
                    display: inline-block;
                    line-height: <?php echo $styledata[97]; ?>px;
                    font-size: <?php echo $styledata[85]; ?>px;
                    text-align: center;
                    text-decoration: none;
                    width: <?php echo $styledata[97]; ?>px;
                    height: <?php echo $styledata[97]; ?>px;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i:hover{
                    color: <?php echo $styledata[91]; ?>;
                    background-color: <?php echo $styledata[93]; ?>;
                }

                <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    left: -100%;
                    top: 0;
                    height: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info{
                    left: 0;
                    top: 0;
                    height: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    left: 100%;
                    top: 0;
                    height: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
                    left: 0;
                    top: 0;
                    height: 100%;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    left: 0;
                    top: -100%;
                    width: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
                    left: 0;
                    top: 0%;
                    width: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    left: 0;
                    top: 100%;
                    width: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    left: 0;
                    top: 0%;
                    width: 100%;
                }
            </style>
            <?php
            foreach ($listdata as $value) {
                $backgoundimage = '';
                $opennewtab = '';
                $valuedata1 = '';
                $valuedata2 = '';
                $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
                }
                if ($value['hoverimage'] != '') {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['data1'] != '') {
                    $valuedata1 = ' <a ' . $opennewtab . ' href="' . $value['data1link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data1']) . '</a>';
                }
                if ($value['data2'] != '') {
                    $valuedata2 = ' <a ' . $opennewtab . ' href="' . $value['data2link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data2']) . '</a>';
                }
                $adminheading = '';
                $admindata = '';
                if ($userdata == 'admin') {
                    $adminheading = 'iheu-editing';
                    $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
                }
                echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '"  ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[101] . '">
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                             ' . $valuedata1 . '
                                                             ' . $valuedata2 . '
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                         </div>';
            }
            ?>
        </div>
    </div>
    <?php
}

function iheu_ultimate_oxi_shortcode_button4($styleid, $styledata, $listdata, $userdata) {
    wp_enqueue_style('font-awesome', plugins_url('css-js/font-awesome.min.css', __FILE__));
    ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    overflow: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                    z-index:1;
                }
                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    -webkit-transition: all 0.8s ease-in-out;
                    -moz-transition: all 0.8s ease-in-out;
                    transition: all 0.8s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    vertical-align: middle;
                    text-align: center;
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a{
                    display: inline-block;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:first-child{
                    margin-right: <?php echo $styledata[99]; ?>px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:hover,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:active,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:focus{
                    border:none;
                    box-shadow: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i{
                    background: <?php echo $styledata[89]; ?>;
                    -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -webkit-border-radius: <?php echo $styledata[95]; ?>px;
                    -moz-border-radius:<?php echo $styledata[95]; ?>px;
                    border-radius: <?php echo $styledata[95]; ?>px;
                    color: <?php echo $styledata[87]; ?>;
                    display: inline-block;
                    line-height: <?php echo $styledata[97]; ?>px;
                    font-size: <?php echo $styledata[85]; ?>px;
                    text-align: center;
                    text-decoration: none;
                    width: <?php echo $styledata[97]; ?>px;
                    height: <?php echo $styledata[97]; ?>px;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i:hover{
                    color: <?php echo $styledata[91]; ?>;
                    background-color: <?php echo $styledata[93]; ?>;
                }
                <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info .iheu-data a{
                    -webkit-transform: scale(1.5);
                    -moz-transform: scale(1.5);
                    -ms-transform: scale(1.5);
                    -o-transform: scale(1.5);
                    transform: scale(1.5);
                    opacity: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info .iheu-data a,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info .iheu-data a{
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info .iheu-data a{
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);
                    opacity: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info .iheu-data a,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info .iheu-data a{
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    opacity: 1;
                }
            </style>
            <?php
            foreach ($listdata as $value) {
                $backgoundimage = '';
                $opennewtab = '';
                $valuedata1 = '';
                $valuedata2 = '';
                $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
                }
                if ($value['hoverimage'] != '') {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['data1'] != '') {
                    $valuedata1 = ' <a ' . $opennewtab . ' href="' . $value['data1link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data1']) . '</a>';
                }
                if ($value['data2'] != '') {
                    $valuedata2 = ' <a ' . $opennewtab . ' href="' . $value['data2link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data2']) . '</a>';
                }
                $adminheading = '';
                $admindata = '';
                if ($userdata == 'admin') {
                    $adminheading = 'iheu-editing';
                    $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
                }
                echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '"  ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[101] . '">
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                             ' . $valuedata1 . '
                                                             ' . $valuedata2 . '
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                         </div>';
            }
            ?>
        </div>
    </div>
    <?php
}

function iheu_ultimate_oxi_shortcode_button5($styleid, $styledata, $listdata, $userdata) {
    wp_enqueue_style('font-awesome', plugins_url('css-js/font-awesome.min.css', __FILE__));
    ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    overflow: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                    z-index:1;
                }
                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    -webkit-transition: all 0.8s ease-in-out;
                    -moz-transition: all 0.8s ease-in-out;
                    transition: all 0.8s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    vertical-align: middle;
                    text-align: center;
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a{
                    display: inline-block;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:first-child{
                    margin-right: <?php echo $styledata[99]; ?>px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:hover,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:active,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:focus{
                    border:none;
                    box-shadow: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i{
                    background: <?php echo $styledata[89]; ?>;
                    -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -webkit-border-radius: <?php echo $styledata[95]; ?>px;
                    -moz-border-radius:<?php echo $styledata[95]; ?>px;
                    border-radius: <?php echo $styledata[95]; ?>px;
                    color: <?php echo $styledata[87]; ?>;
                    display: inline-block;
                    line-height: <?php echo $styledata[97]; ?>px;
                    font-size: <?php echo $styledata[85]; ?>px;
                    text-align: center;
                    text-decoration: none;
                    width: <?php echo $styledata[97]; ?>px;
                    height: <?php echo $styledata[97]; ?>px;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i:hover{
                    color: <?php echo $styledata[91]; ?>;
                    background-color: <?php echo $styledata[93]; ?>;
                }
                <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info .iheu-data a:first-child{
                    -webkit-transform-origin: 165% 50%;
                    -moz-transform-origin: 165% 50%;
                    -ms-transform-origin: 165% 50%;
                    -o-transform-origin: 165% 50%;
                    transform-origin: 165% 50%;
                    -webkit-transform: rotateZ(0deg) scale(0);
                    -moz-transform: rotateZ(0deg) scale(0);
                    -ms-transform: rotateZ(0deg) scale(0);
                    -o-transform: rotateZ(0deg) scale(0);
                    transform: rotateZ(0deg) scale(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info .iheu-data a:first-child,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info .iheu-data a:first-child{
                    webkit-transform: rotateZ(360deg) scale(1);
                    -moz-transform: rotateZ(360deg) scale(1);
                    -ms-transform: rotateZ(360deg) scale(1);
                    -o-transform: rotateZ(360deg) scale(1);
                    transform: rotateZ(360deg) scale(1);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info .iheu-data a:last-child{
                    -webkit-transform: scale(0);
                    -moz-transform: scale(0);
                    -ms-transform: scale(0);
                    -o-transform: scale(0);
                    transform: scale(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info .iheu-data a:last-child,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info .iheu-data a:last-child{
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info .iheu-data a:first-child{
                    -webkit-transform: scale(0);
                    -moz-transform: scale(0);
                    -ms-transform: scale(0);
                    -o-transform: scale(0);
                    transform: scale(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info .iheu-data a:first-child,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info .iheu-data a:first-child{
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info .iheu-data a:last-child{
                    -webkit-transform-origin: -65% 50%;
                    -moz-transform-origin: -65% 50%;
                    -ms-transform-origin: -65% 50%;
                    -o-transform-origin: -65% 50%;
                    transform-origin: -65% 50%;
                    -webkit-transform: rotateZ(0deg) scale(0);
                    -moz-transform: rotateZ(0deg) scale(0);
                    -ms-transform: rotateZ(0deg) scale(0);
                    -o-transform: rotateZ(0deg) scale(0);
                    transform: rotateZ(0deg) scale(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info .iheu-data a:last-child,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info .iheu-data a:last-child{
                    -webkit-transform: rotateZ(360deg) scale(1);
                    -moz-transform: rotateZ(360deg) scale(1);
                    -ms-transform: rotateZ(360deg) scale(1);
                    -o-transform: rotateZ(360deg) scale(1);
                    transform: rotateZ(360deg) scale(1);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info .iheu-data a:first-child{
                    -webkit-transform-origin: 105% 50%;
                    -moz-transform-origin: 105% 50%;
                    -ms-transform-origin: 105% 50%;
                    -o-transform-origin: 105% 50%;
                    transform-origin: 105% 50%;
                    -webkit-transform: rotateZ(360deg) scale(0);
                    -moz-transform: rotateZ(360deg) scale(0);
                    -ms-transform: rotateZ(360deg) scale(0);
                    -o-transform: rotateZ(360deg) scale(0);
                    transform: rotateZ(360deg) scale(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info .iheu-data a:first-child,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info .iheu-data a:first-child{
                    -webkit-transform: rotateZ(0deg) scale(1);
                    -moz-transform: rotateZ(0deg) scale(1);
                    -ms-transform: rotateZ(0deg) scale(1);
                    -o-transform: rotateZ(0deg) scale(1);
                    transform: rotateZ(0deg) scale(1);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info .iheu-data a:last-child{
                    -webkit-transform-origin: -5% 50%;
                    -moz-transform-origin: -5% 50%;
                    -ms-transform-origin: -5% 50%;
                    -o-transform-origin: -5% 50%;
                    transform-origin: -5% 50%;
                    -webkit-transform: rotateZ(360deg) scale(0);
                    -moz-transform: rotateZ(360deg) scale(0);
                    -ms-transform: rotateZ(360deg) scale(0);
                    -o-transform: rotateZ(360deg) scale(0);
                    transform: rotateZ(360deg) scale(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info .iheu-data a:last-child,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info .iheu-data a:last-child{
                    -webkit-transform: rotateZ(0deg) scale(1);
                    -moz-transform: rotateZ(0deg) scale(1);
                    -ms-transform: rotateZ(0deg) scale(1);
                    -o-transform: rotateZ(0deg) scale(1);
                    transform: rotateZ(0deg) scale(1);
                }
            </style>
            <?php
            foreach ($listdata as $value) {
                $backgoundimage = '';
                $opennewtab = '';
                $valuedata1 = '';
                $valuedata2 = '';
                $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
                }
                if ($value['hoverimage'] != '') {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['data1'] != '') {
                    $valuedata1 = ' <a ' . $opennewtab . ' href="' . $value['data1link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data1']) . '</a>';
                }
                if ($value['data2'] != '') {
                    $valuedata2 = ' <a ' . $opennewtab . ' href="' . $value['data2link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data2']) . '</a>';
                }

                $adminheading = '';
                $admindata = '';
                if ($userdata == 'admin') {
                    $adminheading = 'iheu-editing';
                    $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
                }

                echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '"  ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[101] . '">
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                           
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                             ' . $valuedata1 . '
                                                             ' . $valuedata2 . '
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                         </div>';
            }
            ?>
        </div>
    </div>
    <?php
}

function iheu_ultimate_oxi_shortcode_button6($styleid, $styledata, $listdata, $userdata) {
    wp_enqueue_style('font-awesome', plugins_url('css-js/font-awesome.min.css', __FILE__));
    ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    overflow: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                    z-index:1;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    -webkit-transition: all 0.8s ease-in-out;
                    -moz-transition: all 0.8s ease-in-out;
                    transition: all 0.8s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    vertical-align: middle;
                    text-align: center;
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a{
                    display: inline-block;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:first-child{
                    margin-right: <?php echo $styledata[99]; ?>px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:hover,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:active,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:focus{
                    border:none;
                    box-shadow: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i{
                    background: <?php echo $styledata[89]; ?>;
                    -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -webkit-border-radius: <?php echo $styledata[95]; ?>px;
                    -moz-border-radius:<?php echo $styledata[95]; ?>px;
                    border-radius: <?php echo $styledata[95]; ?>px;
                    color: <?php echo $styledata[87]; ?>;
                    display: inline-block;
                    line-height: <?php echo $styledata[97]; ?>px;
                    font-size: <?php echo $styledata[85]; ?>px;
                    text-align: center;
                    text-decoration: none;
                    width: <?php echo $styledata[97]; ?>px;
                    height: <?php echo $styledata[97]; ?>px;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i:hover{
                    color: <?php echo $styledata[91]; ?>;
                    background-color: <?php echo $styledata[93]; ?>;
                }
                <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info .iheu-data a:first-child{
                    -webkit-transform: translateX(-900%);
                    -moz-transform: translateX(-900%);
                    -ms-transform: translateX(-900%);
                    -o-transform: translateX(-900%);
                    transform: translateX(-900%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info .iheu-data a:first-child,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info .iheu-data a:first-child{
                    -webkit-transform: translateX(0%);
                    -moz-transform: translateX(0%);
                    -ms-transform: translateX(0%);
                    -o-transform: translateX(0%);
                    transform: translateX(0%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info .iheu-data a:last-child{
                    -webkit-transform: translateX(900%);
                    -moz-transform: translateX(900%);
                    -ms-transform: translateX(900%);
                    -o-transform: translateX(900%);
                    transform: translateX(900%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info .iheu-data a:last-child,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info .iheu-data a:last-child{
                    -webkit-transform: translateX(0%);
                    -moz-transform: translateX(0%);
                    -ms-transform: translateX(0%);
                    -o-transform: translateX(0%);
                    transform: translateX(0%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info .iheu-data a:first-child{
                    -webkit-transform-origin: -190% 50%;
                    -moz-transform-origin: -190% 50%;
                    -ms-transform-origin: -190% 50%;
                    -o-transform-origin: -190% 50%;
                    transform-origin: -190% 50%;
                    webkit-transform: rotateZ(180deg);
                    -moz-transform: rotateZ(180deg);
                    -ms-transform: rotateZ(180deg);
                    -o-transform: rotateZ(180deg);
                    transform: rotateZ(180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info .iheu-data a:first-child,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info .iheu-data a:first-child{
                    -webkit-transform: rotateZ(0deg);
                    -moz-transform: rotateZ(0deg);
                    -ms-transform: rotateZ(0deg);
                    -o-transform: rotateZ(0deg);
                    transform: rotateZ(0deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info .iheu-data a:last-child{
                    -webkit-transform-origin: 300% 50%;
                    -moz-transform-origin: 300% 50%;
                    -ms-transform-origin: 300% 50%;
                    -o-transform-origin: 300% 50%;
                    transform-origin: 300% 50%;
                    -webkit-transform: rotateZ(180deg);
                    -moz-transform: rotateZ(180deg);
                    -ms-transform: rotateZ(180deg);
                    -o-transform: rotateZ(180deg);
                    transform: rotateZ(180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info .iheu-data a:last-child,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info .iheu-data a:last-child{
                    -webkit-transform: rotateZ(0deg);
                    -moz-transform: rotateZ(0deg);
                    -ms-transform: rotateZ(0deg);
                    -o-transform: rotateZ(0deg);
                    transform: rotateZ(0deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info .iheu-data a:first-child{

                    -webkit-transform: translateY(-900%);
                    -moz-transform: translateY(-900%);
                    -ms-transform: translateY(-900%);
                    -o-transform: translateY(-900%);
                    transform: translateY(-900%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info .iheu-data a:first-child,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info .iheu-data a:first-child{
                    -webkit-transform: translateY(0%);
                    -moz-transform: translateY(0%);
                    -ms-transform: translateY(0%);
                    -o-transform: translateY(0%);
                    transform: translateY(0%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info .iheu-data a:last-child{
                    -webkit-transform: translateY(900%);
                    -moz-transform: translateY(900%);
                    -ms-transform: translateY(900%);
                    -o-transform: translateY(900%);
                    transform: translateY(900%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info .iheu-data a:last-child,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info .iheu-data a:last-child{
                    -webkit-transform: translateY(0%);
                    -moz-transform: translateY(0%);
                    -ms-transform: translateY(0%);
                    -o-transform: translateY(0%);
                    transform: translateY(0%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info .iheu-data a:first-child{
                    -webkit-transform-origin: 50% -110%;
                    -moz-transform-origin: 50% -110%;
                    -ms-transform-origin: 50% -110%;
                    -o-transform-origin: 50% -110%;
                    transform-origin: 50% -110%;
                    -webkit-transform: rotateZ(180deg);
                    -moz-transform: rotateZ(180deg);
                    -ms-transform: rotateZ(180deg);
                    -o-transform: rotateZ(180deg);
                    transform: rotateZ(180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info .iheu-data a:first-child,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info .iheu-data a:first-child{
                    -webkit-transform: rotateZ(0deg);
                    -moz-transform: rotateZ(0deg);
                    -ms-transform: rotateZ(0deg);
                    -o-transform: rotateZ(0deg);
                    transform: rotateZ(0deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info .iheu-data a:last-child{
                    -webkit-transform-origin: 50% 210%;
                    -moz-transform-origin: 50% 210%;
                    -ms-transform-origin: 50% 210%;
                    -o-transform-origin: 50% 210%;
                    transform-origin: 50% 210%;
                    -webkit-transform: rotateZ(180deg);
                    -moz-transform: rotateZ(180deg);
                    -ms-transform: rotateZ(180deg);
                    -o-transform: rotateZ(180deg);
                    transform: rotateZ(180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info .iheu-data a:last-child,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info .iheu-data a:last-child{
                    -webkit-transform: rotateZ(0deg);
                    -moz-transform: rotateZ(0deg);
                    -ms-transform: rotateZ(0deg);
                    -o-transform: rotateZ(0deg);
                    transform: rotateZ(0deg);
                }
            </style>

            <?php
            foreach ($listdata as $value) {
                $backgoundimage = '';
                $opennewtab = '';
                $valuedata1 = '';
                $valuedata2 = '';
                $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
                }
                if ($value['hoverimage'] != '') {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['data1'] != '') {
                    $valuedata1 = ' <a ' . $opennewtab . ' href="' . $value['data1link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data1']) . '</a>';
                }
                if ($value['data2'] != '') {
                    $valuedata2 = ' <a ' . $opennewtab . ' href="' . $value['data2link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data2']) . '</a>';
                }
                $adminheading = '';
                $admindata = '';
                if ($userdata == 'admin') {
                    $adminheading = 'iheu-editing';
                    $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
                }
                echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '"  ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[101] . '">
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                           
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                             ' . $valuedata1 . '
                                                             ' . $valuedata2 . '
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                         </div>';
            }
            ?>
        </div>
    </div>
    <?php
}

function iheu_ultimate_oxi_shortcode_button7($styleid, $styledata, $listdata, $userdata) {
    wp_enqueue_style('font-awesome', plugins_url('css-js/font-awesome.min.css', __FILE__));
    ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    overflow: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                    z-index:1;
                }
                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    -webkit-transition: all 0.8s ease-in-out;
                    -moz-transition: all 0.8s ease-in-out;
                    transition: all 0.8s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    vertical-align: middle;
                    text-align: center;
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a{
                    display: inline-block;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:first-child{
                    margin-right: <?php echo $styledata[99]; ?>px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:hover,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:active,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:focus{
                    border:none;
                    box-shadow: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i{
                    background: <?php echo $styledata[89]; ?>;
                    -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -webkit-border-radius: <?php echo $styledata[95]; ?>px;
                    -moz-border-radius:<?php echo $styledata[95]; ?>px;
                    border-radius: <?php echo $styledata[95]; ?>px;
                    color: <?php echo $styledata[87]; ?>;
                    display: inline-block;
                    line-height: <?php echo $styledata[97]; ?>px;
                    font-size: <?php echo $styledata[85]; ?>px;
                    text-align: center;
                    text-decoration: none;
                    width: <?php echo $styledata[97]; ?>px;
                    height: <?php echo $styledata[97]; ?>px;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i:hover{
                    color: <?php echo $styledata[91]; ?>;
                    background-color: <?php echo $styledata[93]; ?>;
                }
                <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info .iheu-data a{
                    -webkit-transform: rotateZ(360deg);
                    -moz-transform: rotateZ(360deg);
                    -ms-transform: rotateZ(360deg);
                    -o-transform: rotateZ(360deg);
                    transform: rotateZ(360deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info .iheu-data a,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info .iheu-data a{
                    -webkit-transform: rotateZ(0deg);
                    -moz-transform: rotateZ(0deg);
                    -ms-transform: rotateZ(0deg);
                    -o-transform: rotateZ(0deg);
                    transform: rotateZ(0deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info .iheu-data a{
                    -webkit-transform: rotateZ(-360deg);
                    -moz-transform: rotateZ(-360deg);
                    -ms-transform: rotateZ(-360deg);
                    -o-transform: rotateZ(-360deg);
                    transform: rotateZ(-360deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info .iheu-data a,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info .iheu-data a{
                    -webkit-transform: rotateZ(0deg);
                    -moz-transform: rotateZ(0deg);
                    -ms-transform: rotateZ(0deg);
                    -o-transform: rotateZ(0deg);
                    transform: rotateZ(0deg);
                }
            </style>
            <?php
            foreach ($listdata as $value) {
                $backgoundimage = '';
                $opennewtab = '';
                $valuedata1 = '';
                $valuedata2 = '';
                $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
                }
                if ($value['hoverimage'] != '') {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['data1'] != '') {
                    $valuedata1 = ' <a ' . $opennewtab . ' href="' . $value['data1link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data1']) . '</a>';
                }
                if ($value['data2'] != '') {
                    $valuedata2 = ' <a ' . $opennewtab . ' href="' . $value['data2link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data2']) . '</a>';
                }
                $adminheading = '';
                $admindata = '';
                if ($userdata == 'admin') {
                    $adminheading = 'iheu-editing';
                    $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
                }
                echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '"  ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[101] . '">
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                           
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                             ' . $valuedata1 . '
                                                             ' . $valuedata2 . '
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                         </div>';
            }
            ?>
        </div>
    </div>
    <?php
}

function iheu_ultimate_oxi_shortcode_button8($styleid, $styledata, $listdata, $userdata) {
    wp_enqueue_style('font-awesome', plugins_url('css-js/font-awesome.min.css', __FILE__));
    ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    overflow: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                    z-index:1;
                }
                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    -webkit-transition: all 0.8s ease-in-out;
                    -moz-transition: all 0.8s ease-in-out;
                    transition: all 0.8s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    vertical-align: middle;
                    text-align: center;
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a{
                    display: inline-block;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:first-child{
                    margin-right: <?php echo $styledata[99]; ?>px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:hover,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:active,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:focus{
                    border:none;
                    box-shadow: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i{
                    background: <?php echo $styledata[89]; ?>;
                    -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -webkit-border-radius: <?php echo $styledata[95]; ?>px;
                    -moz-border-radius:<?php echo $styledata[95]; ?>px;
                    border-radius: <?php echo $styledata[95]; ?>px;
                    color: <?php echo $styledata[87]; ?>;
                    display: inline-block;
                    line-height: <?php echo $styledata[97]; ?>px;
                    font-size: <?php echo $styledata[85]; ?>px;
                    text-align: center;
                    text-decoration: none;
                    width: <?php echo $styledata[97]; ?>px;
                    height: <?php echo $styledata[97]; ?>px;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i:hover{
                    color: <?php echo $styledata[91]; ?>;
                    background-color: <?php echo $styledata[93]; ?>;
                }
                <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info .iheu-data a{
                    webkit-transform: scaleX(0);
                    -moz-transform: scaleX(0);
                    -ms-transform: scaleX(0);
                    -o-transform: scaleX(0);
                    transform: scaleX(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info .iheu-data a,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info .iheu-data a{
                    -webkit-transform: scaleX(1);
                    -moz-transform: scaleX(1);
                    -ms-transform: scaleX(1);
                    -o-transform: scaleX(1);
                    transform: scaleX(1);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info .iheu-data a{
                    -webkit-transform: scaleY(0);
                    -moz-transform: scaleY(0);
                    -ms-transform: scaleY(0);
                    -o-transform: scaleY(0);
                    transform: scaleY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info .iheu-data a,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info .iheu-data a{

                    -webkit-transform: scaleY(1);
                    -moz-transform: scaleY(1);
                    -ms-transform: scaleY(1);
                    -o-transform: scaleY(1);
                    transform: scaleY(1);
                }
            </style>

            <?php
            foreach ($listdata as $value) {
                $backgoundimage = '';
                $opennewtab = '';
                $valuedata1 = '';
                $valuedata2 = '';
                $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
                }
                if ($value['hoverimage'] != '') {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['data1'] != '') {
                    $valuedata1 = ' <a ' . $opennewtab . ' href="' . $value['data1link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data1']) . '</a>';
                }
                if ($value['data2'] != '') {
                    $valuedata2 = ' <a ' . $opennewtab . ' href="' . $value['data2link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data2']) . '</a>';
                }

                $adminheading = '';
                $admindata = '';
                if ($userdata == 'admin') {
                    $adminheading = 'iheu-editing';
                    $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
                }

                echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '"  ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[101] . '">
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                           
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                             ' . $valuedata1 . '
                                                             ' . $valuedata2 . '
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                            ' . $admindata . '
                                        </div>';
            }
            ?>
        </div>
    </div>
    <?php
}

function iheu_ultimate_oxi_shortcode_button9($styleid, $styledata, $listdata, $userdata) {
    wp_enqueue_style('font-awesome', plugins_url('css-js/font-awesome.min.css', __FILE__));
    ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    overflow: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                    z-index:1;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    -webkit-transition: all 0.8s ease-in-out;
                    -moz-transition: all 0.8s ease-in-out;
                    transition: all 0.8s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    vertical-align: middle;
                    text-align: center;
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a{
                    display: inline-block;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:first-child{
                    margin-right: <?php echo $styledata[99]; ?>px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:hover,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:active,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:focus{
                    border:none;
                    box-shadow: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i{
                    background: <?php echo $styledata[89]; ?>;
                    -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -webkit-border-radius: <?php echo $styledata[95]; ?>px;
                    -moz-border-radius:<?php echo $styledata[95]; ?>px;
                    border-radius: <?php echo $styledata[95]; ?>px;
                    color: <?php echo $styledata[87]; ?>;
                    display: inline-block;
                    line-height: <?php echo $styledata[97]; ?>px;
                    font-size: <?php echo $styledata[85]; ?>px;
                    text-align: center;
                    text-decoration: none;
                    width: <?php echo $styledata[97]; ?>px;
                    height: <?php echo $styledata[97]; ?>px;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i:hover{
                    color: <?php echo $styledata[91]; ?>;
                    background-color: <?php echo $styledata[93]; ?>;
                }
                <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info .iheu-data a{
                    -webkit-transform: scale(5);
                    -moz-transform: scale(5);
                    -ms-transform: scale(5);
                    -o-transform: scale(5);
                    transform: scale(5);
                    opacity: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info .iheu-data a,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info .iheu-data a{
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info .iheu-data a{
                    -webkit-transform: scale(0);
                    -moz-transform: scale(0);
                    -ms-transform: scale(0);
                    -o-transform: scale(0);
                    transform: scale(0);
                    opacity: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info .iheu-data a,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info .iheu-data a{
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    opacity: 1;
                }
            </style>
            <?php
            foreach ($listdata as $value) {
                $backgoundimage = '';
                $opennewtab = '';
                $valuedata1 = '';
                $valuedata2 = '';
                $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
                }
                if ($value['hoverimage'] != '') {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['data1'] != '') {
                    $valuedata1 = ' <a ' . $opennewtab . ' href="' . $value['data1link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data1']) . '</a>';
                }
                if ($value['data2'] != '') {
                    $valuedata2 = ' <a ' . $opennewtab . ' href="' . $value['data2link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data2']) . '</a>';
                }
                $adminheading = '';
                $admindata = '';
                if ($userdata == 'admin') {
                    $adminheading = 'iheu-editing';
                    $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
                }
                echo '<div  class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[101] . '">
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                             ' . $valuedata1 . '
                                                             ' . $valuedata2 . '
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                         </div>';
            }
            ?>
        </div>
    </div>
    <?php
}

function iheu_ultimate_oxi_shortcode_button10($styleid, $styledata, $listdata, $userdata) {
    wp_enqueue_style('font-awesome', plugins_url('css-js/font-awesome.min.css', __FILE__));
    ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    overflow: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                    z-index:1;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info { 
                    opacity: 0;
                    -webkit-transition: all 0.8s ease-in-out;
                    -moz-transition: all 0.8s ease-in-out;
                    transition: all 0.8s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .overlayT{
                    background: <?php echo $styledata[13]; ?>;
                    position: absolute;
                    -webkit-transition: all 0.3s;
                    -moz-transition: all 0.3s;
                    -o-transition: all 0.3s;
                    transition: all 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .overlayB{
                    background: <?php echo $styledata[13]; ?>;
                    position: absolute;
                    -webkit-transition: all 0.3s;
                    -moz-transition: all 0.3s;
                    -o-transition: all 0.3s;
                    transition: all 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    vertical-align: middle;
                    text-align: center;
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a{
                    display: inline-block;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:first-child{
                    margin-right: <?php echo $styledata[99]; ?>px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:hover,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:active,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:focus{
                    border:none;
                    box-shadow: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i{
                    background: <?php echo $styledata[89]; ?>;
                    -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -webkit-border-radius: <?php echo $styledata[95]; ?>px;
                    -moz-border-radius:<?php echo $styledata[95]; ?>px;
                    border-radius: <?php echo $styledata[95]; ?>px;
                    color: <?php echo $styledata[87]; ?>;
                    display: inline-block;
                    line-height: <?php echo $styledata[97]; ?>px;
                    font-size: <?php echo $styledata[85]; ?>px;
                    text-align: center;
                    text-decoration: none;
                    width: <?php echo $styledata[97]; ?>px;
                    height: <?php echo $styledata[97]; ?>px;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i:hover{
                    color: <?php echo $styledata[91]; ?>;
                    background-color: <?php echo $styledata[93]; ?>;
                }
                <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .overlayT{
                    left: 0;
                    top: -100%;
                    height: 100%;
                    width: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .overlayB{
                    left: 0;
                    top: 100%;
                    height: 100%;
                    width: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .overlayT,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .overlayT{
                    top: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .overlayB,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .overlayB{
                    top: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .overlayT{
                    left: -100%;
                    top: 0;
                    height: 100%;
                    width: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .overlayB{
                    left: 100%;
                    top: 0;
                    height: 100%;
                    width: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .overlayT,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .overlayT{
                    left: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .overlayB,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .overlayB{
                    left: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .overlayT{
                    width: 100%;
                    height: 50%;
                    left: 0;
                    top: -50%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .overlayB{
                    height: 50%;
                    left: 0;
                    width: 100%;
                    top: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .overlayT,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .overlayT{
                    left: 0;
                    top: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .overlayB,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .overlayB{
                    left: 0;
                    top: 50%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .overlayT{
                    width: 50%;
                    height: 100%;
                    left: -50%;
                    top: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .overlayB{
                    width: 50%;
                    height: 100%;
                    left: 100%;
                    top: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .overlayT,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .overlayT{
                    left: 0;
                    top: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .overlayB,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .overlayB{
                    left: 50%;
                    top: 0;
                }
            </style>
            <?php
            foreach ($listdata as $value) {
                $backgoundimage = '';
                $opennewtab = '';
                $valuedata1 = '';
                $valuedata2 = '';
                $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
                }
                if ($value['hoverimage'] != '') {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['data1'] != '') {
                    $valuedata1 = ' <a ' . $opennewtab . ' href="' . $value['data1link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data1']) . '</a>';
                }
                if ($value['data2'] != '') {
                    $valuedata2 = ' <a ' . $opennewtab . ' href="' . $value['data2link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data2']) . '</a>';
                }
                $adminheading = '';
                $admindata = '';
                if ($userdata == 'admin') {
                    $adminheading = 'iheu-editing';
                    $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
                }
                echo '<div  orphita-animation="' . $styledata[19] . '" sclass="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[101] . '">
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="overlayT"></div>
                                                          <div class="overlayB"></div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                             ' . $valuedata1 . '
                                                             ' . $valuedata2 . '
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                         </div>';
            }
            ?>
        </div>
    </div>
    <?php
}

function iheu_ultimate_oxi_shortcode_button11($styleid, $styledata, $listdata, $userdata) {
    wp_enqueue_style('font-awesome', plugins_url('css-js/font-awesome.min.css', __FILE__));
    ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    overflow: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                    z-index:1;
                }
                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info { 
                    opacity: 0;
                    -webkit-transition: all 0.8s ease-in-out;
                    -moz-transition: all 0.8s ease-in-out;
                    transition: all 0.8s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .overlayT{
                    background: <?php echo $styledata[13]; ?>;
                    position: absolute;
                    -webkit-transition: all 0.3s;
                    -moz-transition: all 0.3s;
                    -o-transition: all 0.3s;
                    transition: all 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    vertical-align: middle;
                    text-align: center;
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a{
                    display: inline-block;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:first-child{
                    margin-right: <?php echo $styledata[99]; ?>px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:hover,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:active,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:focus{
                    border:none;
                    box-shadow: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i{
                    background: <?php echo $styledata[89]; ?>;
                    -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -webkit-border-radius: <?php echo $styledata[95]; ?>px;
                    -moz-border-radius:<?php echo $styledata[95]; ?>px;
                    border-radius: <?php echo $styledata[95]; ?>px;
                    color: <?php echo $styledata[87]; ?>;
                    display: inline-block;
                    line-height: <?php echo $styledata[97]; ?>px;
                    font-size: <?php echo $styledata[85]; ?>px;
                    text-align: center;
                    text-decoration: none;
                    width: <?php echo $styledata[97]; ?>px;
                    height: <?php echo $styledata[97]; ?>px;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data i:hover{
                    color: <?php echo $styledata[91]; ?>;
                    background-color: <?php echo $styledata[93]; ?>;
                }
                <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .overlayT{
                    height: 300%;
                    left: -300%;
                    width: 300%;
                    top: -150%;
                    -webkit-transform: skewX(-45deg);
                    -moz-transform: skewX(-45deg);
                    -ms-transform: skewX(-45deg);
                    -o-transform: skewX(-45deg);
                    transform: skewX(-45deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .overlayT,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .overlayT{
                    left: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .overlayT{
                    height: 300%;
                    left: 300%;
                    width: 300%;
                    top: 0;
                    -webkit-transform: skewX(45deg);
                    -moz-transform: skewX(45deg);
                    -ms-transform: skewX(45deg);
                    -o-transform: skewX(45deg);
                    transform: skewX(45deg);
                }               
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .overlayT,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .overlayT{
                    left: 0%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .overlayT{
                    height: 300%;
                    left: 300%;
                    width: 300%;
                    top: 0;
                    -webkit-transform: skewX(-45deg);
                    -moz-transform: skewX(-45deg);
                    -ms-transform: skewX(-45deg);
                    -o-transform: skewX(-45deg);
                    transform: skewX(-45deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .overlayT,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .overlayT{
                    left: -150%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .overlayT{
                    height: 300%;
                    left: -300%;
                    width: 300%;
                    top: 0;
                    -webkit-transform: skewX(45deg);
                    -moz-transform: skewX(45deg);
                    -ms-transform: skewX(45deg);
                    -o-transform: skewX(45deg);
                    transform: skewX(45deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .overlayT,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .overlayT{
                    left: 0%;
                }
            </style>
            <?php
            foreach ($listdata as $value) {
                $backgoundimage = '';
                $opennewtab = '';
                $valuedata1 = '';
                $valuedata2 = '';
                $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
                }
                if ($value['hoverimage'] != '') {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['data1'] != '') {
                    $valuedata1 = ' <a ' . $opennewtab . ' href="' . $value['data1link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data1']) . '</a>';
                }
                if ($value['data2'] != '') {
                    $valuedata2 = ' <a ' . $opennewtab . ' href="' . $value['data2link'] . '">' . iheu_ultimate_oxi_icon_font_selector($value['data2']) . '</a>';
                }
                $adminheading = '';
                $admindata = '';
                if ($userdata == 'admin') {
                    $adminheading = 'iheu-editing';
                    $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
                }
                echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '"  ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[101] . '">
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="overlayT"></div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                             ' . $valuedata1 . '
                                                             ' . $valuedata2 . '
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                         </div>';
            }
            ?>
        </div>
    </div>
    <?php
}
