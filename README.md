ItemList
==========

[![Build Status](https://travis-ci.org/briward/itemlist.svg?branch=master)](https://travis-ci.org/briward/itemlist)

Provides a way to build strongly typed lists of values that can be accessed by index. Provides methods to search, sort, and manipulate lists. Heavily inspired by the .NET List<T> class.

Installation
------------

`composer require briward/itemlist`

Example usage
-------------

```
use Briward\ItemList\ItemList;

class Foo {}

$list = new ItemList('Foo');
$list->add(new Foo());
print_r($list->items());
```
