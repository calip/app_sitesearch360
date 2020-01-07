<?php
namespace App;

/**
 * sitesearch360 - Admin class
 * 
 * Site Search 360 is an ultra-speedy search solution that gives you and your users the most relevant results instantly.
 *
 * @copyright 2019 calip
 *
 * @license MIT
 *
 * @version 1.0
 * @package sitesearch360
 * @author  Alip <asalip.putra@gmail.com>
 * @link    https://github.com/calip/app_sitesearch360
 */
class sitesearch360_Admin extends \SCHLIX\cmsAdmin_Basic {

    public function __construct() {
        // Data: Item
        $methods = array('standard_main_app' => 'Main Page',);

        parent::__construct('basic', $methods);      
    }

}
