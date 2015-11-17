<?php
/**
 * Created by PhpStorm.
 * User: emil
 * Date: 17.11.15
 * Time: 17:21
 */

################################################
#
# Quotes with subpanel documents Example
#
# Hide Edit Buttons in Subpanel in BWC modules SugarCRM 6
# Hide Top Buttons in Subpanel in BWC modules SugarCRM 6
#
################################################

// ------------------------------------------------------------------

// Create layout def in Quotes:
// custom/Extension/modules/Quotes/Ext/Layoutdefs/documents_quotes_Quotes.php

// -- remove subpanel documents top_buttons completely
$layout_defs["Quotes"]["subpanel_setup"]['documents'] = array(
	'order' => 100,
	'module' => 'Documents',
	'subpanel_name' => 'ForQuotes', // 'default', // ForQuotes  ForContractType
	'sort_order' => 'asc',
	'sort_by' => 'id',
	'title_key' => 'LBL_DOCUMENTS',
	'get_subpanel_data' => 'documents',
	'top_buttons' =>
		array(
			/*0 =>array(
				'widget_class' => 'SubPanelTopCreateButton',
			),*/
			/*0 =>
				array(
					'widget_class' => 'SubPanelTopButtonQuickCreate',
					'mode' => 'MultiSelect',
				),*/
			/*1 =>
				array(
					'widget_class' => 'SubPanelTopSelectButton',
					'mode' => 'MultiSelect',
				),*/
		),
);

// ------------------------------------------------------------------

// -- remove subpanel documents completely --
//unset($layout_defs['Quotes']['subpanel_setup']['documents']);
//print "<pre>"; print_r($layout_defs); print "</pre>";

// ------------------------------------------------------------------

//Create custom layout and comment code in
// modules/Documents/metadata/subpanels/ForQuotes.php

$subpanel_layout = array(
	'top_buttons' => array(
		array('widget_class' => 'SubPanelTopCreateButton'),
		array('widget_class' => 'SubPanelTopSelectButton',
			'popup_module' => 'Documents',
			'field_to_name_array'=>array('document_revision_id'=>'REL_ATTRIBUTE_document_revision_id')),
	),

	'where' => '',

	'list_fields'=> array(
		'document_name'=> array(
			'name' => 'document_name',
			'vname' => 'LBL_LIST_DOCUMENT_NAME',
			'widget_class' => 'SubPanelDetailViewLink',
			'width' => '40%',
		),
		'is_template'=>array(
			'name' => 'is_template',
			'vname' => 'LBL_LIST_IS_TEMPLATE',
			'width' => '15%',
			'widget_type'=>'checkbox',
		),
		'template_type'=>array(
			'name' => 'template_types',
			'vname' => 'LBL_LIST_TEMPLATE_TYPE',
			'width' => '20%',
		),
		'latest_revision'=>array(
			'name' => 'latest_revision',
			'vname' => 'LBL_LATEST_REVISION',
			'width' => '15%',
			'sortable' => false
		),
		/*'edit_button'=>array(
			'vname' => 'LBL_EDIT_BUTTON',
			'widget_class' => 'SubPanelEditButton',
			'module' => 'Documents',
			'width' => '5%',
		),
		'remove_button'=>array(
			'vname' => 'LBL_REMOVE',
			'widget_class' => 'SubPanelRemoveButton',
			'module' => 'Documents',
			'width' => '5%',
		),
		'document_revision_id'=>array(
			'usage'=>'query_only'
		),*/
	),
);

// ------------------------------------------------------------------

// Do QuickRepair.
// Live test for subpanels names after repair in ext file:
// custom/modules/Quotes/Ext/Layoutdefs/layoutdefs.ext.php