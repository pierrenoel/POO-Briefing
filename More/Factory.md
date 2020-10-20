# The design pattern ***Factory***

```php
class User
{
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName() : void
    {
        return $this->name;
    }

    public function setName(string $name) : string
    {
        $this->name = $name;
    }
}
```

```php
Class UserFactory{
    public static function create($name) : User{
        return new User($name);
    }
}

```

```php
$user = UserFactory::create('John');
echo $user->getName();
```