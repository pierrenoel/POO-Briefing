# Methods 

So, you need to show the result of an attribute or you need to edit one of them, we saw in the previous lesson that we can call the attribute with an arrow.

```php
$john->firstName = "Henry";
echo $john->firstName; // Return Henry
```

But it is not the correct way because we don't want to let the user update the attribute, we need to allow that in using accessors (Getters and Setters). So for all the attributes, you need to create a getter (eg: get the first name) and a setter (eg: set a new first name to the object). 


```php
class User{
    
    public $firstName;
    public $lastName;
    public $email;
    public $password;

    public function __construct(string $firstName, string $lastName, string $email, string $password)
    {
        $this->firstName = $firstName; 
        $this->lastName = $lastName; 
        $this->email = $email;
        $this->password = $password
    }

    public function getFirstName() : void
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName) : string
    {
        $this->firstName = $firstName;
    }

    //...

}

```

Now we can access to the attribute with two methods **getFirstName** and **setFirstName**

```php
$john->setFirstName('Henry');
var_dump($john->getFirstName()); // Return Henry
```

- [Previous](../02.construct/readme.md)
- [Next](../04.heritage/readme.md)