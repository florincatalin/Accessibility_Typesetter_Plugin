<?php
defined('is_running') or die('Not an entry point...');

class Accessibility{

  /**
   * Typesetter action hook
   */
  public static function GetHead(){
    global $page, $addonRelativeCode;
	$page->head .= '<link rel="stylesheet" href="' . $addonRelativeCode . '/css/accessibility.css">';
	$page->head .= '<script type="text/javascript" src="'.$addonRelativeCode.'/js/accessibility.js"></script>';

		//html contents of the page
echo  '<div class="static">';

echo  '<span>';
echo    '<input type="checkbox" id="grayscale" value="a11y-contrast">';
echo    '<label for="grayscale"><img src="' . $addonRelativeCode . '/img/contrast.png" width="32" height="32" /></label>';  
echo  '</span>';

echo  '<span>';
echo    '<input type="checkbox" id="large-text" value="a11y-large-text">';
echo    '<label for="large-text"><img src="' . $addonRelativeCode . '/img/font.png" width="32" height="32" /></label>';
echo  '</span>';
  
echo  '</div>';
  }
}

