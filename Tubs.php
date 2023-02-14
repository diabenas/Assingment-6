<?php
 session_start();
 if(empty($_SESSION['uname']))
 {
    // echo "hi again";
   header("Location: login.php");
 }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Gelato </title>
        <link rel="stylesheet" type="text/css" href="style.css">
	<form>
		<header id="hr">
			<p id="img"> <img src="./img/Gelato.logo.png" alt="logo"> </p>
		    <h1 id="top">Gelato</h1>
			<h2 id="top1"> <a href="Login.php"><img src="./img/login.logo.png" alt="logo"></a></h2>
      <h3 id="top2"> <a href="shoppigcart.php"><img src="./img/shopping cart.png"alt="shoppingcart"></a></h3>
      <h2 id="top3"> <a href="logout.php" >logout</a></h2>
	        <h3 id="namei">
            <?php
              echo $_SESSION['uname'];
            ?>
            </h3>
	    </header>

         <body>   
             <nav id="navbar">
	      	    <ul class="navcontent">
			        <li><a href="pagehome.php">Home</a></li>
	     	        <li><a href="AboutUs.php">AboutUs</a></li>
			        <li><a href="Prices.php">Prices</a></li>
			        <li><a href="ContactUs.php">ContactUs</a></li>
              <li><a href="profile.php" ><?php echo $_SESSION['uname'];?></a><li>
		       </ul>
            </nav>
         </body>
    </form>
	<main id="main">
	  <form>
      <br> <br> <br>
	    	<div class="container">
            <div class="card">
              <div class="card__header">
                <img src="./img/chcolate.jpg" alt="card__image">
              </div>
              <div class="card__body">
                <h4>chcolate</h4>
              </div>
              <div class="card__footer">
                    <h3>Price: 10 LY.D <button> add cart </button></h3>
              </div>
            </div>
            <div class="card">
              <div class="card__header">
                <img src="./img/cookies and cream.jpg" alt="card__image">
              </div>
              <div class="card__body">
                <h4>cookies and cream</h4>
              </div>
              <div class="card__footer">
                    <h3>Price: 10 LY.D <button> add cart </button></h3>
              </div>
            </div>
            <div class="card">
              <div class="card__header">
                <img src="./img/oreo.jpg" alt="card__image">
              </div>
              <div class="card__body">
                <h4>oreo</h4>
              </div>
              <div class="card__footer">
                    <h3>Price: 10 LY.D <button> add cart </button></h3>
              </div>
            </div>
            <div class="card">
                <div class="card__header">
                  <img src="./img/strawberries-tubs.jpg" alt="card__image" >
                </div>
                <div class="card__body">
                  <h4>strawberries</h4>
                </div>
                <div class="card__footer">
                      <h3>Price: 10 LY.D<button> add cart </button></h3>
                </div>
            </div>
            <div class="card">
                <div class="card__header">
                  <img src="./img/tubs_caramello salato.jpg" alt="card__image" >
                </div>
                <div class="card__body">
                  <h4>caramello salato</h4>
                </div>
                <div class="card__footer">
                      <h3>Price: 10 LY.D <button> add cart </button></h3>
                </div>
            </div>
            <div class="card">
                <div class="card__header">
                  <img src="./img/twix.jpg" alt="card__image">
                </div>
                <div class="card__body">
                  <h4>twix</h4>
                </div>
                <div class="card__footer">
                      <h3>Price: 10 LY.D <button> add cart </button></h3>
                </div>
            </div>	
        </div>
	</form>
   </main>
   <footer>
    <div id="footer">
		  <h4>© 2022-2023 GELATO </h4>
	    </div>
   </footer>
</html>