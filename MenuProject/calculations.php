<?php include 'App.php'; ?>
<?php include 'header.php'; ?>

<!-- Main modal, except displays the order summary and "menu" button is now "home"
      and redirects to index.php -->
<div class="bgimg w3-display-container w3-text-white">
      <div class="w3-display-middle w3-jumbo">
        <p>Order Summary: 
        <b>$<?php App::fetchPrice(); ?></b>
        </p>
        <div class="social w3-center">
          <i class="fab fa-twitter fa-xs"></i>
          <i class="fab fa-facebook fa-xs"></i>
          <i class="fab fa-instagram fa-xs"></i>
          <i class="fab fa-yelp fa-xs"></i>
      </div>
      </div>
      <div class="w3-display-topleft w3-container w3-xlarge">
        <p><button onclick="window.location.href='index.php'" class="w3-button w3-black"><i class="fas fa-bars"></i> home</button></p>
        <p><button onclick="document.getElementById('contact').style.display='block'" class="w3-button w3-black"><i class="fas fa-users"></i> team</button></p>
      </div>

    </div>
<!-- Team Modal -->
    <div id="contact" class="w3-modal">
      <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container w3-black">
          <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
          <h1>Teammates</h1>
        </div>
        <div class="w3-container">
          <form action="/action_page.php" target="_blank">
            <!-- <p class="w3-xlarge">Burger Bliss was created by these talented individuals:</p>
            <p class="w3-large"><a href="http://ladan.icoolshow.net/"/>Layth</a></p>
            <p class="w3-large"><a href="http://dcoulter.icoolshow.net/"/>Danielle</p>
            <p class="w3-large"><a href="http://yhussein.icoolshow.net/"/>Yahya</p>
            <p class="w3-large"><a href="http://eneville.icoolshow.net/"/>Erik</p> -->

            <ul class="w3-ul">
              <li><a href="http://ladan.icoolshow.net/"/>Layth</a></li>
              <li><a href="http://dcoulter.icoolshow.net/"/>Danielle</a></li>
              <li><a href="http://yhussein.icoolshow.net/"/>Yahya</a></li>
              <li><a href="http://eneville.icoolshow.net/"/>Erik</a></li>
            </ul>
          </form>

<?php include 'footer.php'; ?>
