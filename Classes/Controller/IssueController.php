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
class Tx_Hrinewsletter_Controller_IssueController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$issues = $this->issueRepository->findAll();
		$this->view->assign('issues', $issues);
	}

	/**
	 * action show
	 *
	 * @param $issue
	 * @return void
	 */
	public function showAction(Tx_Hrinewsletter_Domain_Model_Issue $issue) {
		$this->view->assign('issue', $issue);
	}

	/**
	 * action new
	 *
	 * @param $newIssue
	 * @dontvalidate $newIssue
	 * @return void
	 */
	public function newAction(Tx_Hrinewsletter_Domain_Model_Issue $newIssue = NULL) {
		$this->view->assign('newIssue', $newIssue);
	}

	/**
	 * action create
	 *
	 * @param $newIssue
	 * @return void
	 */
	public function createAction(Tx_Hrinewsletter_Domain_Model_Issue $newIssue) {
		$this->issueRepository->add($newIssue);
		$this->flashMessageContainer->add('Your new Issue was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param $issue
	 * @return void
	 */
	public function editAction(Tx_Hrinewsletter_Domain_Model_Issue $issue) {
		$this->view->assign('issue', $issue);
	}

	/**
	 * action update
	 *
	 * @param $issue
	 * @return void
	 */
	public function updateAction(Tx_Hrinewsletter_Domain_Model_Issue $issue) {
		$this->issueRepository->update($issue);
		$this->flashMessageContainer->add('Your Issue was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param $issue
	 * @return void
	 */
	public function deleteAction(Tx_Hrinewsletter_Domain_Model_Issue $issue) {
		$this->issueRepository->remove($issue);
		$this->flashMessageContainer->add('Your Issue was removed.');
		$this->redirect('list');
	}

}
?>