<?php
namespace Backend;
/**
 * An EmailCommand reports the results of a scrape through email.
 *
 * @author: Olin Gallet
 * @date:   10/31/2014
 * 
 */
class EmailCommand implements \DesignPatterns\ReportCommand{
	private $email;
	
	/**
	 * Constructs a new EmailCommand.
	 *
	 * @param String $email a valid email to receive messages.
	 */
	public function __construct($email){
		$this->email = $email;
	}
	
	/**
	 * Sends a list of RSSItems to the email.
	 * @param String $url the url of the RSSItem
	 * @param RSSItem[] $items the RSSItems to send
	 */
	public function execute($url, $items){
		$i = 0;
		$message = '<table>';
		
		while ($i < count($items)){
			$message = $message.'<tr>';
			if ($i % 2 == 0){
				$message = $message.'<td style="background: #ccc">'.$items[$i]->getTitle().'</td>';
				$message = $message.'<td style="background: #ccc">'.$items[$i]->getPubDate().'</td>';
				$message = $message.'<td style="background: #ccc"><a href="'.$items[$i]->getURL().'">'.$items[$i]->getURL().'"</td>';
			} else {
				$message = $message.'<td>'.$items[$i]->getTitle().'</td>';
				$message = $message.'<td>'.$items[$i]->getPubDate().'</td>';
				$message = $message.'<td><a href="'.$items[$i]->getURL().'">'.$items[$i]->getURL().'"</td>';
			}
			$message = $message.'</tr>';
			
			$i = $i + 1;
		}
		
		$message = $message.'</table>';
		$title   = 'Scrape of '.$url;
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: <reddit-mailer-bot@your-site.com>' . "\r\n";
		mail($this->email, $title, $message, $headers);
	}
}
?>
