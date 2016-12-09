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

/*
 * https://github.com/sugarcrm/Tidbit

cd apps/sugarcrm/htdocs
wget https://github.com/sugarcrm/Tidbit/archive/master.zip
unzip master.zip; mv Tidbit-master Tidbit; cd Tidbit

php -f install_cli.php -- -o -u 4090
# Tidbit should be run with "./bin/tidbit" or "./vendor/bin/tidbit" instead


curl -sS https://getcomposer.org/installer | php
php composer.phar install
./bin/tidbit -o -u 400

PHP Fatal error:  Cannot use 'Elastica\Filter\Bool' as class name as it is reserved in /SugarEnt-Full-7.7.2.0/data/visibility/ACLVisibility.php on line 96

 */