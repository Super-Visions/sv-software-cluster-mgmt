<?php
/**
 * iTop module definition file
 * 
 * @author Thomas Casteleyn <thomas.casteleyn@super-visions.com>
 * @copyright (C) 2016-2018 Super-Visions BVBA
 * @license http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'sv-software-cluster-mgmt/1.4.0',
	array(
		// Identification
		//
		'label' => 'Software Cluster Management',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-config-mgmt/2.4.0',
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.sv-software-cluster-mgmt.php',
		),
		'webservice' => array(
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);

?>
