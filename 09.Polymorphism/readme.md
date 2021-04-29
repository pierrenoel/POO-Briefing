# Polymorphism

This part is a little more complex to understand and the fellowing example could be difficult a little bit ;). So, read this section many times if necessarily.

## Trait vs Polymorphism 

In traits, we declare a method which be used with the same body in every class where it called. The polymorphism is something different in sense of we do not know the behavior or we do not know the body of the class which is called as an object in the method.

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

Nothing new here. Now let us create roles. However each role has different permissions, an admin can create or edit a post and a member can only read a post. So, let us implement the method role in our **User** class.

```php
   public function role()
    {
        return 'Now user has a role';
    }
```

## The two roles

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

## An interface for the roles class

```php
interface Role 
{
    public function permissions();
}

```

## Admin & Member implement the Role interface

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

## Object as a parameter

We pass the instance of the class as parameter in our method **Role()**, in order to have access to the content in the right class.

```php
  public function role(Role $role)
    {
        return $role->permissions();
    }
```

```php
$admin = new Admin();
$member = new Member();

$userMargaux = new User('Margaux');
echo $userMargaux->role($admin);

$userMartin = new User('Martin');
echo $userMartin->role($member);
```