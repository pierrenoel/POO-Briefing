# Objects?

Let us have a look about object. An object in the current life can be a table, a car but even a human or an animal. The good thing is that's exactly the same ting in POO. 

Here is an example:

If we take an user, we can describe it like below: 

- first name
- last name
- email
- password 
- ...

We call that **the attributes** of an object (refer to variables). But as we know, objects interact with each other by some action, we call them **methods** (refer to functions)

If we take our user back, we can assign some actions:

- write an article
- comment 
- update the gallery
- ...

But we know the existence of an object but most of them are very different, we know that two people do not have the same email or password.
How can we differentiate them? 

We need to create a class.

```A class can define types of operations, or methods, that can be performed on a object```

In some other words, a class is the place where you are going to initiate all the attributes and the methods of your object. Let see how to write a class.

```php
class User{
    
    public $firstName;
    public $lastName;
    public $email;
    public $password;

    public function writeArticle()
    {
        return 'The user wrote an article';
    }

    public function comment()
    {
        return 'The user wrote a comment';
    }
}
```

```markdown
- Use the keyword **class** 
- The name of you class must contain the first letter in uppercase
- Do not pay attention for the moment to the **public** keyword
```

## How to instantiate an object from an existing class? 

```php
$john = new User();
$john->firstName = "John";

var_dump($john);

```

If we see the result of our var_dump function, we see that we assign the firstName to our object John.

```php
object(User)#1 (1) {
  ["firstName"]=>
  string(6) "John"
}

```

We can also call a method from our class

```php
echo $john->comment(); //returns The user wrote a comment
```
- [Previous](../README.md)
- [Next](../02.contruct/readme.md)