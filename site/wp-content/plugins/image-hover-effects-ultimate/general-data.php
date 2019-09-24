<?php

function iheu_ultimate_oxi_shortcode_general1($styleid, $styledata, $listdata, $userdata) {
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
                    z-index: 1;
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
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data h3,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data p,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data .iheu-button{
                    -webkit-transition: all 0.25s ease 0.25s;
                    -o-transition: all 0.25s ease 0.25s;
                    -moz-transition: all 0.25s ease 0.25s;
                    transition: all 0.25s ease 0.25s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                    -webkit-backface-visibility: visible;
                    backface-visibility: visible;
                }
            </style>
    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                    <div class="iheu-info" ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                        <div class="iheu-info" ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                     <div class="iheu-info" ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
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
                                                            ' . $valuedata . '
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
function iheu_ultimate_oxi_shortcode_general2($styleid, $styledata, $listdata, $userdata) {
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
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    -webkit-transition: all 0.8s ease-in-out;
                    -moz-transition: all 0.8s ease-in-out;
                    transition: all 0.8s ease-in-out;
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data h3,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data p,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data .iheu-button{
                    -webkit-transition: all 0.25s ease 0.25s;
                    -o-transition: all 0.25s ease 0.25s;
                    -moz-transition: all 0.25s ease 0.25s;
                    transition: all 0.25s ease 0.25s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    -webkit-transform: translateX(-100%);
                    -moz-transform: translateX(-100%);
                    -ms-transform: translateX(-100%);
                    -o-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,                
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    -webkit-transform: rotate(-90deg);
                    -moz-transform: rotate(-90deg);
                    -ms-transform: rotate(-90deg);
                    -o-transform: rotate(-90deg);
                    transform: rotate(-90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info{
                    opacity: 1;
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    -webkit-transform: translateX(100%);
                    -moz-transform: translateX(100%);
                    -ms-transform: translateX(100%);
                    -o-transform: translateX(100%);
                    transform: translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img{
                    -webkit-transform: rotate(90deg);
                    -moz-transform: rotate(90deg);
                    -ms-transform: rotate(90deg);
                    -o-transform: rotate(90deg);
                    transform: rotate(90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info{
                    opacity: 1;
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img{
                    -webkit-transform: rotate(-90deg);
                    -moz-transform: rotate(-90deg);
                    -ms-transform: rotate(-90deg);
                    -o-transform: rotate(-90deg);
                    transform: rotate(-90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info{
                    opacity: 1;
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img{
                    -webkit-transform: rotate(90deg);
                    -moz-transform: rotate(90deg);
                    -ms-transform: rotate(90deg);
                    -o-transform: rotate(90deg);
                    transform: rotate(90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info{
                    opacity: 1;
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                    pointer-events: auto;
                }

            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                    <div class="iheu-info" ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                        <div class="iheu-info" ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                     <div class="iheu-info" ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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
function iheu_ultimate_oxi_shortcode_general3($styleid, $styledata, $listdata, $userdata) {
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
                    z-index: 11;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    pointer-events: none;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>


                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                    -webkit-transform: scale(1) translateX(0);
                    -moz-transform: scale(1) translateX(0);
                    -ms-transform: scale(1) translateX(0);
                    -o-transform: scale(1) translateX(0);
                    transform: scale(1) translateX(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    -webkit-transform: translateX(-100%);
                    -moz-transform: translateX(-100%);
                    -ms-transform: translateX(-100%);
                    -o-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img{
                    -webkit-transform: scale(0.5) translateX(100%);
                    -moz-transform: scale(0.5) translateX(100%);
                    -ms-transform: scale(0.5) translateX(100%);
                    -o-transform: scale(0.5) translateX(100%);
                    transform: scale(0.5) translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info{
                    opacity: 1;
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                    -webkit-transform: scale(1) translateX(0);
                    -moz-transform: scale(1) translateX(0);
                    -ms-transform: scale(1) translateX(0);
                    -o-transform: scale(1) translateX(0);
                    transform: scale(1) translateX(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    -webkit-transform: translateX(100%);
                    -moz-transform: translateX(100%);
                    -ms-transform: translateX(100%);
                    -o-transform: translateX(100%);
                    transform: translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img{
                    -webkit-transform: scale(0.5) translateX(-100%);
                    -moz-transform: scale(0.5) translateX(-100%);
                    -ms-transform: scale(0.5) translateX(-100%);
                    -o-transform: scale(0.5) translateX(-100%);
                    transform: scale(0.5) translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info{
                    opacity: 1;
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img {
                    -webkit-transform: scale(1) translateY(0);
                    -moz-transform: scale(1) translateY(0);
                    -ms-transform: scale(1) translateY(0);
                    -o-transform: scale(1) translateY(0);
                    transform: scale(1) translateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img{
                    -webkit-transform: scale(0.5) translateY(100%);
                    -moz-transform: scale(0.5) translateY(100%);
                    -ms-transform: scale(0.5) translateY(100%);
                    -o-transform: scale(0.5) translateY(100%);
                    transform: scale(0.5) translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info{
                    opacity: 1;
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                    -webkit-transform: scale(1) translateY(0);
                    -moz-transform: scale(1) translateY(0);
                    -ms-transform: scale(1) translateY(0);
                    -o-transform: scale(1) translateY(0);
                    transform: scale(1) translateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img{
                    -webkit-transform: scale(0.5) translateY(-100%);
                    -moz-transform: scale(0.5) translateY(-100%);
                    -ms-transform: scale(0.5) translateY(-100%);
                    -o-transform: scale(0.5) translateY(-100%);
                    transform: scale(0.5) translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info{
                    opacity: 1;
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                    pointer-events: auto;
                }
            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                    <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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
function iheu_ultimate_oxi_shortcode_general4($styleid, $styledata, $listdata, $userdata) {
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
                    opacity: 1;
                    -webkit-transition: all 0.4s ease-in-out;
                    -moz-transition: all 0.4s ease-in-out;
                    transition: all 0.4s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    visibility: hidden;
                    pointer-events: none;
                    -webkit-transition: all 0.35s ease;
                    -moz-transition: all 0.35s ease;
                    transition: all 0.35s ease;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>


                .image-ultimate-hover-<?php echo $styleid; ?> a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img{
                    opacity: 0;
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info{
                    visibility: visible;
                    opacity: 1;
                    pointer-events: auto;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info{
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info{
                    pointer-events:auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    -webkit-transform: translateX(-100%);
                    -moz-transform: translateX(-100%);
                    -ms-transform: translateX(-100%);
                    -o-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img{
                    -webkit-transform: translateX(100%);
                    -moz-transform: translateX(100%);
                    -ms-transform: translateX(100%);
                    -o-transform: translateX(100%);
                    transform: translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info{
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    -webkit-transform: translateX(100%);
                    -moz-transform: translateX(100%);
                    -ms-transform: translateX(100%);
                    -o-transform: translateX(100%);
                    transform: translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img{
                    -webkit-transform: translateX(-100%);
                    -moz-transform: translateX(-100%);
                    -ms-transform: translateX(-100%);
                    -o-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info{
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img {
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img{
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info{
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img{
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info{
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general5($styleid, $styledata, $listdata, $userdata) {
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
                    -webkit-perspective: 900px;
                    -moz-perspective: 900px;
                    perspective: 900px;
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
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info-2{
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    -webkit-transform-style: preserve-3d;
                    -moz-transform-style: preserve-3d;
                    -ms-transform-style: preserve-3d;
                    -o-transform-style: preserve-3d;
                    transform-style: preserve-3d;
                    position: absolute;
                    width:100%;
                    height:100%;
                    top: 0;
                    left: 0;                    
                    z-index:1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    visibility: hidden;
                    -webkit-transform: rotate3d(0, 1, 0, 180deg);
                    -moz-transform: rotate3d(0, 1, 0, 180deg);
                    -ms-transform: rotate3d(0, 1, 0, 180deg);
                    -o-transform: rotate3d(0, 1, 0, 180deg);
                    transform: rotate3d(0, 1, 0, 180deg);
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    visibility: hidden;
                    -webkit-transform: rotate3d(0, 1, 0, -180deg);
                    -moz-transform: rotate3d(0, 1, 0, -180deg);
                    -ms-transform: rotate3d(0, 1, 0, -180deg);
                    -o-transform: rotate3d(0, 1, 0, -180deg);
                    transform: rotate3d(0, 1, 0, -180deg);
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    visibility: hidden;
                    -webkit-transform: rotateX(-180deg);
                    -moz-transform: rotateX(-180deg);
                    -ms-transform:  rotateX(-180deg);
                    -o-transform:  rotateX(-180deg);
                    transform:  rotateX(-180deg);
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    visibility: hidden;
                    -webkit-transform: rotateX(180deg);
                    -moz-transform: rotateX(180deg);
                    -ms-transform:  rotateX(180deg);
                    -o-transform:  rotateX(180deg);
                    transform:  rotateX(180deg);
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    float:left;
                    width:100%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info-2,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info-2{
                    -webkit-transform: rotate3d(0, 1, 0, 180deg);
                    -moz-transform: rotate3d(0, 1, 0, 180deg);
                    -ms-transform: rotate3d(0, 1, 0, 180deg);
                    -o-transform: rotate3d(0, 1, 0, 180deg);
                    transform: rotate3d(0, 1, 0, 180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info-2,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info-2{
                    -webkit-transform: rotate3d(0, 1, 0, -180deg);
                    -moz-transform: rotate3d(0, 1, 0, -180deg);
                    -ms-transform: rotate3d(0, 1, 0, -180deg);
                    -o-transform: rotate3d(0, 1, 0, -180deg);
                    transform: rotate3d(0, 1, 0, -180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
                    -webkit-transform: rotateX(0deg);
                    -moz-transform: rotateX(0deg);
                    -ms-transform: rotateX(0deg);
                    -o-transform: rotateX(0deg);
                    transform: rotateX(0deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    -webkit-transform: rotateX(0deg);
                    -moz-transform: rotateX(0deg);
                    -ms-transform: rotateX(0deg);
                    -o-transform: rotateX(0deg);
                    transform: rotateX(0deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info {
                    visibility: visible;
                }
            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                    <div class="iheu-info-2">
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                        <div class="iheu-info-2">
                                                                 <div class="iheu-info"  ' . $backgoundimage . '>
                                                                    <div class="iheu-data">
                                                                        ' . $iheuh3 . '
                                                                        ' . $iheup . '
                                                                    </div>
                                                                </div>
                                                        </div>     
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                     <div class="iheu-info-2">
                                                             <div class="iheu-info"  ' . $backgoundimage . '>
                                                                   <div class="iheu-data">
                                                                       ' . $iheuh3 . '
                                                                       ' . $iheup . '
                                                                       ' . $iheubuttontext . '
                                                                   </div>
                                                            </div>
                                                      </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general6($styleid, $styledata, $listdata, $userdata) {
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
                .image-ultimate-hover{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
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
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    pointer-events:none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    pointer-events: none;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    pointer-events: auto;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_up .iheu-info {
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);

                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_up:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_up.iheu-touch .iheu-img{
                    opacity: 0;
                    -webkit-transform: scale(1.5);
                    -moz-transform: scale(1.5);
                    -ms-transform: scale(1.5);
                    -o-transform: scale(1.5);
                    transform: scale(1.5);
                    ponter-events:none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_up:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_up.iheu-touch .iheu-info{
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down .iheu-info {
                    -webkit-transform: scale(1.5);
                    -moz-transform: scale(1.5);
                    -ms-transform: scale(1.5);
                    -o-transform: scale(1.5);
                    transform: scale(1.5);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down.iheu-touch .iheu-img{
                    opacity: 0;
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);                                        
                    ponter-events:none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down.iheu-touch .iheu-info{
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down_up .iheu-info {
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);
                    -webkit-transition: all 0.35s ease-in-out 0.2s;
                    -moz-transition: all 0.35s ease-in-out 0.2s;
                    transition: all 0.35s ease-in-out 0.2s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down_up:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down_up.iheu-touch .iheu-img{
                    opacity: 0;
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);                                        
                    ponter-events:none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down_up:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down_up.iheu-touch .iheu-info{
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                }

            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general7($styleid, $styledata, $listdata, $userdata) {
    ?>
    <div class="image-ultimate-container image-ultimate-container-<?php echo $styleid; ?>"> 
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
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    -webkit-transition: all 0.35s ease-out;
                    -moz-transition: all 0.35s ease-out;
                    transition: all 0.35s ease-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    visibility: hidden;
                    pointer-events: none;
                    -webkit-transition: all 0.35s ease 0.2s;
                    -moz-transition: all 0.35s ease 0.2s;
                    transition: all 0.35s ease 0.2s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    visibility: visible;
                    opacity: 1;
                    pointer-events: auto;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    opacity: 0;
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    -webkit-transform: translateX(-100%);
                    -moz-transform: translateX(-100%);
                    -ms-transform: translateX(-100%);
                    -o-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info{
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    -webkit-transform: translateX(100%);
                    -moz-transform: translateX(100%);
                    -ms-transform: translateX(100%);
                    -o-transform: translateX(100%);
                    transform: translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }

            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general8($styleid, $styledata, $listdata, $userdata) {
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
                    overflow:hodden;
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
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img-2 {
                    width: 100%;
                    float: left;
                    height: 100%;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img-2 .iheu-img {
                    width: 100%;
                    float: left;
                    opacity: 1;
                    -webkit-transition: all 0.3s ease-in-out 0.3s;
                    -moz-transition: all 0.3s ease-in-out 0.3s;
                    transition: all 0.3s ease-in-out 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info-2 {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    opacity: 0;
                    pointer-events: none;
                    -webkit-transition: all 0.3s ease-in-out 0.3s;
                    -moz-transition: all 0.3s ease-in-out 0.3s;
                    transition: all 0.3s ease-in-out 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info-2 .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    pointer-events: none;
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);
                    -webkit-transition: all 0.35s ease-in-out 0.6s;
                    -moz-transition: all 0.35s ease-in-out 0.6s;
                    transition: all 0.35s ease-in-out 0.6s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img-2,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img-2{
                    pointer-events: none;
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img-2 .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img-2 .iheu-img{
                    opacity: 0;
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info-2,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info-2{
                    opacity: 1;
                    pointer-events: auto;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info-2 .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info-2 .iheu-info{
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img-2 .iheu-img {
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info-2 {
                    -webkit-transform: translateX(100%);
                    -moz-transform: translateX(100%);
                    -ms-transform: translateX(100%);
                    -o-transform: translateX(100%);
                    transform: translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img-2 .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img-2 .iheu-img{
                    -webkit-transform: translateX(-100%);
                    -moz-transform: translateX(-100%);
                    -ms-transform: translateX(-100%);
                    -o-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info-2,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info-2{
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img-2 .iheu-img {
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info-2 {
                    -webkit-transform: translateX(-100%);
                    -moz-transform: translateX(-100%);
                    -ms-transform: translateX(-100%);
                    -o-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img-2 .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img-2 .iheu-img{
                    -webkit-transform: translateX(100%);
                    -moz-transform: translateX(100%);
                    -ms-transform: translateX(100%);
                    -o-transform: translateX(100%);
                    transform: translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info-2,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info-2{
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img-2 .iheu-img {
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info-2 {
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img-2 .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img-2 .iheu-img{
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info-2,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info-2{
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img-2 .iheu-img {
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info-2 {
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img-2 .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img-2 .iheu-img {
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info-2,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info-2{
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img-2">
                                                         <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                         </div>
                                                     </div>
                                                     <div class="iheu-info-2">
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img-2">
                                                            <div class="iheu-img">
                                                                <img src="' . $value['image'] . '">
                                                            </div>
                                                        </div>
                                                        <div class="iheu-info-2">
                                                             <div class="iheu-info"  ' . $backgoundimage . '>
                                                                <div class="iheu-data">
                                                                    ' . $iheuh3 . '
                                                                    ' . $iheup . '
                                                                </div>
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img-2">
                                                         <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                         </div>
                                                     </div>
                                                     <div class="iheu-info-2">
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                               <div class="iheu-data">
                                                                   ' . $iheuh3 . '
                                                                   ' . $iheup . '
                                                                   ' . $iheubuttontext . '
                                                               </div>
                                                        </div>
                                                     </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general9($styleid, $styledata, $listdata, $userdata) {
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
                    opacity: 1;
                    -webkit-transition: all 0.35s ease-out;
                    -moz-transition: all 0.35s ease-out;
                    transition: all 0.35s ease-out;
                    pointer-events:none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    visibility: hidden;
                    pointer-events: none;
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);
                    -webkit-transition: all 0.35s ease 0.2s;
                    -moz-transition: all 0.35s ease 0.2s;
                    transition: all 0.35s ease 0.2s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float:left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    opacity: 0;
                    pointer-events: none;
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    visibility: visible;
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    pointer-events: auto;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                    -webkit-transform: translateX(0) rotate(0);
                    -moz-transform: translateX(0) rotate(0);
                    -ms-transform: translateX(0) rotate(0);
                    -o-transform: translateX(0) rotate(0);
                    transform: translateX(0) rotate(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    -webkit-transform: translateX(100%) rotate(180deg);
                    -moz-transform: translateX(100%) rotate(180deg);
                    -ms-transform: translateX(100%) rotate(180deg);
                    -o-transform: translateX(100%) rotate(180deg);
                    transform: translateX(100%) rotate(180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                    -webkit-transform: translateX(0) rotate(0);
                    -moz-transform: translateX(0) rotate(0);
                    -ms-transform: translateX(0) rotate(0);
                    -o-transform: translateX(0) rotate(0);
                    transform: translateX(0) rotate(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img{
                    -webkit-transform: translateX(-100%) rotate(-180deg);
                    -moz-transform: translateX(-100%) rotate(-180deg);
                    -ms-transform: translateX(-100%) rotate(-180deg);
                    -o-transform: translateX(-100%) rotate(-180deg);
                    transform: translateX(-100%) rotate(-180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img {
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }
        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general10($styleid, $styledata, $listdata, $userdata) {
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
                    z-index: 11;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    -webkit-transform: scale(0);
                    -moz-transform: scale(0);
                    -ms-transform: scale(0);
                    -o-transform: scale(0);
                    transform: scale(0);
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data h3,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data p,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data .iheu-button{
                    -webkit-transition: all 0.25s ease 0.25s;
                    -o-transition: all 0.25s ease 0.25s;
                    -moz-transition: all 0.25s ease 0.25s;
                    transition: all 0.25s ease 0.25s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    visibility: visible;
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    -webkit-transform: translateY(50px) scale(0.5);
                    -moz-transform: translateY(50px) scale(0.5);
                    -ms-transform: translateY(50px) scale(0.5);
                    -o-transform: translateY(50px) scale(0.5);
                    transform: translateY(50px) scale(0.5);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    -webkit-transform: translateY(-50px) scale(0.5);
                    -moz-transform: translateY(-50px) scale(0.5);
                    -ms-transform: translateY(-50px) scale(0.5);
                    -o-transform: translateY(-50px) scale(0.5);
                    transform: translateY(-50px) scale(0.5);
                }
            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general11($styleid, $styledata, $listdata, $userdata) {
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
                    -webkit-perspective: 900px;
                    -moz-perspective: 900px;
                    perspective: 900px;
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
                    opacity: 1;
                    -webkit-transform-origin: 50% 50%;
                    -moz-transform-origin: 50% 50%;
                    -ms-transform-origin: 50% 50%;
                    -o-transform-origin: 50% 50%;
                    transform-origin: 50% 50%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    visibility: hidden;
                    -webkit-transition: all 0.35s ease 0.35s;
                    -moz-transition: all 0.35s ease 0.35s;
                    transition: all 0.35s ease 0.35s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float:left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    opacity: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    visibility: visible;
                    opacity: 1;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                    -webkit-transform: translateZ(0) rotateY(0);
                    -moz-transform: translateZ(0) rotateY(0);
                    -ms-transform: translateZ(0) rotateY(0);
                    -o-transform: translateZ(0) rotateY(0);
                    transform: translateZ(0) rotateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    -webkit-transform: translateZ(-1000px) rotateY(-90deg);
                    -moz-transform: translateZ(-1000px) rotateY(-90deg);
                    -ms-transform: translateZ(-1000px) rotateY(-90deg);
                    -o-transform: translateZ(-1000px) rotateY(-90deg);
                    transform: translateZ(-1000px) rotateY(-90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    -webkit-transform: translateZ(-1000px) rotateY(90deg);
                    -moz-transform: translateZ(-1000px) rotateY(90deg);
                    -ms-transform: translateZ(-1000px) rotateY(90deg);
                    -o-transform: translateZ(-1000px) rotateY(90deg);
                    transform: translateZ(-1000px) rotateY(90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info{
                    -webkit-transform: translateZ(0) rotateY(0);
                    -moz-transform: translateZ(0) rotateY(0);
                    -ms-transform: translateZ(0) rotateY(0);
                    -o-transform: translateZ(0) rotateY(0);
                    transform: translateZ(0) rotateY(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                    -webkit-transform: translateZ(0) rotateY(0);
                    -moz-transform: translateZ(0) rotateY(0);
                    -ms-transform: translateZ(0) rotateY(0);
                    -o-transform: translateZ(0) rotateY(0);
                    transform: translateZ(0) rotateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    -webkit-transform: translateZ(-1000px) rotateY(90deg);
                    -moz-transform: translateZ(-1000px) rotateY(90deg);
                    -ms-transform: translateZ(-1000px) rotateY(90deg);
                    -o-transform: translateZ(-1000px) rotateY(90deg);
                    transform: translateZ(-1000px) rotateY(90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img{
                    -webkit-transform: translateZ(-1000px) rotateY(-90deg);
                    -moz-transform: translateZ(-1000px) rotateY(-90deg);
                    -ms-transform: translateZ(-1000px) rotateY(-90deg);
                    -o-transform: translateZ(-1000px) rotateY(-90deg);
                    transform: translateZ(-1000px) rotateY(-90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
                    -webkit-transform: translateZ(0) rotateY(0);
                    -moz-transform: translateZ(0) rotateY(0);
                    -ms-transform: translateZ(0) rotateY(0);
                    -o-transform: translateZ(0) rotateY(0);
                    transform: translateZ(0) rotateY(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img {
                    -webkit-transform: translateZ(0) rotateX(0);
                    -moz-transform: translateZ(0) rotateX(0);
                    -ms-transform: translateZ(0) rotateX(0);
                    -o-transform: translateZ(0) rotateX(0);
                    transform: translateZ(0) rotateX(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    -webkit-transform: translateZ(-1000px) rotateX(90deg);
                    -moz-transform: translateZ(-1000px) rotateX(90deg);
                    -ms-transform: translateZ(-1000px) rotateX(90deg);
                    -o-transform: translateZ(-1000px) rotateX(90deg);
                    transform: translateZ(-1000px) rotateX(90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    -webkit-transform: translateZ(-1000px) rotateX(-90deg);
                    -moz-transform: translateZ(-1000px) rotateX(-90deg);
                    -ms-transform: translateZ(-1000px) rotateX(-90deg);
                    -o-transform: translateZ(-1000px) rotateX(-90deg);
                    transform: translateZ(-1000px) rotateX(-90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
                    -webkit-transform: translateZ(0) rotateX(0);
                    -moz-transform: translateZ(0) rotateX(0);
                    -ms-transform: translateZ(0) rotateX(0);
                    -o-transform: translateZ(0) rotateX(0);
                    transform: translateZ(0) rotateX(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                    -webkit-transform: translateZ(0) rotateX(0);
                    -moz-transform: translateZ(0) rotateX(0);
                    -ms-transform: translateZ(0) rotateX(0);
                    -o-transform: translateZ(0) rotateX(0);
                    transform: translateZ(0) rotateX(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    -webkit-transform: translateZ(-1000px) rotateX(-90deg);
                    -moz-transform: translateZ(-1000px) rotateX(-90deg);
                    -ms-transform: translateZ(-1000px) rotateX(-90deg);
                    -o-transform: translateZ(-1000px) rotateX(-90deg);
                    transform: translateZ(-1000px) rotateX(-90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    -webkit-transform: translateZ(-1000px) rotateX(90deg);
                    -moz-transform: translateZ(-1000px) rotateX(90deg);
                    -ms-transform: translateZ(-1000px) rotateX(90deg);
                    -o-transform: translateZ(-1000px) rotateX(90deg);
                    transform: translateZ(-1000px) rotateX(90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    -webkit-transform: translateZ(0) rotateX(0);
                    -moz-transform: translateZ(0) rotateX(0);
                    -ms-transform: translateZ(0) rotateX(0);
                    -o-transform: translateZ(0) rotateX(0);
                    transform: translateZ(0) rotateX(0);
                }
            </style>
    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }
        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general12($styleid, $styledata, $listdata, $userdata) {
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
                    opacity: 1;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    visibility: hidden;
                    pointer-events: none;
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float:left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    opacity: 0;
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                    visibility: visible;
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                    -webkit-transform: translateX(0) rotate(0);
                    -moz-transform: translateX(0) rotate(0);
                    -ms-transform: translateX(0) rotate(0);
                    -o-transform: translateX(0) rotate(0);
                    transform: translateX(0) rotate(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    -webkit-transform: translateX(100%) rotate(180deg);
                    -moz-transform: translateX(100%) rotate(180deg);
                    -ms-transform: translateX(100%) rotate(180deg);
                    -o-transform: translateX(100%) rotate(180deg);
                    transform: translateX(100%) rotate(180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    -webkit-transform: translateX(100%) rotate(180deg);
                    -moz-transform: translateX(100%) rotate(180deg);
                    -ms-transform: translateX(100%) rotate(180deg);
                    -o-transform: translateX(100%) rotate(180deg);
                    transform: translateX(100%) rotate(180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info{
                    -webkit-transform: translateX(0) rotate(0);
                    -moz-transform: translateX(0) rotate(0);
                    -ms-transform: translateX(0) rotate(0);
                    -o-transform: translateX(0) rotate(0);
                    transform: translateX(0) rotate(0);
                    -webkit-transition-delay: 0.4s;
                    -moz-transition-delay: 0.4s;
                    transition-delay: 0.4s;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                    -webkit-transform: translateX(0) rotate(0);
                    -moz-transform: translateX(0) rotate(0);
                    -ms-transform: translateX(0) rotate(0);
                    -o-transform: translateX(0) rotate(0);
                    transform: translateX(0) rotate(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    -webkit-transform: translateX(-100%) rotate(-180deg);
                    -moz-transform: translateX(-100%) rotate(-180deg);
                    -ms-transform: translateX(-100%) rotate(-180deg);
                    -o-transform: translateX(-100%) rotate(-180deg);
                    transform: translateX(-100%) rotate(-180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img{
                    -webkit-transform: translateX(-100%) rotate(-180deg);
                    -moz-transform: translateX(-100%) rotate(-180deg);
                    -ms-transform: translateX(-100%) rotate(-180deg);
                    -o-transform: translateX(-100%) rotate(-180deg);
                    transform: translateX(-100%) rotate(-180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
                    -webkit-transform: translateX(0) rotate(0);
                    -moz-transform: translateX(0) rotate(0);
                    -ms-transform: translateX(0) rotate(0);
                    -o-transform: translateX(0) rotate(0);
                    transform: translateX(0) rotate(0);
                    -webkit-transition-delay: 0.4s;
                    -moz-transition-delay: 0.4s;
                    transition-delay: 0.4s;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img {
                    -webkit-transform: translateY(0) rotate(0);
                    -moz-transform: translateY(0) rotate(0);
                    -ms-transform: translateY(0) rotate(0);
                    -o-transform: translateY(0) rotate(0);
                    transform: translateY(0) rotate(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    -webkit-transform: translateY(-100%) rotate(-180deg);
                    -moz-transform: translateY(-100%) rotate(-180deg);
                    -ms-transform: translateY(-100%) rotate(-180deg);
                    -o-transform: translateY(-100%) rotate(-180deg);
                    transform: translateY(-100%) rotate(-180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    -webkit-transform: translateY(-100%) rotate(-180deg);
                    -moz-transform: translateY(-100%) rotate(-180deg);
                    -ms-transform: translateY(-100%) rotate(-180deg);
                    -o-transform: translateY(-100%) rotate(-180deg);
                    transform: translateY(-100%) rotate(-180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
                    -webkit-transform: translateY(0) rotate(0);
                    -moz-transform: translateY(0) rotate(0);
                    -ms-transform: translateY(0) rotate(0);
                    -o-transform: translateY(0) rotate(0);
                    transform: translateY(0) rotate(0);
                    -webkit-transition-delay: 0.4s;
                    -moz-transition-delay: 0.4s;
                    transition-delay: 0.4s;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                    -webkit-transform: translateY(0) rotate(0);
                    -moz-transform: translateY(0) rotate(0);
                    -ms-transform: translateY(0) rotate(0);
                    -o-transform: translateY(0) rotate(0);
                    transform: translateY(0) rotate(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    -webkit-transform: translateY(100%) rotate(180deg);
                    -moz-transform: translateY(100%) rotate(180deg);
                    -ms-transform: translateY(100%) rotate(180deg);
                    -o-transform: translateY(100%) rotate(180deg);
                    transform: translateY(100%) rotate(180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    -webkit-transform: translateY(100%) rotate(180deg);
                    -moz-transform: translateY(100%) rotate(180deg);
                    -ms-transform: translateY(100%) rotate(180deg);
                    -o-transform: translateY(100%) rotate(180deg);
                    transform: translateY(100%) rotate(180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    -webkit-transform: translateY(0) rotate(0);
                    -moz-transform: translateY(0) rotate(0);
                    -ms-transform: translateY(0) rotate(0);
                    -o-transform: translateY(0) rotate(0);
                    transform: translateY(0) rotate(0);
                    -webkit-transition-delay: 0.4s;
                    -moz-transition-delay: 0.4s;
                    transition-delay: 0.4s;
                }


            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general13($styleid, $styledata, $listdata, $userdata) {
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
                    z-index:1;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width:100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                }

            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general14($styleid, $styledata, $listdata, $userdata) {
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
                    -webkit-perspective: 900px;
                    -moz-perspective: 900px;
                    perspective: 900px;
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
                    visibility: visible;
                    opacity: 1;
                    -webkit-transition: all 0.4s ease-out;
                    -moz-transition: all 0.4s ease-out;
                    transition: all 0.4s ease-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    visibility: hidden;
                    -webkit-transition: all 0.35s ease-in-out 0.3s;
                    -moz-transition: all 0.35s ease-in-out 0.3s;
                    transition: all 0.35s ease-in-out 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    opacity: 0;
                    visibility: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    visibility: visible;
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                    -webkit-transform: rotateY(0);
                    -moz-transform: rotateY(0);
                    -ms-transform: rotateY(0);
                    -o-transform: rotateY(0);
                    transform: rotateY(0);
                    -webkit-transform-origin: 100% 50%;
                    -moz-transform-origin: 100% 50%;
                    -ms-transform-origin: 100% 50%;
                    -o-transform-origin: 100% 50%;
                    transform-origin: 100% 50%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    -webkit-transform: rotateY(90deg);
                    -moz-transform: rotateY(90deg);
                    -ms-transform: rotateY(90deg);
                    -o-transform: rotateY(90deg);
                    transform: rotateY(90deg);
                    -webkit-transform-origin: 0% 50%;
                    -moz-transform-origin: 0% 50%;
                    -ms-transform-origin: 0% 50%;
                    -o-transform-origin: 0% 50%;
                    transform-origin: 0% 50%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    -webkit-transform: rotateY(-90deg);
                    -moz-transform: rotateY(-90deg);
                    -ms-transform: rotateY(-90deg);
                    -o-transform: rotateY(-90deg);
                    transform: rotateY(-90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info{
                    -webkit-transform: rotateY(0);
                    -moz-transform: rotateY(0);
                    -ms-transform: rotateY(0);
                    -o-transform: rotateY(0);
                    transform: rotateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                    -webkit-transform: rotateY(0);
                    -moz-transform: rotateY(0);
                    -ms-transform: rotateY(0);
                    -o-transform: rotateY(0);
                    transform: rotateY(0);
                    -webkit-transform-origin: 0% 50%;
                    -moz-transform-origin: 0% 50%;
                    -ms-transform-origin: 0% 50%;
                    -o-transform-origin: 0% 50%;
                    transform-origin: 0% 50%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    -webkit-transform: rotateY(-90deg);
                    -moz-transform: rotateY(-90deg);
                    -ms-transform: rotateY(-90deg);
                    -o-transform: rotateY(-90deg);
                    transform: rotateY(-90deg);
                    -webkit-transform-origin: 100% 50%;
                    -moz-transform-origin: 100% 50%;
                    -ms-transform-origin: 100% 50%;
                    -o-transform-origin: 100% 50%;
                    transform-origin: 100% 50%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img{
                    -webkit-transform: rotateY(90deg);
                    -moz-transform: rotateY(90deg);
                    -ms-transform: rotateY(90deg);
                    -o-transform: rotateY(90deg);
                    transform: rotateY(90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
                    -webkit-transform: rotateY(0);
                    -moz-transform: rotateY(0);
                    -ms-transform: rotateY(0);
                    -o-transform: rotateY(0);
                    transform: rotateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img {
                    -webkit-transform: rotateX(0);
                    -moz-transform: rotateX(0);
                    -ms-transform: rotateX(0);
                    -o-transform: rotateX(0);
                    transform: rotateX(0);
                    -webkit-transform-origin: 50% 100%;
                    -moz-transform-origin: 50% 100%;
                    -ms-transform-origin: 50% 100%;
                    -o-transform-origin: 50% 100%;
                    transform-origin: 50% 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    -webkit-transform: rotateX(-90deg);
                    -moz-transform: rotateX(-90deg);
                    -ms-transform: rotateX(-90deg);
                    -o-transform: rotateX(-90deg);
                    transform: rotateX(-90deg);
                    -webkit-transform-origin: 50% 0;
                    -moz-transform-origin: 50% 0;
                    -ms-transform-origin: 50% 0;
                    -o-transform-origin: 50% 0;
                    transform-origin: 50% 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    -webkit-transform: rotateX(90deg);
                    -moz-transform: rotateX(90deg);
                    -ms-transform: rotateX(90deg);
                    -o-transform: rotateX(90deg);
                    transform: rotateX(90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
                    -webkit-transform: rotateX(0);
                    -moz-transform: rotateX(0);
                    -ms-transform: rotateX(0);
                    -o-transform: rotateX(0);
                    transform: rotateX(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                    -webkit-transform: rotateX(0);
                    -moz-transform: rotateX(0);
                    -ms-transform: rotateX(0);
                    -o-transform: rotateX(0);
                    transform: rotateX(0);
                    -webkit-transform-origin: 50% 0;
                    -moz-transform-origin: 50% 0;
                    -ms-transform-origin: 50% 0;
                    -o-transform-origin: 50% 0;
                    transform-origin: 50% 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    -webkit-transform: rotateX(90deg);
                    -moz-transform: rotateX(90deg);
                    -ms-transform: rotateX(90deg);
                    -o-transform: rotateX(90deg);
                    transform: rotateX(90deg);
                    -webkit-transform-origin: 50% 100%;
                    -moz-transform-origin: 50% 100%;
                    -ms-transform-origin: 50% 100%;
                    -o-transform-origin: 50% 100%;
                    transform-origin: 50% 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    -webkit-transform: rotateX(-90deg);
                    -moz-transform: rotateX(-90deg);
                    -ms-transform: rotateX(-90deg);
                    -o-transform: rotateX(-90deg);
                    transform: rotateX(-90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    -webkit-transform: rotateX(0);
                    -moz-transform: rotateX(0);
                    -ms-transform: rotateX(0);
                    -o-transform: rotateX(0);
                    transform: rotateX(0);
                }
            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general15($styleid, $styledata, $listdata, $userdata) {
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
                    opacity: 1;
                    visibility: visible;
                    -webkit-transform: scale(1) rotate(0);
                    -moz-transform: scale(1) rotate(0);
                    -ms-transform: scale(1) rotate(0);
                    -o-transform: scale(1) rotate(0);
                    transform: scale(1) rotate(0);
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    visibility: hidden;
                    -webkit-transform: scale(0.5) rotate(-720deg);
                    -moz-transform: scale(0.5) rotate(-720deg);
                    -ms-transform: scale(0.5) rotate(-720deg);
                    -o-transform: scale(0.5) rotate(-720deg);
                    transform: scale(0.5) rotate(-720deg);
                    -webkit-transition: all 0.35s ease-in-out 0.3s;
                    -moz-transition: all 0.35s ease-in-out 0.3s;
                    transition: all 0.35s ease-in-out 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    opacity: 0;
                    visibility: hidden;
                    -webkit-transform: scale(0.5) rotate(720deg);
                    -moz-transform: scale(0.5) rotate(720deg);
                    -ms-transform: scale(0.5) rotate(720deg);
                    -o-transform: scale(0.5) rotate(720deg);
                    transform: scale(0.5) rotate(720deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                    visibility: visible;
                    -webkit-transform: scale(1) rotate(0);
                    -moz-transform: scale(1) rotate(0);
                    -ms-transform: scale(1) rotate(0);
                    -o-transform: scale(1) rotate(0);
                    transform: scale(1) rotate(0);
                }
            </style>
    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general16($styleid, $styledata, $listdata, $userdata) {
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
                    z-index: 11;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    z-index: 20;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width:100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                    -webkit-transform-origin: 95% 50%;
                    -moz-transform-origin: 95% 50%;
                    -ms-transform-origin: 95% 50%;
                    -o-transform-origin: 95% 50%;
                    transform-origin: 95% 50%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img:after {
                    content: '';
                    width: 8px;
                    height: 8px;
                    position: absolute;
                    top: calc(50% - 8px);
                    left: 95%;
                    margin: -4px 0 0 -4px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    -webkit-transform: rotate(-180deg);
                    -moz-transform: rotate(-180deg);
                    -ms-transform: rotate(-180deg);
                    -o-transform: rotate(-180deg);
                    transform: rotate(-180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                    -webkit-transform-origin: 5% 50%;
                    -moz-transform-origin: 5% 50%;
                    -ms-transform-origin: 5% 50%;
                    -o-transform-origin: 5% 50%;
                    transform-origin: 5% 50%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img:after {
                    content: '';
                    width: 8px;
                    height: 8px;
                    position: absolute;
                    top: calc(50% - 8px);
                    left: 5%;
                    margin: -4px 0 0 -4px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img{
                    -webkit-transform: rotate(180deg);
                    -moz-transform: rotate(180deg);
                    -ms-transform: rotate(180deg);
                    -o-transform: rotate(180deg);
                    transform: rotate(180deg);
                }

            </style>
    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
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

        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general17($styleid, $styledata, $listdata, $userdata) {
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
                    z-index:1;
                    -webkit-transform: scale(0);
                    -moz-transform: scale(0);
                    -ms-transform: scale(0);
                    -o-transform: scale(0);
                    transform: scale(0);
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                }
            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
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

        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general18($styleid, $styledata, $listdata, $userdata) {
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
                    -webkit-perspective: 900px;
                    -moz-perspective: 900px;
                    perspective: 900px;
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
                    -webkit-transition: all 0.5s ease-in-out;
                    -moz-transition: all 0.5s ease-in-out;
                    transition: all 0.5s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info-2{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    -webkit-transform-style: preserve-3d;
                    -moz-transform-style: preserve-3d;
                    -ms-transform-style: preserve-3d;
                    -o-transform-style: preserve-3d;
                    transform-style: preserve-3d;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity:0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info {
                    opacity:1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                    -webkit-transform-origin: 50% 0;
                    -moz-transform-origin: 50% 0;
                    -ms-transform-origin: 50% 0;
                    -o-transform-origin: 50% 0;
                    transform-origin: 50% 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    -webkit-transform: rotate3d(1, 0, 0, 180deg);
                    -moz-transform: rotate3d(1, 0, 0, 180deg);
                    -ms-transform: rotate3d(1, 0, 0, 180deg);
                    -o-transform: rotate3d(1, 0, 0, 180deg);
                    transform: rotate3d(1, 0, 0, 180deg);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img {
                    -webkit-transform-origin: 50% 100%;
                    -moz-transform-origin: 50% 100%;
                    -ms-transform-origin: 50% 100%;
                    -o-transform-origin: 50% 100%;
                    transform-origin: 50% 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    -webkit-transform: rotate3d(1, 0, 0, -180deg);
                    -moz-transform: rotate3d(1, 0, 0, -180deg);
                    -ms-transform: rotate3d(1, 0, 0, -180deg);
                    -o-transform: rotate3d(1, 0, 0, -180deg);
                    transform: rotate3d(1, 0, 0, -180deg);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                    -webkit-transform-origin: 100% 50%;
                    -moz-transform-origin: 100% 50%;
                    -ms-transform-origin: 100% 50%;
                    -o-transform-origin: 100% 50%;
                    transform-origin: 100% 50%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    -webkit-transform: rotate3d(0, 1, 0, 180deg);
                    -moz-transform: rotate3d(0, 1, 0, 180deg);
                    -ms-transform: rotate3d(0, 1, 0, 180deg);
                    -o-transform: rotate3d(0, 1, 0, 180deg);
                    transform: rotate3d(0, 1, 0, 180deg);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                    -webkit-transform-origin: 0% 50%;
                    -moz-transform-origin: 0% 50%;
                    -ms-transform-origin: 0% 50%;
                    -o-transform-origin: 0% 50%;
                    transform-origin: 0% 50%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img{
                    -webkit-transform: rotate3d(0, 1, 0, -180deg);
                    -moz-transform: rotate3d(0, 1, 0, -180deg);
                    -ms-transform: rotate3d(0, 1, 0, -180deg);
                    -o-transform: rotate3d(0, 1, 0, -180deg);
                    transform: rotate3d(0, 1, 0, -180deg);
                }
            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                  <div class="iheu-info-2">   <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                 </div>  </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                        <div class="iheu-info-2">  <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div> </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                     <div class="iheu-info-2">  <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                    </div>  </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general19($styleid, $styledata, $listdata, $userdata) {
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
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    -webkit-perspective: 900px;
                    -moz-perspective: 900px;
                    perspective: 900px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                    -webkit-transition: all 0.35s linear;
                    -moz-transition: all 0.35s linear;
                    transition: all 0.35s linear;
                    -webkit-transform-origin: 50% 0%;
                    -moz-transform-origin: 50% 0%;
                    -ms-transform-origin: 50% 0%;
                    -o-transform-origin: 50% 0%;
                    transform-origin: 50% 0%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info-2{
                    -webkit-transform-style: preserve-3d;
                    -moz-transform-style: preserve-3d;
                    -ms-transform-style: preserve-3d;
                    -o-transform-style: preserve-3d;
                    transform-style: preserve-3d;
                    position: absolute;
                    width:100%;
                    top:0 ;
                    bottom:0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info-2 .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 1;
                    visibility: hidden;
                    -webkit-transition: all 0.35s linear;
                    -moz-transition: all 0.35s linear;
                    transition: all 0.35s linear;
                    -webkit-transform-origin: 50% 0%;
                    -moz-transform-origin: 50% 0%;
                    -ms-transform-origin: 50% 0%;
                    -o-transform-origin: 50% 0%;
                    transform-origin: 50% 0%;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width:100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    opacity: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info-2 .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info-2 .iheu-info{
                    opacity: 1;
                    visibility: visible;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info-2 .iheu-info {
                    -webkit-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                    -moz-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                    -ms-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                    -o-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                    transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    -webkit-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                    -moz-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                    -ms-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                    -o-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                    transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info-2 .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info-2 .iheu-info{
                    -webkit-transform: rotate3d(1, 0, 0, 0deg);
                    -moz-transform: rotate3d(1, 0, 0, 0deg);
                    -ms-transform: rotate3d(1, 0, 0, 0deg);
                    -o-transform: rotate3d(1, 0, 0, 0deg);
                    transform: rotate3d(1, 0, 0, 0deg);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info-2 .iheu-info {
                    -webkit-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                    -moz-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                    -ms-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                    -o-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                    transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    -webkit-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                    -moz-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                    -ms-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                    -o-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                    transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info-2 .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info-2 .iheu-info{
                    -webkit-transform: rotate3d(1, 0, 0, 0deg);
                    -moz-transform: rotate3d(1, 0, 0, 0deg);
                    -ms-transform: rotate3d(1, 0, 0, 0deg);
                    -o-transform: rotate3d(1, 0, 0, 0deg);
                    transform: rotate3d(1, 0, 0, 0deg);
                }
            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                 <div class="iheu-info-2">    <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div> </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                       <div class="iheu-info-2">   <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                     </div>   </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                    <div class="iheu-info-2">   <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                   </div>  </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general20($styleid, $styledata, $listdata, $userdata) {
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
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    -webkit-backface-visibility: hidden;
                    -moz-backface-visibility: hidden;
                    backface-visibility: hidden;
                    -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
                    -moz-transition: -moz-transform 0.3s, opacity 0.3s;
                    transition: transform 0.3s, opacity 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width:100%;
                    float:left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info{
                    opacity: 1;
                    -webkit-transform: translate(15px, 15px);
                    -moz-transform: translate(15px, 15px);
                    -ms-transform: translate(15px, 15px);
                    transform: translate(15px, 15px);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
                    opacity: 1;
                    -webkit-transform: translate(-15px, -15px);
                    -moz-transform: translate(-15px, -15px);
                    -ms-transform: translate(-15px, -15px);
                    transform: translate(-15px, -15px);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
                    opacity: 1;
                    -webkit-transform: translate(-15px, 15px);
                    -moz-transform: translate(-15px, 15px);
                    -ms-transform: translate(-15px, 15px);
                    transform: translate(-15px, 15px);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    opacity: 1;
                    -webkit-transform: translate(15px, -15px);
                    -moz-transform: translate(15px, -15px);
                    -ms-transform: translate(15px, -15px);
                    transform: translate(15px, -15px);
                }
            </style>
    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }
        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
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

        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general21($styleid, $styledata, $listdata, $userdata) {
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
                    opacity: 1;
                    -webkit-transition: all 0.5s ease-in-out;
                    -moz-transition: all 0.5s ease-in-out;
                    transition: all 0.5s ease-in-out;
                    -webkit-transform: scale(1) translate(0%, 0%);
                    -moz-transform:scale(1) translate(0%, 0%);
                    -ms-transform:scale(1) translate(0%, 0%);
                    -o-transform: scale(1) translate(0%, 0%);
                    transform: scale(1) translate(0%, 0%);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    -webkit-transform: scale(0.2) translate(-200%, 0%);
                    -moz-transform:scale(0.2) translate(-200%, 0%);
                    -ms-transform:scale(0.2) translate(-200%, 0%);
                    -o-transform: scale(0.2) translate(-200%, 0%);
                    transform: scale(0.2) translate(-200%, 0%);
                    opacity: 0;
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img{
                    -webkit-transform: scale(0.2) translate(300%, 0%);
                    -moz-transform:scale(0.2) translate(300%, 0%);
                    -ms-transform:scale(0.2) translate(300%, 0%);
                    -o-transform: scale(0.2) translate(300%, 0%);
                    transform: scale(0.2) translate(300%, 0%);
                    opacity: 0;
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    -webkit-transform: scale(0.2) translate(0%, -200%);
                    -moz-transform:scale(0.2) translate(0%, -200%);
                    -ms-transform:scale(0.2) translate(0%, -200%);
                    -o-transform: scale(0.2) translate(0%, -200%);
                    transform: scale(0.2) translate(0%, -200%);
                    opacity: 0;
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    -webkit-transform: scale(0.2) translate(0%, 300%);
                    -moz-transform:scale(0.2) translate(0%, 300%);
                    -ms-transform:scale(0.2) translate(0%, 300%);
                    -o-transform: scale(0.2) translate(0%, 300%);
                    transform: scale(0.2) translate(0%, 300%);
                    opacity: 0;
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    transform-origin: 0 50% 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '  <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                         </div>
                                                         <div class="iheu-gen-style"></div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                      
                                                            <div class="iheu-img">
                                                                <img src="' . $value['image'] . '">
                                                            </div>
                                                             <div class="iheu-gen-style"></div>
                                                             <div class="iheu-info"  ' . $backgoundimage . '>
                                                                <div class="iheu-data">
                                                                    ' . $iheuh3 . '
                                                                    ' . $iheup . '
                                                                </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                         </div>
                                                          <div class="iheu-gen-style"></div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                               <div class="iheu-data">
                                                                   ' . $iheuh3 . '
                                                                   ' . $iheup . '
                                                                   ' . $iheubuttontext . '
                                                               </div>
                                                     </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general22($styleid, $styledata, $listdata, $userdata) {
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
                    transition: all 1s ease;
                    animation-duration: 1s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img {
                    opacity: 1;
                    transform: rotateX(0deg);
                    transform-origin: 100% 100% 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    opacity: 0;
                    transform: rotateX(90deg);
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    transform: rotateX(90deg);
                    transform-origin: 100% 100% 0;
                    transition: all 1s ease;
                    animation-duration: 1s;
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
                    opacity: 1;
                    transform: rotateX(0deg);
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                    opacity: 1;
                    transform: rotateX(0deg);
                    transform-origin:0 0 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    opacity: 0;
                    transform: rotateX(90deg);
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    transform: rotateX(90deg);
                    transform-origin: 0 0 0;
                    transition: all 1s ease;
                    animation-duration: 1s;
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    opacity: 1;
                    transform: rotateX(0deg);
                    pointer-events: auto;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                    opacity: 1;
                    transform: rotateY(0deg);
                    transform-origin:0 0 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    opacity: 0;
                    transform: rotateY(90deg);
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    transform: rotateY(90deg);
                    transform-origin: 0 0 0;
                    transition: all 1s ease;
                    animation-duration: 1s;
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info{
                    opacity: 1;
                    transform: rotateY(0deg);
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                    opacity: 1;
                    transform: rotateY(0deg);
                    transform-origin:100% 100% 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img{
                    opacity: 0;
                    transform: rotateY(90deg);
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    transform: rotateY(90deg);
                    transform-origin: 100% 100% 0;
                    transition: all 1s ease;
                    animation-duration: 1s;
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
                    opacity: 1;
                    transform: rotateY(0deg);
                    pointer-events: auto;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    float:left;
                    width:100%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                                 <div class="iheu-info"  ' . $backgoundimage . '>
                                                                    <div class="iheu-data">
                                                                        ' . $iheuh3 . '
                                                                        ' . $iheup . '
                                                                    </div>
                                                        </div>     
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                             <div class="iheu-info"  ' . $backgoundimage . '>
                                                                   <div class="iheu-data">
                                                                       ' . $iheuh3 . '
                                                                       ' . $iheup . '
                                                                       ' . $iheubuttontext . '
                                                                   </div>
                                                      </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general23($styleid, $styledata, $listdata, $userdata) {
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
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    transition: all 1s ease;
                    animation-duration: 1s;
                    pointer-events: none;
                    backface-visibility: hidden;
                    opacity: 0;
                    transform: scale(0, 0) translate(-150%, 0%);
                    transform-origin: 0 100% 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info{
                    opacity: 1;
                    transform: scale(1, 1) translate(0%, 0%);
                    transform-origin: 100% 100% 0;
                    pointer-events: auto;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    transition: all 1s ease;
                    animation-duration: 1s;
                    pointer-events: none;
                    backface-visibility: hidden;
                    opacity: 0;
                    transform: scale(0, 0) translate(150%, 0%);
                    transform-origin: 100% 0 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
                    opacity: 1;
                    transform: scale(1, 1) translate(0%, 0%);
                    transform-origin: 100% 100% 0;
                    pointer-events: auto;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    transition: all 1s ease;
                    animation-duration: 1s;
                    pointer-events: none;
                    backface-visibility: hidden;
                    opacity: 0;
                    transform: scale(0, 0) translate(0%, 0%);
                    transform-origin: 0 0 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
                    opacity: 1;
                    transform: scale(1, 1) translate(0%, 0%);
                    transform-origin: 100% 100% 0;
                    pointer-events: auto;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    transition: all 1s ease;
                    animation-duration: 1s;
                    pointer-events: none;
                    backface-visibility: hidden;
                    opacity: 0;
                    transform: scale(0, 0) translate(100%, 100%);
                    transform-origin: 100% 100% 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    opacity: 1;
                    transform: scale(1, 1) translate(0%, 0%);
                    transform-origin: 100% 100% 0;
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    float:left;
                    width:100%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                                 <div class="iheu-info"  ' . $backgoundimage . '>
                                                                    <div class="iheu-data">
                                                                        ' . $iheuh3 . '
                                                                        ' . $iheup . '
                                                                    </div>
                                                        </div>     
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                             <div class="iheu-info"  ' . $backgoundimage . '>
                                                                   <div class="iheu-data">
                                                                       ' . $iheuh3 . '
                                                                       ' . $iheup . '
                                                                       ' . $iheubuttontext . '
                                                                   </div>
                                                      </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general24($styleid, $styledata, $listdata, $userdata) {
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
                    z-index: 2;
                    transition: all 1s ease-out 0s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                    opacity: 1;
                    transform: perspective(800px) rotateX(0deg) translateZ(0px);
                    transform-origin: 50% 0 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    opacity: 0 ;
                    transform: perspective(800px) rotateX(180deg) translateZ(100px);
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img {
                    opacity: 1;
                    transform: perspective(800px) rotateX(0deg) translateZ(0px);
                    transform-origin: 100% 100% 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    opacity: 0 ;
                    transform: perspective(800px) rotateX(-180deg) translateZ(100px);
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                    opacity: 1;
                    transform: perspective(800px) rotateY(0deg) translateZ(0px);
                    transform-origin: 0% 100% 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    opacity: 0 ;
                    transform: perspective(800px) rotateY(-180deg) translateZ(100px);
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                    opacity: 1;
                    transform: perspective(800px) rotateY(0deg) translateZ(0px);
                    transform-origin: 100% 100% 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img{
                    opacity: 0 ;
                    transform: perspective(800px) rotateY(180deg) translateZ(100px);
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    float:left;
                    width:100%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        $iheubuttontext = '';
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                                 <div class="iheu-info"  ' . $backgoundimage . '>
                                                                    <div class="iheu-data">
                                                                        ' . $iheuh3 . '
                                                                        ' . $iheup . '
                                                                    </div>
                                                        </div>     
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                             <div class="iheu-info"  ' . $backgoundimage . '>
                                                                   <div class="iheu-data">
                                                                       ' . $iheuh3 . '
                                                                       ' . $iheup . '
                                                                       ' . $iheubuttontext . '
                                                                   </div>
                                                      </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general25($styleid, $styledata, $listdata, $userdata) {
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
                    transition: all 1s ease-out 0s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    backface-visibility: hidden;
                    opacity: 1;
                    transform: scale(1, 1) rotate(0deg);
                    transform-origin: 100% 200% 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    opacity: 0;
                    transform: scale(0, 0) rotate(270deg);
                    transform-origin: 200% 500% 0;
                    pointer-events: none;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    float:left;
                    width:100%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                                 <div class="iheu-info"  ' . $backgoundimage . '>
                                                                    <div class="iheu-data">
                                                                        ' . $iheuh3 . '
                                                                        ' . $iheup . '
                                                                    </div>
                                                        </div>     
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                             <div class="iheu-info"  ' . $backgoundimage . '>
                                                                   <div class="iheu-data">
                                                                       ' . $iheuh3 . '
                                                                       ' . $iheup . '
                                                                       ' . $iheubuttontext . '
                                                                   </div>
                                                      </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general26($styleid, $styledata, $listdata, $userdata) {
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
                    z-index: 2;
                    transition: all 1s ease-out 0s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    backface-visibility: hidden;
                    transform: scale(1);
                    z-index: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    opacity: 0;
                    transform: scale(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    transition: all 1s ease-out 0s;
                    opacity: 0;
                    transform: scale(0) rotateZ(-720deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                    transform: scale(1) rotateZ(0deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    float:left;
                    width:100%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                                 <div class="iheu-info"  ' . $backgoundimage . '>
                                                                    <div class="iheu-data">
                                                                        ' . $iheuh3 . '
                                                                        ' . $iheup . '
                                                                    </div>
                                                        </div>     
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                             <div class="iheu-info"  ' . $backgoundimage . '>
                                                                   <div class="iheu-data">
                                                                       ' . $iheuh3 . '
                                                                       ' . $iheup . '
                                                                       ' . $iheubuttontext . '
                                                                   </div>
                                                      </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general27($styleid, $styledata, $listdata, $userdata) {
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
                    opacity: 0;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover  .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                    animation-duration: 0.25s all ease 1s;
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
                    transition: all 1s ease-out 0s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                    opacity: 1;
                    animation-duration: 1s;
                    animation-name: tinRightIn;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    animation-duration: 1s;
                    animation-name: tinRightOut;
                    opacity: 0 ;
                    pointer-events: none;
                }
                @keyframes tinRightIn {
                    0% {
                        opacity: 0;
                        transform: scale(1, 1) translateX(900%);
                    }
                    50%, 70%, 90% {
                        opacity: 1;
                        transform: scale(1.1, 1.1) translateX(0px);
                    }
                    60%, 80%, 100% {
                        opacity: 1;
                        transform: scale(1, 1) translateX(0px);
                    }
                }
                @keyframes tinRightOut {
                    0%, 20%, 40%, 50% {
                        opacity: 1;
                        transform: scale(1, 1) translateX(0px);
                    }
                    10%, 30% {
                        opacity: 1;
                        transform: scale(1.1, 1.1) translateX(0px);
                    }
                    100% {
                        opacity: 0;
                        transform: scale(1, 1) translateX(900%);
                    }
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                    opacity: 1;
                    animation-duration: 1s;
                    animation-name: tinLeftIn;
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img{
                    animation-duration: 1s;
                    animation-name: tinLeftOut;
                    opacity: 0 ;
                    pointer-events: none;
                }
                @keyframes tinLeftIn {
                    0% {
                        opacity: 0;
                        transform: scale(1, 1) translateX(-900%);
                    }
                    50%, 70%, 90% {
                        opacity: 1;
                        transform: scale(1.1, 1.1) translateX(0px);
                    }
                    60%, 80%, 100% {
                        opacity: 1;
                        transform: scale(1, 1) translateX(0px);
                    }
                }
                @keyframes tinLeftOut {
                    0%, 20%, 40%, 50% {
                        opacity: 1;
                        transform: scale(1, 1) translateX(0px);
                    }
                    10%, 30% {
                        opacity: 1;
                        transform: scale(1.1, 1.1) translateX(0px);
                    }
                    100% {
                        opacity: 0;
                        transform: scale(1, 1) translateX(-900%);
                    }
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img {
                    opacity: 1;
                    animation-duration: 1s;
                    animation-name: tinTopIn;
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    animation-duration: 1s;
                    animation-name: tinTopOut;
                    opacity: 0 ;
                    pointer-events: none;
                }
                @keyframes tinTopIn {
                    0% {
                        opacity: 0;
                        transform: scale(1, 1) translateY(-900%);
                    }
                    50%, 70%, 90% {
                        opacity: 1;
                        transform: scale(1.1, 1.1) translateY(0px);
                    }
                    60%, 80%, 100% {
                        opacity: 1;
                        transform: scale(1, 1) translateY(0px);
                    }
                }
                @keyframes tinTopOut {
                    0%, 20%, 40%, 50% {
                        opacity: 1;
                        transform: scale(1, 1) translateY(0px);
                    }
                    10%, 30% {
                        opacity: 1;
                        transform: scale(1.1, 1.1) translateY(0px);
                    }
                    100% {
                        opacity: 0;
                        transform: scale(1, 1) translateY(-900%);
                    }
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                    opacity: 1;
                    animation-duration: 1s;
                    animation-name: tinBottomIn;
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    animation-duration: 1s;
                    animation-name: tinBottomOut;
                    opacity: 0 ;
                    pointer-events: none;
                }

                @keyframes tinBottomIn {
                    0% {
                        opacity: 0;
                        transform: scale(1, 1) translateY(900%);
                    }
                    50%, 70%, 90% {
                        opacity: 1;
                        transform: scale(1.1, 1.1) translateY(0px);
                    }
                    60%, 80%, 100% {
                        opacity: 1;
                        transform: scale(1, 1) translateY(0px);
                    }
                }
                @keyframes tinBottomOut {
                    0%, 20%, 40%, 50% {
                        opacity: 1;
                        transform: scale(1, 1) translateY(0px);
                    }
                    10%, 30% {
                        opacity: 1;
                        transform: scale(1.1, 1.1) translateY(0px);
                    }
                    100% {
                        opacity: 0;
                        transform: scale(1, 1) translateY(900%);
                    }
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    z-index: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    float:left;
                    width:100%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                                 <div class="iheu-info"  ' . $backgoundimage . '>
                                                                    <div class="iheu-data">
                                                                        ' . $iheuh3 . '
                                                                        ' . $iheup . '
                                                                    </div>
                                                        </div>     
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                             <div class="iheu-info"  ' . $backgoundimage . '>
                                                                   <div class="iheu-data">
                                                                       ' . $iheuh3 . '
                                                                       ' . $iheup . '
                                                                       ' . $iheubuttontext . '
                                                                   </div>
                                                      </div>';
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

        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general28($styleid, $styledata, $listdata, $userdata) {
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
                    z-index: 2;
                    transition: all 1s ease-out 0s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                    opacity: 1 ;
                    transform: perspective(800px) rotateY(0deg);
                    transform-origin: 100% 50%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    opacity: 0;
                    transform: perspective(800px) rotateY(180deg);
                    transform-origin: 50% 50%;
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                    opacity: 1 ;
                    transform: perspective(800px) rotateY(0deg);
                    transform-origin: 0 0 ;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img{
                    opacity: 0;
                    transform: perspective(800px) rotateY(-180deg);
                    transform-origin: 50% 50% ;
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                    opacity: 1 ;
                    transform: perspective(800px) rotateX(0deg);
                    transform-origin: 50% 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    opacity: 0;
                    transform: perspective(800px) rotateX(-180deg);
                    transform-origin: 50% 50% ;
                    pointer-events: none;

                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img {
                    opacity: 1 ;
                    transform: perspective(800px) rotateX(0deg);
                    transform-origin: 0 0 ;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    opacity: 0;
                    transform: perspective(800px) rotateX(180deg);
                    transform-origin: 50% 50% ;
                    pointer-events: none;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    z-index: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    float:left;
                    width:100%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                                 <div class="iheu-info"  ' . $backgoundimage . '>
                                                                    <div class="iheu-data">
                                                                        ' . $iheuh3 . '
                                                                        ' . $iheup . '
                                                                    </div>
                                                        </div>     
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                             <div class="iheu-info"  ' . $backgoundimage . '>
                                                                   <div class="iheu-data">
                                                                       ' . $iheuh3 . '
                                                                       ' . $iheup . '
                                                                       ' . $iheubuttontext . '
                                                                   </div>
                                                      </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general29($styleid, $styledata, $listdata, $userdata) {
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
                    z-index: 2;
                    transition: all 1s ease-out 0s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    animation-duration: 1s;
                    animation-name: foolishIn;
                    opacity: 1;
                    z-index: 2;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    animation-duration: 1s;
                    animation-name: foolishOut;
                    opacity: 0 ;
                    pointer-events: none;
                }
                @keyframes foolishOut {
                    0% {
                        opacity: 1;
                        transform: scale(1, 1) rotate(360deg);
                        transform-origin: 50% 50% 0;
                    }
                    20% {
                        opacity: 1;
                        transform: scale(0.5, 0.5) rotate(0deg);
                        transform-origin: 0 0 0;
                    }
                    40% {
                        opacity: 1;
                        transform: scale(0.5, 0.5) rotate(0deg);
                        transform-origin: 100% 0 0;
                    }
                    60% {
                        opacity: 1;
                        transform: scale(0.5, 0.5) rotate(0deg);
                        transform-origin: 0 50% 0;
                    }
                    80% {
                        opacity: 1;
                        transform: scale(0.5, 0.5) rotate(0deg);
                        transform-origin: 0 100% 0;
                    }
                    100% {
                        opacity: 0;
                        transform: scale(0, 0) rotate(0deg);
                        transform-origin: 50% 50% 0;
                    }
                }
                @keyframes foolishIn {
                    0% {
                        opacity: 0;
                        transform: scale(0, 0) rotate(360deg);
                        transform-origin: 50% 50% 0;
                    }
                    20% {
                        opacity: 1;
                        transform: scale(0.5, 0.5) rotate(0deg);
                        transform-origin: 0 100% 0;
                    }
                    40% {
                        opacity: 1;
                        transform: scale(0.5, 0.5) rotate(0deg);
                        transform-origin: 100% 100% 0;
                    }
                    60% {
                        opacity: 1;
                        transform: scale(0.5, 0.5) rotate(0deg);
                        transform-origin: 0 50% 0;
                    }
                    80% {
                        opacity: 1;
                        transform: scale(0.5, 0.5) rotate(0deg);
                        transform-origin: 0 0 0;
                    }
                    100% {
                        opacity: 1;
                        transform: scale(1, 1) rotate(0deg);
                        transform-origin: 50% 50% 0;
                    }
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    float:left;
                    width:100%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                                 <div class="iheu-info"  ' . $backgoundimage . '>
                                                                    <div class="iheu-data">
                                                                        ' . $iheuh3 . '
                                                                        ' . $iheup . '
                                                                    </div>
                                                        </div>     
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                             <div class="iheu-info"  ' . $backgoundimage . '>
                                                                   <div class="iheu-data">
                                                                       ' . $iheuh3 . '
                                                                       ' . $iheup . '
                                                                       ' . $iheubuttontext . '
                                                                   </div>
                                                      </div>';
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
        echo '<div class="' . $styledata[1] . ' ' . $dataanimation . ' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" ' . $dataavanimation . '>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general30($styleid, $styledata, $listdata, $userdata) {
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
                    z-index: 1;
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
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.oxi-touch .iheu-img{
                    transform: scale(1.05);
                    -webkit-transform: scale(1.05);
                    -mos-transform: scale(1.05);
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {                   
                    -webkit-transition: all 0.8s ease-in-out;
                    -moz-transition: all 0.8s ease-in-out;
                    transition: all 0.8s ease-in-out;
                    background:transparent;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data h3,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data p,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data .iheu-button{
                    -webkit-transition: all 0.25s ease 0.25s;
                    -o-transition: all 0.25s ease 0.25s;
                    -moz-transition: all 0.25s ease 0.25s;
                    transition: all 0.25s ease 0.25s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data2{
                    width: 100%;
                    float: left;
                    opacity:0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    opacity:1;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;

                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[85]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.oxi-touch .iheu-info{
                    opacity: 1;
                    -webkit-backface-visibility: visible;
                    backface-visibility: visible;
                    background: <?php echo $styledata[13]; ?>; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info .iheu-data2,
                .image-ultimate-hover-<?php echo $styleid; ?>.oxi-touch .iheu-info .iheu-data2{                   
                    opacity:1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info .iheu-data,
                .image-ultimate-hover-<?php echo $styleid; ?>.oxi-touch .iheu-info .iheu-data{                   
                    transform: translateY(0px);
                    -webkit-transform: translateY(0px);
                    -mos-transform: translateY(0px)
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info h3,
                .image-ultimate-hover-<?php echo $styleid; ?>.oxi-touch .iheu-info h3{
                    color: <?php echo $styledata[83]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
            </style>
            <script type="text/javascript">
                jQuery(document).ready(function () {
                    function effects30height<?php echo $styleid; ?>() {
                        var effects30height = jQuery(".image-ultimate-hover-<?php echo $styleid; ?> .iheu-data2").outerHeight();
                        jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{transform: translateY(" + effects30height / 2 + "px);;} </style>").appendTo(".image-ultimate-hover-<?php echo $styleid; ?>");
                        jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{transform: -mos-translateY(" + effects30height / 2 + "px);;} </style>").appendTo(".image-ultimate-hover-<?php echo $styleid; ?>");
                        jQuery("<style type='text/css'> .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{transform: -webkit-translateY(" + effects30height / 2 + "px);;} </style>").appendTo(".image-ultimate-hover-<?php echo $styleid; ?>");

                    }
                    effects30height<?php echo $styleid; ?>();
                });
            </script>
    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($value['hoverimage'])) {
            echo '<style>';
            echo '.image-ultimate-hover-' . $styleid . '-' . $value['id'] . ':hover .iheu-info,
                          .image-ultimate-hover-' . $styleid . '-' . $value['id'] . '.oxi-touch .iheu-info{
                               background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;
                           }';
            echo '</style>';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                    <div class="iheu-info" ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            <div class="iheu-data2">
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                        <div class="iheu-info" ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                <div class="iheu-data2">
                                                                    ' . $iheup . '
                                                                </div>
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                     <div class="iheu-info" ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                <div class="iheu-data2">
                                                                    ' . $iheup . '
                                                                    ' . $iheubuttontext . '
                                                                </div>
                                                            </div>
                                                     </div>';
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

        echo '<div class="' . $styledata[1] . '  image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . ' orphita-animation"  orphita-animation="' . $styledata[19] . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="oxilab-touchstart oxilab-touchstart image-ultimate-hover image-ultimate-hover-' . $styleid . ' image-ultimate-hover-' . $styleid . '-' . $value['id'] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general31($styleid, $styledata, $listdata, $userdata) {
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
                    z-index: 1;
                    opacity: 1;
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
                    opacity: 1;
                    -webkit-transition: all 0.8s ease-in-out;
                    -moz-transition: all 0.8s ease-in-out;
                    transition: all 0.8s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data h3,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data p,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data .iheu-button{
                    -webkit-transition: all 0.25s ease 0.25s;
                    -o-transition: all 0.25s ease 0.25s;
                    -moz-transition: all 0.25s ease 0.25s;
                    transition: all 0.25s ease 0.25s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    opacity: 1;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    opacity: 1;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 0;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                }
            </style>
    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                    <div class="iheu-info" ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link'])) {
            $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                        <div class="iheu-info" ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
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
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_general32($styleid, $styledata, $listdata, $userdata) {
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
                    top: <?php echo $styledata[29]; ?>px;
                    bottom: <?php echo $styledata[29]; ?>px;
                    left: <?php echo $styledata[29]; ?>px;
                    right: <?php echo $styledata[29]; ?>px;
                    width: calc(100% - <?php echo $styledata[29] * 2; ?>px);
                    height: calc(100% - <?php echo $styledata[29] * 2; ?>px);
                    text-align: center;
                    border: <?php echo $styledata[25]; ?>px solid <?php echo $styledata[27]; ?>;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table; 
                    z-index: 1;
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
                    -webkit-background-clip: padding-box;
                    background-clip: padding-box;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data h3,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data p,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data .iheu-button{
                    -webkit-transition: all 0.25s ease 0.25s;
                    -o-transition: all 0.25s ease 0.25s;
                    -moz-transition: all 0.25s ease 0.25s;
                    transition: all 0.25s ease 0.25s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    border:2px solid <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                    border:2px solid <?php echo $styledata[69]; ?>;
                }
    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                    -webkit-backface-visibility: visible;
                    backface-visibility: visible;
                }
            </style>
    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
        $dataanimation = '';
        if (!empty($styledata[19])) {
            $dataanimation = 'orphita-animation';
            $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
        }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                    <div class="iheu-info" ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                        <div class="iheu-info" ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                     <div class="iheu-info" ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
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
                                                            ' . $valuedata . '
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
