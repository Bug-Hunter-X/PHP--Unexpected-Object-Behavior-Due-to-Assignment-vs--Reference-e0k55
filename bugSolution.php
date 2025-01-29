The solution lies in using the reference operator `&` when you intend to modify the original object:

```php
class MyClass {
    public $value = 10;
}

$obj1 = new MyClass();
$obj2 = &$obj1; // Use reference operator
$obj2->value = 20;

var_dump($obj1->value); // Outputs 20
var_dump($obj2->value); // Outputs 20
```

By using `&`, `$obj2` becomes a reference to `$obj1`.  Any changes made through `$obj2` directly affect `$obj1`, preventing the unexpected behavior shown in the original code.