<?php
namespace Backend\LinkUtilities;
/**
 * A Link is an immutable data type which holds the URL and a name for a link.
 *
 * @author: Olin Gallet
 * @date:   10/31/2014
 */
 
class Link{
	private $name;
	private $url;
	
	/**
	 * Constructs a new Link.
	 * @param $name the name for this Link
	 * @param $url  the url for this link
	 */
	public function __construct($name, $url){
		$this->name = $name;
		$this->url  = $url;
	}
	
	/**
	 * Returns the name.
	 */
	public function getName(){
		return $this->name;
	}
	
	/**
	 * Returns the URL.
	 */
	public function getURL(){
		return $this->url;
	}
}
?>