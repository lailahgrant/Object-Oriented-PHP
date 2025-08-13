# Object Oriented Programming in PHP
**by GaryClarkeTech**

> PHP is a backend programming language used to make applications.

**Characteristics of PHP**
- [x] PHP is a popular language
- [ ] It is a Server side language
- [ ] It powers many APIs and Microservices.
- [ ] It's an actively supported language
- [ ] It has a large and engaged open-source community.
- [ ] It's updated yearly.
- [ ] Excellent OOP features.
- [ ] Compares well with other OOP languages

**PHP developers must be able to write object oriented code:-**
- [x] It's used in professional applications.
- [ ] It's used in frameworks like Symfony, Laravel and Drupal.

**Key takeaways**
- [x] Be able to read and write OOPHP
- [ ] Be able to recognize design patterns
- [ ] Be able to test code
- [ ] Framework code will be familiar
- [ ] Have an advantage over less-grounded developers

## Objects
> What is an Object?
>
> - In OOP we combine **`related variables and functions`** into a **`cohensive unit`** which we call an **OBJECT**.
> - [x] An object groups related `variables` and `functions`.
> 
> For example
> - On Amazon, a user can be an objetc, a cart can be an object
> - On Spotify; [Objects related to a playlist function can be - name, creator, song count, length]
>
> - [x] `Properties`: Variables which belong to objects.
> 
> Functionalities that can be performed on the Spotify playlist:-
> - Play the playlist, go to next song, enable repeat,
> All this **functionality** can be handled by `Methods`
> 
> - [x] `Methods`: name of functions that belong to objects.

#### Benefits of OOP (Why OOP exists)
- [x] The data and the functions that operate on that data are grouped together (`Encapsulation`).
- [ ] Reduced complexity 
- [ ] Allows for  reuse
- [ ] Changes only need to happen in one place
- [ ] Code is better otganized and more coherent
- [ ] Makes it easy to visualize the design of your application
- [ ] **OOP is your friend!**

#### Where do objects come from? How do we create them?
> Create Classes
- [x] To create an object, you need a `Class`
> What is a Class?
> - A Class is a blueprint tha defines what an object will look like, what's it's attributes are.
- [ ] Use `class` keyword to create a class
- [ ] Can create **multiple** `objects` from **one** `class`.

```php
<?php 

class Product 
{

}

// Create an instance of the Product class
// This is how you create an object from a class
$product = new Product();
//inspect an object 
var_dump($product);

$anotherProduct = new Product();
var_dump($anotherProduct);

?>
```

- [x] Give `properties` to the `Class`
  - [ ] *Properties* are **variables** which belong to a `Class`.
  - [ ] Define **properties** with a a `visibility` keyword like **`public`**, **`private`**
  - [ ] Accessing the `property` of the object by using and object operator (**`->`**)

```php
<?php 

class Product 
{
    public $name = 'soap';
}

$soapObject = new Product();
// Accessing the property of the object [use and object operator (->)]
print $soapObject->name . "\n"; 

//change the value of the property
$soapObject->name = 'toothpaste';
print($soapObject->name . "\n");

?>
```

##### Exercise 1
- [x] Create a price property and give it a default integer value
- [ ] Access the price on a product object and print it
- [ ] Change the price
- [ ] Access the new price on a product object and print it
> Solution 
```php
<?php 

class Product 
{
    public $name = 'soap';
    public $price = 10;
}

$priceObject = new Product();
print $priceObject->price . "\n";

$priceObject->price = 30;
print $priceObject->price . "\n";

?>
```