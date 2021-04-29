# Polymorphism

This part is a little more complex to understand and the fellowing examples could be hurt you a little bit ;). So, do not read this section many times.

## Trait vs Polymorphism 

In traits, we declare a method which be used with the same body in every class where it called. The polymorphism is something different in sense of we don't know the behavior or what the method has supposed to get in parameter.

So, in order to demonstrate this, we can create the basic class User.

```php
class User 
{
    protected $pseudo;
    protected $email;
    protected $password;

    public function __construct(
        string $pseudo,
        string $email = "null",
        string $password = "null"
    ){
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->password = $password;
        
    }

    public function getPseudo() : string 
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo) : string 
    {
        $this->pseudo = $pseudo;
    }

    public function getEmail() : string 
    {
       return $this->email;
    }

    public function setEmail(string $email) : string 
    {
        $this->email = $email;
    }

    public function getPassword() : string 
    {
        return $this->password;
    }
    

    public function setPassword(string $password) : void
    {
        $this->password = crypt($password);
    }
}
```

Nothing new here. Now I want to create roles for the user. However each role has different permissions, an admin can create or edit a post and a member can only read a post. So, let us implement the method role in our **User** class.

```php
   public function role()
    {
        return 'Now user has a role';
    }
```

Let us create the two role mentioned above.

```php
class Admin 
{
    public function permissions()
    {
        Return 'Admin can write and edit posts';
    }

}

class Member 
{
    public function permissions()
    {
        return 'Member can only read a post';
    }
}
```

## Let us create an interface for the roles class

```php
interface Role 
{
    public function permissions();
}

```

// Describe here

```php
class Admin implements Role
{
    public function permissions()
    {
        Return 'Admin can write and edit posts';
    }

}

class Member implements Role
{
    public function permissions()
    {
        return 'Member can only read a post';
    }
}
```

// Describe here

```php
  public function role(Role $role)
    {
        return $role->permissions();
    }
```

```php
$admin = new Admin();

$user = new User('John');
echo $role = $user->role($admin);
```