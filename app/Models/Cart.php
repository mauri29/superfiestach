<?php

namespace App\Models;

class Cart 
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;
	public $totalWeight = 0;
	public $totalOffer = 0;
	public $totalPost = 0;

	public function __construct($oldCart)
	{
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
			$this->totalWeight = $oldCart->totalWeight;
			$this->totalOffer = $oldCart->totalOffer;
			$this->totalPost = $oldCart->totalPost;
		}
	}

	public function add($item, $id)
	{
		$storeItem = ['qty' => 0, 'price' => $item->price, 'weight' => $item->weight, 'offer' => $item->offer, 'item' => $item];
		if($this->items){
			if(array_key_exists($id, $this->items)) {
				$storeItem = $this->items[$id];
			}
		}
		$storeItem['qty']++;
		$storeItem['price']=$item->price * $storeItem['qty'];
		$storeItem['weight']=$item->weight * $storeItem['qty'];
		$storeItem['offer']--;
		$this->items[$id] = $storeItem;
		$this->totalQty++;
		$this->totalPrice += $item->price;
		$this->totalWeight += $item->weight;
		$this->totalOffer--;
		if($this->totalWeight<=2){
			$this->totalPost=7;
		}
		else if($this->totalWeight>2 && $this->totalWeight<=5){
			$this->totalPost=9;
		}
		else if($this->totalWeight>5 && $this->totalWeight<=10){
			$this->totalPost=10;
		}
		else if($this->totalWeight>10 && $this->totalWeight<=20){
			$this->totalPost=15;
		}
		else if($this->totalWeight>20 && $this->totalWeight<=30){
			$this->totalPost=22;
		}				
	}

	public function addByOne($id)
	{
		if($this->items[$id]['offer']>0) {
			$this->items[$id]['qty']++;
			$this->items[$id]['price']+=$this->items[$id]['item']['price'];
			$this->items[$id]['weight']+=$this->items[$id]['item']['weight'];
			$this->items[$id]['offer']--;
			$this->totalQty++;
			$this->totalPrice += $this->items[$id]['item']['price'];
			$this->totalWeight += $this->items[$id]['item']['weight'];
			$this->totalOffer--;
			if($this->totalWeight<=2){
				$this->totalPost=7;
			}
			else if($this->totalWeight>2 && $this->totalWeight<=5){
				$this->totalPost=9;
			}
			else if($this->totalWeight>5 && $this->totalWeight<=10){
				$this->totalPost=10;
			}
			else if($this->totalWeight>10 && $this->totalWeight<=20){
				$this->totalPost=15;
			}
			else if($this->totalWeight>20 && $this->totalWeight<=30){
				$this->totalPost=22;
			}
		}
		//Here the number of products cannot be infinity 
	}

	public function reduceByOne($id)
	{
		$this->items[$id]['qty']--;
		$this->items[$id]['price']-=$this->items[$id]['item']['price'];
		$this->items[$id]['weight']-=$this->items[$id]['item']['weight'];
		$this->items[$id]['offer']++;
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['price'];
		$this->totalWeight -= $this->items[$id]['item']['weight'];
		$this->totalOffer++;
		if($this->totalWeight<=2){
			$this->totalPost=7;
		}
		else if($this->totalWeight>2 && $this->totalWeight<=5){
			$this->totalPost=9;
		}
		else if($this->totalWeight>5 && $this->totalWeight<=10){
			$this->totalPost=10;
		}
		else if($this->totalWeight>10 && $this->totalWeight<=20){
			$this->totalPost=15;
		}
		else if($this->totalWeight>20 && $this->totalWeight<=30){
			$this->totalPost=22;
		}
		if($this->items[$id]['qty'] <= 0){
			unset($this->items[$id]);
		}
	}

	public function removeItem($id)
	{
		$this->totalQty-= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		$this->totalWeight -= $this->items[$id]['weight'];
		$this->totalOffer += $this->items[$id]['offer'];
		if($this->totalWeight<=2){
			$this->totalPost=7;
		}
		else if($this->totalWeight>2 && $this->totalWeight<=5){
			$this->totalPost=9;
		}
		else if($this->totalWeight>5 && $this->totalWeight<=10){
			$this->totalPost=10;
		}
		else if($this->totalWeight>10 && $this->totalWeight<=20){
			$this->totalPost=15;
		}
		else if($this->totalWeight>20 && $this->totalWeight<=30){
			$this->totalPost=22;
		}
		unset($this->items[$id]);
	}



}





