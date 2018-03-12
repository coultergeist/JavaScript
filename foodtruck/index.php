<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url(images/chef.jpg);
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-text-white">
  <div class="w3-display-middle w3-jumbo">
    <p>burger bliss</p>
  </div>
  <div class="w3-display-topleft w3-container w3-xlarge">
    <p><button onclick="document.getElementById('menu').style.display='block'" class="w3-button w3-black">menu</button></p>
    <p><button onclick="document.getElementById('contact').style.display='block'" class="w3-button w3-black">contact</button></p>
  </div>
  <div class="w3-display-bottomleft w3-container">
    <p class="w3-xlarge">ITC 320 Web App Dev, WI18</p>
    <p class="w3-large">Final Project Teammates:</p>
    <p>Adan, Layth</p>
    <p>Coulter, Danielle</p>
    <p>Hussein, Yahya</p>
    <p>Neville, Erik</p>
  </div>
</div>

<!-- Menu Modal -->
<div id="menu" class="w3-modal">
   <form action="Calculations.php">
   <div class="w3-modal-content w3-animate-zoom">
   <div class="w3-container w3-black w3-display-container">
   <span onclick="document.getElementById('menu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
   <h1>Burger Types</h1>
       <h4><i>Angus beef on sourdough bread with handmade french fries and 12 oz. fountain drink</i></h4>
   </div>
   <div class="w3-container">
   <h5><input type="checkbox" name="order[]" value="grand">Grand Slam <i>Mayo, cheddar, lettuce, tomato, pickle, mayo </i><b>$6.50</b></h5>
   <h5><input type="checkbox" name="order[]" value="veggie">Veggie Delight <i>Black bean burger with vegan Gourmet Cheddar, lettuce, tomato, pickle </i> <b>$8.00</b></h5>
   <h5><input type="checkbox" name="order[]" value="animal">Animal Style <i>Secret Sauce, relish, cheddar, lettuce, tomato, pickle </i><b>$7.50</b></h5>
   </div>
   <div class="w3-container w3-black">
   <h1>Burger Dressings</h1>
   </div>
   <div class="w3-container">
   <h5><input type="checkbox" name="order[]" value="mayo">Mayo <b>$.50</b></h5>
   <h5><input type="checkbox" name="order[]" value="jala">Jalapenos <b>$.35</b></h5>
   <h5><input type="checkbox" name="order[]" value="cheese">Cheddar Chese <b>$.75</b></h5>
   <h5><input type="checkbox" name="order[]" value="chili">Chili <b>$1.25</b></h5>
    <h5><input type="checkbox" name="order[]" value="meat">Extra Patty <b>$2.50</b></h5>


   </div>
   <div class="w3-container w3-black">
   <h1>Sides</h1>
   </div>
   <div class="w3-container">
   <h5><input type="checkbox" name="order[]" value="fries">Animal Style Fries <i>Secret Sauce, grilled onions, melted cheddar </i> <b>$1.75</b></h5>
   <h5><input type="checkbox" name="order[]" value="shake">Shake <i>16 oz. Chocolate, Vanilla, Banana, Strawberry </i> <b>$3.75</b></h5>
   <h5><input type="checkbox" name="order[]" value="drink">Fountain Drink <i>12 oz. Coke, Diet Coke, Grape Fanta, Iced Tea, Rootbeer </i><b>$1.99</b></h5>
       <h5><input type="checkbox" name="order[]" value="lemon">Fresh Lemonade <i>16 oz. fresh squeezed lemonade </i><b>$2.50</b></h5>
   </div>
   </form>
   </div>

</body>
</html>

