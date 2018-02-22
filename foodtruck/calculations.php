<?php
//calculations.php

//declare variables
$order_total = ;
$tax = $total * 0.65; //WA state sales tax as of 5/03/17
$grand_total = $order_total + $tax;

//perform grand total calculations
function grandTotal($price, $sides){//if ther are sides
    $grand_total = ($price + $Quantity) + ($sides * $quant);
    
    
}//end grandTotal()