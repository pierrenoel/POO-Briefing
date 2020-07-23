# Construct

Now imagine you want to instantiate many people, like below, it going to take time.

```php
$john = new User();
$john->firstName = 'John';
$john->lastName = 'Doe';
$john->email = 'john@doe.com';
$john->password = '1234';
```

## Add a constructor 

We can initiate the value of the attribute when the instantiate the object, let us do that.

```php
$john = new User('John','Doe','john@doe.com','1234');
```

Now we see that we have one line left, it is much better than before but it is not magic at all, we need to modify a little our class.
We need to a constructor.

`Constructor in PHP is special type of function of a class which is automatically executed as any object of that class is created or instantiated. Constructor is also called magic function because in PHP, magic method is start usually with two underscore characters.`


```php
public function __construct($firstName,$lastName,$email,$password);
```

## $this 

When you call the construct method, we use $this which is a pseudo-variable. It refers to the object we have created below.

```php
public function __construct($firstName,$lastName,$email,$password){
    $this->firstName = $firstName; // $this->firstName is the attribute we have declared in our class 
    $this->lastName = $lastName; // $lastName is the parameter of our construct method
    $this->email = $email;
    $this->password = $password
}
```

[Previous](../01.Introduction/readme.md)
[Next](../03.methods/readme.md)