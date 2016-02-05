<?php
/**
 * Created by PhpStorm.
 * User: emil
 * Date: 05.02.16
 * Time: 13:08
 */

// http://uzzai.com/95Oe1J0Z/how-to-properly-run-a-count-query-using-elastica.html
// Define a Query. E.g. a string query.
$elasticaQueryString = new \Elastica\Query\QueryString();
//'And' or 'Or' default : 'Or'
$elasticaQueryString->setDefaultOperator('AND');
$elasticaQueryString->setQuery('Tox');
// Create the actual search query object with some data.
$elasticaQuery = new \Elastica\Query();
$elasticaQuery->setQuery($elasticaQueryString);
// Setup elastica client connection to your easticsearch server (with default host and port)
//$elasticaClient = new \Elastica\Client();
//// Setup elastica client connection to your elasticsearch server
$elasticaClient = new \Elastica\Client(array(
	'host' => 'localhost',
	'port' => 9200,
	'timeout' => 60,
	'persistent' => true
));
// Create an elastica search object
$elasticaSearch = new \Elastica\Search($elasticaClient);
// Call count method on search object to run a
$count = $elasticaSearch->count($elasticaQuery);
// output count
echo "<p>$count<p>";
print "<pre>";
print_r($elasticaSearch);