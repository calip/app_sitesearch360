<?php
namespace App;
/**
 * sitesearch360 - Main Class
 * 
 * Site Search 360 is an ultra-speedy search solution that gives you and your users the most relevant results instantly.
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
class sitesearch360 extends \SCHLIX\cmsApplication_Basic {


    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct("sitesearch360");
        /*
         * You can modify this 
        $this->has_versioning = false; // uncomment if this app wants versioning enabled
        $this->disable_frontend_runtime = false; //  Uncomment if this is a backend only app
         */
    }
        

    /**
     * View Main Page
     */
    public function viewMainPage() {
        global $HTMLHeader;
        global $__sitesearch360_loaded;
 
        if (!$__sitesearch360_loaded)
        {
            $sitesearch360_title = $this->getConfig('str_sitesearch360_title');
            $sitesearch360_id = $this->getConfig('str_sitesearch360_id', true);
            $sitesearch360_layout = $this->getConfig('int_option_layout', true);
            $sitesearch360_result_number = $this->getConfig('int_result_number');
            $enable_searchbox = $this->config['bool_enable_searchbox'];
            $enable_errors = ((bool)$this->config['bool_enable_errors']) ? "true" : "false";
            $enable_suggestions = ((bool)$this->config['bool_enable_suggestions']) ? "true" : "false";

            $layout_content = "";
            if ($sitesearch360_layout == 2) {
                $layout_content = ".ss360-search-results-block";
            }

            $__googlecse_loaded = true;
            $local_variables = compact(array_keys(get_defined_vars()));
            $this->loadTemplateFile('view.main', $local_variables);
        }
        return true;
    }
    
    //_______________________________________________________________________________________________________________//
    public function Run($command) {
        switch ($command['action']) {
            case 'main': $this->viewMainPage($command['pg']);
                break;

            default: return parent::Run($command);
        }
        return RETURN_FULLPAGE;
    }

}

?>