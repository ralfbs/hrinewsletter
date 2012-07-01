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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_Hrinewsletter_Domain_Model_MailLog.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage hr-interactive Newsletter
 *
 * @author Ralf Schneider <ralf@hr-interactive.de>
 */
class Tx_Hrinewsletter_Domain_Model_MailLogTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Hrinewsletter_Domain_Model_MailLog
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Hrinewsletter_Domain_Model_MailLog();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getMemberReturnsInitialValueForTx_Hrinewsletter_Domain_Model_Member() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getMember()
		);
	}

	/**
	 * @test
	 */
	public function setMemberForTx_Hrinewsletter_Domain_Model_MemberSetsMember() { 
		$dummyObject = new Tx_Hrinewsletter_Domain_Model_Member();
		$this->fixture->setMember($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getMember()
		);
	}
	
}
?>