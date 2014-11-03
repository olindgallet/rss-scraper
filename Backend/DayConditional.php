<?php
namespace Backend;
/**
 * @author Olin Gallet
 * @date 10/22/2014
 *
 * A DayConditional is a design pattern used to provide a conditional check passable as an object.
 * The interface is used to accept Dates that fall within a provided number of days.
 */
class DayConditional implements \DesignPatterns\DateConditional
{
	private $days;
	
	/**
	 * Constructs a new DayConditional with the limit provided.
	 * 
	 * @param int $days the number of days to limit
	 */
	public function __construct($days){
		$this->days = $days;
	}
	
	/**
	 * Accepts or rejects provided date based on the number of days given.
	 *
	 * @param Date $date the date to check.
	 */
    public function accept($date){
		return strtotime('+'.$this->days.' days', strtotime($date)) > time();
	}
}
?>