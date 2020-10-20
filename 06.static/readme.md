# Static class

A static class is a type of class which is instantiated once. It must contain a static attribute or a static method or both. The methods and attributes are accessed without the creation of the object.

```php
class Route
{
    public static function get()
    {
        echo 'Show the route';
    }
}
```

## :: in order to call a static method from a class

Now, you have to call instantiate this class **only once**. To call a method from a class, you always use the arrow after the object, but in this case, you are going to use **::**. That's a little bit different. Here is how we can call them.

```php
$route = new Route();
$route::get();
```

## SELF::$variable

But we saw we can create static methods but we can also create static attributes in our classes and call them in our static methods. Let us see how it works.

```php
class User
{
    protected static $name = "John";

    public static function getName()
    {
        echo "Hello " . SELF::$name;
    }
}

$john = new User();
$john::getName()

```