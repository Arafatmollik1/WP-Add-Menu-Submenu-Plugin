<?php 
//silence is golden
/*
Plugin Name:       Add Menu
Plugin URI:        https://github.com/Arafatmollik1
Description:       This adds a menu in the admin menu.
Version:           1.0.0
Author:            Arafat Mollik
Author URI:        https://github.com/Arafatmollik1
License:           GPL v2 or later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:       my-basics-plugin
*/ 
add_action("admin_menu", "addMenu");
function addMenu(){
    add_menu_page("add Menu", "New Menu", "edit_pages", "New-Menu", "newMenu");
    add_submenu_page( 'New-Menu', 'submenu', 'new submenu', 'edit_pages', 'sub-menu', 'subMenu', null );
}
function newMenu(){
    echo   <<<'EOD'
    <h1>Its a new Menu <h1>
    EOD;
}
function subMenu(){
    echo   "<h1>A new submenu</h1>";
}
