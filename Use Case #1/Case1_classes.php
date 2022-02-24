<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Items
{
    public string $name;
    public int $amount;
    public float $price;
    public float $tax;

    public function __construct(string $name, int $amount, float $price,float $tax)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->price = $price;
        $this->tax = $tax;
    }
    public function calcPrice(){
        $totalPrice = $this->amount * $this->price;
        return $totalPrice;
    }
    public function calcTax (){
        $totalTax = ($this->amount * $this->price) * $this->tax;
        return $totalTax;
    }
}
$banana = new Items("banana\s", 6 , 1, 0.06);
$apples = new Items("Apples", 3, 1.5, 0.06);
$wine = new Items("Bottle of wine", 2, 10, 0.21);

$totalPriceBanana = $banana->calcPrice();
$totalPriceApples = $apples->calcPrice();
$totalPriceWine = $wine->calcPrice();
$totalPrice = $totalPriceBanana + $totalPriceApples + $totalPriceWine;

echo "Total price of this basket is {$totalPrice}€.";

$taxPriceBanana = $banana->calcTax();
$taxPriceApples = $apples->calcTax();
$taxPriceWine = $wine->calcTax();
$totalTax = $taxPriceBanana + $taxPriceApples + $taxPriceWine;

echo "<br> You have {$totalTax}€ donated to the government.";
