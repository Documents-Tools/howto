<?php
/**
 * Created by PhpStorm.
 * User: emil
 * Date: 04.03.16
 * Time: 13:59
 */

//---------------------------------------------------------------------------

// disable all workflows
$sugar_config['WFM_disable_wfm_completely'] = true;
// enable debug mode
$sugar_config['WFM_changeLogLevelFromFlowDebugTo'] = 'warn';
$sugar_config['WFM_changeLogLevelFromAsolDebugTo'] = 'warn';
$sugar_config['asolLogLevelEnabled'] = true;
$sugar_config['WFM_changeLogLevelFromAsolTo'] = 'warn';

//---------------------------------------------------------------------------

// Disable WFM
$sugar_config['WFM_disable_wfm_completely'] = false;
$sugar_config['WFM_disable_wfmHook'] = false;
$sugar_config['WFM_disable_wfmScheduledTask'] = false;
$sugar_config['WFM_disable_workFlowManagerEngine'] = false;

// Hide WFM dashlets. Admin-users do not depend on this config, they always can see WFM dashlets.
$sugar_config['WFM_hideDashlets'] = true;


$sugar_config['WFM_development_mode'] = false; // You need to set this sugar_config to true in order to use sugar_configs below.
// If you use the WFM to send an email to an address that is not within this array => The WFM will replace @ by @x, so the email will not be received by this address.
$sugar_config['WFM_development_mode_allowed_emails'] = Array('email@email_server.com', 'name@server.es');
$sugar_config['WFM_development_mode_notAllowedEmails_textAddedToEmailAddress'] = 'XWFMnotAllowedEmailX';

//---------------------------------------------------------------------------

$sugar_config['WFM_changeLogLevelFromFlowDebugTo'] = 'warn'; // warn(recommended), debug, ...
$sugar_config['WFM_changeLogLevelFromAsolTo'] = 'warn'; // warn(recommended), debug, ...
$sugar_config['asolLogLevelEnabled'] = true;
$sugar_config['WFM_changeLogLevelFromAsolDebugTo'] = 'debug';  // asol(development), debug(production, recommended)

$sugar_config['WFM_MAX_working_nodes_executed_in_one_php_instance'] = '10';
$sugar_config['WFM_MAX_loops'] = '10';
$sugar_config['WFM_TranslateLabels'] = true;

$sugar_config['WFM_site_url'] = 'http://[your_server_url]/[your_sugarcrm_instance_name]';  // Do not forget to remove the brackets.  // If the default configuration does not work, try using this sugar_config. Also if you want the WFM to execute as soon as posible -> use your internal server_IP (for example: 127.0.0.1, your NAT IP, etc).
$sugar_config['WFM_site_login_username_password'] = '[site_login_username]:[site_login_password]';

//---------------------------------------------------------------------------

// - External non CRM databases (the databases access must be configured in an array like the following):
$sugar_config['WFM_AlternativeDbConnections'] = array(
	0 => array(
		"asolReportsDbAddress" => '192.168.0.X', //Ip address
		"asolReportsDbUser" => "root", //Database access username
		"asolReportsDbPassword" => "", //Database access password
		"asolReportsDbName" => "ExternalDb_A", //Database name
		"asolReportsDbPort" => "3306", //Port
		"asolDefaultDbDomainIdField" => array ( //this array is not mandatory, may not be defined. It's used for Domains filtering
			"fieldName" => "IdDomain",
			"isNumeric" => true //true [Numeric] false [String]
		),
		"asolSpecificTableDomainIdField" => array ( //this array is not mandatory, may not be defined. It's used for Domains filtering
			"tableA_1" => array("fieldName" => "idDomain1", "isNumeric" => true),
			"tableA_2" => array("fieldName" => "idDomain2", "isNumeric" => true),
		),
		"asolAllowedTables" => array(
			"instance" => array("tableA", "tableC"),
			"domain" => array(),
		),
		"asolForbiddenTables" => array(
			"instance" => array(),
			"domain" => array(
				"idDomain1" => array("tableB"),
			),
		),
	),
	1 => array(
		"asolReportsDbAddress" => '192.168.0.Y',
		"asolReportsDbUser" => "root",
		"asolReportsDbPassword" => "",
		"asolReportsDbName" => "ExternalDb_B",
		"asolReportsDbPort" => "3307",
		"asolDefaultDbDomainIdField" => array (
			"fieldName" => "IdDomain",
			"isNumeric" => true
		),
		"asolSpecificTableDomainIdField" => array(
			"tableB_1" => array("fieldName" => "idDomain3", "isNumeric" => true),
			"tableB_2" => array("fieldName" => "idDomain4", "isNumeric" => true),
		),
		"asolAllowedTables" => array(
			"instance" => array(),
			"domain" => array(),
		),
	),
);

//---------------------------------------------------------------------------
// Max queries allowed
$sugar_config['resource_management']['default_limit'] = 1000;
//------------------------------------------------------------


/*
 * AlineaSol WorkFlowManager Manual
 * https://ecm2.nl/sites/default/files/download/User_Guide_WorkFlowManager-latest.pdf
 * */

/* SUGAR SETTINGS - TEST
$sugar_config['list_max_entries_per_page'] = '25';
$sugar_config['list_max_entries_per_subpanel'] = '3';
$sugar_config['max_record_fetch_size'] = 100;
$sugar_config['max_record_link_fetch_size'] = 100;
$sugar_config['resource_management']['default_limit'] = 100;
$sugar_config['api']['timeout'] = 30;
$sugar_config['history_max_viewed'] = 20;
*/

// Andere Einstellungen
// /include/utils.php
// /include/MetaDataManager/MetaDataManager.php

#$sugar_config['WFM_changeLogLevelFromFlowDebugTo'] = 'warn';
#$sugar_config['WFM_changeLogLevelFromAsolTo'] = 'warn';
#$sugar_config['asolLogLevelEnabled'] = false;
#$sugar_config['WFM_changeLogLevelFromAsolDebugTo'] = 'warn';

#$sugar_config['WFM_MAX_working_nodes_executed_in_one_php_instance'] = '15';
#$sugar_config['WFM_MAX_loops'] = '2';

//$sugar_config['WFM_development_mode'] = false;
//$sugar_config['WFM_TranslateLabels'] = true;
//$sugar_config['WFM_site_url'] = 'http://localhost/PhpstormProjects/SugarPro';

// bean_ungreedy_count - to set 0 in WF

#$sugar_config['full_text_engine']['Elastic']['host'] = 'localhost';
#$sugar_config['full_text_engine']['Elastic']['port'] = '9200';



