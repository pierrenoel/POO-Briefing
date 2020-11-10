# Interface

## Quit definition

A interface gives us the possibility to create a lots of methods in a class without declaring the body of them. To declare an interface, you have to write the interface keyword
before the name of the class. Then, you have to write all the definition of the methods you want, but they have to be declared in public.

```php
interface MyInterface
{
    public function method1();
    public function method2();
    public function method3();
}
```

## How to create class from interfaces? 
Just using the keyword **implement**

```php
class MyClass implements MyInterface
{
    public function method1() : string {
        return 'I am the first method';
    }

    public function method2() : string
    {
        return 'I am the second method';
    }

    public function method3() : string
    {
        return 'I am the last method';
    }
}
```

## You can implement more than one interface

```php

class MyClass implements MyInterface1, MyInterface2, MyInterface3
{
    // Here are the methods define in the interfaces
}

```

- [Previous](../06.static/readme.md)
- [Next](../08.Traits/readme.md)