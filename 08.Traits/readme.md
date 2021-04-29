# Traits

## The problem
PHP is a single inheritance language, that means a child class can inherit only from one single parent. This cause problem in our future project if we want to write reusable code. So, we have a nice solution out there called```traits```.

So, it is better to give an example for better understanding.

```php
class Animal 
{
    protected $name;
    protected $type;

    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

      // Getters and Setters 

    public function sayHello()
    {
        return 'Hello there!';
    }
}

class User
{
    protected $pseudo;
    protected $email;
    protected $password;

    public function __construct(string $pseudo, string $email, string $password)
    {
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->password = $password;
    }

    // Getters and Setters 

    public function sayHello()
    {
        return 'Hello there!';
    }
}


$dog = new Animal('Budy','Dog');
echo $dog->sayHello();

$user = new User('Admin','admin@admin.be','azerty');
echo $user->sayHello();
```

Do you find the problem? Well. DRY (Do not repeat). The method ```SayHello()``` is wrote twice in two different classes, but has the same body.

So, the reason we use traits are :
- Responding to a problem of multiple inherance 
- DRY
- If we want to maintain our code properly, and change the body, we have to update the method only once. 

***Note that it is important not to confuse the traits with the polymorphism.***

## Traits
```php
trait Salutation
{
    public function sayHello()
    {
        return 'Hello there!';
    }
}
```
Okay, now I have my trait but how can I call the function ```sayHello()``` in my classes **User** and **Animal**? 

Use the keyword **use** before the attributes

```php
class User
{
    use Salutation;

    // ...
}

```

## The result
```php

$animal = new Animal('Buddy','Dog');
echo $animal->sayHello();

$user = new User('John','john@email.be','azerty');
echo $user->sayHello();

```

And it works!

- [Previous](../07.interface/readme.md)