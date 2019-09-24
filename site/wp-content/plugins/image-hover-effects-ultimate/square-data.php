<?php
function iheu_ultimate_oxi_shortcode_square20($styleid, $styledata, $listdata, $userdata) {
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
                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    background: <?php echo $styledata[13]; ?>;

                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 10;
                    -webkit-transition: -webkit-transform 0.4s;
                    -moz-transition: -moz-transform 0.4s;
                    transition: transform 0.4s;

                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    -webkit-transform: translateY(-50px) scale(0.5);
                    -moz-transform: translateY(-50px) scale(0.5);
                    -ms-transform: translateY(-50px) scale(0.5);
                    transform: translateY(-50px) scale(0.5);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                 .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    -webkit-transform: translateY(50px) scale(0.5);
                    -moz-transform: translateY(50px) scale(0.5);
                    -ms-transform: translateY(50px) scale(0.5);
                    transform: translateY(50px) scale(0.5);
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    left: 0;
                    width: 100%;
                    -webkit-backface-visibility: hidden;
                    -moz-backface-visibility: hidden;
                    backface-visibility: hidden;
                    -webkit-transition: -webkit-transform 0.4s, opacity 0.4s;
                    -moz-transition: -moz-transform 0.4s, opacity 0.4s;
                    transition: transform 0.4s, opacity 0.4s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    bottom:0px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    top:0px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    position: relative;
                    padding: <?php echo $styledata[11]; ?>px;
                    height: 100%;
                    width: 100%;
                    float: left;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    float:left;
                    display: inline-block;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    color: <?php echo $styledata[35]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    margin-bottom: 0;
                    float: left;
                    text-align: left;
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
                    position: absolute;
                    right: <?php echo $styledata[11]; ?>px;
                    bottom: <?php echo $styledata[11]; ?>px;
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
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }

                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
                    $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"  class="iheutabhover"> 
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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

                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
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

function iheu_ultimate_oxi_shortcode_square19($styleid, $styledata, $listdata, $userdata) {
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
                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transform-style: preserve-3d;
                    -moz-transform-style: preserve-3d;
                    transform-style: preserve-3d;
                    background: <?php echo $styledata[13]; ?>;

                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 10;
                    -webkit-transition: -webkit-transform 0.4s;
                    -moz-transition: -moz-transform 0.4s;
                    transition: transform 0.4s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    -webkit-transform: scale(0.4);
                    -moz-transform: scale(0.4);
                    -ms-transform: scale(0.4);
                    transform: scale(0.4);
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    left: 0;
                    height: 100%;
                    width: 100%;
                    opacity: 0;
                    -webkit-transform: scale(0.7);
                    -moz-transform: scale(0.7);
                    -ms-transform: scale(0.7);
                    transform: scale(0.7);
                    -webkit-backface-visibility: hidden;
                    -moz-backface-visibility: hidden;
                    backface-visibility: hidden;
                    -webkit-transition: -webkit-transform 0.4s, opacity 0.4s;
                    -moz-transition: -moz-transform 0.4s, opacity 0.4s;
                    transition: transform 0.4s, opacity 0.4s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    transform: scale(1);
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    position: relative;
                    padding: <?php echo $styledata[11]; ?>px;
                    height: 100%;
                    width: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    float:left;
                    display: inline-block;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    color: <?php echo $styledata[35]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    margin-bottom: 0;
                    float: left;
                    text-align: left;
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
                    position: absolute;
                    right: <?php echo $styledata[11]; ?>px;
                    bottom: <?php echo $styledata[11]; ?>px;
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
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }

                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
                    $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"  class="iheutabhover"> 
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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
                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
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
function iheu_ultimate_oxi_shortcode_square21($styleid, $styledata, $listdata, $userdata) {
      ?>
    <div class="image-ultimate-container image-ultimate-container-<?php echo $styleid; ?>"> 
        <div class="image-ultimate-row">
            <style>
                @media only screen and (max-width: 850px){
                   .image-ultimate-container-<?php echo $styleid; ?>{
                        overflow-x: visible !important;
                        overflow-y: visible  !important;
                    }
                }
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
                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    background: <?php echo $styledata[13]; ?>;
                    -webkit-transition: -webkit-transform 0.4s;
                    -moz-transition: -moz-transform 0.4s;
                    transition: transform 0.4s;

                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 10;
                    -webkit-transition: -webkit-transform 0.4s;
                    -moz-transition: -moz-transform 0.4s;
                    transition: transform 0.4s;

                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;

                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    -webkit-backface-visibility: hidden;
                    -moz-backface-visibility: hidden;
                    backface-visibility: hidden;
                    -webkit-transition: all 0.4s;
                    -moz-transition: all 0.4s;
                    transition: all 0.4s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    bottom:0px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    bottom:0px;
                    height: <?php echo $styledata[3]; ?>%;
                    box-shadow: 0 0 0 10px <?php echo $styledata[13]; ?>;

                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    top:0px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
                    top:0px;
                    height: <?php echo $styledata[3]; ?>%;
                    box-shadow: 0 0 0 10px <?php echo $styledata[13]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    position: absolute;
                    margin: <?php echo $styledata[11]; ?>px;
                    left: 0;
                    right: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info .iheu-data{
                    bottom: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info .iheu-data{
                    top: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    float:left;
                    display: inline-block;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    color: <?php echo $styledata[35]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    margin-bottom: 0;
                    float: left;
                    text-align: left;
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
                    right: 0;
                    position: absolute;

                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom a.iheu-button{
                    bottom: 0px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top a.iheu-button{
                    top: 0px;
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
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }

                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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
                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
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



function iheu_ultimate_oxi_shortcode_square18($styleid, $styledata, $listdata, $userdata) {
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
                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> .image-ultimate-map-absulate{
                    -webkit-perspective: 1700px;
                    -moz-perspective: 1700px;
                    perspective: 1700px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transform-style: preserve-3d;
                    -moz-transform-style: preserve-3d;
                    transform-style: preserve-3d;
                    background: <?php echo $styledata[13]; ?>;

                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
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
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img{
                    width: 100%;
                    float: left;
                    -webkit-transition: -webkit-transform 0.4s;
                    -moz-transition: -moz-transform 0.4s;
                    transition: transform 0.4s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img img{
                    -webkit-transform: translateX(25%);
                    -moz-transform: translateX(25%);
                    -ms-transform: translateX(25%);
                    transform: translateX(25%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img img{
                    -webkit-transform: translateX(-25%);
                    -moz-transform: translateX(-25%);
                    -ms-transform: translateX(-25%);
                    transform: translateX(-25%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    z-index:1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    position: absolute;
                    top: 0;
                    left: 0;
                    height: 100%;
                    width: 50%;
                    opacity: 0;
                    -webkit-backface-visibility: hidden;
                    -moz-backface-visibility: hidden;
                    backface-visibility: hidden;
                    -webkit-transform-origin: 0 0;
                    -moz-transform-origin: 0 0;
                    transform-origin: 0 0;
                    -webkit-transform: rotateY(-90deg);
                    -moz-transform: rotateY(-90deg);
                    transform: rotateY(-90deg);
                    -webkit-transition: -webkit-transform 0.4s, opacity 0.1s 0.3s;
                    -moz-transition: -moz-transform 0.4s, opacity 0.1s 0.3s;
                    transition: transform 0.4s, opacity 0.1s 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info{
                    opacity: 1;
                    -webkit-transform: rotateY(0deg);
                    -moz-transform: rotateY(0deg);
                    transform: rotateY(0deg);
                    -webkit-transition: -webkit-transform 0.4s, opacity 0.1s;
                    -moz-transition: -moz-transform 0.4s, opacity 0.1s;
                    transition: transform 0.4s, opacity 0.1s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    position: absolute;
                    top: 0;
                    right: 0;
                    height: 100%;
                    width: 50%;
                    opacity: 0;
                    -webkit-backface-visibility: hidden;
                    -moz-backface-visibility: hidden;
                    backface-visibility: hidden;
                    -webkit-transform-origin: 100% 0;
                    -moz-transform-origin: 100% 0;
                    transform-origin: 100% 0;
                    -webkit-transform: rotateY(90deg);
                    -moz-transform: rotateY(90deg);
                    transform: rotateY(90deg);
                    -webkit-transition: -webkit-transform 0.4s, opacity 0.1s 0.3s;
                    -moz-transition: -moz-transform 0.4s, opacity 0.1s 0.3s;
                    transition: transform 0.4s, opacity 0.1s 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                 .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
                    opacity: 1;
                    -webkit-transform: rotateY(0deg);
                    -moz-transform: rotateY(0deg);
                    transform: rotateY(0deg);
                    -webkit-transition: -webkit-transform 0.4s, opacity 0.1s;
                    -moz-transition: -moz-transform 0.4s, opacity 0.1s;
                    transition: transform 0.4s, opacity 0.1s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    position: relative;
                    padding: <?php echo $styledata[11]; ?>px;
                    height: 100%;
                    width: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    float:left;
                    text-align: left;
                    display: inline-block;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    color: <?php echo $styledata[35]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    margin-bottom: 0;
                    float: left;
                    text-align: left;
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
                    position: absolute;
                    right: <?php echo $styledata[11]; ?>px;
                    bottom: <?php echo $styledata[11]; ?>px;
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
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }

                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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
                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
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

function iheu_ultimate_oxi_shortcode_square17($styleid, $styledata, $listdata, $userdata) {
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
                    left: 0;
                    width: 100%;
                    height: auto;
                    -webkit-backface-visibility: hidden;
                    -moz-backface-visibility: hidden;
                    backface-visibility: hidden;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
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
                    -webkit-transition: -webkit-transform 0.4s;
                    -moz-transition: -moz-transform 0.4s;
                    transition: transform 0.4s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    -webkit-transform: translateY(50px);
                    -moz-transform: translateY(50px);
                    -ms-transform: translateY(50px);
                    transform: translateY(50px);
                    -webkit-transition: -webkit-transform 0.4s, opacity 0.1s;
                    -moz-transition: -moz-transform 0.4s, opacity 0.1s;
                    transition: transform 0.4s, opacity 0.1s;

                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    -webkit-transform: translateY(-50px);
                    -moz-transform: translateY(-50px);
                    -ms-transform: translateY(-50px);
                    transform: translateY(-50px);
                    -webkit-transition: -webkit-transform 0.4s, opacity 0.1s;
                    -moz-transition: -moz-transform 0.4s, opacity 0.1s;
                    transition: transform 0.4s, opacity 0.1s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    background: <?php echo $styledata[13]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    height: auto;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info{
                    top: 0;
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    transform: translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info{
                    bottom: 0;
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    transform: translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover.top_to_bottom .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{

                    -webkit-transform: translateY(0%);
                    -moz-transform: translateY(0%);
                    -ms-transform: translateY(0%);
                    transform: translateY(0%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover.bottom_to_top .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    bottom: 0;
                    -webkit-transform: translateY(0%);
                    -moz-transform: translateY(0%);
                    -ms-transform: translateY(0%);
                    transform: translateY(0%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    width: 100%;
                    float:left;
                    padding: <?php echo $styledata[11]; ?>px; 
                    position: relative;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    float:left;
                    display: inline-block;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    color: <?php echo $styledata[35]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    margin-bottom: 0;
                    float: left;
                    text-align: left;
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
                    position: absolute;
                    right: <?php echo $styledata[11]; ?>px;
                    top: <?php echo $styledata[11]; ?>px;
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
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }

                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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
                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
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

function iheu_ultimate_oxi_shortcode_square16($styleid, $styledata, $listdata, $userdata) {
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
                    left: 0;
                    width: 100%;
                    height: auto;
                    -webkit-backface-visibility: hidden;
                    -moz-backface-visibility: hidden;
                    backface-visibility: hidden;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{

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
                    z-index: 10;
                    -webkit-transition: -webkit-transform 0.4s;
                    -moz-transition: -moz-transform 0.4s;
                    transition: transform 0.4s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    -webkit-transform: translateY(<?php echo $styledata[3]; ?>px);
                    -moz-transform: translateY(<?php echo $styledata[3]; ?>px);
                    -ms-transform: translateY(<?php echo $styledata[3]; ?>px);
                    transform: translateY(<?php echo $styledata[3]; ?>px);
                    -webkit-transition: -webkit-transform 0.4s, opacity 0.1s;
                    -moz-transition: -moz-transform 0.4s, opacity 0.1s;
                    transition: transform 0.4s, opacity 0.1s;

                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    -webkit-transform: translateY(-<?php echo $styledata[3]; ?>px);
                    -moz-transform: translateY(-<?php echo $styledata[3]; ?>px);
                    -ms-transform: translateY(-<?php echo $styledata[3]; ?>px);
                    transform: translateY(-<?php echo $styledata[3]; ?>px);
                    -webkit-transition: -webkit-transform 0.4s, opacity 0.1s;
                    -moz-transition: -moz-transform 0.4s, opacity 0.1s;
                    transition: transform 0.4s, opacity 0.1s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    height: <?php echo $styledata[3]; ?>px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info{
                    top: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info{
                    bottom: 0
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    width: 100%;
                    float:left;
                    padding: <?php echo $styledata[11]; ?>px; 
                    position: relative;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    float:left;
                    display: inline-block;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    color: <?php echo $styledata[35]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    margin-bottom: 0;
                    float: left;
                    text-align: left;
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
                    position: absolute;
                    right: <?php echo $styledata[11]; ?>px;
                    top: <?php echo $styledata[11]; ?>px;
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
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }

                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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
                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
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

function iheu_ultimate_oxi_shortcode_square1($styleid, $styledata, $listdata, $userdata) {
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
                    -webkit-transform: rotate(0deg) scale(1);
                    -moz-transform: rotate(0deg) scale(1);
                    -ms-transform: rotate(0deg) scale(1);
                    -o-transform: rotate(0deg) scale(1);
                    transform: rotate(0deg) scale(1);
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    visibility: hidden;
                    -webkit-transition: all 0.5s 0.3s ease-in-out;
                    -moz-transition: all 0.5s 0.3s ease-in-out;
                    transition: all 0.35s 0.5s ease-in-out;
                    -webkit-transform: rotate(720deg) scale(0);
                    -moz-transform: rotate(720deg) scale(0);
                    -ms-transform: rotate(720deg) scale(0);
                    -o-transform: rotate(720deg) scale(0);
                    transform: rotate(720deg) scale(0);
                    opacity: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    <?php echo $styledata[15]; ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding: <?php echo $styledata[87]; ?>px <?php echo $styledata[11]; ?>px; 
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: <?php echo $styledata[89]; ?>px;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    width:100%;
                    float: left;
                    color: <?php echo $styledata[35]; ?>;
                    background-color: <?php echo $styledata[85]; ?>;
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
                    padding:0 <?php echo $styledata[11]; ?>px; 
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
                    display:-webkit-inline-box;
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
                    -webkit-transform: rotate(720deg) scale(0);
                    -moz-transform: rotate(720deg) scale(0);
                    -ms-transform: rotate(720deg) scale(0);
                    -o-transform: rotate(720deg) scale(0);
                    transform: rotate(720deg) scale(0);
                    opacity: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    visibility: visible;
                    opacity: 1;
                    -webkit-transform: rotate(0deg) scale(1);
                    -moz-transform: rotate(0deg) scale(1);
                    -ms-transform: rotate(0deg) scale(1);
                    -o-transform: rotate(0deg) scale(1);
                    transform: rotate(0deg) scale(1);
                }
            </style>
            <?php
            foreach ($listdata as $value) {
                $backgoundimage = '';
                $opennewtab = '';
                $iheuh3 = '';
                $iheup = '';
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }
                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
                    $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"  class="iheutabhover"> 
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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
                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
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

function iheu_ultimate_oxi_shortcode_square2($styleid, $styledata, $listdata, $userdata) {
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
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }

                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                    overflow: hidden;
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
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    <?php echo $styledata[15]; ?>
                    padding-bottom:  <?php echo $styledata[11]; ?>px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding: <?php echo $styledata[87]; ?>px <?php echo $styledata[11]; ?>px; 
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0px;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    width:100%;
                    float: left;
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
                    padding:0 <?php echo $styledata[11]; ?>px; 
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
                    display:-webkit-inline-box;
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
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    bottom:0;
                    min-height: 50px;
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    -webkit-transform: translateY(-50px);
                    -moz-transform: translateY(-50px);
                    -ms-transform: translateY(-50px);
                    -o-transform: translateY(-50px);
                    transform: translateY(-50px);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {

                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                    top:0;
                    min-height: 50px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    -webkit-transform: translateY(50px);
                    -moz-transform: translateY(50px);
                    -ms-transform: translateY(50px);
                    -o-transform: translateY(50px);
                    transform: translateY(50px);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
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
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }

                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
                    $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"  class="iheutabhover"> 
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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
                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[91] . '">
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

function iheu_ultimate_oxi_shortcode_square3($styleid, $styledata, $listdata, $userdata) {
  ?>
    <div class="iheb-preview-data" id="iheb-preview-data">
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
                    .image-ultimate-hover-<?php echo $styleid; ?> .mask1,
                    .image-ultimate-hover-<?php echo $styleid; ?> .mask2 {
                        background: <?php echo $styledata[13]; ?>;
                        opacity:0.4;
                        position: absolute;
                        width: 200%;
                        height: 200%;
                        -webkit-transition: all 0.35s ease-in-out;
                        -moz-transition: all 0.35s ease-in-out;
                        transition: all 0.35s ease-in-out;
                    }
                    .image-ultimate-hover-<?php echo $styleid; ?> .mask1 {
                        left: auto;
                        right: 0;
                        top: 0;
                        -webkit-transform: rotate(45deg) translateX(-50%);
                        -moz-transform: rotate(45deg) translateX(-50%);
                        -ms-transform: rotate(45deg) translateX(-50%);
                        -o-transform: rotate(45deg) translateX(-50%);
                        transform: rotate(45deg) translateX(-50%);
                        -webkit-transform-origin: 100% 0%;
                        -moz-transform-origin: 100% 0%;
                        -ms-transform-origin: 100% 0%;
                        -o-transform-origin: 100% 0%;
                        transform-origin: 100% 0%;
                    }
                    .image-ultimate-hover-<?php echo $styleid; ?> .mask2 {
                        top: auto;
                        bottom: 0;
                        left: 0;
                        -webkit-transform: rotate(45deg) translateX(50%);
                        -moz-transform: rotate(45deg) translateX(50%);
                        -ms-transform: rotate(45deg) translateX(50%);
                        -o-transform: rotate(45deg) translateX(50%);
                        transform: rotate(45deg) translateX(50%);
                        -webkit-transform-origin: 0% 100%;
                        -moz-transform-origin: 0% 100%;
                        -ms-transform-origin: 0% 100%;
                        -o-transform-origin: 0% 100%;
                        transform-origin: 0% 100%;
                    }
                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                        visibility: hidden;
                        -webkit-transition: all 0.35s ease-in-out 0.35s;
                        -moz-transition: all 0.35s ease-in-out 0.35s;
                        transition: all 0.35s ease-in-out 0.35s;
                    }
                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                        display: table-cell;
                        <?php echo $styledata[15]; ?>
                    }

                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .data-2{
                        background: <?php echo $styledata[13]; ?>;
                        width:100%;
                        float: left;
                        padding-bottom: <?php echo $styledata[11]; ?>px; 
                    }
                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                        font-size: <?php echo $styledata[33]; ?>px;
                        font-weight: <?php echo $styledata[39]; ?>;
                        padding: <?php echo $styledata[87]; ?>px <?php echo $styledata[11]; ?>px; 
                        margin-bottom: <?php echo $styledata[45]; ?>px;
                        margin-top: <?php echo $styledata[89]; ?>px;
                        line-height: 120%;
                        font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                        width:100%;
                        float: left;
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
                        width: 100%;
                        float:left;
                        line-height: 120%;
                        font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                        color: <?php echo $styledata[49]; ?>;
                        padding:0 <?php echo $styledata[11]; ?>px; 
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
                        display:-webkit-inline-box;
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

                    .image-ultimate-hover-<?php echo $styleid; ?>:hover .mask1,
                    .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .mask1{
                        -webkit-transform: rotate(45deg) translateX(0);
                        -moz-transform: rotate(45deg) translateX(0);
                        -ms-transform: rotate(45deg) translateX(0);
                        -o-transform: rotate(45deg) translateX(0);
                        transform: rotate(45deg) translateX(0);
                    }
                    .image-ultimate-hover-<?php echo $styleid; ?>:hover .mask2,
                    .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .mask2{
                        -webkit-transform: rotate(45deg) translateX(-0);
                        -moz-transform: rotate(45deg) translateX(-0);
                        -ms-transform: rotate(45deg) translateX(-0);
                        -o-transform: rotate(45deg) translateX(-0);
                        transform: rotate(45deg) translateX(-0);
                    }
                    .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                        visibility: visible;
                        -webkit-transform: translateX(-100%);
                        -moz-transform:translateX(-100%);
                        -ms-transform:translateX(-100%);
                        -o-transform: translateX(-100%);
                        transform:translateX(-100%);
                    }
                    .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                    .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info{
                        width: 100%;
                        height: 100%;
                        visibility: visible;
                        -webkit-transform: translateX(0);
                        -moz-transform:translateX(0);
                        -ms-transform:translateX(0);
                        -o-transform: translateX(0);
                        transform:translateX(0);
                    }
                    .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                        visibility: visible;
                        -webkit-transform: translateX(100%);
                        -moz-transform:translateX(100%);
                        -ms-transform:translateX(100%);
                        -o-transform: translateX(100%);
                        transform:translateX(100%);
                    }
                    .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                    .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
                        width: 100%;
                        height: 100%;
                        visibility: visible;
                        -webkit-transform: translateX(0);
                        -moz-transform:translateX(0);
                        -ms-transform:translateX(0);
                        -o-transform: translateX(0);
                        transform:translateX(0);
                    }
                    .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                        visibility: visible;
                        -webkit-transform: translateY(-100%);
                        -moz-transform:translateY(-100%);
                        -ms-transform:translateY(-100%);
                        -o-transform: translateY(-100%);
                        transform:translateY(-100%);
                    }
                    .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                    .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
                        width: 100%;
                        height: 100%;
                        visibility: visible;
                        -webkit-transform: translateX(0);
                        -moz-transform:translateX(0);
                        -ms-transform:translateX(0);
                        -o-transform: translateX(0);
                        transform:translateX(0);
                    }
                    .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                        visibility: visible;
                        -webkit-transform: translateY(100%);
                        -moz-transform:translateY(100%);
                        -ms-transform:translateY(100%);
                        -o-transform: translateY(100%);
                        transform:translateY(100%);
                    }
                    .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                    .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                        width: 100%;
                        height: 100%;
                        visibility: visible;
                        -webkit-transform: translateX(0);
                        -moz-transform:translateX(0);
                        -ms-transform:translateX(0);
                        -o-transform: translateX(0);
                        transform:translateX(0);
                    }
                </style>
                <?php
                foreach ($listdata as $value) {
                    $backgoundimage = '';
                $opennewtab = '';
                $iheuh3 = '';
                $iheup = '';
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                    if ($styledata[17] == '_blank') {
                        $opennewtab = 'target="_blank"';
                    }
                    if ($value['title'] != '') {
                        $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                    }
                    if ($value['files'] != '') {
                        $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                    }
                    if ($value['buttom_text'] != '') {
                        $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                    }

                    if ($value['link'] == '') {
                        $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                    <div class="mask1"></div>
                                                    <div class="mask2"></div>
                                                    <div class="iheu-info" ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                           <div class="data-2">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                                </div>
                                                        </div>
                                                    </div>';
                    }
                    if ($value['link'] != '' && $value['buttom_text'] == '') {
                        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                        <div class="mask1"></div>
                                                        <div class="mask2"></div>
                                                        <div class="iheu-info" ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                             <div class="data-2">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div> </div>
                                                        </div>
                                                     </a>';
                    }
                    if ($value['link'] != '' && $value['buttom_text'] != '') {
                        $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                     <div class="mask1"></div>
                                                     <div class="mask2"></div>
                                                     <div class="iheu-info" ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                             <div class="data-2">
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
                    echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[91] . '">
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
    </div>
    <?php
}

function iheu_ultimate_oxi_shortcode_square4($styleid, $styledata, $listdata, $userdata) {
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
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    padding-bottom: <?php echo $styledata[11]; ?>px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    <?php echo $styledata[15]; ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding: <?php echo $styledata[87]; ?>px <?php echo $styledata[11]; ?>px; 
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: <?php echo $styledata[89]; ?>px;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    width:100%;
                    float: left;
                    color: <?php echo $styledata[35]; ?>;
                    background-color: <?php echo $styledata[85]; ?>;

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
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                    padding:0 <?php echo $styledata[11]; ?>px; 
                    width: 100%;
                    float: left;
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
                    display:-webkit-inline-box;
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
                    -webkit-transform: scale(0);
                    -moz-transform: scale(0);
                    -ms-transform: scale(0);
                    -o-transform: scale(0);
                    transform: scale(0);
                    -webkit-transition-delay: 0;
                    -moz-transition-delay: 0;
                    transition-delay: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
                    visibility: visible;
                    opacity: 1;
                    -webkit-transform: scale(1) rotate(0deg);
                    -moz-transform: scale(1) rotate(0deg);
                    -ms-transform: scale(1) rotate(0deg);
                    -o-transform: scale(1) rotate(0deg);
                    transform: scale(1) rotate(0deg);
                    -webkit-transition-delay: 0.3s;
                    -moz-transition-delay: 0.3s;
                    transition-delay: 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    -webkit-transform: scale(0) rotate(-180deg);
                    -moz-transform: scale(0) rotate(-180deg);
                    -ms-transform: scale(0) rotate(-180deg);
                    -o-transform: scale(0) rotate(-180deg);
                    transform: scale(0) rotate(-180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    -webkit-transform: scale(0) rotate(180deg);
                    -moz-transform: scale(0) rotate(180deg);
                    -ms-transform: scale(0) rotate(180deg);
                    -o-transform: scale(0) rotate(180deg);
                    transform: scale(0) rotate(180deg);
                }
            </style>
            <?php
            foreach ($listdata as $value) {
                $backgoundimage = '';
                $opennewtab = '';
                $iheuh3 = '';
                $iheup = '';
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }
                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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

                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[91] . '">
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

function iheu_ultimate_oxi_shortcode_square5($styleid, $styledata, $listdata, $userdata) {
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
                    opacity: 1;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    <?php echo $styledata[15]; ?>
                    padding-bottom:<?php echo $styledata[11]; ?>px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding: <?php echo $styledata[87]; ?>px <?php echo $styledata[11]; ?>px; 
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: <?php echo $styledata[89]; ?>px;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    width:100%;
                    float: left;
                    color: <?php echo $styledata[35]; ?>;
                    background-color: <?php echo $styledata[85]; ?>;

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
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                    padding:0 <?php echo $styledata[11]; ?>px; 
                    width: 100%;
                    float: left;
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
                    display:-webkit-inline-box;
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
                    -webkit-transform: scale(1.3);
                    -moz-transform: scale(1.3);
                    -ms-transform: scale(1.3);
                    -o-transform: scale(1.3);
                    transform: scale(1.3);
                }
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
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }

                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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
                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[91] . '">
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

function iheu_ultimate_oxi_shortcode_square6($styleid, $styledata, $listdata, $userdata) {
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
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    z-index: 20;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    visibility: hidden;
                    opacity: 0;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    <?php echo $styledata[15]; ?>
                    padding-bottom:<?php echo $styledata[11]; ?>px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    background: <?php echo $styledata[85]; ?>;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding: <?php echo $styledata[87]; ?>px <?php echo $styledata[11]; ?>px; 
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: <?php echo $styledata[89]; ?>px;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    width:100%;
                    float: left;
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
                    width: 100%;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                    padding:0 <?php echo $styledata[11]; ?>px; 
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
                    display:-webkit-inline-box;
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
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_up .iheu-img {
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_up .iheu-info {
                    -webkit-transform: scale(0);
                    -moz-transform: scale(0);
                    -ms-transform: scale(0);
                    -o-transform: scale(0);
                    transform: scale(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_up:hover .iheu-img,
                 .image-ultimate-hover-<?php echo $styleid; ?>.scale_up.iheu-touch .iheu-img{
                    -webkit-transform: scale(5);
                    -moz-transform: scale(5);
                    -ms-transform: scale(5);
                    -o-transform: scale(5);
                    transform: scale(5);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_up:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_up.iheu-touch .iheu-info{
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down .iheu-img {
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down .iheu-info {
                    -webkit-transform: scale(5);
                    -moz-transform: scale(5);
                    -ms-transform: scale(5);
                    -o-transform: scale(5);
                    transform: scale(5);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down.iheu-touch .iheu-img{
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down.iheu-touch .iheu-info{
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
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }

                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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

                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[91] . '">
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

function iheu_ultimate_oxi_shortcode_square7($styleid, $styledata, $listdata, $userdata) {
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
                    z-index: 11;
                    -webkit-transition: all 0.5s ease-in-out;
                    -moz-transition: all 0.5s ease-in-out;
                    transition: all 0.5s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info-2{
                    z-index: 0;
                    width: 100%;
                    top:0;
                    left:0;
                    height: 100%;
                    position:absolute;
                    -webkit-transform-style: preserve-3d;
                    -moz-transform-style: preserve-3d;
                    -ms-transform-style: preserve-3d;
                    -o-transform-style: preserve-3d;
                    transform-style: preserve-3d;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 1;
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    <?php echo $styledata[15]; ?>
                    padding-bottom: <?php echo $styledata[11]; ?>px;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    background: <?php echo $styledata[85]; ?>;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding: <?php echo $styledata[87]; ?>px <?php echo $styledata[11]; ?>px; 
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: <?php echo $styledata[89]; ?>px;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    width:100%;
                    float: left;
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
                    width: 100%;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                    padding:0 <?php echo $styledata[11]; ?>px; 
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
                    display:-webkit-inline-box;
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
            </style>

            <?php
            foreach ($listdata as $value) {
$backgoundimage = '';
                $opennewtab = '';
                $iheuh3 = '';
                $iheup = '';
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }

                if ($value['link'] == '') {
                    $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                   <div class="iheu-info-2">  <div class="iheu-info" ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                        
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                               
                                                        </div></div>
                                                    </div>';
                }
                if ($value['link'] != '' && $value['buttom_text'] == '') {
                    $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info-2"><div class="iheu-info" ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div></div>
                                                     </a>';
                }
                if ($value['link'] != '' && $value['buttom_text'] != '') {
                    $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info-2"><div class="iheu-info" ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div></div>
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
                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[91] . '">
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

function iheu_ultimate_oxi_shortcode_square8($styleid, $styledata, $listdata, $userdata) {
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
                    overflow: hidden;
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
                    visibility: hidden;
                    opacity: 0;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    <?php echo $styledata[15]; ?>
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    background: <?php echo $styledata[85]; ?>;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding: <?php echo $styledata[87]; ?>px <?php echo $styledata[11]; ?>px; 
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: <?php echo $styledata[89]; ?>px;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    width:100%;
                    float: left;
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
                    width: 100%;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                    padding:0 <?php echo $styledata[11]; ?>px; 
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
                    display:-webkit-inline-box;
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
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    -webkit-transform: translateX(100%);
                    -moz-transform: translateX(100%);
                    -ms-transform: translateX(100%);
                    -o-transform: translateX(100%);
                    transform: translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info{
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
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img{
                    -webkit-transform: translateX(-100%);
                    -moz-transform: translateX(-100%);
                    -ms-transform: translateX(-100%);
                    -o-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
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
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
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

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
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
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }

                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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
                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[91] . '">
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

function iheu_ultimate_oxi_shortcode_square9($styleid, $styledata, $listdata, $userdata) {
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
                    overflow: hidden;
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
                    -webkit-transition: all 0.35s ease 0.2s;
                    -moz-transition: all 0.35s ease 0.2s;
                    transition: all 0.35s ease 0.2s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    <?php echo $styledata[15]; ?>
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    background: <?php echo $styledata[85]; ?>;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding: <?php echo $styledata[87]; ?>px <?php echo $styledata[11]; ?>px; 
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: <?php echo $styledata[89]; ?>px;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    width:100%;
                    float: left;
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
                    width: 100%;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                    padding:0 <?php echo $styledata[11]; ?>px; 
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
                    display:-webkit-inline-box;
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
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
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
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
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
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }

                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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
                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[91] . '">
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

function iheu_ultimate_oxi_shortcode_square10($styleid, $styledata, $listdata, $userdata) {
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
                    overflow: hidden;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                    -webkit-transition: all 0.35s ease-in;
                    -moz-transition: all 0.35s ease-in;
                    transition: all 0.35s ease-in;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    visibility: hidden;
                    opacity: 0;
                    -webkit-transition: all 0.35s ease-in;
                    -moz-transition: all 0.35s ease-in;
                    transition: all 0.35s ease-in;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    <?php echo $styledata[15]; ?>
                    padding-bottom: <?php echo $styledata[11]; ?>px;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    background: <?php echo $styledata[85]; ?>;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding: <?php echo $styledata[87]; ?>px <?php echo $styledata[11]; ?>px; 
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: <?php echo $styledata[89]; ?>px;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    width:100%;
                    float: left;
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
                    padding:0 <?php echo $styledata[11]; ?>px; 
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
                    display:-webkit-inline-box;
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
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    -webkit-transform: translate(-460px, -100px) rotate(-180deg);
                    -moz-transform: translate(-460px, -100px) rotate(-180deg);
                    -ms-transform: translate(-460px, -100px) rotate(-180deg);
                    -o-transform: translate(-460px, -100px) rotate(-180deg);
                    transform: translate(-460px, -100px) rotate(-180deg);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info{
                    -webkit-transform: translate(0px, 0px);
                    -moz-transform: translate(0px, 0px);
                    -ms-transform: translate(0px, 0px);
                    -o-transform: translate(0px, 0px);
                    transform: translate(0px, 0px);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    -webkit-transform: translate(460px, -100px) rotate(180deg);
                    -moz-transform: translate(460px, -100px) rotate(180deg);
                    -ms-transform: translate(460px, -100px) rotate(180deg);
                    -o-transform: translate(460px, -100px) rotate(180deg);
                    transform: translate(460px, -100px) rotate(180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
                    -webkit-transform: translate(0px, 0px);
                    -moz-transform: translate(0px, 0px);
                    -ms-transform: translate(0px, 0px);
                    -o-transform: translate(0px, 0px);
                    transform: translate(0px, 0px);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    -webkit-transform: translate(-265px, -145px) rotate(-45deg);
                    -moz-transform: translate(-265px, -145px) rotate(-45deg);
                    -ms-transform: translate(-265px, -145px) rotate(-45deg);
                    -o-transform: translate(-265px, -145px) rotate(-45deg);
                    transform: translate(-265px, -145px) rotate(-45deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
                    -webkit-transform: translate(0px, 0px);
                    -moz-transform: translate(0px, 0px);
                    -ms-transform: translate(0px, 0px);
                    -o-transform: translate(0px, 0px);
                    transform: translate(0px, 0px);
                    -webkit-transition-delay: 0.2s;
                    -moz-transition-delay: 0.2s;
                    transition-delay: 0.2s;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    -webkit-transform: translate(265px, 145px) rotate(45deg);
                    -moz-transform: translate(265px, 145px) rotate(45deg);
                    -ms-transform: translate(265px, 145px) rotate(45deg);
                    -o-transform: translate(265px, 145px) rotate(45deg);
                    transform: translate(265px, 145px) rotate(45deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    -webkit-transform: translate(0px, 0px);
                    -moz-transform: translate(0px, 0px);
                    -ms-transform: translate(0px, 0px);
                    -o-transform: translate(0px, 0px);
                    transform: translate(0px, 0px);
                    -webkit-transition-delay: 0.2s;
                    -moz-transition-delay: 0.2s;
                    transition-delay: 0.2s;
                }
            </style>
            <?php
            foreach ($listdata as $value) {
                $backgoundimage = '';
                $opennewtab = '';
                $iheuh3 = '';
                $iheup = '';
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }
                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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
                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[91] . '">
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

function iheu_ultimate_oxi_shortcode_square11($styleid, $styledata, $listdata, $userdata) {
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
                    overflow: hidden;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    visibility: hidden;
                    visibility: hidden;
                    opacity: 0;
                    pointer-events: none;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    <?php echo $styledata[15]; ?>
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    background: <?php echo $styledata[85]; ?>;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding: <?php echo $styledata[87]; ?>px <?php echo $styledata[11]; ?>px; 
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: <?php echo $styledata[89]; ?>px;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    width:100%;
                    float: left;
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
                    width: 100%;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                    padding:0 <?php echo $styledata[11]; ?>px; 
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
                    display:-webkit-inline-box;
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
                    -webkit-transform: scale(1.2);
                    -moz-transform: scale(1.2);
                    -ms-transform: scale(1.2);
                    -o-transform: scale(1.2);
                    transform: scale(1.2);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    visibility: visible;
                    opacity: 1;
                    pointer-events: auto;
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
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
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
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
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
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }

                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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

                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[91] . '">
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

function iheu_ultimate_oxi_shortcode_square12($styleid, $styledata, $listdata, $userdata) {
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
                    visibility: hidden;
                    opacity: 0;
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
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    background: <?php echo $styledata[85]; ?>;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding: <?php echo $styledata[87]; ?>px <?php echo $styledata[11]; ?>px; 
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: <?php echo $styledata[89]; ?>px;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    width:100%;
                    float: left;
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
                    width: 100%;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                    padding:0 <?php echo $styledata[11]; ?>px; 
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
                    display:-webkit-inline-box;
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
                    pointer-events: auto;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
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
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }
                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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
                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[91] . '">
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

function iheu_ultimate_oxi_shortcode_square13($styleid, $styledata, $listdata, $userdata) {
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
                .image-ultimate-hover-<?php echo $styleid; ?> {
                    overflow: hidden;
                    -webkit-perspective: 900px;
                    -moz-perspective: 900px;
                    perspective: 900px;
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
                    -webkit-transition: all 0.35s ease-in-out 0.3s;
                    -moz-transition: all 0.35s ease-in-out 0.3s;
                    transition: all 0.35s ease-in-out 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    visibility: visible;
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    <?php echo $styledata[15]; ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    background: <?php echo $styledata[85]; ?>;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding: <?php echo $styledata[87]; ?>px <?php echo $styledata[11]; ?>px; 
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: <?php echo $styledata[89]; ?>px;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    width:100%;
                    float: left;
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
                    width: 100%;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                    padding:0 <?php echo $styledata[11]; ?>px; 
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
                    display:-webkit-inline-box;
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
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }
                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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
                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[91] . '">
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

function iheu_ultimate_oxi_shortcode_square14($styleid, $styledata, $listdata, $userdata) {
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
                    overflow:hidden;
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
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                }
                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
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
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 1;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info .iheu-data,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info .iheu-data{
                    display: block;
                    width:100%;
                    float:left;
                    padding: <?php echo $styledata[11]; ?>px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info .iheu-data,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info .iheu-data{
                    padding: <?php echo $styledata[11]; ?>px;
                    display: table-cell;
                    <?php echo $styledata[15]; ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding: <?php echo $styledata[87]; ?>px 0; 
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0px;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    width:100%;
                    float: left;
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
                    display:-webkit-inline-box;
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
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    left:0;
                    display: table;
                    width: 50%;
                    height:100%;
                    -webkit-transform: translateX(-100%);
                    -moz-transform: translateX(-100%);
                    -ms-transform: translateX(-100%);
                    -o-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    -webkit-transform: translateX(50px);
                    -moz-transform: translateX(50px);
                    -ms-transform: translateX(50px);
                    -o-transform: translateX(50px);
                    transform: translateX(50px);
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
                    right:0;
                    display: table;
                    width: 50%;
                    height:100%;
                    -webkit-transform: translateX(100%);
                    -moz-transform: translateX(100%);
                    -ms-transform: translateX(100%);
                    -o-transform: translateX(100%);
                    transform: translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img{
                    -webkit-transform: translateX(-50px);
                    -moz-transform: translateX(-50px);
                    -ms-transform: translateX(-50px);
                    -o-transform: translateX(-50px);
                    transform: translateX(-50px);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    bottom:0;
                    height: auto;
                    width: 100%;
                    min-height: 60px;
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    -webkit-transform: translateY(-50px);
                    -moz-transform: translateY(-50px);
                    -ms-transform: translateY(-50px);
                    -o-transform: translateY(-50px);
                    transform: translateY(-50px);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                    width: 100%;
                    top: 0;
                    height: auto;
                    min-height: 60px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    -webkit-transform: translateY(50px);
                    -moz-transform: translateY(50px);
                    -ms-transform: translateY(50px);
                    -o-transform: translateY(50px);
                    transform: translateY(50px);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
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
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }
                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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
                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[91] . '">
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

function iheu_ultimate_oxi_shortcode_square15($styleid, $styledata, $listdata, $userdata) {
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
                    -webkit-transform-style: preserve-3d;
                    -moz-transform-style: preserve-3d;
                    transform-style: preserve-3d;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    overflow: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                    overflow: hidden;
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
                    -webkit-perspective: 1700px;
                    -moz-perspective: 1700px;
                    perspective: 1700px;
                    -webkit-perspective-origin: 0 50%;
                    -moz-perspective-origin: 0 50%;
                    perspective-origin: 0 50%;
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
                    -webkit-transition: -webkit-transform 0.4s;
                    -moz-transition: -moz-transform 0.4s;
                    transition: transform 0.4s;
                    overflow:hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    background: <?php echo $styledata[13]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    height: 100%;
                    width: 50%;
                    opacity: 0;
                    -webkit-backface-visibility: hidden;
                    -moz-backface-visibility: hidden;
                    backface-visibility: hidden;
                    -webkit-transform-origin: 0 0;
                    -moz-transform-origin: 0 0;
                    transform-origin: 0 0;
                    -webkit-transform: rotateY(-90deg);
                    -moz-transform: rotateY(-90deg);
                    transform: rotateY(-90deg);
                    -webkit-transition: -webkit-transform 0.4s, opacity 0.1s 0.3s;
                    -moz-transition: -moz-transform 0.4s, opacity 0.1s 0.3s;
                    transition: transform 0.4s, opacity 0.1s 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    height: 100%;
                    width: 50%;
                    opacity: 0;
                    left:auto;
                    -webkit-backface-visibility: hidden;
                    -moz-backface-visibility: hidden;
                    backface-visibility: hidden;
                    -webkit-transform-origin: 100% 0;
                    -moz-transform-origin: 100% 0;
                    transform-origin: 100% 0;
                    -webkit-transform: rotateY(90deg);
                    -moz-transform: rotateY(90deg);
                    transform: rotateY(90deg);
                    -webkit-transition: -webkit-transform 0.4s, opacity 0.1s 0.3s;
                    -moz-transition: -moz-transform 0.4s, opacity 0.1s 0.3s;
                    transition: transform 0.4s, opacity 0.1s 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    min-height: 50%;
                    width: 100%;
                    opacity: 0;
                    bottom: auto;
                    -webkit-backface-visibility: hidden;
                    -moz-backface-visibility: hidden;
                    backface-visibility: hidden;
                    -webkit-transform-origin: 0 0;
                    -moz-transform-origin: 0 0;
                    transform-origin: 0 0;
                    -webkit-transform: rotateX(90deg);
                    -moz-transform: rotateX(90deg);
                    transform: rotateX(90deg);
                    -webkit-transition: -webkit-transform 0.4s, opacity 0.1s 0.3s;
                    -moz-transition: -moz-transform 0.4s, opacity 0.1s 0.3s;
                    transition: transform 0.4s, opacity 0.1s 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    min-height: 50%;
                    width: 100%;
                    opacity: 0;
                    top:auto;
                    bottom: 0;
                    -webkit-backface-visibility: hidden;
                    -moz-backface-visibility: hidden;
                    backface-visibility: hidden;
                    -webkit-transform-origin: 100% 100%;
                    -moz-transform-origin: 100% 100%;
                    transform-origin: 100% 100%;
                    -webkit-transform: rotateX(-90deg);
                    -moz-transform: rotateX(-90deg);
                    transform: rotateX(-90deg);
                    -webkit-transition: -webkit-transform 0.4s, opacity 0.1s 0.3s;
                    -moz-transition: -moz-transform 0.4s, opacity 0.1s 0.3s;
                    transition: transform 0.4s, opacity 0.1s 0.3s;
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
                    width: 100%;
                    float: left;
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
                    display:-webkit-inline-box;
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

                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img img{
                    -webkit-transform: translateX(25%);
                    -moz-transform: translateX(25%);
                    -ms-transform: translateX(25%);
                    transform: translateX(25%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img img{
                    -webkit-transform: translateX(-25%);
                    -moz-transform: translateX(-25%);
                    -ms-transform: translateX(-25%);
                    transform: translateX(-25%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img img{
                    -webkit-transform: translateY(25%);
                    -moz-transform: translateY(25%);
                    -ms-transform: translateY(25%);
                    transform: translateY(25%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img img{
                    -webkit-transform: translateY(-25%);
                    -moz-transform: translateY(-25%);
                    -ms-transform: translateY(-25%);
                    transform: translateY(-25%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
                    opacity: 1;
                    -webkit-transform: rotateY(0deg);
                    -moz-transform: rotateY(0deg);
                    transform: rotateY(0deg);
                    -webkit-transition: -webkit-transform 0.4s, opacity ;
                    -moz-transition: -moz-transform 0.4s, opacity;
                    transition: transform 0.4s, opacity;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    opacity: 1;
                    -webkit-transform: rotateY(0deg);
                    -moz-transform: rotateY(0deg);
                    transform: rotateY(0deg);
                    -webkit-transition: -webkit-transform 0.4s, opacity ;
                    -moz-transition: -moz-transform 0.4s, opacity;
                    transition: transform 0.4s, opacity;
                }
            </style>
            <?php
            foreach ($listdata as $value) {
                $backgoundimage = '';
                $opennewtab = '';
                $iheuh3 = '';
                $iheup = '';
                $iheubuttontext = '';$dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'orphita-animation';
                    $dataavanimation = 'orphita-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['title'] != '') {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if ($value['files'] != '') {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if ($value['buttom_text'] != '') {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }
                if ($value['link'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] == '') {
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
                if ($value['link'] != '' && $value['buttom_text'] != '') {
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
                echo '<div '.$dataavanimation.' class="' . $styledata[1] . ' '.$dataanimation.' '.$adminheading.' image-ultimate-hover-animation-'.$styleid.' image-ultimate-hover-padding-' . $styleid . '">
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
