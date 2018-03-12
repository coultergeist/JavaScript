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
   </div>
   <div class="w3-container">
   <p><h5><input type="checkbox" name="order[]" value="tsoup">Tomato Soup <b>$2.50</b></h5></p>
   <h5><input type="checkbox" name="order[]" value="csalad">Chicken Salad <b>$3.50</b></h5>
   <h5><input type="checkbox" name="order[]" value="bandb">Bread and Butter <b>$1.00</b></h5>
   </div>
   <div class="w3-container w3-black">
   <h1>Main Courses</h1>
   </div>
   <div class="w3-container">
   <h5><input type="checkbox" name="order[]" value="gfishnp">Grilled Fish and Potatoes <b>$8.50</b></h5>
   <h5><input type="checkbox" name="order[]" value="ipizza">Italian Pizza <b>$5.50</b></h5>
   <h5><input type="checkbox" name="order[]" value="vegpasta">Veggie Pasta <b>$4.00</b></h5>
   <h5><input type="checkbox" name="order[]" value="chickennpotato">Chicken and Potatoes <b>$6.50</b></h5>
   <h5><input type="checkbox" name="order[]" value="dburger">Deluxe Burger <b>$5.00</b></h5>
   </div>
   <div class="w3-container w3-black">
   <h1>Desserts</h1>
   </div>
   <div class="w3-container">
   <h5><input type="checkbox" name="order[]" value="fsalad">Fruit Salad <b>$2.50</b></h5>
   <h5><input type="checkbox" name="order[]" value="icecream">Ice cream <b>$2.00</b></h5>
   <h5><input type="checkbox" name="order[]" value="ccake">Chocolate Cake <b>$4.00</b></h5>
   <h5><input type="checkbox" name="order[]" value="cheese">Cheese <b>$5.50</b></h5>
   </div>
   </form>
   </div>

</body>
</html>

