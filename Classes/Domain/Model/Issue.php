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
 *
 *
 * @package hrinewsletter
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_Hrinewsletter_Domain_Model_Issue extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Subject
	 *
	 * @var string
	 */
	protected $issue;

	/**
	 * Intro
	 *
	 * @var string
	 */
	protected $intro;

	/**
	 * Remote Newsletter ID
	 *
	 * @var string
	 */
	protected $id;

	/**
	 * lang
	 *
	 * @var string
	 */
	protected $lang;

	/**
	 * Pages
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Hrinewsletter_Domain_Model_Pages>
	 */
	protected $pages;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->pages = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Adds a Pages
	 *
	 * @param Tx_Hrinewsletter_Domain_Model_Pages $page
	 * @return void
	 */
	public function addPage(Tx_Hrinewsletter_Domain_Model_Pages $page) {
		$this->pages->attach($page);
	}

	/**
	 * Removes a Pages
	 *
	 * @param Tx_Hrinewsletter_Domain_Model_Pages $pageToRemove The Pages to be removed
	 * @return void
	 */
	public function removePage(Tx_Hrinewsletter_Domain_Model_Pages $pageToRemove) {
		$this->pages->detach($pageToRemove);
	}

	/**
	 * Returns the pages
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Hrinewsletter_Domain_Model_Pages> $pages
	 */
	public function getPages() {
		return $this->pages;
	}

	/**
	 * Sets the pages
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Hrinewsletter_Domain_Model_Pages> $pages
	 * @return void
	 */
	public function setPages(Tx_Extbase_Persistence_ObjectStorage $pages) {
		$this->pages = $pages;
	}

	/**
	 * Returns the issue
	 *
	 * @return string $issue
	 */
	public function getIssue() {
		return $this->issue;
	}

	/**
	 * Sets the issue
	 *
	 * @param string $issue
	 * @return void
	 */
	public function setIssue($issue) {
		$this->issue = $issue;
	}

	/**
	 * Returns the intro
	 *
	 * @return string $intro
	 */
	public function getIntro() {
		return $this->intro;
	}

	/**
	 * Sets the intro
	 *
	 * @param string $intro
	 * @return void
	 */
	public function setIntro($intro) {
		$this->intro = $intro;
	}

	/**
	 * Returns the id
	 *
	 * @return string $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Sets the id
	 *
	 * @param string $id
	 * @return void
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * Returns the lang
	 *
	 * @return string $lang
	 */
	public function getLang() {
		return $this->lang;
	}

	/**
	 * Sets the lang
	 *
	 * @param string $lang
	 * @return void
	 */
	public function setLang($lang) {
		$this->lang = $lang;
	}

}
?>