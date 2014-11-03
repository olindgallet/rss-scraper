<?php
namespace Backend\RssScraper;

/**
 * An RssScraper is used to scrape the contents of an RSS Feed.
 *
 * @author: Olin Gallet
 * @date:   10/31/2014
 */
class RssScraper{
	public function __construct(){
	}
	
	private function crawl_with_curl($url){
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}
	
	/**
	 * Scrapes the given url.  Returns a list of threads posted 24 hours before the current time.
	 * Note that the current implementation is specific to Reddit RSS feeds.
	 *
	 * @param string $url the url of the feed
	 */
	public function scrape($url, \DesignPatterns\DateConditional $conditional, \DesignPatterns\ReportCommand $command){
		$doc = new \DOMDocument();
		$doc->load($url);
		$rssItems = Array();
		$i = 0;
		
		$items = $doc->getElementsByTagname('item');
		while ($i < $items->length){
			$item = new RssItem(
				$items->item($i)->getElementsByTagName('title')->item(0)->nodeValue,
				$items->item($i)->getElementsByTagName('link')->item(0)->nodeValue,
				$items->item($i)->getElementsByTagName('pubDate')->item(0)->nodeValue
			);
					
			if ($conditional->accept($item->getPubDate())){
				array_push($rssItems, $item); 
			}
			$i = $i + 1;		
		}
		
		$command->execute($url, $rssItems);
	}
}
?>