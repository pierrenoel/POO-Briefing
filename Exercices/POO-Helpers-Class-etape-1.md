# POO: Helpers Class : Step 1

## Objectif
As you may have seen, we can embed PHP into HTML. However, it becomes very quickly difficult to read with the successive opening and closing of PHP tags and the alternation between PHP and HTML.

We will minimize this alternation as much as possible by creating PHP classes that will generate HTML directly.

You will understand for example. Imagine a form on a modification page.

```php
<form action="<?php echo $action; ?>" method="POST">
    <input name="firstName" value="<?php echo $firstName ?>" >
    <input name="lastName" value="<?php echo $lastName ?>" >
    <input type="submit" value="Update" >
</form>
```

The variables $action, $firstName and $lastName have values directly retrieved from the database.

As you can see, HTML and PHP are mixed.

To minimize this, we can create a Form class that handles form generation. We will have a slightly more readable code.

```php
echo $form = new Form();
echo $form->create($action); // create the beginning of the form
echo $form->text('firstName',$firstName); // create a text input with default value $firstName
echo $form->text('lastName',$lastName); //create a text input with default value $lastName
echo $form->submit('Update'); //Create a button to submit the form named Modify
echo $form->end(); //close the form
```

We juggle less with the opening and closing of php tags.

There are many other advantages of using PHP to generate HTML, including benefiting from the power of PHP to customize the generated code according to a simple parameter :)

Create a Form class that will take care of generating the different elements of the form. For the Form class you don't have to use the example above.

This class will have to have methods and properties in order to be able to generate :

- The beginning of the form <form ...>
- A text input <input type="text"...>
- A select box <select ...> ...</select>
- A submit button <button type="submit"></button>
- A textarea <textarea ...> ...</textarea>
- A radio button <input type="radio"...>
- A checkbox <input type="checkbox">

You should create this class thinking that it will be used by another developer. Use meaningful property and method names, keep it simple and comment your code.

[POO in php (4/30): Form](https://www.youtube.com/watch?v=rTGmcdFAWqw)