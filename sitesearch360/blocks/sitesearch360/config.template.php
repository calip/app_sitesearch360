<?php
/**
 * sitesearch360 - Config
 * 
 * Site Search 360 is an ultra-speedy search solution that gives you and your users the most relevant results instantly.
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
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<p><?= ___('Example Configuration') ?></p>
<schlix-config:checkbox config-key="bool_display_header" label="<?= ___('Display Header') ?>" />
<schlix-config:textbox config-key="str_css_id" label="<?= ___('CSS ID') ?>"   />