<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Subscriptionform',
	array(
		'Member' => 'subscribe',
		
	),
	// non-cacheable actions
	array(
		'Member' => 'subscribe',
		
	)
);

?>