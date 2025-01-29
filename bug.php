In PHP, a common yet subtle issue arises when dealing with references and object assignments.  Consider this scenario:

```php
class MyClass {
    public $value = 10;
}

$obj1 = new MyClass();
$obj2 = $obj1; // Assignment, not a reference
$obj2->value = 20;

var_dump($obj1->value); // Outputs 10
var_dump($obj2->value); // Outputs 20
```

Many developers expect `$obj1->value` to be 20 as well. However, the `=` operator in this case creates a copy of the object. Modifying `$obj2` does not affect `$obj1`.

To achieve a reference, use the `&` operator:

```php
$obj1 = new MyClass();
$obj2 = &$obj1; // Reference assignment
$obj2->value = 20;

var_dump($obj1->value); // Outputs 20
var_dump($obj2->value); // Outputs 20
```

This subtle distinction between assignment and reference can lead to unexpected behavior, particularly in larger applications.