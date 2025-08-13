<?php 

class Product 
{
    public $name = 'soap';
    public $price; //have a value of NULL by default

    // create a method to convert the currency of the price
    public function priceAsCurrency()
    {
        $priceAsCurrency = $this->price/100;
        return $priceAsCurrency;
    }
}

$soapObject1 = new Product();
$soapObject1->price = 550;

$soapObject2 = new Product();
$soapObject2->price = 650;

$priceAsCurrency = $soapObject1->priceAsCurrency();
$priceAsCurrency2 = $soapObject2->priceAsCurrency();


var_dump($priceAsCurrency). PHP_EOL;
var_dump($priceAsCurrency2). PHP_EOL;



?>