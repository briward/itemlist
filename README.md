ItemList
==========

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
$list->items()
```
