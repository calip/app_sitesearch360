<?php
namespace Macro;
/**
 * sitesearch360 - macro class
 * 
 * Site Search 360 is a complete, feature-packed, and easy to install search engine, perfect for any website. Tailor the look, feel and functionality of your search bar, improve content visibility, and utilize powerful analytical tools to discover the intention behind every search.
 * 
 * @copyright 2019 calip
 *
 * @license MIT
 *
 * @package sitesearch360
 * @version 1.0
 * @author  Alip <asalip.putra@gmail.com>
 * @link    https://github.com/calip/app_sitesearch360
 */

class sitesearch360 extends \SCHLIX\cmsMacro {

    
    protected static $has_this_macro_been_called;
    /*
     * Run the macro
     * @global \SCHLIX\cmsHTMLPageHeader $HTMLHeader
     * @param array|string $data
     * @param object $caller_object
     * @param string $caller_function
     * @param array $extra_info
     * @return bool
     */
    public function Run(&$data, $caller_object, $caller_function, $extra_info = NULL) {
        global $HTMLHeader;
        
        // This is just an example macro
        switch ($caller_function)
        {
            case 'viewItemByID':   break;
            case 'viewCategoryByID':  break;
            case 'viewChildCategory':  break;
            case 'viewChildItem': break;
            case 'viewMainPage':  break;
            default:  break;
        }
	// Who's calling this?
        if (is_a($caller_object,'\\SCHLIX\\cmsApplication_Basic'))
        {
            $app_name  = $caller_object->getApplicationName();
            print_r($data); // what is the data that's passing through?
            $sanitized_xss_title = ___h($data['title']);
            $HTMLHeader->Add('<meta property="og:title" content="'.$sanitized_xss_title.'" />');
            // ....
            $this->appendAfterArticleOuput($data, 'Test: after article output');
            
        } else if (is_a($caller_object,'\\SCHLIX\\cmsBlock'))
        {
            // ....
            //print_r($data);
            
        }
        // This is an example of how to make sure that this macro is only loaded once
        // because macros get called repeatedly if there's a "repeater" list item
        if (static::$has_this_macro_been_called != 'yes')
        {
            $HTMLHeader->JAVASCRIPT_EXTERNAL('https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js');
            
            static::$has_this_macro_been_called = 'yes';
        }
        // Get the value from config key 'bool_checkbox_example'
        if ($this->config['bool_checkbox_example'] == 1)
        {
            $this->appendBeforeArticleOuput($data, 'Test: before article output. Checkbox enabled');
        }
        $app_name = '';
        
        // $result = $this->loadTemplateFile('view.macro', $local_variables);
        
        return true;
    }

}
            