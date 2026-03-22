// ==========================
// Pastel Dreams Bakery JS
// ==========================
// PETALS FALLING

function createPetal(){

let petal=document.createElement("div");
petal.classList.add("petal");

let flowers="✨";
petal.innerHTML=flowers[Math.floor(Math.random()*flowers.length)];

petal.style.left=Math.random()*window.innerWidth+"px";
petal.style.animationDuration=(5+Math.random()*5)+"s";
petal.style.fontSize=(16+Math.random()*20)+"px";

document.body.appendChild(petal);

setTimeout(()=>{
petal.remove();
},10000);
}

setInterval(createPetal,400);


// --------------------------
// CURSOR-FAIRY SPARKLE
// --------------------------
document.addEventListener("mousemove", function(e){
    for(let i=0;i<2;i++){ // 2 sparkles per mousemove
        let sparkle = document.createElement("div");
        sparkle.className = "cursor-sparkle";
        sparkle.style.left = (e.clientX + Math.random()*10 - 5) + "px";
        sparkle.style.top = (e.clientY + Math.random()*10 - 5) + "px";
        document.body.appendChild(sparkle);
        setTimeout(() => sparkle.remove(), 1000);
    }
});


// --------------------------
// FILTER SYSTEM
// --------------------------

function filterCakes(category){

let cakes = document.querySelectorAll('.cake');

cakes.forEach(cake => {

if(category === "all"){
cake.style.display="block";
}
else{
cake.style.display = cake.classList.contains(category) ? "block":"none";
}

});

}



// ===============================
// OPEN POPUP (AUTO DATA SYSTEM)
// ===============================

function openModal(button){

let alertBox = document.getElementById("cakeStoryAlert");

let title = document.getElementById("alertTitle");
let story = document.getElementById("alertStory");
let image = document.getElementById("alertImage");
let price = document.getElementById("alertPrice");

let sound = document.getElementById("charmSound");


// Find the card automatically
let card = button.closest(".cake-card");

// store selected cake name globally
window.selectedCake = card.querySelector("h5").innerText;


// Get elements from card
let cardTitle = card.querySelector("h5").innerText;
let cardStory = card.querySelector("p").innerText;
let cardImage = card.querySelector("img").src;
let cardPrice = card.querySelectorAll("p")[1].innerText;


// Set popup content
title.innerText = cardTitle;
story.innerText = cardStory;
image.src = cardImage;
price.innerText = cardPrice;


// Show popup
alertBox.style.display = "flex";


// play magical sound
if(sound){
sound.currentTime=0;
sound.play();
}

}



// ===============================
// CLOSE POPUP
// ===============================

function closeModal(){

document.getElementById("cakeStoryAlert").style.display="none";

}


// ===============================
// HEART & CART MAGIC
// ===============================

document.addEventListener("click", function(e){

// ❤️ HEART
if(e.target.classList.contains("icon-heart")){

let heart = e.target;

if(heart.innerText === "♡"){

heart.innerText = "❤️";
heart.style.transform = "scale(1.4)";

createFlyingHeart(heart);

setTimeout(()=>{
heart.style.transform = "scale(1)";
},200);

}
else{
heart.innerText = "♡";
}

}


// 🛒 CART SYSTEM
let cartBtn = e.target.closest(".cart-btn");

if(cartBtn){

cartBtn.style.transform="scale(1.2) rotate(-10deg)";

createFlyingHeart(cartBtn);

setTimeout(()=>{
cartBtn.style.transform="scale(1)";
},200);

// get cake name from popup
let card = document.querySelector(".magical-popup-box");

let cakeName = document.getElementById("alertTitle").innerText;
let cakePriceText = document.getElementById("alertPrice").innerText;

// extract number
let cakePrice = parseInt(cakePriceText.replace(/[^\d]/g, ""));

let cartItems = JSON.parse(localStorage.getItem("pastelCart")) || [];

// check if cake already exists
let existing = cartItems.find(item => item.name === cakeName);

if(existing){
existing.qty += 1;
}else{
cartItems.push({
name:cakeName,
price:cakePrice,
qty:1
});
}

localStorage.setItem("pastelCart", JSON.stringify(cartItems));

// popup message
showMiniToast("✨ " + cakeName + " added to your sweet cart!");

}

});



// ===============================
// FLOATING HEART ANIMATION
// ===============================

function createFlyingHeart(element){

let heart=document.createElement("div");

heart.innerHTML="❤️";

heart.style.position="fixed";
heart.style.left=element.getBoundingClientRect().left+"px";
heart.style.top=element.getBoundingClientRect().top+"px";
heart.style.fontSize="20px";
heart.style.zIndex="9999";
heart.style.pointerEvents="none";

document.body.appendChild(heart);


let rise=0;

let anim=setInterval(()=>{

rise+=3;

heart.style.transform="translateY(-"+rise+"px)";
heart.style.opacity=1-rise/120;

if(rise>120){

clearInterval(anim);
heart.remove();

}

},16);

}



// ===============================
// MINI TOAST MESSAGE
// ===============================

function showMiniToast(msg){

let toast=document.createElement("div");

toast.innerText=msg;

toast.style.position="fixed";
toast.style.bottom="40px";
toast.style.left="50%";
toast.style.transform="translateX(-50%)";
toast.style.background="#ff85a2";
toast.style.color="white";
toast.style.padding="10px 20px";
toast.style.borderRadius="20px";
toast.style.boxShadow="0 10px 30px rgba(0,0,0,0.2)";
toast.style.zIndex="9999";

document.body.appendChild(toast);

setTimeout(()=>{
toast.remove();
},2000);

}

// ===============================
// LOAD CART ITEMS ON ORDER PAGE
// ===============================

function loadCart(){

let cartList = document.getElementById("cartItems");
let totalBox = document.getElementById("cartTotal");

if(!cartList) return;

let cartItems = JSON.parse(localStorage.getItem("pastelCart")) || [];

cartList.innerHTML="";

let total = 0;

if(cartItems.length === 0){

cartList.innerHTML="<li>No cakes added yet ✨</li>";
totalBox.innerText="Rs 0";
return;

}

cartItems.forEach((item,index)=>{

let li=document.createElement("li");

li.innerHTML=`
<div class="cart-item">

<div class="cart-name">${item.name}</div>

<div class="cart-price">Rs ${item.price}</div>

<div class="cart-qty">x ${item.qty}</div>

<div class="cart-subtotal">
Rs ${item.price * item.qty}
</div>

<button onclick="removeItem(${index})" class="remove-btn">
❌
</button>

</div>
`;

cartList.appendChild(li);

total += Number(item.price) * Number(item.qty);

});

totalBox.innerText = "Rs " + total;

}

//remove item function 
function removeItem(index){

let cartItems = JSON.parse(localStorage.getItem("pastelCart")) || [];

cartItems.splice(index,1);

localStorage.setItem("pastelCart",JSON.stringify(cartItems));

loadCart();

}

function clearCart(){

localStorage.removeItem("pastelCart");

loadCart();

showMiniToast("Cart cleared ✨");

}

// ===============================
// AUTO LOAD CART WHEN PAGE OPENS
// ===============================

document.addEventListener("DOMContentLoaded", function(){
    loadCart();
});

