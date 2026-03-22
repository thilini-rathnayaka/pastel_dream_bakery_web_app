<?php
session_start();
include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pastel Dreams Bakery</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Great+Vibes&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- Header -->
<header class="dark-header text-center py-3">
<h1 class="dark-brand">Pastel Dreams Bakery</h1>
</header>

<hr class="dark-divider">

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-light glass-nav fixed-top">
<div class="container">

<a class="navbar-brand brand">Pastel Dreams</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navMenu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="index.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="menu.php">Cakes</a>
</li>

<li class="nav-item">
<a class="nav-link" href="order.php">Order</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#contact">Contact</a>
</li>

<?php if(isset($_SESSION['user'])){ ?>

<li class="nav-item">
<span class="btn btn-magical ms-3">
<?php echo $_SESSION['user']; ?>
</span>
</li>

<li class="nav-item">
<a class="btn btn-magical ms-2" href="auth/logout.php">Logout</a>
</li>

<?php } else { ?>

<li class="nav-item">
<a class="btn btn-magical ms-3" data-bs-toggle="modal" data-bs-target="#signupModal">
Sign Up
</a>
</li>

<li class="nav-item">
<a class="btn btn-magical ms-2" data-bs-toggle="modal" data-bs-target="#loginModal">
Login
</a>
</li>

<?php } ?>

</ul>

</div>
</div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginModal">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">
<h5>Login</h5>
<button class="btn-close" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">

<form action="auth/login.php" method="POST">

<input class="form-control mb-3" type="email" name="email" placeholder="Email" required>

<input class="form-control mb-3" type="password" name="password" placeholder="Password" required>

<button type="submit" class="btn btn-magical w-100">
Login
</button>

</form>

</div>

</div>

</div>

</div>

<!-- Hero + Carousel -->
<section class="hero-section">

<div class="magic-light light1"></div>
<div class="magic-light light2"></div>

<div id="magicalCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">

<div class="carousel-inner">

<div class="carousel-item active">
<img src="https://i.pinimg.com/1200x/ea/e7/d8/eae7d8d767eed9566b298e5479dfd5f7.jpg" class="d-block w-100">
<div class="carousel-caption">
<h1 class="hero-title">Baked with love,<br>decorated with dreams ✨</h1>
<a href="order.html" class="btn btn-magical">Order Now</a>
</div>
</div>

<div class="carousel-item">
<img src="https://i.pinimg.com/736x/c1/c0/3f/c1c03fb6c85f122faf6cb5e8ff79ef4d.jpg" class="d-block w-100">
<div class="carousel-caption">
<h1 class="hero-title">Sweetness made magical 💕</h1>
<a href="menu.html" class="btn btn-magical">Explore Cakes</a>
</div>
</div>

<div class="carousel-item">
<img src="https://i.pinimg.com/1200x/5c/c6/e3/5cc6e3fa9940c9389a366d0906e10033.jpg" class="d-block w-100">
<div class="carousel-caption">
<h1 class="hero-title">Where every slice tells a story 🌸</h1>
<a href="menu.html" class="btn btn-magical">See More</a>
</div>
</div>

</div>
</div>

<div id="sparkle-container"></div>

</section>

<!-- About Section-->

<section class="container py-5 text-center">

<h2 class="section-title">Our Story</h2>

<p class="about-text">
At Pastel Dream Bakery, every cake begins with a little sprinkle of magic and a lot of love. In our dreamy kitchen, fresh ingredients, delicate flavors, and creative imagination come together to create cakes that feel like sweet little fairy tales. Whether it’s a joyful birthday, a romantic wedding, or a simple moment worth celebrating, our cakes are crafted to fill hearts with happiness and turn memories into something truly magical. ✨🍰
</p>

</section>

<!-- Our Creations Section -->
<section class="creations container py-5 text-center">

<h2 class="section-title"
style="display:flex;align-items:center;justify-content:center;gap:15px;white-space:nowrap;">

<span style="flex:1;height:2px;background:rgb(69,67,67);"></span>

Our Creations

<span style="flex:1;height:2px;background:rgb(69,67,67);"></span>

</h2>

<div class="row g-4">

<div class="col-md-4">
<div class="cake-card">
<img src="https://i.pinimg.com/1200x/2c/bf/1c/2cbf1c8bb8ec7328b9078df1212feaf4.jpg">
<h4>Emerald Fairy Blossom Cake</h4>
<p>A delicate emerald green cake kissed with soft white cream swirls and blooming sugar flowers, as if a garden fairy decorated it at dawn. Legend says the first slice releases the sweetness of an enchanted forest where blossoms glow under moonlight. Every bite feels like a little spell of joy, turning simple moments into magical celebrations. ✨</p>
</div>
</div>

<div class="col-md-4">
<div class="cake-card">
<img src="https://i.pinimg.com/736x/bd/d9/64/bdd964de3ef8c0ea1810765d617f985e.jpg">
<h4>Moonlit Enchanted cake</h4>
<p>Under a quiet moonlit sky, the Moonlit Enchanted Berry Cheesecake was born from a secret bakery spell where blueberries shimmer like tiny stars. Wrapped in silky vanilla cream and decorated with delicate white, green, and purple blossoms, it carries the sweetness of a hidden fairy garden. One bite is said to awaken a little sparkle of joy, as if a fairy dusted your heart with blueberry magic. ✨🫐🍰</p>
</div>
</div>

<div class="col-md-4">
<div class="cake-card">
<img src="https://i.pinimg.com/736x/8c/87/9f/8c879f07d06af9310a74d3e7e4c9bc5a.jpg">
<h4>Raspberry Velvet Dream</h4>
<p>Deep within the Pastel Dreams kitchen, this cake was born from a swirl of rich chocolate velvet, sweet raspberries, and silky VIP cheesecake cream. Each layer melts together like a spell, blending tart berry magic with luxurious chocolate sweetness. One bite feels like stepping into a fairy garden where every crumb whispers a delicious little secret. ✨</p>
</div>
</div>

</div>

</section>

<!-- Why Choose Us Section -->
<section class="why-section text-center py-5">

<h2 class="section-title"
style="display:flex;align-items:center;justify-content:center;gap:15px;white-space:nowrap;">

<span style="flex:1;height:2px;background:rgb(69,67,67);"></span>

Why Choose Us?

<span style="flex:1;height:2px;background:rgb(69,67,67);"></span>

</h2>

<div class="row mt-4">

<div class="col-md-4">
<div class="why-card">🧁<p>Fresh Ingredients</p>
<p>At Pastel Dreams Bakery, every cake begins with the finest ingredients chosen with love and care. We blend rich cocoa, creamy butter, silky vanilla, and fresh berries like ruby raspberries to create flavors that feel both luxurious and magical. Just like a secret recipe whispered between cake fairies, each ingredient is carefully selected to bring softness, sweetness, and a little sparkle of happiness into every bite. ✨🍰</p></div>
</div>

<div class="col-md-4">
<div class="why-card">🎂<p>Custom Designs</p>
<p>At Pastel Dreams Bakery, every custom cake begins with a dream and a little sprinkle of magic. We lovingly craft each design to reflect your story, transforming your ideas into a beautiful edible masterpiece filled with delicate flavors, soft textures, and enchanting details. Whether it’s a fairytale wedding, a joyful birthday, or a moment close to your heart, our cake fairies work with passion and care to create a one-of-a-kind creation made just for you. ✨🍰</p></div>
</div>

<div class="col-md-4">
<div class="why-card">💖<p>Handmade with Love</p>
<p>Every cake at Pastel Dreams Bakery is lovingly handcrafted as if it were a small piece of edible magic. Our bakers carefully blend the finest ingredients, rich flavors, and delicate decorations with patience, passion, and a sprinkle of fairy dust. From the first swirl of cream to the final sparkling touch, each cake is made to carry warmth, joy, and love into every celebration it becomes part of. ✨🍰</p></div>
</div>

</div>

</section>

<!-- Customer Review -->
<section class="review-section text-center py-5">

<h2 class="section-title"
style="display:flex;align-items:center;justify-content:center;gap:15px;white-space:nowrap;">

<span style="flex:1;height:2px;background:rgb(69,67,67);"></span>

Customer Reviews

<span style="flex:1;height:2px;background:rgb(69,67,67);"></span>

</h2>

<div class="review-card">
<p>"Truly magical cakes! Every bite feels like a dream come true."</p>
<div class="stars">⭐⭐⭐⭐⭐</div>
</div>
<br>
<br>


<!-- NewsLetter -->

<section class="newsletter">

<h2>Join Our Sweet Newsletter</h2>

<p>Get cake offers, discounts and magical updates ✨</p>

<form action="contact.php" method="POST">

<div class="newsletter-form">

<textarea 
name="message" 
placeholder="Enter your message"
class="newsletter-message"
required></textarea>

<input 
type="email" 
name="email" 
placeholder="Enter your email"
required>

<button type="submit" class="btn-magical">
Subscribe
</button>

</div>

</form>

</section>

<!-- Contact Section -->

<section id="contact" class="container py-5 text-center">

<h2 class="section-title">Contact Us</h2>

<p>📍 Colombo, Sri Lanka</p>
<p>📞 +94 77 248 7000</p>
<p>📧 pastel@dreamsbakery.com</p>

</section>

<!-- Sign Up Modal -->
<div class="modal fade" id="signupModal" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
<h5 class="modal-title">Sign Up</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">

<form action="auth/register.php" method="POST">

<input class="form-control mb-3" type="text" name="username" placeholder="Full Name" required>

<input class="form-control mb-3" type="email" name="email" placeholder="Email" required>

<input class="form-control mb-3" type="password" name="password" placeholder="Password" required>

<button type="submit" class="btn btn-magical w-100">
Create Account
</button>

</form>

</div>

</div>
</div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
<h5 class="modal-title">Login</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">

<form action="auth/login.php" method="POST">

<input class="form-control mb-3" type="email" name="email" placeholder="Email" required>

<input class="form-control mb-3" type="password" name="password" placeholder="Password" required>

<button type="submit" class="btn btn-magical w-100">
Login
</button>

</form>

</div>

</div>
</div>
</div>

<footer>
✨ Made with Magic by Pastel Dreams Bakery ✨
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>