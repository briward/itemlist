<?php

namespace Briward\ItemList;

use Briward\ItemList\ListValidation;
use Briward\ItemList\ItemValidation;

/**
 * Class List
 */
class ItemList {

  /**
   * @var string
   */
  private $type;

  /**
   * @var array
   */
  private $items;

  /**
   * @var ListValidation
   */
  private $list_validation;

  /**
   * @var ItemValidation
   */
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

  private function validateItemType($item) {
    $type = gettype($item);
    if($type === 'object') $type = get_class($item);
    if($type === $this->type) return true;
    throw new \Exception('This item does not match the specified type of "' . $this->type . '"');
  }

}
