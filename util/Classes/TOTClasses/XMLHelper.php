<?php
	
	/*	
	Created by Open Fibers
	25'O Clock Inc.
	Sep 9 2012
	 */

	namespace PHP_TOT_OTAServer;

	require_once(__DIR__.'/../ThirdPartyLib/CFPropertyList/CFPropertyList.php');

	function ArrayFromXMLPath($xmlPath)
	{
		$plist = new CFPropertyList($xmlPath, CFPropertyList::FORMAT_XML);
		return $plist->toArray();
	}

	function SaveArrayAsXMLToPath($savingArray, $xmlPath)
	{
		$td = new CFTypeDetector();
		$guessedStructure = $td->toCFType( $savingArray );
		$plist = new CFPropertyList();
		$plist->add( $guessedStructure );
		$plist->saveXML($xmlPath);
	}

	function XMLStringFromArray($array)
	{
		$td = new CFTypeDetector();
		$guessedStructure = $td->toCFType( $array );
		$plist = new CFPropertyList();
		$plist->add( $guessedStructure );
		$content = $plist->toXML();
		return $content;
	}
?>