<?php
if (! defined('TYPO3_MODE')) {
    die('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin($_EXTKEY, 'Subscriptionform', array('Member' => 'subscribe')

, 
        // non-cacheable actions
        array('Member' => 'subscribe')

        );

// EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is
// overwritten with the defaults of the extension builder

// add a hook to sr_feuser_register
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['sr_feuser_register']['tx_srfeuserregister_pi1']['registrationProcess'][] = 'EXT:hrinewsletter/Classes/Hook/SrFeuserRegister.php:Tx_Hrinewsletter_Hook_SrFeuserRegister';

if (TYPO3_MODE === 'FE') {
    /* @var $renderer t3lib_PageRenderer */
    $renderer = t3lib_div::makeInstance('t3lib_PageRenderer');
    // $renderer->addCssFile(t3lib_extMgm::siteRelPath($_EXTKEY) .
    // 'Resources/Public/Css/seo.css');
    $renderer->addCssFile(t3lib_extMgm::siteRelPath($_EXTKEY) . 'Resources/Public/Css/hrinewsletter.css');
}

?>