<?php
	require_once "stripe-php-master/init.php";
	require_once "products.php";

$stripeDetails = array(
		"secretKey" => "sk_test_51NHAEgSItSJ8OJR3mmk1ml2SW0flsZboqWbdUK9Et0DN5hYvt1ZNHujb3qOVrfyWbFlJc79xijDMTcFAdF8cBLLf00exw6mGwD",  //Your Stripe Secret key
		"publishableKey" => "pk_test_51NHAEgSItSJ8OJR3ZLKWlXmJMBImZKXQfTmwOwygXaRyoMWSxFAFnpudBKc3bUyrDjJ0UcSMBo7Zvkej5HGL7fF400TFBAAH7a"  //Your Stripe Publishable key
	);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);

	
?>
