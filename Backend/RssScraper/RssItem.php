<?php
namespace Backend\RssScraper;
/**
 * An RssItem is an immutable object representing an item in a RSS feed.
 *
 * @author: Olin Gallet
 * @date:   11/1/2014
 */
class RssItem{
	private $title;
	private $url;
	private $pubDate;
	
	/**
	 * Constructs a new RSSItem.
	 * 
	 * @param string $title   the item title
	 * @param string $url    the item url
	 * @param string $pubDate the publication date.
	 */
	public function __construct($title, $url, $pubDate){
		$this->title   = $title;
		$this->url     = $url;
		$this->pubDate = $pubDate;
	}
	
	/**
	 * Returns the item title.
	 */
	public function getTitle(){
		return $this->title;
	}
	
	/**
	 * Returns the item url.
	 */
	public function getUrl(){
		return $this->url;
	}
	
	/**
	 * Returns the publication date.
	 */
	public function getPubDate(){
		return $this->pubDate;
	}
}
?>