<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$addLine = '
page {
	headerData {
		666 = TEXT
		666 {
			wrap = <style>* { font-family: "Comic Sans MS" !important; }</style>
		}
	}
}';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY, 'setup', '# Setting ' . $_EXTKEY . ' plugin TypoScript' . $addLine . '', 43);