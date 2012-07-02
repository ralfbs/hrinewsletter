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
 * Abstract implementation for provided Hook
 *
 * @package hrinewsletter
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License,
 *          version 3 or later
 *         
 */
class Tx_Hrinewsletter_Service_Debug
{

    /**
     * the extension key
     * @var string
     */
    public static $extKey = 'hrinewsletter';


    /**
     * Writes log message.
     * Destination log depends on the current system mode.
     * For FE the function writes to the admin panel log. For BE messages are
     * sent to the system log. If developer log is enabled, messages are also
     * sent there.
     *
     * This function accepts variable number of arguments and can format
     * parameters. The syntax is the same as for sprintf()
     *
     * @param string $message:
     *            to output
     * @return void
     * @see sprintf()
     * @see t3lib::divLog()
     * @see t3lib_div::sysLog()
     * @see t3lib_timeTrack::setTSlogMessage()
     */
    public static function writeLogMessage($message)
    {
        if (func_num_args() > 1) {
            $params = func_get_args();
            array_shift($params);
            $message = vsprintf($message, $params);
        }
        
        if (TYPO3_MODE === 'BE') {
            t3lib_div::sysLog($message, self::$extKey, 1);
        } 
        
        if (TYPO3_DLOG) {
            t3lib_div::devLog($message, self::$extKey, 1);
        }
    }
}
?>