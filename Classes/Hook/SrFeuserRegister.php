<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Ralf Schneider <ralf@hr-interactive.de>, hr-interactive
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Hook to sr_feuser_register
 *
 * @package hrinewsletter
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License,
 *          version 3 or later
 *         
 */
class Tx_Hrinewsletter_Hook_SrFeuserRegister 
{



    public function registrationProcess_beforeConfirmCreate(&$recordArray, &$controlDataObj)
    {}



    public function registrationProcess_afterSaveEdit($theTable, $dataArray, $origArray, $token, &$newRow, $cmd, $cmdKey, $pid, 
            $fieldList, $pObj) // object of type tx_srfeuserregister_data
    {}



    public function registrationProcess_beforeSaveDelete($recordArray, &$invokingObj)
    {}



    /**
     * called after the user has pressed on save.
     * Additionally, there is an confirmation email sent
     *
     * @param string $theTable            
     * @param array $dataArray
     *            information the user has entered
     * @param array $origArray            
     * @param string $token            
     * @param array $newRow            
     * @param string $cmd            
     * @param string $cmdKey            
     * @param int $pid            
     * @param unknown_type $fieldList            
     * @param unknown_type $pObj            
     * @return void
     */
    public function registrationProcess_afterSaveCreate($theTable, $dataArray, $origArray, $token, &$newRow, $cmd, $cmdKey, $pid, 
            $fieldList, $pObj) // object of type tx_srfeuserregister_data
    {}



    public function confirmRegistrationClass_preProcess(&$recordArray, &$invokingObj)
    {
        // in the case of this hook, the record array is passed by reference
        // you may not see this echo if the page is redirected to auto-login
    }



    public function confirmRegistrationClass_postProcess($recordArray, &$invokingObj)
    {
        // you may not see this echo if the page is redirected to auto-login
    }



    public function addGlobalMarkers(&$markerArray, &$invokingObj)
    {}
}
?>