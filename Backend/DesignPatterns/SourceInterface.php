<?php
namespace DesignPatterns;
/**
 * A SourceInterface is a source that provides Links for a LinkDictionary.  Viable options
 * include a database, XML file, and hardcoding the data in PHP.
 *
 * @author: Olin Gallet
 * @date:   10/31/2014
 * 
 */
interface SourceInterface{
	public function getLinks();
}
?>