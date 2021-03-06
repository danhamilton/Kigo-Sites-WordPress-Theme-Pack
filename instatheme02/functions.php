<?php
/**
 * Insta theme02 functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * WordPress
 * Child Theme : Yes
 * Theme: instatheme02
 * Version: instatheme 1.0 
 * Date: 04-17-2013
 */

/*
*
* Creating the widgets for the Common Widget Areas
*
*/
function childtheme_override_presetwidgets_commonareas() {
	if ( function_exists( 'getTextDataArray') )  {
			/* we get the array of textdata */
			$textDataArray = getTextDataArray();
		}
	/*for insta-header-left*/
	update_option( 'widget_bapi_hp_logo', array( 2 => array( 'title' => '' )) );
	/*for insta-top-fix*/
	update_option( 'widget_bapi_header', array( 2 => array( 'title' => '' )) );	
	update_option( 'widget_bapi_weather_widget', array( 2 => array( 'title' => $textDataArray["Weather"] )) );
	/*for insta-footer*/
	update_option( 'widget_bapi_footer', array( 2 => array( 'title' => '' )) );
	
}

/*
*
* Creating the widgets for the Home Page Widget Areas
* Widgets areas that are in front-page.php
*/
function childtheme_override_presetwidgets_hpareas() {
	/* we get the array of textdata */
	if ( function_exists( 'getTextDataArray') )  {
			/* we get the array of textdata */
			$textDataArray = getTextDataArray();
		}
  /*for insta-left-home*/
  update_option( 'widget_bapi_hp_search', array( 2 => array( 'title' => $textDataArray["Search"] )) );  
  update_option( 'widget_bapi_specials_widget', array( 2 => array( 'title' => $textDataArray["Special Offers"],'text' => 2, 'rowsize' => 2 )) );
  /*for insta-right-home*/
  update_option( 'widget_bapi_featured_properties', array( 2 => array( 'title' => $textDataArray["Featured Properties"], 'text' => 3, 'rowsize' => 3)) );
  update_option( 'widget_bapi_property_finders', array( 2 => array( 'title' => $textDataArray["Property Finders"],'text' => 4, 'rowsize' => 4)) );
  
}


/*
*
* setting the widgets for the Common Widget Areas
*
*/
function childtheme_override_setwidgets_commonareas($arrayOfSidebars) {
	$arrayOfSidebars['insta-top-fixed'][0] = 'bapi_header-2';
	$arrayOfSidebars['insta-top-fixed'][1] = 'bapi_weather_widget-2';
	$arrayOfSidebars['insta-header-left'][0] = 'bapi_hp_logo-2';	
	$arrayOfSidebars['insta-footer'][0] = 'bapi_footer-2';
	
	return $arrayOfSidebars;
}

/*
*
* Setting the widgets for the Home Page Widget Areas
* 
*/
function childtheme_override_setwidgets_hpareas($arrayOfSidebars) {
	$arrayOfSidebars['insta-left-home'][0] = 'bapi_hp_search-2';	
	$arrayOfSidebars['insta-bottom-left-home'][2] = 'bapi_specials_widget-2';	
	$arrayOfSidebars['insta-bottom-full-home'][0] = 'bapi_featured_properties-2';
	$arrayOfSidebars['insta-bottom-full-home'][1] = 'bapi_property_finders-2';
	return $arrayOfSidebars;
}

