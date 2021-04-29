# Polymorphism

This part is a little more complex to understand and the fellowing examples could be hurt you a little bit ;). So, do not read this section many times.

```php
<?php

interface Role 
{
    public function permissions();
}

class Admin implements Role
{
    public function permissions()
    {
        $this->write();
        $this->update();
    }

    public function write()
    {
       echo 'Admin can write a new post';
    }

    public function update()
    {
        echo 'Admin can edit a post';
    }
}

class Member implements Role
{
    public function permissions()
    {
        return 'Member can only read a post';
    }
}

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
    
    public function role(Role $role)
    {
        return $role->permissions();
    }
}

$admin = new Admin();

$user = new User('John');
echo $role = $user->role($admin);
```