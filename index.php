<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

// We are going to use session variables so we need to enable sessions
//note: The session_start() function must be the very first thing in your document. Before any HTML tags.


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
    ['name' => 'Milkshake',
     'price' => 2.5],

    ['name' => 'Bowties', 
    'price' => 19.00],

    ['name' => 'furry kitten hats',
     'price' => 9.00],

    ['name' => 'paper flowers', 
    'price' => 0.95],

    ['name' => 'banana cup',
     'price' => 3.5],



];

// echo "<pre>"; to print out in a more readable way
// var_dump($products[1]["price"]);
// echo "</pre>";



// empty string variables can be assigned also next to each other like below too
$productsErr= $emailErr = $streetErr = $streetnoErr =$emailErr = $cityErr = $zipcodeErr = "";
function test_input($data) {
    $data = trim($data);//ltrim() - Removes whitespace or other predefined characters from the left side of a string

    $data = stripslashes($data); //The stripcslashes() function removes \backslashes\ added by the addcslashes() function.


    $data = htmlspecialchars($data);//htmlspecialchars converts the html code into more unreadable code (chars like &&^$$$@)
    return $data;
  }
// this function above is for required areas and 


$email=""; $street=""; $streetno=""; $city=""; $zipcode=""; $totalValue = 0;



//$_REQUEST :Contains the values of both the $_GET and $_POST variables as well as the values of the $_COOKIE superglobal variable.

if(isset($_POST['submit'])){

    if(!empty($_POST['products'])) { //its to check the check box if its not empty.then get the value from form-view $value (saved $i on the other page)
        foreach($_POST['products'] as $value){
            echo "value : ".$value.'<br/>';

            // below the statements to get the products' price. here += sign adds the chosen products price!!!!. 
            if($products[$value]['name']=='Milkshake'){
                echo $totalValue += $products[$value]['price'] ; 
            }
                
            else if($products[$value]['name']=='Bowties'){
                echo $totalValue += $products[$value]['price'] ; 
            }
                
            else if($products[$value]['name']=='furry kitten hats'){
                echo $totalValue += $products[$value]['price'] ; 
            }
                
            else if($products[$value]['name']=='paper flowers'){
                echo $totalValue += $products[$value]['price'] ; 
             }
            else if($products[$value]['name']=='banana cup'){
                echo $totalValue += $products[$value]['price'] ; 
             }
        }
    

    $email=$_POST['email'];
    $street=$_POST['street'] ;
    $streetno=$_POST['streetnumber'];
    $city=$_POST['city'] ;
    $zipcode=$_POST['zipcode'];
    }

    // here is the part for form validation if required fields are empty or not
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) { //if the e mail area is empty then show the e mail is required error 
          $emailErr = "E-mail is required";
        } else {
          $email = test_input($_POST["email"]); // test_input () ??? 
        }
      
        if (empty($_POST["street"])) {
          $streetErr = "street name is required";
        } else {
          $street = test_input($_POST["street"]);
        }
      
        if (empty($_POST["streetnumber"])) {
          $streetnoErr = "street number is required";
        } else {
          $streetno = test_input($_POST["streetnumber"]);
        }
      
        if (empty($_POST["city"])) {
          $cityErr = "city name is required";
        } else {
          $city = test_input($_POST["city"]);
        }
        // here it is to make zipcode only numeric
        if ( ctype_digit($zipcode)) {  
          
          // if true then return Yes 
          echo "Yes\n"; 
      } else { 
            
          // if False then return No 
          echo "No\n"; 
      } 

        // zipcode numeric part ends 

        if(empty($_POST["zipcode"])){
            $zipcodeErr ="zipcode is required";
          }  else {
            $zipcode=test_input($_POST["zipcode"]);
        }

        // if(empty($_POST["products"])) {
        //     $productsErr= "Upsy,You didn't choose any products yet";
        // }else { 
        //     $products=test_input($_POST["products"]);
        // }

        }
      }

    


require 'form-view.php';