<?php
session_start();
include("includes/db.php");

if(isset($_POST['order'])){

$name = $_POST['customer_name'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$date = $_POST['delivery_date'];
$payment = $_POST['payment_method'];

$sql = "INSERT INTO orders
(customer_name, phone, address, delivery_date, product, quantity, payment_method)
VALUES
('$name','$phone','$address','$date','$product','$quantity','$payment')";

$conn->query($sql);

echo "<script>
alert('Order placed successfully!');
localStorage.removeItem('pastelCart');
window.location='order.php';
</script>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Pastel Dreams Bakery - Order</title>

<link rel="stylesheet" href="css/style.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body style="background-image:url('https://i.pinimg.com/1200x/f1/65/ec/f165ecedc772754afb8ef620a3c58c19.jpg'); background-size:cover;background-position:center;">


<!-- Header -->
<header class="dark-header text-center py-3">
<h1 class="dark-brand">Pastel Dreams Bakery</h1>
</header>

<hr class="dark-divider">


<!-- Navbar -->
<nav class="glass-nav navbar navbar-expand-lg">
<div class="container justify-content-center">

<ul class="navbar-nav dark-nav">

<li class="nav-item">
<a class="nav-link" href="index.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="menu.php">Menu</a>
</li>

<li class="nav-item">
<a class="nav-link active" href="order.php">Order</a>
</li>

</ul>

</div>
</nav>



<!-- Order Section-->

<section class="order-magical-area py-5 mt-5">

<div class="container">

<h2 class="section-title text-center mb-5">
Order Your Magical Cake
</h2>

<div class="row align-items-center">


<!-- Order Form Panel -->
<div class="col-lg-6">

<div class="order-form-panel">

<form id="orderForm" method="POST">

<input type="text"
class="form-control order-input"
name="customer_name"
placeholder="Your Name"
required>

<input type="tel"
class="form-control order-input"
name="phone"
placeholder="Phone Number"
required>

<input type="text"
class="form-control order-input"
name="address"
placeholder="Delivery Address"
required>

<input type="date"
class="form-control order-input"
name="delivery_date"
required>

<select class="form-control order-input" name="product">
<option selected disabled>Select Cake Type</option>
<option>Birthday Cake</option>
<option>Wedding Cake</option>
<option>Chocolate Cake</option>
<option>Custom Magical Cake</option>
</select>

<input type="number"
class="form-control order-input"
name="quantity"
placeholder="Quantity"
min="1"
value="1">

<textarea
class="form-control order-input"
rows="4"
placeholder="Your Message">
</textarea>


<!-- Payment Methods -->

<div class="order-payment-area">

<p class="payment-title">Choose Payment Method</p>

<label class="payment-option">
<input type="radio" name="payment_method" value="Cash on Delivery" checked>
Cash on Delivery
</label>

<label class="payment-option">
<input type="radio" name="payment_method" value="Credit / Debit Card">
Credit / Debit Card
</label>

<label class="payment-option">
<input type="radio" name="payment_method" value="Bank Transfer">
Bank Transfer
</label>

</div>


<button type="submit"
name="order"
class="btn btn-magical w-100 order-submit-btn">

Send Magical Order ✨

</button>

</form>

</div>

</div>


<!-- Contact Details -->

<div class="col-lg-6 order-contact-area text-center">

<h3 class="order-contact-title">
Contact Our Bakery
</h3>

<p class="order-contact-text">
Our cake fairies are always ready to bake your dream cake.  
Reach out to us anytime and let the sweetness begin.
</p>

<div class="order-contact-item">
📧 Email  
<br>
pastel@dreamsbakery.com
</div>

<div class="order-contact-item">
📞 Phone  
<br>
+94 77 248 7000
</div>

<div class="order-contact-item">
📍 Location  
<br>
Colombo, Sri Lanka
</div>


<!-- Mini Cart -->
<div class="mini-cart-box">

<h4>Your Sweet Cart 🛒</h4>

<ul id="cartItems"></ul>

<div class="cart-total">
Total: <span id="cartTotal">Rs 0</span>
</div>

<button onclick="clearCart()" class="btn btn-magical w-100 mt-2">
Clear Cart ✨
</button>

<p class="cart-note">
Your magical cakes will appear here before checkout.
</p>

</div>


</div>

</div>
</div>
</section>



<!-- Success Popup -->

<div class="order-success-overlay" id="orderSuccessPopup">

<div class="order-success-card">

<h3>✨ Your Magical Order Has Been Sent ✨</h3>

<p>
Our cake fairies received your order and will begin baking your dream cake soon.
</p>

<button onclick="closeOrderPopup()" class="btn btn-magical">
Sweet!
</button>

</div>

</div>



<!-- Sweet Message Section -->

<section class="order-sweet-message text-center">

<div class="sweet-message-box">

<h3 class="sweet-title">A Sweet Note For You</h3>

<div class="sweet-divider"></div>

<p class="sweet-text">

Every cake we bake carries a little magic and a lot of love.  
At <strong>Pastel Dreams Bakery</strong>, each sprinkle, swirl, and layer is crafted to turn
your moments into beautiful memories.

Whether it's a birthday, wedding, or a simple celebration of happiness,
our cake fairies work with passion and creativity to bring your sweetest dreams to life.

Thank you for trusting us to be part of your magical moments.  
Your happiness is the most delightful ingredient in every cake we create. ✨

</p>

<div class="sweet-sparkle s-msg1">✨</div>
<div class="sweet-sparkle s-msg2">✨</div>
<div class="sweet-sparkle s-msg3">✨</div>

</div>

</section>



<footer>
✨ Made with Magic by Pastel Dreams Bakery ✨
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>


<script>
document.getElementById("orderForm").addEventListener("submit", function(e){

let cart = JSON.parse(localStorage.getItem("pastelCart")) || [];

if(cart.length === 0){
alert("Your cart is empty. Please add a cake first.");
e.preventDefault();
}

});
</script>

</body>
</html>


</body>
</html>