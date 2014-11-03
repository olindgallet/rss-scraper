<?php 
	/** Replace with an auto-loader **/
	require_once('Backend/DesignPatterns/DateConditional.php');
	require_once('Backend/DesignPatterns/SourceInterface.php');
	require_once('Backend/DesignPatterns/ReportCommand.php');
	
	require_once('Backend/RssScraper/RssScraper.php');
	require_once('Backend/RssScraper/RssItem.php');
	
	require_once('Backend/LinkUtilities/LinkDictionary.php');
	require_once('Backend/LinkUtilities/Link.php');
	
	require_once('Backend/DayConditional.php');
	require_once('Backend/EmailCommand.php');
	require_once('Backend/HardCodedSource.php');
	/** End auto-loader sequence **/
	
	$scraper     = new Backend\RssScraper\RssScraper();
	$dict        = new Backend\LinkUtilities\LinkDictionary(new Backend\HardCodedSource());
	$conditional = new Backend\DayConditional(1);
	$command     = new Backend\EmailCommand('test@test.com');
	$i           = 0;
	
	while ($i < $dict->size()){
		$scraper->scrape($dict->get($i)->getURL(), $conditional, $command);
		echo 'Scrape of '.$dict->get($i)->getURL().' complete, email sent to test@test.com<br/><br/>';
		$i = $i + 1;
	}
?>