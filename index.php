<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payments using Stripe</title>	
</head>
<body>
<h1>Buy Facebook login Script</h1>
<p>Price: 12560.00$</p>
<p>Name: How to Login with Facebook Graph API in PHP</p>

<form action="charge.php" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="Your_publishable_key_here" // your publishable keys
   data-image="myimg.jpg"
    data-name="sukuTest"
    data-description="Download Script ($12560.00)"
    data-amount="1256000">
  </script>
</form>

</body>
</html>