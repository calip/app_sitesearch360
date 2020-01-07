<?php
/**
 * sitesearch360 - Main Admin view
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
<!-- {top_menu} -->
<x-ui:schlix-data-explorer-blank data-schlix-controller="SCHLIX.CMS.sitesearch360AdminController" >

    <x-ui:schlix-explorer-toolbar>
        <x-ui:schlix-explorer-toolbar-menu data-position="left">                
            <!-- {config} -->
            <x-ui:schlix-explorer-menu-command data-schlix-command="config" data-schlix-app-action="editconfig" fonticon="fas fa-cog" label="<?= ___('Configuration') ?>" />
            <!-- {end config -->
            <?= \SCHLIX\cmsHooks::output('getApplicationAdminExtraToolbarMenuItem', $this) ?>
        </x-ui:schlix-explorer-toolbar-menu>
        <!-- {help-about} -->
        <x-ui:schlix-explorer-toolbar-menu data-position="right">
            <x-ui:schlix-explorer-menu-folder fonticon="fa fa-question-circle" label="<?= ___('Help') ?>">
                <x-ui:schlix-explorer-menu-command data-schlix-command="help-about" data-schlix-app-action="help-about" fonticon="fas fas-cog" label="<?= ___('About') ?>" />
            </x-ui:schlix-explorer-menu-folder>
        </x-ui:schlix-explorer-toolbar-menu>
        <!-- {end help-about} -->

    </x-ui:schlix-explorer-toolbar>

    <div class="content"><?= ___('Site ID: The domain name you enter at the registration becomes your site ID (login) for Site Search 360.') ?></div>
    <!-- End Data Viewer -->
</x-ui:schlix-data-explorer-blank>
