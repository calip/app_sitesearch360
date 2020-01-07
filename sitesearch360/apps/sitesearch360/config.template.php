<?php
/**
 * sitesearch360 - Config
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
<schlix-config:data-editor data-schlix-controller="SCHLIX.CMS.sitesearch360AdminController" type="config">

        <x-ui:schlix-config-save-result />
        <x-ui:schlix-editor-form id="form-edit-config" method="post" data-config-action="save" action="<?= $this->createFriendlyAdminURL('action=saveconfig') ?>" autocomplete="off">

            <schlix-config:action-buttons />
            <x-ui:csrf />

            <x-ui:schlix-tab-container>
                <!-- tab -->
                <x-ui:schlix-tab id="tab_general" fonticon="far fa-file" label="<?= ___('General') ?>"> 
                    <!--content -->
                        
                        <schlix-config:app_alias />
                        <schlix-config:app_description />
                        <schlix-config:checkbox config-key='bool_disable_app' label='<?= ___('Disable application') ?>' />
                        <!--config --> 
                        <h4>SiteSearch 360</h4> 
                        <schlix-config:textbox config-key='str_sitesearch360_title' label='<?= ___('Title') ?>' class='form-control' />
                        <schlix-config:textbox config-key='str_sitesearch360_id' required='required' label='<?= ___('Site ID') ?>' />
                        <schlix-config:radiogroup config-key="int_option_layout" label="<?= ('Layout') ?>">
                            <schlix-config:option value="1"><?= ___h('Layover') ?></schlix-config:option>
                            <schlix-config:option value="2"><?= ___h('Embed') ?></schlix-config:option>
                        </schlix-config:radiogroup>
                        <schlix-config:checkbox config-key='bool_enable_searchbox' label='<?= ___('Display search box before search results') ?>' />
                        <schlix-config:checkbox config-key='bool_enable_errors' label='<?= ___('Show Errors') ?>' />
                        <schlix-config:checkbox config-key='bool_enable_suggestions' label='<?= ___('Enable Suggestions') ?>' />
                        <schlix-config:integerbox config-key='int_result_number' config-default-value="96" min="1" max="200"  label='<?= ___('Number of result') ?>' />
                </x-ui:schlix-tab>
                <!-- tab -->
                <?= \SCHLIX\cmsHooks::output('getApplicationAdminExtraEditConfigTab', $this) ?>
                <!-- end -->
            </x-ui:schlix-tab-container>
            
        </x-ui:schlix-editor-form>
</schlix-config:data-editor>     