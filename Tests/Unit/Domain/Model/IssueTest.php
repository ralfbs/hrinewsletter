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
 * Test case for class Tx_Hrinewsletter_Domain_Model_Issue.
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
class Tx_Hrinewsletter_Domain_Model_IssueTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Hrinewsletter_Domain_Model_Issue
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Hrinewsletter_Domain_Model_Issue();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getIssueReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setIssueForStringSetsIssue() { 
		$this->fixture->setIssue('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getIssue()
		);
	}
	
	/**
	 * @test
	 */
	public function getIntroReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setIntroForStringSetsIntro() { 
		$this->fixture->setIntro('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getIntro()
		);
	}
	
	/**
	 * @test
	 */
	public function getIdReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setIdForStringSetsId() { 
		$this->fixture->setId('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getId()
		);
	}
	
	/**
	 * @test
	 */
	public function getLangReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLangForStringSetsLang() { 
		$this->fixture->setLang('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLang()
		);
	}
	
	/**
	 * @test
	 */
	public function getPagesReturnsInitialValueForObjectStorageContainingTx_Hrinewsletter_Domain_Model_Pages() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getPages()
		);
	}

	/**
	 * @test
	 */
	public function setPagesForObjectStorageContainingTx_Hrinewsletter_Domain_Model_PagesSetsPages() { 
		$page = new Tx_Hrinewsletter_Domain_Model_Pages();
		$objectStorageHoldingExactlyOnePages = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOnePages->attach($page);
		$this->fixture->setPages($objectStorageHoldingExactlyOnePages);

		$this->assertSame(
			$objectStorageHoldingExactlyOnePages,
			$this->fixture->getPages()
		);
	}
	
	/**
	 * @test
	 */
	public function addPageToObjectStorageHoldingPages() {
		$page = new Tx_Hrinewsletter_Domain_Model_Pages();
		$objectStorageHoldingExactlyOnePage = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOnePage->attach($page);
		$this->fixture->addPage($page);

		$this->assertEquals(
			$objectStorageHoldingExactlyOnePage,
			$this->fixture->getPages()
		);
	}

	/**
	 * @test
	 */
	public function removePageFromObjectStorageHoldingPages() {
		$page = new Tx_Hrinewsletter_Domain_Model_Pages();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($page);
		$localObjectStorage->detach($page);
		$this->fixture->addPage($page);
		$this->fixture->removePage($page);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getPages()
		);
	}
	
}
?>