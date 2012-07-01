<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Subscriptionform',
	'Subscription Form'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_' . subscriptionform;
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_' .subscriptionform. '.xml');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'hr-interactive Newsletter');

t3lib_div::loadTCA('fe_users');
if (!isset($TCA['fe_users']['ctrl']['type'])) {
	// no type field defined, so we define it here. This will only happen the first time the extension is installed!!
	$TCA['fe_users']['ctrl']['type'] = 'tx_extbase_type';
	$tempColumns = array();
	$tempColumns[$TCA['fe_users']['ctrl']['type']] = array(
		'exclude' => 1,
		'label'   => 'LLL:EXT:hrinewsletter/Resources/Private/Language/locallang_db.xml:tx_hrinewsletter_domain_model_member.tx_extbase_type',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('LLL:EXT:hrinewsletter/Resources/Private/Language/locallang_db.xml:tx_hrinewsletter_domain_model_member.tx_extbase_type.0','0'),
			),
			'size' => 1,
			'maxitems' => 1,
			'default' => 'Tx_Hrinewsletter_Member'
		)
	);
	t3lib_extMgm::addTCAcolumns('fe_users', $tempColumns, 1);
}

$TCA['fe_users']['types']['Tx_Hrinewsletter_Member']['showitem'] = $TCA['fe_users']['types']['Tx_Extbase_Domain_Model_FrontendUser']['showitem'];
$TCA['fe_users']['columns'][$TCA['fe_users']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:hrinewsletter/Resources/Private/Language/locallang_db.xml:tx_hrinewsletter_domain_model_member','Tx_Hrinewsletter_Member');
t3lib_extMgm::addToAllTCAtypes('fe_users', $TCA['fe_users']['ctrl']['type'],'','after:hidden');

$tmp_hrinewsletter_columns = array(

);

t3lib_extMgm::addTCAcolumns('fe_users',$tmp_hrinewsletter_columns);

$TCA['fe_users']['columns'][$TCA['fe_users']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:hrinewsletter/Resources/Private/Language/locallang_db.xml:fe_users.tx_extbase_type.Tx_Hrinewsletter_Member','Tx_Hrinewsletter_Member');

$TCA['fe_users']['types']['Tx_Hrinewsletter_Member']['showitem'] = $TCA['fe_users']['types']['Tx_Extbase_Domain_Model_FrontendUser']['showitem'];
$TCA['fe_users']['types']['Tx_Hrinewsletter_Member']['showitem'] .= ',--div--;LLL:EXT:hrinewsletter/Resources/Private/Language/locallang_db.xml:tx_hrinewsletter_domain_model_member,';
$TCA['fe_users']['types']['Tx_Hrinewsletter_Member']['showitem'] .= '';

			t3lib_extMgm::addLLrefForTCAdescr('tx_hrinewsletter_domain_model_maillog', 'EXT:hrinewsletter/Resources/Private/Language/locallang_csh_tx_hrinewsletter_domain_model_maillog.xml');
			t3lib_extMgm::allowTableOnStandardPages('tx_hrinewsletter_domain_model_maillog');
			$TCA['tx_hrinewsletter_domain_model_maillog'] = array(
				'ctrl' => array(
					'title'	=> 'LLL:EXT:hrinewsletter/Resources/Private/Language/locallang_db.xml:tx_hrinewsletter_domain_model_maillog',
					'label' => 'member',
					'tstamp' => 'tstamp',
					'crdate' => 'crdate',
					'cruser_id' => 'cruser_id',
					'dividers2tabs' => TRUE,
					'versioningWS' => 2,
					'versioning_followPages' => TRUE,
					'origUid' => 't3_origuid',
					'languageField' => 'sys_language_uid',
					'transOrigPointerField' => 'l10n_parent',
					'transOrigDiffSourceField' => 'l10n_diffsource',
					'delete' => 'deleted',
					'enablecolumns' => array(
						'disabled' => 'hidden',
						'starttime' => 'starttime',
						'endtime' => 'endtime',
					),
					'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/MailLog.php',
					'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_hrinewsletter_domain_model_maillog.gif'
				),
			);

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder
?>