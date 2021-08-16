# Abstract

## Abstract classes

Abstract classes begins with the abstract keyword and contains at least one abstract function. they cannot be instantiated. The only way to use the methods of the class is to **inherit it**. 

### Can not be instantiated

```php
abstract class User
{
    abstract function show();
}

$user = new User(); // It shows an error
```

```Uncaught Error: Cannot instantiate abstract class ```

### Abstract functions can not have a body

```php
abstract class User
{
    abstract public function show()
    {
        echo 'Hello User';
    }
}

$user = new User(); 
$user->show();
```

```  Abstract function User::show() cannot contain body ```

### But it must be inherit

```php
abstract class User
{
    abstract public function show();
}

class Admin extends User
{
    public function show()
    {
        echo 'Hello Admin';
    }
}
$b = new Admin;
$b->show(); // It shows Hello Admin
```

### Abstract class can have a constructor

```php
abstract class User
{
    public function __construct()
    {
        echo 'Constructor of the parent class';
    }

    abstract public function show();
}

class Admin extends User
{
    public function show() 
    {
        echo 'Hello Admin';
    }
}

$admin = new Admin(); // Prints 'constructor of the parent class'
$admin->show(); // Prints 'Hello Admin'
```

### To end this chapter, here are some rules you need to know

- the child class method must be defined with the same name and it redeclares the parent abstract method

- the child class method must be defined with the same or a less restricted access modifier

- the number of required arguments must be the same. However, the child class may have optional arguments in addition


- [Previous](../04.heritage/readme.md)
- [Next](../06.static/readme.md)