## Objects?

Let us have a look about object. An object in the current life can be a table, a car but even a human or a animal. The good thing is that's exactly the same ting in POO. 

Here is an example:

If we take car, we can describe it like below: 
- Color,
- wheels
- Engine
- and so on

We call that the attributes of an object (refer to variables). But as we know, objects interact with each other by some action, we call them methods (refer to functions)

Now let us see to our first example:

```php
class Car
{
    $color = "red";
    $wheels = 4;
    $engine = true;

    function start()
    {
        return 'The car starts';
    }

    function stop()
    {
        return 'The car stops';
    }
}
```

A class represents the object with some attributes and some methods, it describe how an object is and how what are its functionalities. 
An object is representative of the class, in other words, the instance of the class. 

So, let us instance our class Car

```php
$car =  new Car();
```

