<?php

########################################################################
# Extension Manager/Repository config file for ext "mnogosearchsheduler".
#
# Auto generated 19-04-2010 15:08
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'MnoGoSearch scheduler',
	'description' => 'A scheduler task for mnogosearch. Useful for testing.',
	'category' => 'plugin',
	'author' => 'Jean-Luc Thirot',
	'author_email' => 'jean-luc.thirot@vd.ch',
	'shy' => 1,
	'dependencies' => 'scheduler,mnogosearch',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => 'Etat de Vaud',
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'scheduler' => '1.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:7:{s:16:"ext_autoload.php";s:4:"40ce";s:12:"ext_icon.gif";s:4:"8cd0";s:17:"ext_localconf.php";s:4:"71f5";s:14:"ext_tables.php";s:4:"f5df";s:50:"Classes/class.tx_realurlcleanup_scheduler_task.php";s:4:"4829";s:57:"Classes/class.tx_realurlcleanup_scheduler_task_fields.php";s:4:"b492";s:18:"lang/locallang.xml";s:4:"24ca";}',
	'suggests' => array(
	),
);

?>