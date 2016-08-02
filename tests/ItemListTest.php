<?php

use PHPUnit\Framework\TestCase;
use Briward\ItemList\ItemList;

class ItemListTest extends TestCase
{
    public function testCreationOfList()
    {
      $list = new ItemList('string');
      $this->assertEquals('string', $list->getType());
    }

    public function testAddingItemToList()
    {
      $list = new ItemList('string');
      $list->add('test');
      $this->assertNotEmpty($list->items());
    }

    public function testEmptyList()
    {
      $list = new ItemList('string');
      $this->assertEmpty($list->items());
    }

    public function testItemIsInList()
    {
      $list = new ItemList('string');
      $list->add('test');
      $this->assertTrue($list->contains('test'));
    }

    public function testItemIsNotInList()
    {
      $list = new ItemList('string');
      $list->add('test');
      $this->assertFalse($list->contains('not here'));
    }

    public function testListCanBeCleared()
    {
      $list = new ItemList('string');
      $list->add('test');
      $list->clear();
      $this->assertEmpty($list->items());
    }

    public function testItemCanBeFound()
    {
      $list = new ItemList('string');
      $list->add('test');
      $this->assertEquals('test', $list->find('test'));
    }
}
