<?php // This files is mostly containing things for your view / html ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>Your fancy store</title>
    <style>
    .error {color: #FF0000;}

    </style>
    
</head>
<body>
<div class="container">
    <h1>Tiptop</h1>
    <h1>Place your order</h1>
    <p><?php echo $email ?></p>
    <p><?php echo $street ?> </p>
    <p><?php echo $streetno ?></p>

    <p><?php echo $city ?></p>
    <p><?php echo $zipcode ?></p>


    <?php // Navigation for when you need it ?>
    <?php /*
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="?food=1">Order food</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?food=0">Order drinks</a>
            </li>
        </ul>
    </nav>
    */ ?>
    <form method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" class="form-control"/>
                <!-- span class to aim for styling red -->
                <span class="error">* <?php echo $emailErr;?></span> 
                <br><br>
            </div>
            <div></div>
        </div>

        <fieldset>
            <legend>Address</legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="street">Street:</label>
                    <input type="text" name="street" id="street" class="form-control">
                    <span class="error">* <?php echo $streetErr;?></span>

                </div>
                <div class="form-group col-md-6">
                    <label for="streetnumber">Street number:</label>
                    <input type="text" id="streetnumber" name="streetnumber" class="form-control">
                    <span class="error">* <?php echo $streetnoErr;?></span>

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City:</label>
                    <input type="text" id="city" name="city" class="form-control">
                    <span class="error">* <?php echo $cityErr;?></span>

                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode">Zipcode</label>
                    <input type="number" id="zipcode" name="zipcode" class="form-control">
                    <span class="error">* <?php echo $zipcodeErr;?></span>

                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Products</legend>
            <?php foreach ($products as $i => $product): ?>
                <label>
					<?php // <?p= is equal to <?php echo ?>
                    <!--mynote: in value of the input we had value="1" and to change that into the $i. 
                    it prints us the index value so lets us to target it with $value at index.php -->
                    <input type="checkbox" value=<?php echo $i ?> name="products[<?php echo $i ?>]"/> 
                    <?php echo $product['name'] ?> - &euro; <?= number_format($product['price'], 2) ?>
                </label><br />
            <?php endforeach; ?>
        </fieldset>

        <button type="submit" class="btn btn-primary" name="submit">Order!</button>
    </form>

    <footer>You already ordered <strong>&euro; <?php echo $totalValue ?></strong> in food and drinks.</footer>
</div>

<style>
    footer {
        text-align: center;
    }
</style>
</body>
</html>