<?php
//calculations.php
  
   //declare variables
  
   $order_total = 0; //variable to store the total price for the orders given
   $price_map = getPriceMap();   //variable to store the mapping of items and their prices
   $orderList = $_REQUEST['order'];   //get the list of items ordered by the customer from the index.php page
   $order_total = getOrderTotal($orderList, $price_map);    //calculation of total price for the orders
   $tax = $order_total * 0.65; //WA state sales tax as of 5/03/17. Calculation of tax
   $grand_total = $order_total + $tax;   //calculation of grand total , total price + tax
  
   //echo $grand_total;   

   //perform grand total calculations
   function grandTotal($price, $sides)
   {
       // sides (optional)
       $grand_total = ($price + $Quantity) + ($sides * $quant);
   }
   function getOrderTotal($item_arr,$price_map)
   {
       /**
       * This function is used to calculate the total price of the items ordered by the customer
       */
       $total = 0;
       for($i=0;$i<count($item_arr);$i++)
       {
           $total = $total + $price_map[$item_arr[$i]];  
           //echo "adding price for ".$item_arr[$i]." as ".$price_map[$item_arr[$i]]."<br>";
           
       }
       return $total;
   }
   function getPriceMap()
   {
       /**
       * This function creates a mapping of each item in the
       * menu and their prices and returns an associative array containing
       * the items and their prices
       */
        $priceList = array();
        $priceList["tsoup"] =2.50;
        $priceList["bandb"] =1.00;
       $priceList["csalad"] =3.50;
       $priceList["gfishnp"] =8.50;
       $priceList["ipizza"] =5.50;
       $priceList["vegpasta"] =4.00;
       $priceList["chickennpotato"] =6.50;
       $priceList["dburger"] =5.00;
       $priceList["fsalad"] =2.50;
       $priceList["icecream"] =2.00;
       $priceList["ccake"] =4.00;   
       $priceList["cheese"] =5.50;  
       return $priceList;
   }
?>
