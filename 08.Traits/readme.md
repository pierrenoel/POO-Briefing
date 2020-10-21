# Traits

Imagine you want to instantiate many classes for you new object because you need different classes. In PHP, a object can not be inherited from many classes. 

So you can use traits in order to workaround. 

## Example

```php
class  A 
{
    public function method1() : void
    {
        echo 'I am the method1';
    }

     public function method2() : void
    {
        echo 'I am the method2';
    }

    public function hello() : void
    {
        echo 'Hello';
    }
}

class B
{
    public function methodA(): void
    {
        echo 'I am the methodA';
    }

     public function methodB(): void
    {
        echo 'I am the methodB';
    }

    public function hello() : void
    {
        echo 'Hello';
    }
}

```

Because we can not instantiate many classes we can copy and paste the same method in every class. But as developers, we don't like to repeat our code! So let us use traits.

```php

trait class Hello
{
    public function hello() : void
    {
        echo 'Hello';
    }
}

class  A 
{
    
    use Hello;

    public function method1() : void
    {
        echo 'I am the method1';
    }

     public function method2() : void
    {
        echo 'I am the method2';
    }
}

class B
{
    
    use Hello;
    
    public function methodA(): void
    {
        echo 'I am the methodA';
    }

    public function methodB(): void
    {
        echo 'I am the methodB';
    }

}

```

We remark we have to call the trait class with the **use** keyword in our different classes. So now, you can call the hello function in the class A and B

```php
$a = new A();
$a->hello();

$b = new B();
$b->hello();
```

- [Previous](../07.interface/readme.md)