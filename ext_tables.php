<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Fluid Content: Zurb Foundation 4 Grid');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('fluidcontent_twbs_grid', 'Content');
?>
