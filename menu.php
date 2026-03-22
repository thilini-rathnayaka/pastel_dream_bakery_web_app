<?php
session_start();
include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Pastel Dreams Bakery | Menu</title>

<link rel="stylesheet" href="css/style.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Great+Vibes&display=swap" rel="stylesheet">

</head>

<body>

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
<a class="nav-link active" href="menu.php">Menu</a>
</li>

<li class="nav-item">
<a class="nav-link" href="order.php">Order</a>
</li>

</ul>

</div>
</nav>



<!-- Menu Hero section -->
<section class="menu-hero-section text-center">

<h2 class="section-title">Our Magical Cakes</h2>

<p class="menu-hero-sub">
At Pastel Dreams Bakery, every cake is created like a small piece of edible art, where soft flavors, fresh ingredients, and a touch of imagination come together in perfect harmony. Our kitchen is filled with warmth, creativity, and a sprinkle of fairy magic, turning simple ingredients into beautiful cakes made to celebrate life’s most precious moments. With every slice, we hope to share a little joy, a little wonder, and a lot of sweetness with the hearts we bake for. ✨🍰
</p>

</section>



<!-- Filtering Buttons -->
<section class="container text-center menu-filter-area">

<button class="btn btn-magical m-2" onclick="filterCakes('all')">All</button>
<button class="btn btn-magical m-2" onclick="filterCakes('birthday')">Birthday</button>
<button class="btn btn-magical m-2" onclick="filterCakes('wedding')">Wedding</button>
<button class="btn btn-magical m-2" onclick="filterCakes('chocolate')">Chocolate</button>
<button class="btn btn-magical m-2" onclick="filterCakes('custom')">Custom</button>

</section>



<!-- Cake Grid -->
<section class="container py-5">

<div class="row g-4">


<!-- Birthday Cakes -->
<div class="col-md-4 cake birthday">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/c1/27/ce/c127ce000429f4d61dac13b85c809955.jpg" class="img-fluid">

<h5 class="mt-3">Blushing Heart Enchantment</h5>

<p>
A cake woven with sweetness, love, and a little birthday magic. Each soft bite melts like a dream, filling hearts with joy and warm wishes. May this enchanted heart cake make your special day sparkle with happiness. ✨🎂💖
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</button>

</div>
</div>

<div class="col-md-4 cake birthday">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/4f/a4/d1/4fa4d13bf5997282d09b2d31126128e3.jpg" class="img-fluid">

<h5 class="mt-3">Moonlit Cherry Velvet</h5>

<p>
A dreamy heart of soft cherry mousse and velvet cake, kissed with sweetness and magic. Each bite melts like a love spell, rich with berries and creamy clouds of delight. Made to celebrate hearts, wishes, and the sweetest birthday dreams. 🍒✨🍰
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</button>

</div>
</div>

<div class="col-md-4 cake birthday">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/ab/e1/47/abe147622dd9d4089d0377860896b8a5.jpg" class="img-fluid">

<h5 class="mt-3">Moonlit Teddy</h5>

<p>
Under the soft glow of the moon, a little teddy guards this sweet dream of love and magic. Each slice carries warm wishes, gentle hugs, and sparkling birthday joy. May this dreamy cake fill your heart with happiness as bright as the stars. ✨🎂💖
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>
<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake birthday">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/89/0f/66/890f66a7b210f805a0d4bf0e301d3b28.jpg" class="img-fluid">

<h5 class="mt-3">Coffee Heart</h5>

<p>
A dreamy heart cake infused with the warm magic of rich coffee and sweet cream.
Baked with love to make your birthday glow like a beautiful midnight wish.
Every bite feels like a soft whisper of sweetness and celebration. ✨🍰
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,000
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake birthday">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/12/d1/1b/12d11bd8b8a44b75870e494e97c1a062.jpg" class="img-fluid">

<h5 class="mt-3">Cloudberry Fantasy</h5>

<p>
High above the clouds, pastry fairies crafted this dreamy dessert. Its light and fluffy layers melt like sweet clouds on your tongue. Each bite feels like floating through a magical sky.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,000
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake birthday">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/ee/0e/fa/ee0efa11271f206cb7621be88eef7ae9.jpg" class="img-fluid">

<h5 class="mt-3">Enchanted Blossom</h5>

<p>
Deep within a secret fairy meadow, blossoms bloom only under the glow of moonlight and morning dew. Inspired by this magical garden, the Enchanted Blossom Garden cake is crafted with delicate floral sweetness and dreamy pastel layers.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake birthday">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/64/09/70/640970b56cc57c041519bebdca45d129.jpg" class="img-fluid">

<h5 class="mt-3">Melody Enchanted</h5>

<p>
Deep within the bakery’s sweetest corner, the Melody Enchanted Cake was born from sugar, dreams, and a whisper of music. Every layer holds a magical rhythm, as if tiny fairy musicians baked their favorite melodies into the frosting.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake birthday">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/a3/5d/44/a35d44bb262e023f1189b006882b1cdf.jpg" class="img-fluid">

<h5 class="mt-3">Starlight Grand Prix</h5>

<p>
Under the glow of enchanted stars, the Starlight Grand Prix Cake races across a magical sugar track. Crafted with rich chocolate layers and shimmering frosting, it carries the spirit of speed and celebration.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake birthday">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/93/b9/23/93b9232df5ee0bc6bb425b63399036d2.jpg" class="img-fluid">

<h5 class="mt-3">Crimson Blossom</h5>

<p>Born from the whispers of spring gardens, the Crimson Blossom Enchantment cake carries the sweet magic of cherry blossoms kissed by moonlight. Each maroon velvet layer hides a delicate cherry cream that blooms with every bite, like petals drifting in a dreamy breeze.</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,000
</p>
<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake birthday">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/34/5b/e6/345be682f467b3c177bc61bec1c7c7ea.jpg" class="img-fluid">

<h5 class="mt-3">Mellow Dream</h5>

<p>
Baked under the soft glow of moonlight, the Moonlight Mellow Dream Cake was created by the bakery’s tiny cake fairies to bring comfort and sweetness to every celebration. Its delicate layers melt like a gentle dream, wrapping each bite in warmth and happiness.</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake birthday">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/72/95/e8/7295e800c9df4b7b1f7d3c956ffc5d4c.jpg" class="img-fluid">

<h5 class="mt-3">Butter Blossom</h5>

<p>
In a quiet enchanted garden where sugar flowers bloom, the Golden Butter Blossom Delight was born from the first golden rays of morning sunshine. Each soft buttery layer melts like a warm hug, while delicate blossoms of sweetness dance across every bite.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake birthday">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/0c/42/d7/0c42d74c04b9aca9afb3aa7bf89bba02.jpg" class="img-fluid">

<h5 class="mt-3">Miracle Blossom</h5>

<p>
In the heart of the Pastel Dreams Bakery garden, a rare blossom blooms only under moonlight. Our bakers capture the magic of that blossom and transform it into a soft, dreamy cake filled with sweetness and wonder.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>




<!-- Wedding Cakes -->
<div class="col-md-4 cake wedding">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/c4/33/da/c433da67e931b293945ed0353c3f6d45.jpg" class="img-fluid">

<h5 class="mt-3">Eternal Love Blossom Cake</h5>

<p>
Two hearts begin their forever journey wrapped in layers of sweetness. Each slice celebrates a love that blooms beautifully with time.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 15,000
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake wedding">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/0f/ed/16/0fed16052787c6316cd4a94d99f51093.jpg" class="img-fluid">

<h5 class="mt-3">Golden Promise Wedding Cake</h5>

<p>
Soft golden layers symbolize a promise that will shine forever. This cake celebrates the beginning of a lifetime of shared dreams.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 15,000
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake wedding">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/79/6d/5c/796d5c591bff802b07fba897de900e6a.jpg" class="img-fluid">

<h5 class="mt-3">Royal Romance Cake</h5>

<p>
Elegant layers crafted for a love story worthy of a fairytale. Every bite feels like a royal celebration of two souls becoming one.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 15,000
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake wedding">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/2a/c8/76/2ac8763bf1917f308d5989fd9a40e0b1.jpg" class="img-fluid">

<h5 class="mt-3">Heavenly Union Cake</h5>

<p>
Delicate cream and soft flavors come together in perfect harmony. Just like the couple, every layer completes the other beautifully.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 15,000
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake wedding">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/3d/8c/04/3d8c049cdec2ccd18d7958593b73c27b.jpg" class="img-fluid">

<h5 class="mt-3">Forever After Cake</h5>

<p>
Inspired by fairytale endings and magical beginnings. This cake celebrates the moment when two stories become one forever.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 15,000
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>



<div class="col-md-4 cake wedding">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/ee/1b/41/ee1b415026402b94fde97303c1abe06e.jpg" class="img-fluid">

<h5 class="mt-3">Blushing Bride Delight</h5>

<p>
Soft pink tones and gentle sweetness reflect the beauty of a bride’s happiness. Every bite carries the warmth of love and joy.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 20,000
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake wedding">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/97/9f/7e/979f7e92d78390f42cdd60cab10a2723.jpg" class="img-fluid">

<h5 class="mt-3">Dreamy Lace Wedding Cake</h5>

<p>
Inspired by delicate bridal lace and timeless elegance. This cake adds a touch of romance to the sweetest day of your life.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 15,000
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake wedding">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/9f/f9/f2/9ff9f263cb3062f254513bf26b5b1379.jpg" class="img-fluid">

<h5 class="mt-3">Celestial Love Cake</h5>

<p>
A cake touched with magic like stars lighting the night sky. Each slice celebrates a love written in the stars.

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 15,000
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake wedding">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/06/62/a4/0662a483351cc6ce86fb9e8b30b0310a.jpg" class="img-fluid">

<h5 class="mt-3">Pearl Promise Cake</h5>

<p>
Elegant and graceful like pearls of love. This cake symbolizes purity, beauty, and the promise of forever.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 15,000
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake wedding">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/79/b0/16/79b016bae224a2a2fe8d58c30885f5e8.jpg" class="img-fluid">

<h5 class="mt-3">Sweet Vows Celebration Cake</h5>

<p>
Created to celebrate the vows that unite two hearts. Every layer holds the sweetness of promises meant to last a lifetime.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 15,000
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake wedding">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/d5/db/43/d5db436485d676a47763881b1c25b406.jpg" class="img-fluid">

<h5 class="mt-3">Harmony Hearts Cake</h5>

<p>
Two flavors blended perfectly together like two hearts in harmony. A beautiful symbol of love, balance, and togetherness.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 20,000
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake wedding">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/f6/82/9f/f6829f40b02c8153edb995ad85dc8f75.jpg" class="img-fluid">

<h5 class="mt-3">Enchanted Garden Wedding Cake</h5>

<p>
Inspired by a magical garden where love blossoms endlessly. Each slice feels like a sweet moment from a romantic fairytale.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 15,000
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>


<!-- Chocolate Cake  -->
<div class="col-md-4 cake chocolate">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/50/6b/66/506b66ab8993221fc0cbfaaf30bbb601.jpg" class="img-fluid">

<h5 class="mt-3">Velvet Cocoa Cloud</h5>

<p>
Light chocolate sponge floating on soft chocolate cream. Each bite feels like tasting a fluffy cocoa cloud.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>


<div class="col-md-4 cake chocolate">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/c4/89/90/c489905626de6ab068273289db468a4c.jpg" class="img-fluid">

<h5 class="mt-3">Enchanted Chocolate Garden</h5>

<p>
Dark chocolate cake blooming with rich cocoa flavor. It feels like stepping into a magical garden filled with sweet cocoa blossoms.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>


<div class="col-md-4 cake chocolate">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/34/a7/99/34a7994a317859a533dcb52db46d5490.jpg" class="img-fluid">

<h5 class="mt-3">Starlight Chocolate Bliss</h5>

<p>
Smooth chocolate cake shining with sweet ganache. A dessert that sparkles like tiny stars in a magical bakery sky.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>


<div class="col-md-4 cake chocolate">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/3a/bb/ed/3abbed3a5148370068b7d56fc8f48658.jpg" class="img-fluid">

<h5 class="mt-3">Royal Chocolate Crown</h5>

<p>
A luxurious chocolate cake worthy of a royal celebration. Its creamy layers feel like a crown of sweetness.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>


<div class="col-md-4 cake chocolate">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/04/56/44/0456447ec229e825b41a2c1267587411.jpg" class="img-fluid">

<h5 class="mt-3">Chocolate Whisper Cake</h5>

<p>
A delicate chocolate cake that melts softly with every bite. It feels like a sweet whisper of cocoa magic.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>


<div class="col-md-4 cake chocolate">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/92/4b/2a/924b2ac6f0ec2f00efebaefd8bbf47ef.jpg" class="img-fluid">

<h5 class="mt-3">Dreamy Cocoa Paradise</h5>

<p>
Layers of rich chocolate and silky cream create a dreamy dessert paradise. Perfect for moments filled with happiness.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>


<div class="col-md-4 cake chocolate">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/77/45/bb/7745bb69a189f30e8e57cd7b2709fd12.jpg" class="img-fluid">

<h5 class="mt-3">Sweet Cocoa Symphony</h5>

<p>
Chocolate flavors blend like music in every layer. Each bite feels like a delicious melody of cocoa sweetness.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>


<div class="col-md-4 cake chocolate">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/ac/20/6f/ac206f93667b618e1a4ad7047f0c5d8f.jpg" class="img-fluid">

<h5 class="mt-3">Magic Truffle Chocolate Cake</h5>

<p>
A rich truffle chocolate cake filled with deep cocoa flavor. One bite feels like discovering a hidden chocolate treasure.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>


<div class="col-md-4 cake chocolate">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/1f/b0/3a/1fb03a5dbe701d59084c0549363237cf.jpg" class="img-fluid">

<h5 class="mt-3">Twilight Chocolate Fantasy</h5>

<p>
A rich chocolate cake born in the soft glow of twilight. Its creamy cocoa layers taste like a dreamy evening dessert.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>


<div class="col-md-4 cake chocolate">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/12/a5/89/12a589e767b08879fb4cb38015142a78.jpg" class="img-fluid">

<h5 class="mt-3">Cocoa Starfall Cake</h5>

<p>
Deep chocolate sponge covered with smooth ganache. Each bite feels like tasting sweet cocoa stars falling from the sky.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>


<div class="col-md-4 cake chocolate">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/e4/e7/f8/e4e7f85cebb22115d1f5eb575c7dcc46.jpg" class="img-fluid">

<h5 class="mt-3">Velvet Chocolate Enchantment</h5>

<p>
Silky chocolate layers wrapped in smooth cocoa cream. One slice feels like a tiny piece of chocolate magic from a fairy bakery.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>


<div class="col-md-4 cake chocolate">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/3b/54/c9/3b54c9e2f827af03288e21d6bd03f32d.jpg" class="img-fluid">

<h5 class="mt-3">Celestial Chocolate Dream</h5>

<p>
A rich chocolate cake layered with silky cocoa cream and gentle sweetness. Each bite feels like tasting a little piece of chocolate magic from the stars.

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>



<!-- Custom Cakes -->

<div class="col-md-4 cake custom">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/2c/2a/32/2c2a32751db616a2c0c2fbc8b601e142.jpg" class="img-fluid">

<h5 class="mt-3">Strawberry Enchanted Cloud</h5>

<p>
Born in a garden where strawberry fairies dance at sunrise, this cake carries the sweetness of enchanted berries and silky cream. Each bite melts like a soft pink cloud, leaving behind a whisper of magic.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 850
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake custom">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/dd/7c/41/dd7c417be1a958853cf857ff0ae75f82.jpg" class="img-fluid">

<h5 class="mt-3">Blueberry Cloud</h5>

<p>
Under the glow of a gentle moon, sweet blueberries are whipped into a soft butter mousse that melts like a dreamy cloud
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 900
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake custom">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/b2/30/9b/b2309b9113d10862862bfe0d4a2e2626.jpg" class="img-fluid">

<h5 class="mt-3">Emerald Whisper Tiramisu</h5>

<p>
In a hidden garden where moonlight kisses emerald avocados, our fairies created a dreamy tiramisu layered with creamy avocado clouds and soft cocoa magic.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 900
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake custom">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/cd/35/1d/cd351d5ca81e7363c12b09007a46b70c.jpg" class="img-fluid">

<h5 class="mt-3">Cherry Moonlight Mousse</h5>

<p>
Under the glow of a soft moon, enchanted cherries are whipped into a cloud-light mousse that melts like sweet magic on the tongue.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 850
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake custom">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/5d/75/13/5d751378b3f3dfda709caa2ff443a0d1.jpg" class="img-fluid">

<h5 class="mt-3">Moonberry Whisper</h5>

<p>
Baked under the soft glow of moonlight, this creamy cheesecake is swirled with enchanted mulberries that whisper sweet forest secrets in every bite.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 800
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake custom">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/0f/6b/67/0f6b671f1bdb5fad7a0160ac4b384208.jpg" class="img-fluid">

<h5 class="mt-3">Blueberry Tiramisu</h5>

<p>
Under a quiet moonlit sky, sweet blueberries dance through layers of soft tiramisu cream and delicate cake. Each bite melts like a dreamy midnight dessert, where berries sparkle like tiny stars in a magical bakery garden.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 800
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake custom">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/d0/12/6c/d0126c121dd390b98eca1d7a0c356f3b.jpg" class="img-fluid">

<h5 class="mt-3">Cherry velvet</h5>

<p>
Sweet cherries bloom inside soft velvet layers like petals in a spring garden.
Every bite feels like tasting a tiny cherry blossom dream.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 850
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake custom">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/10/eb/e2/10ebe237fa022a483527fedf4c87d771.jpg" class="img-fluid">

<h5 class="mt-3">Ruby Pomegranate Cheesecake</h5>

<p>
Glowing pomegranate jewels sparkle within creamy cheesecake layers.
A magical dessert kissed by the sweetness of hidden ruby fruits.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 850
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake custom">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/8f/12/69/8f12697e031bf681fd2beac071cc7c24.jpg" class="img-fluid">

<h5 class="mt-3">Butterscotch cheesecake</h5>

<p>
Crunchy biscuit clouds meet rivers of golden butterscotch cream.
A warm, caramel dream baked by the sweetest kitchen fairies.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 2,500
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake custom">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/78/28/bf/7828bf9260eb47e1db281433ab3594ad.jpg" class="img-fluid">

<h5 class="mt-3">Berry Stardust</h5>

<p>
Raspberry and blueberry swirls shimmer like tiny stars in fluffy mousse.
A magical berry galaxy hidden inside a soft dreamy cake.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 850
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake custom">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/736x/9b/cb/aa/9bcbaaac9bfc1a42e8250eda84fe9beb.jpg" class="img-fluid">

<h5 class="mt-3">Emerald Avocado</h5>

<p>
Silky avocado cream creates a smooth green jewel of sweetness.
A refreshing enchanted treat from a secret tropical garden.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 850
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

<div class="col-md-4 cake custom">

<div class="cake-card card text-center p-3">

<img src="https://i.pinimg.com/1200x/12/ee/1d/12ee1d34907cc6b316f487103752eec2.jpg" class="img-fluid">

<h5 class="mt-3">Peach Butter Lemon Dream Cake</h5>

<p>
Golden peach butter melts into soft lemon-kissed cake layers.
A bright sunny dessert filled with sweet summer magic.
</p>

<p style="font-size:20px; color:#c85fa5; font-weight:bold; margin-top:5px;">
Rs 850
</p>

<button class="btn btn-magical" onclick="openModal(this)">
View Details
</button>

</div>
</div>

</div>

</section>


<!-- Magical Cake Popup -->


<div id="cakeStoryAlert" class="magical-popup-overlay">

<div class="magical-popup-box">

<!-- Close -->
<div class="popup-close" onclick="closeModal()">✕</div>

<!-- Floating sparkles -->
<div class="popup-sparkle s1">✨</div>
<div class="popup-sparkle s2">✨</div>
<div class="popup-sparkle s3">✨</div>

<!-- Image -->
<img id="alertImage" class="popup-cake-img">

<!-- Title -->
<h2 id="alertTitle" class="popup-title"></h2>

<!-- Price -->
<h4 id="alertPrice" class="popup-price"></h4>

<!-- Story -->
<p id="alertStory" class="popup-story"></p>

<!-- Icons -->
<div class="popup-icons">

<span class="icon-heart">♡</span>

<button class="cart-btn">
🛒 Add to Cart
</button>

</div>

</div>
</div>


<!-- Magical sound -->
<audio id="charmSound">
<source src="https://assets.mixkit.co/active_storage/sfx/2013/2013-preview.mp3">
</audio>



<!-- SOUND -->
<audio id="charmSound">
<source src="https://assets.mixkit.co/active_storage/sfx/2013/2013-preview.mp3" type="audio/mpeg">
</audio>



<footer>
✨ Made with Magic by Pastel Dreams Bakery ✨
</footer>



<script src="js/script.js"></script>

</body>
</html>