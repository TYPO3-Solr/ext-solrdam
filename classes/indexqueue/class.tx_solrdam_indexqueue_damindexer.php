<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2012 Ingo Renner <ingo@typo3.org>
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
***************************************************************/


/**
 * An indexing helper for DAM records.
 *
 * @author Ingo Renner <ingo@typo3.org>
 * @package TYPO3
 * @subpackage solrdam
 */
class tx_solrdam_indexqueue_DamIndexer extends tx_solr_indexqueue_Indexer {

	/**
	 * Gets the full item record.
	 *
	 * @param tx_solr_indexqueue_Item $item The item to be indexed
	 * @param integer $language Language Id (sys_language.uid)
	 * @return array The full record with fields of data to be used for indexing
	 */
	protected function getFullItemRecord(tx_solr_indexqueue_Item $item, $language = 0) {
		$itemRecord = parent::getFullItemRecord($item, $language);

		if (!is_null($itemRecord)) {
			$file = t3lib_div::makeInstance('tx_solr_fileindexer_File', $itemRecord['file_path'] . $itemRecord['file_name']);

			$itemRecord['__solrdam_file_content']            = $file->getContent();
			$itemRecord['__solrdam_file_mime_type']          = $file->getMimeType();
			$itemRecord['__solrdam_file_name']               = $file->getName();
			$itemRecord['__solrdam_file_relative_path']      = $file->getRelativePath();
			$itemRecord['__solrdam_file_relative_path_only'] = $file->getRelativePath(tx_solr_fileindexer_File::PATH_EXCLUDE_FILE_NAME);
			$itemRecord['__solrdam_file_extension']          = $file->getExtension();
			$itemRecord['__solrdam_file_sha1']               = $file->getSha1();
		}

		return $itemRecord;
	}

}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/solrdam/classes/indexqueue/class.tx_solr_indexqueue_damindexer.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/solrdam/classes/indexqueue/class.tx_solr_indexqueue_damindexer.php']);
}

?>