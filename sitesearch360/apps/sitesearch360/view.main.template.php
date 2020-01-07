<?php
/**
 * sitesearch360 - Main page view (frontend)
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

<div class="app-page-main app-<?= $this->app_name; ?>" id="app-<?= $this->app_name; ?>-app-page-main">
    <div class="content">
        <h1><?= ___h($sitesearch360_title); ?></h1>        
        <?php if ($sitesearch360_id): ?>
            <script type="text/javascript">
                window.ss360Config = {
                siteId: "<?= ___h($sitesearch360_id); ?>",
                showErrors: <?= ___h($enable_errors); ?>,
                searchBox: {
                    selector: "#sitesearch360-searchBox, form[role=\"search\"] input[name=\"s\"]",
                    searchButton: "form[role=\"search\"] input.search-submit"
                },
                layout: {
                    navigation: {
                        position: "top"
                    }
                },
                results: {
                    num: <?= ___h($sitesearch360_result_number); ?>,
                    embedConfig: {
                        contentBlock: "<?= ___h($layout_content); ?>"
                    },
                    moreResultsButton: null
                },
                style: {
                    themeColor: "#1c5d7d",
                    searchBox: {
                        text: {
                            color: "#333333",
                            size: "14px"
                        },
                        background: {
                            color: "#ffffff"
                        },
                        border: {
                            color: "#dddddd",
                            radius: "0px"
                        },
                        padding: "8px",
                        icon: {
                            image: "magnifier",
                            color: "#666666"
                        }
                    }
                },
                suggestions: {
                    show: <?= ___h($enable_suggestions); ?>
                },
                tracking: {
                    providers: []
                },
                dataPoints: {
                    exclude: [],
                    single: []
                }
            };

            var e=document.createElement("script");
            e.type="module";
            e.src="https://cdn.sitesearch360.com/sitesearch360-v12.mjs";
            document.getElementsByTagName("body")[0].appendChild(e);

            e=document.createElement("script");
            e.type="text/javascript";
            e.async=!0;
            e.setAttribute("nomodule", "nomodule");
            e.src="https://cdn.sitesearch360.com/sitesearch360-v12.min.js";
            document.getElementsByTagName("body")[0].appendChild(e);
        </script>
        <?php if ($enable_searchbox): ?>
        <x-ui:input-group>
            <x-ui:textbox placeholder="<?= ___('Search'); ?>" id="sitesearch360-searchBox" type="search" value="<?= ___h(urldecode(fget_string_noquotes_notags('keyword', 255))); ?>" />
            <x-ui:input-addon-button>
                <x-ui:button-info type="submit" id="ss360SearchButton"><i class="fa fa-search"></i></x-ui:button-info>
            </x-ui:input-addon-button>
        </x-ui:input-group>
        <?php else: ?>
            <!-- NOTE - Site search 360 was not set up correctly - please add a sitesearch360 block -->
            <script>console.error("Please add sitesearch360 block");</script>
        <?php endif ?>
        <?php if ($sitesearch360_layout == 2): ?>
        <div class="ss360-search-results-block"></div>
        <?php endif ?>
        <?php else: ?>
            <!-- NOTE - Google search engine was not set up correctly - please add a Google search engine ID -->
            <script>console.error("Google search engine ID has not been set from configuration");</script>
        <?php endif ?>
    </div>
</div>