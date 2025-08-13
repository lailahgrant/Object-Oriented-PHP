<?php 

class Product 
{
    public $name = 'soap';
    public $price = 100; //have a value of NULL by default
    public function priceAsCurrency($currencySymbol = '$') //Pass an argument with a default value
    {
        $priceAsCurrency = $this->price/100;
        return $currencySymbol . $priceAsCurrency;
    }
}

$product = new Product();
print $product->priceAsCurrency() . PHP_EOL;

?>