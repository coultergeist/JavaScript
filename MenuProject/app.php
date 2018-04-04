<?php
define('PRICE', [
    'grand' => 6.50, 
    'animal' => 7.50, 
    'veggie' => 8.00, 
    'mayo' => 0.50, 
    'cheese' => 0.75, 
    'chili' => 1.25, 
    'jala' => 0.35, 
    'meat' => 2.50, 
    'fries' => 1.75, 
    'shake' => 3.75, 
    'drink' => 1.99
]);

class App
{
    public static function fetchPrice()
    {
        if (isset($_POST['submit'])) {
            extract($_POST);
            print PRICE[$order[0]];
        }
    }
}
