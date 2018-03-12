<?php

//calculations.php

echo "<b>Order Summary: </b><br />";

//declare variables
$order_total = 0; //total price
$price_map = getPriceMap(); //mapping of items and their prices
$orderList = $_REQUEST['order']; //fetch list of items ordered (from the index.html page)
$order_total = getOrderTotal($orderList, $price_map);

echo "<hr />Subtotal: ".$order_total."<br />";

//calculation of total price for the orders
$tax = $order_total * 0.65; //WA state sales tax 

echo "Taxes: ".$tax."<br />";
$grand_total = $order_total + $tax; //calculation of grand total , total price + tax

echo "Grand Toal: ".$grand_total;

//Calculate grand total 
function grandTotal($price, $sides){
    
    //Calculate total of any sides 
    $grand_total = ($price + $Quantity) + ($sides * $quant);
    }

function getOrderTotal($item_arr,$price_map){
    
    $total = 0;
    for($i=0;$i<count($item_arr);$i++){
        
        $total = $total + $price_map[$item_arr[$i]];
        echo "adding price for ".$item_arr[$i]." as ".$price_map[$item_arr[$i]]."<br>";

    }

    return $total;
}

function getPriceMap(){
//associative array containing the items and their price

    $priceList = array();
    $priceList["grand"] =6.50;
    $priceList["animal"] =7.50;
    $priceList["veggie"] =8.00;
    $priceList["mayo"] =0.50;
    $priceList["cheese"] =0.75;
    $priceList["chili"] =1.25;
    $priceList["jala"] =0.35;
    $priceList["meat"] =2.50;
    $priceList["fries"] =1.75;
    $priceList["shake"] =3.75;
    $priceList["drink"] =1.99;
    $priceList["lemon"] =2.50;

    return $priceList;
   }
?>
