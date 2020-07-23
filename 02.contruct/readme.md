# Construct

Now imagine you want to instantiate many people, like below, it going to take time.

```php
$john = new User();
$john->firstName = 'John';
$john->lastName = 'Doe';
$john->email = 'john@doe.com';
$john->password = '1234';
```

## Refactoring our class in order to avoid the instantiation of the object.

We can initiate the value of the attribute when the instantiate the object, let us do that.

```php
$john = new User('John','Doe','john@doe.com','1234');
```

