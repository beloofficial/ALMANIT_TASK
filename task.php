
<?php

$products = [
    [
        "name" => "X-Box One",
        "price" => 450000.00,
        "amount" => 15
    ],
    [
        "name" => "IPhone X",
        "price" => 560000.00,
        "amount" => 6
    ],


];

function my_function($percent)
{
    // https://sandbox.onlinephpfunctions.com/code/915c9f24752aae83792e22830dadf245945bba40
    
    global $products;
    foreach($products as $key=>$product){
        $products[$key]["shipping_cost"] = $product["price"] * $product["amount"] * $percent;
    }
   
}
my_function(0.02);

print_r($products);
