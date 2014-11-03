<?php 
namespace Backend\LinkUtilities;
/**
 * A LinkDictionary is a dictionary-style data structure which holds Links for
 * lookup.
 *
 * @author: Olin Gallet
 * @date:   10/31/2014
 */
class LinkDictionary{
	private $data;
	
	/**
	 * Constructs a new LinkDictionary.
	 * @param SourceInterface $source the source for the links.
	 */
	public function __construct(\DesignPatterns\SourceInterface $source){
		$this->data = $source->getLinks();
	}
	
	/**
	 * Returns the link at the given index.
	 * @param int $index the index, must be 0 <= $index < $this->size()
	 */
	public function get($index){
		return $this->data[$index];
	}
	
	/**
	 * Returns the number of Links this dictionary has.
	 */
	public function size(){
		return count($this->data);
	}
}
?>