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
    public bool $isFruit;

    public function __construct(string $name, int $amount, float $price,float $tax, bool $isFruit)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->price = $price;
        $this->tax = $tax;
        $this->isFruit = $isFruit;
    }
    public function calcPrice(){
        if($this->isFruit == true){
            $totalPrice = ($this->amount * $this->price)*0.5;
        } else {
        $totalPrice = $this->amount * $this->price;
        }
        return $totalPrice;
    }
    public function calcTax (){

        $totalTax = ($this->amount * $this->price) * $this->tax;
        return $totalTax;
    }
}

$banana = new Items("banana\s", 6 , 1, 0.06, True );
$apples = new Items("Apples", 3, 1.5, 0.06, True);
$wine = new Items("Bottle of wine", 2, 10, 0.21,False);

echo "{$banana->calcPrice()}";
echo "<br> {$wine->calcPrice()}";