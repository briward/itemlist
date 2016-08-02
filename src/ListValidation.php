<?php

namespace Briward\ItemList;

class ListValidation {

  private $validTypes = [
    'boolean',
    'integer',
    'float',
    'string',
    'array'
  ];

  public function validate($type)
  {
    if(in_array($type, $this->validTypes)) return true;
    if(class_exists($type)) return true;
    throw new \Exception('This type is neither a scalar, compound or defined object.');
  }

}
