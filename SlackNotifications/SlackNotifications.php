<?php
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'SlackNotifications' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	wfWarn(
		'Deprecated PHP entry point used for FooBar extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the FooBar extension requires MediaWiki 1.25+' );
}