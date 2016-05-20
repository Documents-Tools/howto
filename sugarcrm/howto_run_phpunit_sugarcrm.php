<?php
/**
 * Created by PhpStorm.
 * User: emil
 * Date: 20.05.16
 * Time: 15:50
 */

/**
 * ###########################################################
 * #
 * # Install PHPUnit in SugarCRM
 * # https://github.com/sebastianbergmann/phpunit/issues/1503
 * #
 * ###########################################################
 *
 * # go to project root
 *
 * # get composer
 * curl -sS https://getcomposer.org/installer | php
 *
 * # config
 * $ cat composer.json
 * {
 * "require-dev": {
 * "phpunit/phpunit": "4.3.*"
 * }
 * }
 *
 * # get/install phpunit
 * $ php composer.phar install
 * Loading composer repositories with package information
 * Installing dependencies (including require-dev)
 * - Installing sebastian/version (1.0.3)
 * Loading from cache
 *
 * - Installing sebastian/exporter (1.0.2)
 * Loading from cache
 *
 * - Installing sebastian/environment (1.2.0)
 * Loading from cache
 *
 * - Installing sebastian/diff (1.2.0)
 * Loading from cache
 *
 * - Installing sebastian/comparator (1.0.1)
 * Loading from cache
 *
 * - Installing symfony/yaml (v2.5.6)
 * Loading from cache
 *
 * - Installing doctrine/instantiator (1.0.4)
 * Loading from cache
 *
 * - Installing phpunit/php-text-template (1.2.0)
 * Loading from cache
 *
 * - Installing phpunit/phpunit-mock-objects (2.3.0)
 * Loading from cache
 *
 * - Installing phpunit/php-timer (1.0.5)
 * Loading from cache
 *
 * - Installing phpunit/php-file-iterator (1.3.4)
 * Loading from cache
 *
 * - Installing phpunit/php-token-stream (1.3.0)
 * Loading from cache
 *
 * - Installing phpunit/php-code-coverage (2.0.11)
 * Loading from cache
 *
 * - Installing phpunit/phpunit (4.3.5)
 * Downloading: 100%
 *
 * phpunit/phpunit suggests installing phpunit/php-invoker (~1.1)
 * Writing lock file
 * Generating autoload files
 *
 * # check if installed
 * $ vendor/bin/phpunit
 * $ ./vendor/bin/phpunit --version
 * PHPUnit 4.3.5 by Sebastian Bergmann.
 *
 * # update composer
 * php composer.phar self-update
 * php composer.phar update --dev
 *
 * # run phpunit from terminal
 * # vendor/bin/phpunit -c app/
 * vendor/bin/phpunit tests/Dbest.php
 */


// create file in tests/Dbest.php

/**
 * Created by PhpStorm.
 * User: emil
 * Date: 20.05.16
 * Time: 14:22
 */

if (!defined('sugarEntry')) define('sugarEntry', true);

/*
set_include_path(
	dirname(__FILE__) . PATH_SEPARATOR .
	dirname(__FILE__) . '/..' . PATH_SEPARATOR .
	get_include_path()
);*/

// constant to indicate that we are running tests
if (!defined('SUGAR_PHPUNIT_RUNNER'))
	define('SUGAR_PHPUNIT_RUNNER', true);

// initialize the various globals we use
global $sugar_config, $db, $fileName, $current_user, $locale, $current_language;

//require_once('include/entryPoint.php');
//require_once('include/utils/layout_utils.php');
//$GLOBALS['db'] = DBManagerFactory::getInstance();

$current_language = $sugar_config['default_language'];
// disable the SugarLogger
$sugar_config['logger']['level'] = 'fatal';


// define our testcase subclass
class Sugar_PHPUnit_Framework_TestCase extends PHPUnit_Framework_TestCase
{
	protected $backupGlobals = FALSE;
	protected $useOutputBuffering = true;

	protected function assertPreConditions()
	{

	}

	protected function assertPostConditions()
	{

	}

	/** @test */
	public function it_tests_something()
	{
		echo "123";
	}
}

