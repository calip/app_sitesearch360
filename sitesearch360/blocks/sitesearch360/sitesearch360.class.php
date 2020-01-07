<?php
namespace Block;
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
class sitesearch360 extends \SCHLIX\cmsBlock
{
	public function Run()
	{
        $custom_id = $this->config['str_css_id'];
        $display_header = $this->config['bool_display_header'];
        $app_search = new \App\Sitesearch360();			
        $this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
  	}
}
