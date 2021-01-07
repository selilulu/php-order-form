<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

// We are going to use session variables so we need to enable sessions
session_start();

// Use this function when you need to need an overview of these variables
function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

// TODO: provide some products (you may overwrite the example)
$products = [
    ['name' => 'Milkshake', 'price' => 2.5],
    ['name' => 'Bowties', 'price' => 19.00],
    ['name' => 'furry kitten hats', 'price' => 9.00],
    ['name' => 'paper flowers', 'price' => 0.95],
    ['name' => 'banana cup', 'price' => 3.5],



];


$email="";
$address="";
$streetno="";
$city="";
$zipcode="";

$totalValue = 0;




if(isset($_POST['submit'])){

    $email=$_POST['email'];
    $street=$_POST['street'] ;
    $streetno=$_POST['streetnumber'];
    $city=$_POST['city'] ;
    $zipcode=$_POST['zipcode'];


}

// if($totalValue==2.5){
//     'name'== "Milkshake";

// } else if ($totalValue == 19.00){
//     'name'=='Bowties';
// }

require 'form-view.php';