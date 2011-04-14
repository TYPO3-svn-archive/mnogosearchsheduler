<?php

// Security check
if( !defined( 'TYPO3_MODE' ) ) {
    
    // TYPO3 is not running
    trigger_error(
        'This script cannot be used outside TYPO3',
        E_USER_ERROR
    );
}

$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'SC_OPTIONS' ][ 'scheduler' ][ 'tasks' ][ 'tx_mnogosearchscheduler_scheduler_task' ] = array
(
    'extension'        => $_EXTKEY,
    'title'            => 'LLL:EXT:' . $_EXTKEY . '/lang/locallang.xml:task.name',
    'description'      => 'LLL:EXT:' . $_EXTKEY . '/lang/locallang.xml:task.description',
    'additionalFields' => ''
);

?>
