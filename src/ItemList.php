<?php

namespace Briward\ItemList;

use Briward\ItemList\ListValidation;
use Briward\ItemList\ItemValidation;

class ItemList
{

  private $type;
  private $items;
  private $list_validation;
  private $item_validation;

  public function __construct($type) {
    $this->list_validation = new ListValidation;
    $this->item_validation = new ItemValidation;
    $this->list_validation->validate($type);
    $this->type = $type;
  }

  public function add($item) {
    $this->item_validation->validate($item, $this->type);
    $this->items[] = $item;
  }

  public function items() {
    return $this->items;
  }

  public function clear() {
    $this->items = [];
  }

  public function contains($item) {
    $key = array_search($item, $this->items, true);
    if(is_int($key)) return true;
    return false;
  }

  public function remove($item) {
    $key = array_search($item, $this->items, true);
    unset($this->items[$key]);
  }

  public function reverse() {
    $this->items = array_reverse($this->items);
  }

  public function find($item) {
    $key = array_search($item, $this->items, true);
    return $this->items[$key];
  }

  public function getType() {
    return $this->type;
  }

}
