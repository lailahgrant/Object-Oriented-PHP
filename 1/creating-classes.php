<?php 

class Product 
{
    public $name = 'soap';
    public $price = 10;
}

$soapObject = new Product();
// Accessing the property of the object [use and object operator (->)]
print $soapObject->name . "\n"; 

//change the value of the property
$soapObject->name = 'toothpaste';
print($soapObject->name . "\n");

$priceObject = new Product();
print $priceObject->price . "\n";

$priceObject->price = 30;
print $priceObject->price . "\n";

?>