<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010 http://www.vd.ch
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

// DEBUG ONLY - Sets the error reporting level to the highest possible value
#error_reporting( E_ALL | E_STRICT );

/**
 * TYPO3 scheduler task
 * 
 * @author      Jean-Luc Thirot
 * @version     0.0.1
 * @package     TYPO3
 * @subpackage  mnogosearchsheduler
 */
class tx_mnogosearchsheduler_scheduler_task extends tx_scheduler_Task
{
	/**
	 * @var integer
	 */
	public $sleepTime;
	
	/**
	 * @var integer
	 */
	public $sleepAfterFinish;

	/**
	 * @var integer
	 */
	public $countInARun;

	/**
	 * Function executed from the Scheduler.
	 *
	 * @return	void
	 */
	public function execute() {
		// prepare arguments
		// $this->setCliArguments();
		// create mnogosearch_cli object
		$mnogosearchObj = t3lib_div::makeInstance('tx_mnogosearch_cli');
		// start indexing
		$mnogosearchObj->main();
		return true;
	}

	/**
	 * Simulate cli call with setting the required options to the $_SERVER['argv']
	 *
	 * @access protected
	 * @return void
	 */
        protected function setCliArguments() {
		$_SERVER['argv'] = array($_SERVER['argv'][0], 'tx_crawler_cli_im', '0', '-ss', '--sleepTime', $this->sleepTime, '--sleepAfterFinish', $this->sleepAfterFinish, '--countInARun', $this->countInARun);
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mnogosearchsheduler/Classes/class.tx_mnogosearchsheduler_scheduler_task.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mnogosearchsheduler/Classes/class.tx_mnogosearchsheduler_scheduler_task.php']);
}
