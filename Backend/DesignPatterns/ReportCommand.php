<?php
namespace DesignPatterns;
/**
 * A ReportCommand reports the results of a scrape.  Subclasses must provide a way
 * to utilize the provided data.
 *
 * @author: Olin Gallet
 * @date:   10/31/2014
 * 
 */
interface ReportCommand{
	public function execute($url, $items);
}
?>