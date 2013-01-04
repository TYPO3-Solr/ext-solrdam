<?php
/***************************************************************
 * Extension Manager/Repository config file for ext "solrdam".
 *
 * Auto generated 04-01-2013 08:14
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Apache Solr for TYPO3 - DAM Indexing',
	'description' => 'DAM Indexing',
	'category' => 'be',
	'author' => 'Ingo Renner',
	'author_email' => 'ingo@typo3.org',
	'shy' => '',
	'dependencies' => 'solr,solrfile,dam',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => 'dkd Internet Service GmbH',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'solr' => '2.8.0',
			'solrfile' => '1.0.0',
			'dam' => '1.3.0',
			'php' => '5.3.0-0.0.0',
			'typo3' => '4.5.5-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:7:{s:9:"ChangeLog";s:4:"fab2";s:16:"ext_autoload.php";s:4:"89d7";s:12:"ext_icon.gif";s:4:"11e4";s:14:"ext_tables.php";s:4:"c342";s:61:"classes/indexqueue/class.tx_solrdam_indexqueue_damindexer.php";s:4:"4e30";s:10:"doc/README";s:4:"ce78";s:24:"static/solrdam/setup.txt";s:4:"e3c9";}',
	'suggests' => array(
	),
);

?>