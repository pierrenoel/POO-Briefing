# Traits

Let us start with an the ```Invoice``` class in which you have for the moment two attributes.

```php
class Invoice
{
    protected $ref;
    protected $price;

    public function __construct(
        string $ref,
        int $price,
    ){
        $this->ref = $ref;
        $this->price = $price;
    }

    // ...
}
```
Now, when I instantiate this class, I want to know the price including the tva. So, let us create a method ```priceWithTvaIncluded``` which pass the parameter tva.

```php
public function priceWithTvaIncluded($tva)
{
    $tvaExtracted = ($this->price * $tva) / 100;
    return $this->price + $tvaExtracted;
}
```



- [Previous](../07.interface/readme.md)