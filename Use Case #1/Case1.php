<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$basket =
[
    ['name'=> 'Banana \'s', 'pieces'=> 6, 'cost'=>1, 'tax' => 0.06],
    ['name'=> 'Apples', 'pieces'=> 3, 'cost'=>1.5, 'tax'=> 0.06],
    ['name'=> 'Bottles of wine', 'pieces'=> 2, 'cost'=>10, 'tax'=>0.21],

];
function pre_r($array)
{
    echo '<pre>';
    var_dump($array);
    echo '</pre>';
};
pre_r($basket);

function calculatePrice($array){
    $totalPriceOfBasket = 0;
    foreach($array as $product =>$value){
    
    $totalPriceOfBasket += ($value['pieces'] * $value['cost']);    
    }  
    return "Total price of this basket = {$totalPriceOfBasket}€."; 

    //pre_r($totalPriceOfBasket);
}

function calcTax($array){
    $taxIncluded = 0;
    foreach($array as $item =>$value){
        $taxIncluded += (($value['pieces'] * $value['cost'])*$value['tax']);
        
    }
    return "<br> You have {$taxIncluded}$ donated to the government.";
}
echo calculatePrice($basket);
echo calcTax($basket);
