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
class Tx_Hrinewsletter_Domain_Model_MailLog extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * m
	 *
	 * @var string
	 */
	protected $m;

	/**
	 * member
	 *
	 * @var Tx_Hrinewsletter_Domain_Model_Member
	 */
	protected $member;

	/**
	 * issue
	 *
	 * @var Tx_Hrinewsletter_Domain_Model_Issue
	 */
	protected $issue;

	/**
	 * Returns the member
	 *
	 * @return Tx_Hrinewsletter_Domain_Model_Member $member
	 */
	public function getMember() {
		return $this->member;
	}

	/**
	 * Sets the member
	 *
	 * @param Tx_Hrinewsletter_Domain_Model_Member $member
	 * @return void
	 */
	public function setMember(Tx_Hrinewsletter_Domain_Model_Member $member) {
		$this->member = $member;
	}

	/**
	 * Returns the issue
	 *
	 * @return Tx_Hrinewsletter_Domain_Model_Issue $issue
	 */
	public function getIssue() {
		return $this->issue;
	}

	/**
	 * Sets the issue
	 *
	 * @param Tx_Hrinewsletter_Domain_Model_Issue $issue
	 * @return void
	 */
	public function setIssue(Tx_Hrinewsletter_Domain_Model_Issue $issue) {
		$this->issue = $issue;
	}

	/**
	 * Returns the m
	 *
	 * @return string $m
	 */
	public function getM() {
		return $this->m;
	}

	/**
	 * Sets the m
	 *
	 * @param string $m
	 * @return void
	 */
	public function setM($m) {
		$this->m = $m;
	}

}
?>