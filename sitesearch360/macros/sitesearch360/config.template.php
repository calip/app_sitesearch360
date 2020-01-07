<?php
/**
 * sitesearch360 - Configuration
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
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<h3><?= ___('Example Configuration') ?></h3>

<schlix-config:textbox config-key='str_example_1' label='<?= ___('Textbox Example') ?>' class='form-control' />
<schlix-config:textarea config-key='str_example_2' label="<?= ___('Textarea Example') ?>" class='wysiwyg' />             
<schlix-config:textarea config-key='str_example_3' label="<?= ___('Non-WYSIWYG textarea example') ?>" class='form-control'  />             

<schlix-config:integerbox config-key='int_integerbox_example' config-default-value="1" min="1" max="200"  label='<?= ___('Integer box example with default value') ?>' class='form-control' />

<schlix-config:checkbox config-key='bool_checkbox_example' label='<?= ___('Checkbox Example') ?>' />

<schlix-config:dropdownlist class="form-control" config-key="str_option_select" label="<?= ___('Dropdown list example') ?>" >
    <schlix-config:option value="0"><?= ___('Please select') ?></schlix-config:option>
    <schlix-config:option value="<?= ___h('opt1') ?>"><?= ___h('Option 1') ?></schlix-config:option>
    <schlix-config:option value="<?= ___h('opt2') ?>"><?= ___h('Option 2') ?></schlix-config:option>
    <schlix-config:option value="<?= ___h('opt3') ?>"><?= ___h('Option 3') ?></schlix-config:option>
</schlix-config:dropdownlist> 

<schlix-config:radiogroup config-key="int_option_radio" label="<?= ('Radio group example') ?>">
    <schlix-config:option value="1"><?= ___h('Option 1') ?></schlix-config:option>
    <schlix-config:option value="2"><?= ___h('Option 2') ?></schlix-config:option>
    <schlix-config:option value="3"><?= ___h('Option 3') ?></schlix-config:option>
</schlix-config:radiogroup>

<schlix-config:checkboxgroup config-key="int_option_checkbox" label="<?= ('Checkbox group example') ?>">
    <schlix-config:option value="1"><?= ___h('Option 1') ?></schlix-config:option>
    <schlix-config:option value="2"><?= ___h('Option 2') ?></schlix-config:option>
    <schlix-config:option value="3"><?= ___h('Option 3') ?></schlix-config:option>
</schlix-config:checkboxgroup>    

