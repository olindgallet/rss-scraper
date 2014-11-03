<?php
namespace Backend;

/**
 * A HardCodedSource has all RSS Links hardcoded into the PHP code.
 * 
 * @author: Olin Gallet
 * @date:   10/31/2014
 */
class HardCodedSource implements \DesignPatterns\SourceInterface{
	/**
	 * Constructs a new HardCodedSource.
	 */
	public function __construct(){
	}
	
	/**
	 * Returns the Links of this source.
	 */
	public function getLinks(){
		$links = Array();
		array_push($links, new LinkUtilities\Link("Haskell subReddit", "http://www.reddit.com/r/haskell/new.rss"));
		array_push($links, new LinkUtilities\Link("JAVA subReddit", "http://www.reddit.com/r/java/new.rss"));
		array_push($links, new LinkUtilities\Link("PHP subReddit", "http://www.reddit.com/r/php/new.rss"));
		array_push($links, new LinkUtilities\Link("Python subReddit", "http://www.reddit.com/r/python/new.rss"));
		array_push($links, new LinkUtilities\Link("Learn Python subReddit", "http://www.reddit.com/r/learnpython/new.rss"));
		array_push($links, new LinkUtilities\Link("Julia subReddit", "http://www.reddit.com/r/julia/new.rss"));
		array_push($links, new LinkUtilities\Link("NoFap subReedit", "http://www.reddit.com/r/nofap/new.rss"));
		return $links;
	}
}
?>