<?php
/**
 * sitesearch360 - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
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
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<div class="sitesearch360box" <?php if ($custom_id) echo 'id="'.$custom_id.'"';?>>
<?php if ($display_header): ?>
<h3><?= ___('Search'); ?></h3>
<?php endif; ?>
  <form action="<?= $app_search->createFriendlyURL() ?>" method="get">

            <div class="nice-search">
                <x-ui:input-group>
                    <x-ui:textbox placeholder="<?= ___('Search'); ?>" name="ss360Query" id="sitesearch360-searchBox" value="<?= ___h(urldecode(fget_string_noquotes_notags('keyword', 255))); ?>" />
                    <x-ui:input-addon-button>
                        <x-ui:button-info type="button"><i class="fa  fa-search"></i></x-ui:button-info>
                    </x-ui:input-addon-button>
                </x-ui:input-group>
            </div>
      
  </form>
</div>