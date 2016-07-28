<?php

class WeightedRandomList {
	private $itemList;
	private $weights;
	private $total;
	
	public function __construct() {
		$this->itemList = array();
		$this->weights = array();
		$this->total = 0;
	}
	
	public function addItem($item, $weight) {
		$this->itemList []= $item;
		$this->weights []= $weight;
		$this->total += $weight;
	}
	
	public function pickItem() {
		$randomNumber = mt_rand(0, $this->total);
		
		$hi = 0;
		for($i=0; $i<count($this->weights); $i++) {
			$hi += $this->weights[$i];
			if($hi > $randomNumber) {
				return array ($i, $this->itemList[$i]);
			}
		}
		return array ($i, $this->itemList[$i]);
	}
}

