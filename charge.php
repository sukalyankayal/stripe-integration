<?php

//let's say each article costs 15.00 bucks
require('init.php');
try {
  \Stripe\Stripe::setApiKey("Give_your_Api_Key_here"); 

  $charge = \Stripe\Charge::create(array(
  "amount" => 7746465768,
  "currency" => "usd",
  "card" => $_POST['stripeToken'],
  "description" => "Charge for Facebook Login code."
));
	//send the file, this line will be reached if no error was thrown above
	echo "<h1>Your payment has been completed. We will send you the Facebook Login code in a minute.</h1>";


//you can send the file to this email:
echo $_POST['stripeEmail'];
}
//catch the errors in any way you like

catch(Stripe_CardError $e) {
	
}


catch (Stripe_InvalidRequestError $e) {
// Invalid parameters were supplied to Stripe's API

} catch (Stripe_AuthenticationError $e) {
// Authentication with Stripe's API failed
// (maybe you changed API keys recently)

} catch (Stripe_ApiConnectionError $e) {
// Network communication with Stripe failed
} catch (Stripe_Error $e) {

// Display a very generic error to the user, and maybe send
// yourself an email
} catch (Exception $e) {

// Something else happened, completely unrelated to Stripe
}
?>