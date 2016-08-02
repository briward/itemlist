<?php

namespace Briward\ItemList;

abstract class ItemValidation
{
  public function validate($item, $type)
  {
    $type = gettype($item);
    if($type === 'object') $type = get_class($item);
    if($type === $type) return true;
    throw new \Exception('This item does not match the specified type of "' . $type . '"');
  }
}
