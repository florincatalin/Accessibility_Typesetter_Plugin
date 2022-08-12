<?php
defined('is_running') or die('Not an entry point...');

class wai {

  /*  Typesetter action hook */
  public static function GetHead(){
    global $page, $addonRelativeCode;
	$page->head .= '<link rel="stylesheet" href="' . $addonRelativeCode . '/css/wai.css">';
	$page->head .= '<script type="text/javascript" defer src="'.$addonRelativeCode.'/js/wai.js"></script>';

		//html contents of the page
echo  '<input type="image" alt="accesibilizare" title="accesibilizare" src="' . $addonRelativeCode . '/img/body.png" width="48" height="48" id="accico" onclick="iconoshow();" />';

echo  '<div id="acc" class="static">';

echo  ' <div class="acm">';
echo    '<input type="image" alt="închide meniul" title="închide meniul" src="' . $addonRelativeCode . '/img/close.png" width="32" height="32" id="dismiss" value="a11y-dismiss" onclick="iconohide();" />';
echo  '</div>';

echo  ' <div class="acm">';
echo    '<input type="image" alt="contrast mare" title="contrast mare" src="' . $addonRelativeCode . '/img/contrast.png"  width="32" height="32" id="contrast" value="a11y-contrast" />';
echo  '</div>';

echo  '<div class="acm">';
echo    '<input type="image" alt="font mare" title="font mare" src="' . $addonRelativeCode . '/img/font.png" width="32" height="32" id="large-text" value="a11y-large-text" />';
echo  '</div>';

echo  ' <div class="acm">';
echo    '<input type="image" alt="alb-negru" title="alb-negru" src="' . $addonRelativeCode . '/img/blackwhite.png" width="32" height="32" id="black-white" value="a11y-black-white" />';
echo  '</div>';

echo  ' <div class="acm">';
echo    '<input type="image" alt="oprește animațiile CSS" title="oprește animațiile CSS" src="' . $addonRelativeCode . '/img/pause.png" width="32" height="32" id="notransition" value="a11y-notransition" />';
echo  '</div>';
  
echo  '</div>';
  }
}
