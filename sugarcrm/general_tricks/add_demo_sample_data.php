<?php
/**
 * Created by PhpStorm.
 * User: emil
 * Date: 09.12.16
 * Time: 12:21
 */


ini_set('error_reporting', E_ERROR);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
ini_set('html_errors', FALSE);
ini_set('ignore_repeated_errors', true);
ini_set('ignore_repeated_source', true);
if (!defined('sugarEntry')) define('sugarEntry', true);
require_once('include/entryPoint.php');
global $db;

include "install/install_utils.php";
// install/demoData.en_UK.php
// install/performSetup.php

installerHook('pre_installDemoData');
global $current_user;
$current_user = new User();
$current_user->retrieve(1);
include("install/populateSeedData.php");
installerHook('post_installDemoData');
installLog("done populating the db with seed data");