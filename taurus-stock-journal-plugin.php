<?php
/*
 * Plugin Name:       Taurus Stock Journal Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Taurus Stock Journal- This plugin is used to create a stock journal to track the stock trading records.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Denny Paul
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       tsjp-stock-journal
 * Domain Path:       /languages
 */
defined('ABSPATH') or die('No script kiddies please');

class TaurusStockJournalPlugin
{
    function __construct()
    {
        $this->define_constants();
        $this->include_files();
    }

    function define_constants()
    {
        define('TAURUS_STOCK_JOURNAL_DIR', plugin_dir_path(__FILE__));
    }

    function include_files()
    {

        require(TAURUS_STOCK_JOURNAL_DIR . 'inc/admin/add_admin_menu.php');
        require(TAURUS_STOCK_JOURNAL_DIR . 'inc/frontend/display-data.php');
    }
}

$taurusStockJournalPlugin = new TaurusStockJournalPlugin();
